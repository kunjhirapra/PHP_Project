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
        <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex">Account Details</a></li>
        <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex active">Wishlist</a></li>
        <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<section class="wishlist-page myaccount">
  <div class="page-title text-center">Wishlist</div>
  <div class="container py-75">
    <div class="row">
      <div class="col-lg-3 px-4">
        <ul class="my-account-nav d-none d-lg-block">
          <li><a href="my-account.php" class="my-account-nav-item btn d-flex">Dashboard</a></li>
          <li><a href="my-orders.php" class="my-account-nav-item btn d-flex">Orders</a></li>
          <li><a href="my-address.php" class="my-account-nav-item btn d-flex">Address</a></li>
          <li><a href="my-account-details.php" class="my-account-nav-item btn d-flex">Account Details</a></li>
          <li><a href="my-wishlist.php" class="my-account-nav-item btn d-flex active">Wishlist</a></li>
          <li><a href="logout.php" class="my-account-nav-item btn d-flex">Logout</a></li>
        </ul>
      </div>
      <div class="col-lg-9 text-box px-4">
        <div class="grid grid-3-cols gy-4 grid-gap-md columns-2">
          <div class="grid-cols">
            <div class="item-box">
              <div class="item-box-img">
                <a href="#">
                  <img src="assets/images/wishlist/orange-1.jpg" alt="Orange Ribbed Tank Top" class="wishlist-img-1" />
                  <img src="assets/images/wishlist/white-1.jpg" alt="White Ribbed Tank Top" class="wishlist-img-2" />
                </a>
                <div class="list-product-btn-container">
                  <div class="list-product-btn">
                    <a href="#" class="box-icon box-bag">
                      <span class="icon icon-bag">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,160H40V56H216V200ZM176,88a48,48,0,0,1-96,0,8,8,0,0,1,16,0,32,32,0,0,0,64,0,8,8,0,0,1,16,0Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="" class="box-icon box-heart">
                      <span class="icon icon-heart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="#" class="box-icon box-compare">
                      <span class="icon icon-compare"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                          fill="#000000" viewBox="0 0 256 256">
                          <path
                            d="M216,48V88a8,8,0,0,1-16,0V67.31L156.28,111A8,8,0,0,1,145,99.72L188.69,56H168a8,8,0,0,1,0-16h40A8,8,0,0,1,216,48Zm-8,112a8,8,0,0,0-8,8v20.69L53.66,42.34A8,8,0,0,0,42.34,53.66L188.69,200H168a8,8,0,0,0,0,16h40a8,8,0,0,0,8-8V168A8,8,0,0,0,208,160ZM99.72,145,42.34,202.34a8,8,0,0,0,11.32,11.32L111,156.28A8,8,0,0,0,99.72,145Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="#" class="box-icon box-view">
                      <span class="icon icon-view">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item-box-text">
                <a href="#" class="item-box-link">Ribbed Tank Top</a>
                <span class="item-price mb-15">$16.95</span>
              </div>
              <div class="d-flex justify-content-start clolor-box">
                <ul class="list-unstyled">
                  <li title="orange">
                    <span class="color d-flex align-items-center justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffa500"
                        viewBox="0 0 256 256">
                        <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                      </svg>
                    </span>
                  </li>
                  <li title="black">
                    <span class="color">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" viewBox="0 0 256 256">
                        <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                      </svg>
                    </span>
                  </li>
                  <li title="white">
                    <span class="color">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 256 256">
                        <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                      </svg>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="grid-cols">
            <div class="item-box">
              <div class="item-box-img">
                <a href="#">
                  <img src="assets/images/wishlist/brown.jpg" alt="Orange Ribbed Modal T-shirt"
                    class="wishlist-img-1" />
                  <img src="assets/images/wishlist/purple.jpg" alt="Purple Ribbed Modal T-shirt"
                    class="wishlist-img-2" />
                </a>
                <div class="discount"></div>
                <div class="list-product-btn-container">
                  <div class="list-product-btn">
                    <a href="#" class="box-icon box-bag box-icon-2">
                      <span class="icon icon-bag">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,160H40V56H216V200ZM176,88a48,48,0,0,1-96,0,8,8,0,0,1,16,0,32,32,0,0,0,64,0,8,8,0,0,1,16,0Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="" class="box-icon box-heart box-icon-2">
                      <span class="icon icon-heart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="#" class="box-icon box-compare box-icon-2">
                      <span class="icon icon-compare"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                          fill="#000000" viewBox="0 0 256 256">
                          <path
                            d="M216,48V88a8,8,0,0,1-16,0V67.31L156.28,111A8,8,0,0,1,145,99.72L188.69,56H168a8,8,0,0,1,0-16h40A8,8,0,0,1,216,48Zm-8,112a8,8,0,0,0-8,8v20.69L53.66,42.34A8,8,0,0,0,42.34,53.66L188.69,200H168a8,8,0,0,0,0,16h40a8,8,0,0,0,8-8V168A8,8,0,0,0,208,160ZM99.72,145,42.34,202.34a8,8,0,0,0,11.32,11.32L111,156.28A8,8,0,0,0,99.72,145Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="#" class="box-icon box-view box-icon-2">
                      <span class="icon icon-view">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="size-list">
                  <span>M</span>
                  <span>L</span>
                  <span>XL</span>
                </div>
              </div>
              <div class="item-box-text">
                <a href="#" class="item-box-link">Ribbed Model T-shirt</a>
                <span class="item-price mb-15">From $18.95</span>
              </div>
              <div class="d-flex justify-content-start clolor-box">
                <ul class="list-unstyled">
                  <li title="orange">
                    <span class="color d-flex align-items-center justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#977945"
                        viewBox="0 0 256 256">
                        <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                      </svg>
                    </span>
                  </li>
                  <li title="black">
                    <span class="color">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#d966d9"
                        viewBox="0 0 256 256">
                        <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                      </svg>
                    </span>
                  </li>
                  <li title="white">
                    <span class="color">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#caffd6"
                        viewBox="0 0 256 256">
                        <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                      </svg>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="grid-cols">
            <div class="item-box">
              <div class="item-box-img">
                <a href="#">
                  <img src="assets/images/wishlist/white-3.jpg" alt="Orange Oversized Printed T-shirt"
                    class="wishlist-img-1" />
                  <img src="assets/images/wishlist/white-4.jpg" alt="Purple Oversized Printed T-shirt"
                    class="wishlist-img-2" />
                </a>
                <div class="list-product-btn-container">
                  <div class="list-product-btn">
                    <a href="#" class="box-icon box-bag">
                      <span class="icon icon-bag">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,160H40V56H216V200ZM176,88a48,48,0,0,1-96,0,8,8,0,0,1,16,0,32,32,0,0,0,64,0,8,8,0,0,1,16,0Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="" class="box-icon box-heart">
                      <span class="icon icon-heart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="#" class="box-icon box-compare">
                      <span class="icon icon-compare"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                          fill="#000000" viewBox="0 0 256 256">
                          <path
                            d="M216,48V88a8,8,0,0,1-16,0V67.31L156.28,111A8,8,0,0,1,145,99.72L188.69,56H168a8,8,0,0,1,0-16h40A8,8,0,0,1,216,48Zm-8,112a8,8,0,0,0-8,8v20.69L53.66,42.34A8,8,0,0,0,42.34,53.66L188.69,200H168a8,8,0,0,0,0,16h40a8,8,0,0,0,8-8V168A8,8,0,0,0,208,160ZM99.72,145,42.34,202.34a8,8,0,0,0,11.32,11.32L111,156.28A8,8,0,0,0,99.72,145Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                    <a href="#" class="box-icon box-view">
                      <span class="icon icon-view">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                          viewBox="0 0 256 256">
                          <path
                            d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                          </path>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item-box-text">
                <a href="#" class="item-box-link">Oversized Printed T-shirt</a>
                <span class="item-price">$10.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php include "footer.php" ?>