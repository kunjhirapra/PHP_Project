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
        <li><a href="my-address.php" class="my-account-nav-item btn d-flex">Address</a></li>
        <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex active">Account Details</a></li>
        <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex">Wishlist</a></li>
        <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<section class="account-details-page myaccount">
  <div class="page-title text-center">Account Details</div>
  <div class="container py-75">
    <div class="row">
      <div class="col-lg-3 px-4">
        <ul class="my-account-nav d-none d-lg-block">
          <li><a href="my-account.php" class="my-account-nav-item btn d-flex">Dashboard</a></li>
          <li><a href="my-orders.php" class="my-account-nav-item btn d-flex">Orders</a></li>
          <li><a href="my-address.php" class="my-account-nav-item btn d-flex">Address</a></li>
          <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex active">Account Details</a></li>
          <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex">Wishlist</a></li>
          <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
        </ul>
      </div>
      <div class="col-lg-9 text-box px-4">
        <form method="post" class="account-details-contact" id="account-details-form" action="register.php">
          <div class="form-floating mb-4">
            <input type="text" class="form-control" id="f_name" placeholder="" name="f_name">
            <label for="f_name">First name</label>
          </div>
          <div class="form-floating mb-4">
            <input type="text" class="form-control" id="l_name" placeholder="" name="l_name">
            <label for="l_name">Last name</label>
          </div>
          <div class="form-floating mb-4">
            <input type="email" class="form-control" id="email" placeholder="" name="email">
            <label for="email">Email</label>
          </div>

          <h6 class="mb-20 small-heading">Password Change</h6>

          <div class="form-floating mb-4">
            <input type="password" class="form-control " id="old-password" placeholder="" name="password">
            <label for="old-password">Current Password</label>
          </div>

          <div class="form-floating mb-36">
            <input type="password" class="form-control " id="password" placeholder="" name="password">
            <label for="password">New Password</label>
          </div>

          <div class="form-floating mb-20">
            <input type="password" class="form-control " id="cpassword" placeholder="" name="cpassword">
            <label for="cpassword">Confirm Password</label>
          </div>
          <div class="btn-wrap mt-5">
            <button type="submit" name="register" vlaue="Submit" class="btn d-flex justify-content-center w-100">Save
              Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
<?php include "footer.php" ?>