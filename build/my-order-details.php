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
<section class="order-details-page">
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
        <div class="order-detail-box">
          <div class="order-header d-flex align-items-center">
            <div class="img-box">
              <img src="assets/images/wishlist/brown.jpg" alt="">
            </div>
            <div class="order-content">
              <div class="progress-tag">
                In Progress
              </div>
              <h6 class="small-heading">Order #17493</h6>
            </div>
          </div>
          <div class="product-info row g-4 mb-5">
            <div class="content-box col-12 col-md-6">
              <div class="content-heading">Item</div>
              <div class="content-info">Fashion</div>
            </div>
            <div class="content-box col-12 col-md-6">
              <div class="content-heading">Courier</div>
              <div class="content-info">Ribbed modal T-shirt</div>
            </div>
            <div class="content-box col-12 col-md-6">
              <div class="content-heading">Start Time</div>
              <div class="content-info">04 September 2024, 13:30:23</div>
            </div>
            <div class="content-box col-12 col-md-6">
              <div class="content-heading">Address</div>
              <div class="content-info">1234 Fashion Street, Suite 567, New York</div>
            </div>
          </div>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-order-history" data-bs-toggle="tab"
                data-bs-target="#nav-order-history-tab" type="button" role="tab" aria-controls="nav-order-history-tab"
                aria-selected="true">Order History</button>
              <button class="nav-link" id="nav-item-details" data-bs-toggle="tab" data-bs-target="#nav-item-details-tab"
                type="button" role="tab" aria-controls="nav-item-details-tab" aria-selected="true">Item Details</button>
              <button class="nav-link" id="nav-courier" data-bs-toggle="tab" data-bs-target="#nav-courier-tab"
                type="button" role="tab" aria-controls="nav-courier-tab" aria-selected="false">Courier</button>
              <button class="nav-link" id="nav-reciever" data-bs-toggle="tab" data-bs-target="#nav-reciever-tab"
                type="button" role="tab" aria-controls="nav-reciever-tab" aria-selected="false">Reciever</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active py-35" id="nav-order-history-tab" role="tabpanel"
              aria-labelledby="nav-order-history" tabindex="0">
              <div class="widget-timeline">
                <ul class="timeline list-unstyled position-relative">
                  <li>
                    <div class="timeline-tracker">
                      <span class="color-green d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#31a56d"
                          viewBox="0 0 256 256">
                          <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                        </svg>
                      </span>
                    </div>
                    <div class="timeline-box">
                      <a class="timeline-panel" href="#">
                        <div class="fw-6">Product Shipped</div>
                        <span>10/07/2024 4:30pm</span>
                      </a>
                      <p class="mb-0"><strong>Courier Service : </strong>FedEx World Service Center
                      </p>
                      <p class="mb-0"><strong>Estimated Delivery Date : </strong>12/07/2024</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-tracker">
                      <span class="color-green d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#31a56d"
                          viewBox="0 0 256 256">
                          <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                        </svg>
                      </span>
                    </div>
                    <div class="timeline-box">
                      <a class="timeline-panel" href="#">
                        <div class="fw-6">Product Shipped</div>
                        <span>10/07/2024 4:30pm</span>
                      </a>
                      <p class="mb-0"><strong>Tracking Number : </strong>2307-3215-6759</p>
                      <p class="mb-0"><strong>Warehouse : </strong>T-Shirt 10b</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-tracker">
                      <span class="color-gray d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#909090"
                          viewBox="0 0 256 256">
                          <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                        </svg>
                      </span>
                    </div>
                    <div class="timeline-box">
                      <a class="timeline-panel" href="#">
                        <div class="fw-6">Product Packaging</div>
                        <span>12/07/2024 4:34pm</span>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-tracker">
                      <span class="color-gray d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#909090"
                          viewBox="0 0 256 256">
                          <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                        </svg>
                      </span>
                    </div>
                    <div class="timeline-box">
                      <a class="timeline-panel" href="#">
                        <div class="fw-6">Order Placed</div>
                        <span>11/07/2024 2:36pm</span>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="tab-pane fade py-35" id="nav-item-details-tab" role="tabpanel"
              aria-labelledby="nav-item-details" tabindex="0">
              <div class="order-header d-flex align-items-center">
                <div class="img-box">
                  <img src="assets/images/wishlist/brown.jpg" alt="">
                </div>
                <div class="content">
                  <div class="fw-6 content-header">Ribbed modal T-shirt</div>
                  <div class="mt-2"><span class="fw-6">Price :</span> $28.95</div>
                  <div class="mt-2"><span class="fw-6">Size :</span> XL</div>
                </div>
              </div>
              <ul>
                <li class="d-flex justify-content-between">
                  <span>Total Price</span>
                  <span class="fw-6">$28.95</span>
                </li>
                <li class="d-flex justify-content-between mt-1 pb-2 line">
                  <span>Total Discounts</span>
                  <span class="fw-6">$10</span>

                </li>
                <li class="d-flex justify-content-between mt-3">
                  <span>Order Total</span>
                  <span class="fw-6">$18.95</span>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade py-35" id="nav-courier-tab" role="tabpanel" aria-labelledby="nav-courier"
              tabindex="0">
              <p>Our courier service is dedicated to providing fast, reliable, and secure
                delivery solutions tailored to meet your needs. Whether you're sending
                documents, parcels, or larger shipments, our team ensures that your items
                are handled with the utmost care and delivered on time. With a commitment to
                customer satisfaction, real-time tracking, and a wide network of routes, we
                make it easy for you to send and receive packages both locally and
                internationally. Choose our service for a seamless and efficient delivery
                experience.</p>
            </div>
            <div class="tab-pane fade py-35" id="nav-reciever-tab" role="tabpanel" aria-labelledby="nav-reciever"
              tabindex="0">
              <p class="mb-20">Thank you Your order has been received</p>
              <ul class="list-unstyled">
                <li>Order Number : <span class="fw-7">#17493</span></li>
                <li>Date : <span class="fw-7"> 17/07/2024, 02:34pm</span></li>
                <li>Total : <span class="fw-7">$18.95</span></li>
                <li>Payment Methods : <span class="fw-7">Cash on Delivery</span></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php include "footer.php" ?>