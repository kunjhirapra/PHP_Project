# Deployment Guide - PHP Food Website

## Project Overview

This is a PHP-based food/e-commerce website built with Bootstrap, MySQL, and vanilla JavaScript. The build folder contains all necessary files for production deployment.

## Server Requirements

### Minimum Requirements

- **PHP**: 7.4 or higher (8.0+ recommended)
- **MySQL**: 5.7 or higher (8.0+ recommended)
- **Web Server**: Apache 2.4+ or Nginx 1.18+
- **Memory**: 512MB RAM minimum (1GB+ recommended)
- **Storage**: 500MB disk space minimum

### PHP Extensions Required

```bash
- mysqli
- gd
- fileinfo
- mbstring
- openssl
- zip
- curl
```

## Deployment Instructions

### For Apache Server

1. **Upload Files**

   ```bash
   # Upload all files from the 'build' folder to your server's web directory
   # Usually: /var/www/html/ or /public_html/
   ```

2. **Set File Permissions**

   ```bash
   # Set proper permissions for security
   chmod 755 /var/www/html/
   chmod 644 /var/www/html/*.php
   chmod 755 /var/www/html/uploads/
   chmod 644 /var/www/html/assets/

   # Make uploads directories writable
   chmod 777 /var/www/html/uploads/products/
   chmod 777 /var/www/html/uploads/temp/
   chmod 777 /var/www/html/uploads/users/
   ```

3. **Apache Configuration**
   - The `.htaccess` file is already included in the build
   - Ensure `mod_rewrite` is enabled:
     ```bash
     sudo a2enmod rewrite
     sudo systemctl restart apache2
     ```

### For Nginx Server

1. **Upload Files**

   ```bash
   # Upload all files to your server directory
   scp -r build/* user@server:/var/www/html/
   ```

2. **Nginx Configuration**

   ```bash
   # Copy the nginx configuration
   sudo cp nginx.conf.example /etc/nginx/sites-available/your-domain.com

   # Edit the configuration file
   sudo nano /etc/nginx/sites-available/your-domain.com

   # Update the following lines:
   # - server_name: your actual domain
   # - root: your actual web directory path
   # - PHP-FPM socket path (check your PHP version)

   # Enable the site
   sudo ln -s /etc/nginx/sites-available/your-domain.com /etc/nginx/sites-enabled/

   # Test and reload Nginx
   sudo nginx -t
   sudo systemctl reload nginx
   ```

## Database Setup

1. **Create Database**

   ```sql
   CREATE DATABASE your_database_name CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   CREATE USER 'your_db_username'@'localhost' IDENTIFIED BY 'your_secure_password';
   GRANT ALL PRIVILEGES ON your_database_name.* TO 'your_db_username'@'localhost';
   FLUSH PRIVILEGES;
   ```

2. **Import Database Schema**

   ```bash
   # You'll need to create tables based on your application needs
   # Common tables for this type of application might include:
   # - users (id, email, password, name, created_at)
   # - products (id, name, price, description, image, category_id)
   # - categories (id, name, description)
   # - orders (id, user_id, total, status, created_at)
   # - order_items (id, order_id, product_id, quantity, price)
   ```

3. **Update Database Configuration**
   ```bash
   # Edit database/db-connect.php with your actual database credentials
   nano database/db-connect.php
   ```

## Security Checklist

### File Permissions

- [ ] Web files: 644 permissions
- [ ] Directories: 755 permissions
- [ ] Upload directories: 777 permissions (or 755 with proper ownership)
- [ ] Database config: 600 permissions (readable only by owner)

### Configuration

- [ ] Change default database credentials
- [ ] Update database configuration in `db-connect.php`
- [ ] Enable HTTPS in production (uncomment SSL redirects)
- [ ] Set strong database passwords
- [ ] Configure proper error reporting (disable in production)

### Server Security

- [ ] Update server packages
- [ ] Configure firewall
- [ ] Set up regular backups
- [ ] Enable fail2ban for brute force protection
- [ ] Configure SSL certificates

## Post-Deployment Testing

1. **Basic Functionality**

   - [ ] Homepage loads correctly
   - [ ] CSS and JavaScript files load
   - [ ] Images display properly
   - [ ] Database connection works

2. **Features to Test**
   - [ ] User registration/login
   - [ ] Product browsing
   - [ ] Shopping cart functionality
   - [ ] Contact forms
   - [ ] File uploads (if any)

## Troubleshooting

### Common Issues

1. **500 Internal Server Error**

   - Check file permissions
   - Verify .htaccess syntax
   - Check error logs: `tail -f /var/log/apache2/error.log`

2. **Database Connection Errors**

   - Verify database credentials in `db-connect.php`
   - Check if MySQL service is running
   - Ensure database and user exist

3. **CSS/JS Not Loading**

   - Check file paths in HTML
   - Verify web server can serve static files
   - Check .htaccess rewrite rules

4. **Upload Issues**
   - Check directory permissions (uploads folder)
   - Verify PHP upload settings
   - Check disk space

### Log Locations

- **Apache**: `/var/log/apache2/error.log`
- **Nginx**: `/var/log/nginx/error.log`
- **PHP**: `/var/log/php_errors.log`

## Performance Optimization

1. **Enable Caching**

   - Browser caching (already configured in .htaccess/nginx.conf)
   - Consider Redis/Memcached for session storage

2. **Optimize Images**

   - Compress images before upload
   - Use WebP format where possible
   - Implement lazy loading

3. **Database Optimization**
   - Add indexes to frequently queried columns
   - Optimize database queries
   - Regular database maintenance

## Backup Strategy

1. **Files Backup**

   ```bash
   # Create daily backups
   tar -czf backup-$(date +%Y%m%d).tar.gz /var/www/html/
   ```

2. **Database Backup**
   ```bash
   # Daily database backup
   mysqldump -u username -p database_name > backup-$(date +%Y%m%d).sql
   ```

## Support

For deployment support or issues:

1. Check server error logs first
2. Verify all requirements are met
3. Test on a staging environment before production
4. Keep backups before making changes

---

**Note**: Replace placeholder values (your-domain.com, database credentials, etc.) with your actual production values before deployment.
