#!/bin/bash

# Deployment Script for PHP Food Website
# This script helps automate the deployment process

echo "==================================="
echo "PHP Food Website Deployment Script"
echo "==================================="

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${GREEN}[INFO]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Check if running as root
if [[ $EUID -eq 0 ]]; then
   print_warning "This script is running as root. Make sure this is intended."
fi

# Variables (modify these according to your setup)
PROJECT_DIR="/var/www/html"
BACKUP_DIR="/var/backups/website"
DATE=$(date +%Y%m%d_%H%M%S)

print_status "Starting deployment process..."

# Create backup directory if it doesn't exist
if [ ! -d "$BACKUP_DIR" ]; then
    mkdir -p "$BACKUP_DIR"
    print_status "Created backup directory: $BACKUP_DIR"
fi

# Function to backup existing files
backup_existing() {
    if [ -d "$PROJECT_DIR" ] && [ "$(ls -A $PROJECT_DIR)" ]; then
        print_status "Creating backup of existing files..."
        tar -czf "$BACKUP_DIR/backup_$DATE.tar.gz" -C "$PROJECT_DIR" .
        print_status "Backup created: $BACKUP_DIR/backup_$DATE.tar.gz"
    else
        print_status "No existing files to backup."
    fi
}

# Function to set file permissions
set_permissions() {
    print_status "Setting file permissions..."
    
    # Set general permissions
    find "$PROJECT_DIR" -type f -name "*.php" -exec chmod 644 {} \;
    find "$PROJECT_DIR" -type f -name "*.html" -exec chmod 644 {} \;
    find "$PROJECT_DIR" -type f -name "*.css" -exec chmod 644 {} \;
    find "$PROJECT_DIR" -type f -name "*.js" -exec chmod 644 {} \;
    find "$PROJECT_DIR" -type d -exec chmod 755 {} \;
    
    # Set writable permissions for upload directories
    if [ -d "$PROJECT_DIR/uploads" ]; then
        chmod -R 777 "$PROJECT_DIR/uploads"
        print_status "Set writable permissions for uploads directory"
    fi
    
    # Secure database configuration
    if [ -f "$PROJECT_DIR/database/db-connect.php" ]; then
        chmod 600 "$PROJECT_DIR/database/db-connect.php"
        print_status "Secured database configuration file"
    fi
    
    print_status "File permissions set successfully"
}

# Function to check PHP extensions
check_php_extensions() {
    print_status "Checking required PHP extensions..."
    
    required_extensions=("mysqli" "gd" "fileinfo" "mbstring" "openssl" "zip" "curl")
    missing_extensions=()
    
    for ext in "${required_extensions[@]}"; do
        if ! php -m | grep -q "^$ext$"; then
            missing_extensions+=("$ext")
        fi
    done
    
    if [ ${#missing_extensions[@]} -eq 0 ]; then
        print_status "All required PHP extensions are installed"
    else
        print_error "Missing PHP extensions: ${missing_extensions[*]}"
        print_warning "Please install missing extensions before proceeding"
        return 1
    fi
}

# Function to test database connection
test_database() {
    print_status "Testing database connection..."
    
    # This would need to be customized based on your database configuration
    # php -r "include 'database/db-connect.php'; echo 'Database connection successful';"
    
    print_warning "Please manually test database connection after deployment"
}

# Function to restart web services
restart_services() {
    print_status "Restarting web services..."
    
    # Detect which web server is running
    if systemctl is-active --quiet apache2; then
        print_status "Restarting Apache..."
        systemctl reload apache2
    elif systemctl is-active --quiet nginx; then
        print_status "Restarting Nginx..."
        systemctl reload nginx
    else
        print_warning "Could not detect web server. Please restart manually."
    fi
    
    # Restart PHP-FPM if it's running
    if systemctl is-active --quiet php*-fpm; then
        print_status "Restarting PHP-FPM..."
        systemctl reload php*-fpm
    fi
}

# Main deployment function
deploy() {
    print_status "Starting deployment to $PROJECT_DIR"
    
    # Step 1: Create backup
    backup_existing
    
    # Step 2: Check PHP extensions
    if ! check_php_extensions; then
        print_error "Deployment aborted due to missing PHP extensions"
        exit 1
    fi
    
    # Step 3: Copy files (assuming files are in current directory)
    print_status "Copying files to $PROJECT_DIR..."
    if [ -d "./build" ]; then
        cp -r ./build/* "$PROJECT_DIR/"
        print_status "Files copied successfully"
    else
        print_error "Build directory not found. Please run this script from the project root."
        exit 1
    fi
    
    # Step 4: Set permissions
    set_permissions
    
    # Step 5: Test database (optional)
    test_database
    
    # Step 6: Restart services
    restart_services
    
    print_status "Deployment completed successfully!"
    print_status "Backup location: $BACKUP_DIR/backup_$DATE.tar.gz"
    
    echo ""
    print_warning "Don't forget to:"
    echo "  1. Update database credentials in database/db-connect.php"
    echo "  2. Import your database schema"
    echo "  3. Test the website functionality"
    echo "  4. Configure SSL certificates for production"
}

# Function to rollback deployment
rollback() {
    print_status "Rolling back deployment..."
    
    # Find the latest backup
    latest_backup=$(ls -t "$BACKUP_DIR"/backup_*.tar.gz 2>/dev/null | head -n1)
    
    if [ -z "$latest_backup" ]; then
        print_error "No backup found for rollback"
        exit 1
    fi
    
    print_status "Restoring from: $latest_backup"
    
    # Clear current directory and restore backup
    rm -rf "$PROJECT_DIR"/*
    tar -xzf "$latest_backup" -C "$PROJECT_DIR"
    
    # Set permissions
    set_permissions
    
    # Restart services
    restart_services
    
    print_status "Rollback completed successfully!"
}

# Command line interface
case "$1" in
    "deploy")
        deploy
        ;;
    "rollback")
        rollback
        ;;
    "backup")
        backup_existing
        ;;
    "permissions")
        set_permissions
        ;;
    "check")
        check_php_extensions
        ;;
    *)
        echo "Usage: $0 {deploy|rollback|backup|permissions|check}"
        echo ""
        echo "Commands:"
        echo "  deploy      - Full deployment process"
        echo "  rollback    - Rollback to previous backup"
        echo "  backup      - Create backup of current files"
        echo "  permissions - Set proper file permissions"
        echo "  check       - Check PHP extensions"
        exit 1
        ;;
esac