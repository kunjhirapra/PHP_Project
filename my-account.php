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
        <li><a href="my-account.php" class="my-account-nav-item btn d-flex active">Dashboard</a></li>
        <li><a href="my-orders.php" class="my-account-nav-item btn d-flex">Orders</a></li>
        <li><a href="my-address.php" class="my-account-nav-item btn d-flex">Address</a></li>
        <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex">Account Details</a></li>
        <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex">Wishlist</a></li>
        <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<section class="dashboard-page myaccount">
  <div class="page-title text-center">MY Account</div>
  <div class="container py-75">
    <div class="row">
      <div class="col-lg-3 px-4">
        <ul class="my-account-nav d-none d-lg-block">
          <li><a href="my-account.php" class="my-account-nav-item btn d-flex active">Dashboard</a></li>
          <li><a href="my-orders.php" class="my-account-nav-item btn d-flex">Orders</a></li>
          <li><a href="my-address.php" class="my-account-nav-item btn d-flex">Address</a></li>
          <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex">Account Details</a></li>
          <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex">Wishlist</a></li>
          <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
        </ul>
      </div>
      <div class="col-lg-9 text-box px-4">
        <?php echo "<h5 class='heading mb-20'>Hello $username</h5>" ?>
        <p>
          From your account dashboard you can view your
          <a class="red-link" href="#"> recent orders
          </a> , manage your
          <a class="red-link" href="#">shipping and billing address</a>, and
          <a class="red-link" href="#">edit your password and account details
          </a>.
        </p>
      </div>
    </div>
  </div>

</section>
<?php include "footer.php" ?>