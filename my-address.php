<?php
include "create-session.php";
include "header.php";
?>

<div class="account-sidebar d-block d-lg-none">
  <a class="btn offcanvas-sidebar-btn" data-bs-toggle="offcanvas" href="#offcanvas-sidebar-account" role="button"
    aria-controls="offcanvas-sidebar-account">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#000000" viewBox="0 0 256 256">
      <path
        d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM40,152H56a8,8,0,0,0,0-16H40V120H56a8,8,0,0,0,0-16H40V88H56a8,8,0,0,0,0-16H40V56H80V200H40Zm176,48H96V56H216V200Z">
      </path>
    </svg>
  </a>
  <div class="offcanvas offcanvas-start pt-0" tabindex="-1" id="offcanvas-sidebar-account"
    aria-labelledby="offcanvas-sidebar-account-Label">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvas-sidebar-account-Label">Sidebar Account</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="my-account-nav">
        <li><a href="my-account.php" class="my-account-nav-item btn d-flex">Dashboard</a></li>
        <li><a href="my-orders.php" class="my-account-nav-item btn d-flex">Orders</a></li>
        <li><a href="my-address.php" class="my-account-nav-item btn d-flex active">Address</a></li>
        <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex">Account Details</a></li>
        <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex">Wishlist</a></li>
        <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<section class="address-page myaccount">
  <div class="page-title text-center">Address</div>
  <div class="container py-75">
    <div class="row">
      <div class="col-lg-3 px-4">
        <ul class="my-account-nav d-none d-lg-block">
          <li><a href="my-account.php" class="my-account-nav-item btn d-flex">Dashboard</a></li>
          <li><a href="my-orders.php" class="my-account-nav-item btn d-flex">Orders</a></li>
          <li><a href="my-address.php" class="my-account-nav-item btn d-flex active">Address</a></li>
          <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex">Account Details</a></li>
          <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex">Wishlist</a></li>
          <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
        </ul>
      </div>
      <div class="col-lg-9 text-box px-4">
        <div class="address-section">
          <div class="add-address-btn-box">
            <button class="address-btn mb-20">Add a new
              address</button>
          </div>
          <div class="list-account-address text-center grid grid-2-cols">
            <div class="account-address-items">
              <h6 class="mb-20 small-heading">Default</h6>
              <p>themesflat</p>
              <p>1234 Fashion Street, Suite 567</p>
              <p>New York</p>
              <p>info@fashionshop.com</p>
              <p class="mb-10">(212) 555-1234</p>
              <div class="d-flex justify-content-center address-btn-box">
                <button class="edit-btn">
                  Edit
                </button>
                <button class="delete-btn">
                  Delete
                </button>
              </div>
            </div>
            <div class="account-address-items">
              <h6 class="mb-20 small-heading">Default</h6>
              <p>themesflat</p>
              <p>1234 Fashion Street, Suite 567</p>
              <p>New York</p>
              <p>info@fashionshop.com</p>
              <p class="mb-10">(212) 555-1234</p>
              <div class="d-flex justify-content-center address-btn-box">
                <button class="edit-btn">
                  Edit
                </button>
                <button class="delete-btn">
                  Delete
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php include "footer.php" ?>