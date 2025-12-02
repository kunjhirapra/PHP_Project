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
        <li><a href="my-orders.php" class="my-account-nav-item btn d-flex active">Orders</a></li>
        <li><a href="my-address.php" class="my-account-nav-item btn d-flex">Address</a></li>
        <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex">Account Details</a></li>
        <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex">Wishlist</a></li>
        <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<section class="orders-page myaccount">
  <div class="page-title text-center">MY Orders</div>
  <div class="container py-75">
    <div class="row position-relative">
      <div class="col-lg-3 px-4">
        <ul class="my-account-nav d-none d-lg-block">
          <li><a href="my-account.php" class="my-account-nav-item btn d-flex">Dashboard</a></li>
          <li><a href="my-orders.php" class="my-account-nav-item btn d-flex active">Orders</a></li>
          <li><a href="my-address.php" class="my-account-nav-item btn d-flex">Address</a></li>
          <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex">Account Details</a></li>
          <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex">Wishlist</a></li>
          <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
        </ul>
      </div>
      <div class="col-lg-9 col-12 text-box px-4">
        <div class="orders-table table-responsive">
          <table class="table">
            <thead>
              <tr class="table-header">
                <th scope="col">Order</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Total</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">#123</td>
                <td>August 1, 2024</td>
                <td>On hold</td>
                <td>$200.0 for 1 items</td>
                <td><a href="my-order-details.php" class="view-btn btn btn-dark">
                    <span>View</span>
                  </a></td>
              </tr>
              <tr>
                <td scope="row">#345</td>
                <td>August 2, 2024</td>
                <td>On hold</td>
                <td>$300.0 for 1 items</td>
                <td><a href="my-order-details.php" class="view-btn btn btn-dark">
                    <span>View</span>
                  </a></td>
              </tr>
              <tr>
                <td scope="row">#567</td>
                <td>August 3, 2024</td>
                <td>On hold</td>
                <td>$400.0 for 1 items</td>
                <td><a href="my-order-details.php" class="view-btn btn btn-dark">
                    <span>View</span>
                  </a></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>
<?php include "footer.php" ?>