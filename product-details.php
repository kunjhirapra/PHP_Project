<?php
include "create-session.php";
include "header.php";
?>

<section class="product-details-page">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between py-5">
      <div class="location-bar d-flex align-items-center justify-content-start">
        <a href="index.php" class="link-dark">Home</a> <i class=" fa-solid fa-angle-right mx-3 icon-12"></i>
        Women <i class="fa-solid fa-angle-right mx-3 icon-12"></i>
        <span>Cotton jersey top</span>
      </div>
      <div class="page-switch d-flex align-items-center justify-content-end">
        <i class="fa-solid fa-chevron-left"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256">
          <path
            d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z">
          </path>
        </svg>
        <i class="fa-solid fa-chevron-right"></i>
      </div>
    </div>
    <div class="product-add-menu">
      <div class="container">
        <div class="sticky-product-box d-flex align-items-center justify-content-center">
          <div class="current-product d-flex align-items-center d-md-flex d-none">
            <div class="current-product-img">
              <img src="assets/images/product-details/page-image.png" alt="product-image">
            </div>
            <div class="current-product-title fw-5 d-xl-block d-none 1875rem">Cotton jersey top</div>
          </div>
          <div class="current-product-add-btns d-flex gap-10 justify-content-center align-items-center">
            <select class="sort-select">
              <option>Beige / S - $8.00</option>
              <option>Beige / M - $8.00</option>
              <option>Beige / L - $8.00</option>
              <option>Beige / XL - $8.00</option>
              <option>Black / S - $8.00</option>
              <option>Black / M - $8.00</option>
              <option>Black / L - $8.00</option>
              <option>Black / XL - $8.00</option>
              <option>Blue / S - $8.00</option>
              <option>Blue / M - $8.00</option>
              <option>Blue / L - $8.00</option>
              <option>Blue / XL - $8.00</option>
              <option>White / S - $8.00</option>
              <option>White / M - $8.00</option>
              <option>White / L - $8.00</option>
              <option>White / XL - $8.00</option>
            </select>
            <div class=" d-flex gap-10">
              <div class="quantity">
                <div class="quantity-bar d-flex">
                  <span class="btn-quantity btn-decrease">-</span>
                  <input type="text" class="quantity-product" name="number" value="1">
                  <span class="btn-quantity btn-increase">+</span>
                </div>
              </div>
              <a href="#" class="add-to-cart-btn">
                <span>Add to cart</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row pb-100">
      <div class="col-md-6 px-4">
        <div class="img-box">
          <img src="assets/images/product-details/page-image.png" alt="product-image">
        </div>
      </div>
      <div class="col-md-6 px-4">
        <div class="ps-25 product-info">
          <h5 class="heading mb-20">Cotton jersey top</h5>
          <div class="d-flex align-items-center grid-gap-sm flex-wrap mb-20">
            <div class="badge">Best seller</div>
            <div class="product-status d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-bolt icon-18"></i>
              <p class="fw-6 mb-0">Selling fast! 56 people have this in their carts.</p>
            </div>
          </div>
          <div class="product-price d-flex align-items-center gap-10 mb-5">
            <div class="sale-price">
              $8.00
            </div>
            <div class="regular-price">
              $30.00
            </div>
            <div class="sale-discount">
              20% OFF
            </div>
          </div>
          <div class="current-watching d-flex align-items-center gap-10 mb-5">
            <div class="current-count">20</div>
            <p class="fw-6 mb-0">People are viewing this right now</p>
          </div>
          <div class="countdown-box mb-5">
            <div class="countdown-header d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256">
                <path
                  d="M128,36A100,100,0,1,0,228,136,100.11,100.11,0,0,0,128,36Zm0,176a76,76,0,1,1,76-76A76.08,76.08,0,0,1,128,212ZM32.49,72.49a12,12,0,1,1-17-17l32-32a12,12,0,1,1,17,17Zm208,0a12,12,0,0,1-17,0l-32-32a12,12,0,1,1,17-17l32,32A12,12,0,0,1,240.49,72.49ZM176,124a12,12,0,0,1,0,24H128a12,12,0,0,1-12-12V88a12,12,0,0,1,24,0v36Z">
                </path>
              </svg>
              <p class="mb-0">HURRY UP! SALE ENDS IN:</p>
            </div>
            <div class="countdown-timer">
              <span>11Days : 15Hours : 51Mins : 40Secs</span>
            </div>
          </div>
          <div class="color-picker mb-20">
            <div class="color-name mb-4">
              Color:
              <span class="fw-6">Beige</span>
            </div>
            <div class="color-icon d-flex gap-10">
              <span class="color d-flex align-items-center justify-content-center active">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#c8ad7f" viewBox="0 0 256 256">
                  <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                </svg>
              </span>
              <span class="color d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000" viewBox="0 0 256 256">
                  <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                </svg>
              </span>
              <span class="color d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#a8bcd4" viewBox="0 0 256 256">
                  <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                </svg>
              </span>
              <span class="color d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256">
                  <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                </svg>
              </span>
            </div>
          </div>
          <div class="size-picker mb-5">
            <div class="size-name mb-4 d-flex align-items-center justify-content-between">
              <div class="mb-2">
                Size:
                <span class="fw-6">S</span>
              </div>
              <a href="#" class="size-link">Find your size</a>
            </div>
            <div class="size-button">
              <button class="size active">S</button>
              <button class="size">M</button>
              <button class="size">L</button>
              <button class="size">XL</button>
            </div>
          </div>
          <div class="quantity mb-5">
            <div class="fw-6 mb-2">Quantity</div>
            <div class="quantity-bar d-flex">
              <span class="btn-quantity btn-decrease">-</span>
              <input type="text" class="quantity-product" name="number" value="1">
              <span class="btn-quantity btn-increase">+</span>
            </div>
          </div>
          <div class="add-to-cart d-flex align-items-center flex-wrap flex-md-nowrap gap-4">
            <a href="#" class="add-to-cart-btn">
              <spaan>Add
                to cart -&nbsp;</spaan>
              <span class="total-price">$8.00</span>
            </a>
            <a href="#">
              <span class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                  <path
                    d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z">
                  </path>
                </svg>
              </span>
            </a>
            <a href="#">
              <span class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                  viewBox="0 0 256 256">
                  <path
                    d="M216,48V88a8,8,0,0,1-16,0V67.31L156.28,111A8,8,0,0,1,145,99.72L188.69,56H168a8,8,0,0,1,0-16h40A8,8,0,0,1,216,48Zm-8,112a8,8,0,0,0-8,8v20.69L53.66,42.34A8,8,0,0,0,42.34,53.66L188.69,200H168a8,8,0,0,0,0,16h40a8,8,0,0,0,8-8V168A8,8,0,0,0,208,160ZM99.72,145,42.34,202.34a8,8,0,0,0,11.32,11.32L111,156.28A8,8,0,0,0,99.72,145Z">
                  </path>
                </svg>
              </span>
            </a>
          </div>
          <div class="buy-option w-100 mb-5">
            <a href="#" class="buy-btn">Buy with
              <img src="assets/images/product-details/paypal.png" alt="" class="h-auto"></a>
            <a href="#" class="more-payment-options">More payment options</a>
          </div>
          <div class="extra-link-box mb-5">
            <a href="#" class="extra-info-links">
              <img src="assets/images/product-details/compare.svg" alt="compare-colors">
              <span>Compare colors</span>
            </a>
            <a href="#" class="extra-info-links">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                <path
                  d="M144,180a16,16,0,1,1-16-16A16,16,0,0,1,144,180Zm92-52A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128ZM128,64c-24.26,0-44,17.94-44,40v4a12,12,0,0,0,24,0v-4c0-8.82,9-16,20-16s20,7.18,20,16-9,16-20,16a12,12,0,0,0-12,12v8a12,12,0,0,0,23.73,2.56C158.31,137.88,172,122.37,172,104,172,81.94,152.26,64,128,64Z">
                </path>
              </svg>
              <span>Ask a question?</span>
            </a>
            <a href="#" class="extra-info-links">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                <path
                  d="M255.14,115.54l-14-35A19.89,19.89,0,0,0,222.58,68H196V64a12,12,0,0,0-12-12H32A20,20,0,0,0,12,72V184a20,20,0,0,0,20,20H46.06a36,36,0,0,0,67.88,0h44.12a36,36,0,0,0,67.88,0H236a20,20,0,0,0,20-20V120A21.7,21.7,0,0,0,255.14,115.54ZM196,92h23.88l6.4,16H196ZM80,204a12,12,0,1,1,12-12A12,12,0,0,1,80,204Zm92-41.92A36.32,36.32,0,0,0,158.06,180H113.94a36,36,0,0,0-67.88,0H36V140H172ZM172,116H36V76H172Zm20,88a12,12,0,1,1,12-12A12,12,0,0,1,192,204Zm40-24h-6.06A36.09,36.09,0,0,0,196,156.23V132h36Z">
                </path>
              </svg>
              <span>Delivery & Return</span>
            </a>
            <a href="#" class="extra-info-links">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                <path
                  d="M176,156a43.78,43.78,0,0,0-29.09,11L106.1,140.8a44.07,44.07,0,0,0,0-25.6L146.91,89a43.83,43.83,0,1,0-13-20.17L93.09,95a44,44,0,1,0,0,65.94L133.9,187.2A44,44,0,1,0,176,156Zm0-120a20,20,0,1,1-20,20A20,20,0,0,1,176,36ZM64,148a20,20,0,1,1,20-20A20,20,0,0,1,64,148Zm112,72a20,20,0,1,1,20-20A20,20,0,0,1,176,220Z">
                </path>
              </svg>
              <span>Share</span>
            </a>
          </div>
          <div class="delivery-info">
            <div class="row">
              <div class="col-xl-6 col-12 px-4 mb-5">
                <div class="product-delivery">
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                      <path
                        d="M222.33,106.79,212,103.35V56a20,20,0,0,0-20-20H140V24a12,12,0,0,0-24,0V36H64A20,20,0,0,0,44,56v47.35l-10.33,3.44a20,20,0,0,0-13.67,19V152c0,64.63,100.8,90.57,105.09,91.64a11.94,11.94,0,0,0,5.82,0C135.2,242.57,236,216.63,236,152V125.77A20,20,0,0,0,222.33,106.79ZM68,60H188V95.35L131.79,76.62a11.85,11.85,0,0,0-7.58,0L68,95.35Zm144,92c0,36.69-58.08,60.43-84,67.59-25.94-7.17-84-30.9-84-67.59V128.65l72-24V168a12,12,0,0,0,24,0V104.65l72,24Z">
                      </path>
                    </svg>
                  </div>
                  <p>Estimate delivery times: <span class="fw-7">12-26 days</span>
                    (International), <span class="fw-7">3-6 days</span> (United
                    States).</p>
                </div>
              </div>
              <div class="col-xl-6 col-12 px-4 mb-5">
                <div class="product-delivery mb-0">
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                      <path
                        d="M225.6,62.64l-88-48.17a19.91,19.91,0,0,0-19.2,0l-88,48.17A20,20,0,0,0,20,80.19v95.62a20,20,0,0,0,10.4,17.55l88,48.17a19.89,19.89,0,0,0,19.2,0l88-48.17A20,20,0,0,0,236,175.81V80.19A20,20,0,0,0,225.6,62.64ZM128,36.57,200,76,178.57,87.73l-72-39.42Zm0,78.83L56,76,81.56,62l72,39.41ZM44,96.79l72,39.4v76.67L44,173.44Zm96,116.07V136.19l24-13.13V152a12,12,0,0,0,24,0V109.92l24-13.13v76.65Z">
                      </path>
                    </svg>
                  </div>
                  <p>Return within <span class="fw-7">30 days</span> of purchase.
                    Duties &amp; taxes are non-refundable.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="product-trust-seal d-flex align-items-center flex-wrap">
            <div class="trust-desc d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                  d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm0,72c0,37.07-13.66,67.16-40.6,89.42A129.3,129.3,0,0,1,128,223.62a128.25,128.25,0,0,1-38.92-21.81C61.82,179.51,48,149.3,48,112l0-56,160,0ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z">
                </path>
              </svg>
              <p class="fw-6 mb-0">Guarantee Safe <br> Checkout</p>
            </div>
            <div class="payment-types">
              <img src="assets/images/visa.png" alt="visa-logo" class="payment-option" />
              <img src="assets/images/pp.png" alt="paypal-logo" class="payment-option" />
              <img src="assets/images/mastercard.png" alt="mastercard-logo" class="payment-option" />
              <img src="assets/images/amex.png" alt="amex-logo" class="payment-option" />
              <img src="assets/images/payment.png" alt="payment-logo" class="payment-option" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="info-tabs">
      <ul class="nav nav-tabs mx-xl-5 mx-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
            data-bs-target="#description-tab-pane" type="button" role="tab" aria-controls="description-tab-pane"
            aria-selected="true">Description</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="additional-info-tab" data-bs-toggle="tab"
            data-bs-target="#additional-info-tab-pane" type="button" role="tab" aria-controls="additional-info-tab-pane"
            aria-selected="false">Additional Information</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review-tab-pane" type="button"
            role="tab" aria-controls="review-tab-pane" aria-selected="false">Review</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping-tab-pane"
            type="button" role="tab" aria-controls="shipping-tab-pane" aria-selected="false">Shipping</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="return-tab" data-bs-toggle="tab" data-bs-target="#return-tab-pane" type="button"
            role="tab" aria-controls="return-tab-pane" aria-selected="false">Return Policies</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel"
          aria-labelledby="description-tab" tabindex="0">
          <p class="mb-5">
            Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey,
            crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
            responsibly
            sourced wood-based
            fibres produced through a process that reduces impact on forests,
            biodiversity and
            water supply.
          </p>
          <div class="grid">
            <div class="left">
              <h3 class="tertiary-heading">Features</h3>
              <ul class="ps-4 mb-5 mt-4">
                <li>Front button placket</li>
                <li> Adjustable sleeve tabs</li>
                <li>Babaton embroidered crest at placket and hem</li>
              </ul>
              <h3 class="tertiary-heading">Materials Care</h3>
              <ul class="ps-4 mt-4 mb-0">
                <li>Content: 100% LENZING™ ECOVERO™ Viscose</li>
                <li>Care: Hand wash</li>
                <li>Imported</li>
              </ul>
            </div>
            <div class="right">
              <h3 class="tertiary-heading">Materials Care</h3>
              <div class="d-flex gap-10 mb-15 align-items-center">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                    <path
                      d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V48H208V208ZM128,64a64,64,0,1,0,64,64A64.07,64.07,0,0,0,128,64Zm0,112a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176ZM200,68a12,12,0,1,1-12-12A12,12,0,0,1,200,68Zm-74.34,49.66-16,16a8,8,0,0,1-11.32-11.32l16-16a8,8,0,0,1,11.32,11.32Zm32-3.32a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32-11.32l32-32A8,8,0,0,1,157.66,114.34Z">
                    </path>
                  </svg>
                </div>
                <span>Machine wash max. 30ºC. Short spin.</span>
              </div>
              <div class="d-flex gap-10 mb-15 align-items-center">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                    <path
                      d="M212,56a28,28,0,1,0,28,28A28,28,0,0,0,212,56Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,96Zm-84,57V88a8,8,0,0,0-16,0v65a32,32,0,1,0,16,0Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,120,200Zm40-66V48a40,40,0,0,0-80,0v86a64,64,0,1,0,80,0Zm-40,98a48,48,0,0,1-27.42-87.4A8,8,0,0,0,96,138V48a24,24,0,0,1,48,0v90a8,8,0,0,0,3.42,6.56A48,48,0,0,1,120,232Z">
                    </path>
                  </svg>
                </div>
                <span>Iron maximum 110ºC.</span>
              </div>
              <div class="d-flex gap-10 mb-15 align-items-center">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                    <path
                      d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm88,104a87.56,87.56,0,0,1-20.41,56.28L71.72,60.4A88,88,0,0,1,216,128ZM40,128A87.56,87.56,0,0,1,60.41,71.72L184.28,195.6A88,88,0,0,1,40,128Z">
                    </path>
                  </svg>
                </div>
                <span>Do not bleach/bleach.</span>
              </div>
              <div class="d-flex gap-10 mb-15 align-items-center">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                    <path
                      d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm88,104a87.56,87.56,0,0,1-20.41,56.28L71.72,60.4A88,88,0,0,1,216,128ZM40,128A87.56,87.56,0,0,1,60.41,71.72L184.28,195.6A88,88,0,0,1,40,128Z">
                    </path>
                  </svg>
                </div>
                <span>Do not dry clean.</span>
              </div>
              <div class="d-flex gap-10 align-items-center">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                    <path
                      d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V48H208V208ZM128,64a64,64,0,1,0,64,64A64.07,64.07,0,0,0,128,64Zm0,112a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176ZM200,68a12,12,0,1,1-12-12A12,12,0,0,1,200,68Zm-74.34,49.66-16,16a8,8,0,0,1-11.32-11.32l16-16a8,8,0,0,1,11.32,11.32Zm32-3.32a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32-11.32l32-32A8,8,0,0,1,157.66,114.34Z">
                    </path>
                  </svg>
                </div>
                <span>Tumble dry, medium hear.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="additional-info-tab-pane" role="tabpanel" aria-labelledby="additional-info-tab"
          tabindex="0">
          <table class="size-table">
            <tbody>
              <tr class="color-row">
                <th class="row-label">Color</th>
                <td class="row-value">
                  <p class="mb-0">White, Pink, Black</p>
                </td>
              </tr>
              <tr class="color-row">
                <th class="row-label">Size</th>
                <td class="row-value">
                  <p class="mb-0">S, M, L, XL</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade tab-reviews" id="review-tab-pane" role="tabpanel" aria-labelledby="review-tab"
          tabindex="0">
          <div class="tab-reviews-heading">
            <div class="top">
              <div class="text-center">
                <h1 class="average-rating fw-6">4.8</h1>
                <div class="list-star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>(168 Ratings)</p>
              </div>
              <div class="rating-score">
                <div class="item">
                  <div class="number-1">5</div>
                  <i class="fa-solid fa-star"></i>
                  <div class="line-bg">
                    <div style="width: 94.67%;"></div>
                  </div>
                  <div class="number-2 text-caption-1">59</div>
                </div>
                <div class="item">
                  <div class="number-1 text-caption-1">4</div>
                  <i class="fa-solid fa-star"></i>
                  <div class="line-bg">
                    <div style="width: 60%;"></div>
                  </div>
                  <div class="number-2 text-caption-1">46</div>
                </div>
                <div class="item">
                  <div class="number-1 text-caption-1">3</div>
                  <i class="fa-solid fa-star"></i>
                  <div class="line-bg">
                    <div style="width: 0%;"></div>
                  </div>
                  <div class="number-2 text-caption-1">0</div>
                </div>
                <div class="item">
                  <div class="number-1 text-caption-1">2</div>
                  <i class="fa-solid fa-star"></i>
                  <div class="line-bg">
                    <div style="width: 0%;"></div>
                  </div>
                  <div class="number-2 text-caption-1">0</div>
                </div>
                <div class="item">
                  <div class="number-1 text-caption-1">1</div>
                  <i class="fa-solid fa-star"></i>
                  <div class="line-bg">
                    <div style="width: 0%;"></div>
                  </div>
                  <div class="number-2 text-caption-1">0</div>
                </div>
              </div>
            </div>
            <div class="link-box">
              <div class="write-review-btn">
                Write a review</div>
            </div>
          </div>
          <div class="tab-written-reviews">
            <div class="d-flex mb-20 gap-20 align-items-center justify-content-between flex-wrap">
              <h5 class="heading">03 Comments</h5>
              <div class="d-flex align-items-center gap-10">
                <div class="sort">Sort by:</div>
                <select class="sort-select" aria-label="Default select example">
                  <option selected="">Most Recent</option>
                  <option value="1">Oldest</option>
                  <option value="2">Most Popular</option>
                </select>
              </div>
            </div>
            <div class="customer-reviews">
              <div class="review-item">
                <div class="user">
                  <div class="image">
                    <img src="assets/images/product-details/review-1.jpg" alt="profile image">
                  </div>
                  <div>
                    <h6 class="small-heading mb-0">
                      <a href="#" class="text-dark">Superb quality apparel that
                        exceeds expectations</a>
                    </h6>
                    <div class="time">1 days ago</div>
                  </div>
                </div>
                <p class="text_black_light">Great theme - we were looking for a theme
                  with lots of built in features and flexibility and this was
                  perfect. We expected to need to employ a developer to add a few
                  finishing touches. But we actually managed to do everything
                  ourselves. We did have one small query and the support given was
                  swift and helpful.</p>
              </div>
            </div>
            <div class="customer-reviews">
              <div class="review-item review-reply">
                <div class="user">
                  <div class="image">
                    <img src="assets/images/product-details/review-2.jpg" alt="profile image">
                  </div>
                  <div>
                    <h6 class="small-heading mb-0">
                      <a href="#" class="text-dark">Reply from modave</a>
                    </h6>
                    <div class="time">1 days ago</div>
                  </div>
                </div>
                <p class="text_black-2">We love to hear it! Part of what we love
                  most about Modave is how much it empowers store owners like
                  yourself to build a beautiful website without having to hire a
                  developer :) Thank you for this fantastic review!</p>
              </div>
            </div>
            <div class="customer-reviews">
              <div class="review-item">
                <div class="user">
                  <div class="image">
                    <img src="assets/images/product-details/review-1.jpg" alt="profile image">
                  </div>
                  <div>
                    <h6 class="small-heading mb-0">
                      <a href="#" class="text-dark">Superb quality apparel that
                        exceeds expectations</a>
                    </h6>
                    <div class="time">1 days ago</div>
                  </div>
                </div>
                <p class="text_black_light">Great theme - we were looking for a theme
                  with lots of built in features and flexibility and this was
                  perfect. We expected to need to employ a developer to add a few
                  finishing touches. But we actually managed to do everything
                  ourselves. We did have one small query and the support given was
                  swift and helpful.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="shipping-tab-pane" role="tabpanel" aria-labelledby="shipping-tab" tabindex="0">
          <div class="privacy-policy">
            <div class="policy-title">The Company Private Limited Policy</div>
            <p>The Company Private Limited and each of their respective subsidiary, parent
              and affiliated companies is deemed to operate this Website (“we” or “us”)
              recognizes that you care how information about you is used and shared. We
              have created this Privacy Policy to inform you what information we collect
              on the Website, how we use your information and the choices you have about
              the way your information is collected and used. Please read this Privacy
              Policy carefully. Your use of the Website indicates that you have read and
              accepted our privacy practices, as outlined in this Privacy Policy.</p>
            <p>Please be advised that the practices described in this Privacy Policy apply
              to information gathered by us or our subsidiaries, affiliates or agents: (i)
              through this Website, (ii) where applicable, through our Customer Service
              Department in connection with this Website, (iii) through information
              provided to us in our free standing retail stores, and (iv) through
              information provided to us in conjunction with marketing promotions and
              sweepstakes.</p>
            <p>We are not responsible for the content or privacy practices on any websites.
            </p>
            <p>We reserve the right, in our sole discretion, to modify, update, add to,
              discontinue, remove or otherwise change any portion of this Privacy Policy,
              in whole or in part, at any time. When we amend this Privacy Policy, we will
              revise the “last updated” date located at the top of this Privacy Policy.
            </p>
            <p>If you provide information to us or access or use the Website in any way
              after this Privacy Policy has been changed, you will be deemed to have
              unconditionally consented and agreed to such changes. The most current
              version of this Privacy Policy will be available on the Website and will
              supersede all previous versions of this Privacy Policy.</p>
            <p>If you have any questions regarding this Privacy Policy, you should contact
              our Customer Service Department by email at marketing@company.com</p>
          </div>
        </div>
        <div class="tab-pane fade return-policy" id="return-tab-pane" role="tabpanel" aria-labelledby="return-tab"
          tabindex="0">
          <ul class="d-flex justify-content-center mb-20 list-unstyled">
            <li>
              <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                <path fill="currentColor"
                  d="M8.7 30.7h22.7c.3 0 .6-.2.7-.6l4-25.3c-.1-.4-.3-.7-.7-.8s-.7.2-.8.6L34 8.9l-3-1.1c-2.4-.9-5.1-.5-7.2 1-2.3 1.6-5.3 1.6-7.6 0-2.1-1.5-4.8-1.9-7.2-1L6 8.9l-.7-4.3c0-.4-.4-.7-.7-.6-.4.1-.6.4-.6.8l4 25.3c.1.3.3.6.7.6zm.8-21.6c2-.7 4.2-.4 6 .8 1.4 1 3 1.5 4.6 1.5s3.2-.5 4.6-1.5c1.7-1.2 4-1.6 6-.8l3.3 1.2-3 19.1H9.2l-3-19.1 3.3-1.2zM32 32H8c-.4 0-.7.3-.7.7s.3.7.7.7h24c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zm0 2.7H8c-.4 0-.7.3-.7.7s.3.6.7.6h24c.4 0 .7-.3.7-.7s-.3-.6-.7-.6zm-17.9-8.9c-1 0-1.8-.3-2.4-.6l.1-2.1c.6.4 1.4.6 2 .6.8 0 1.2-.4 1.2-1.3s-.4-1.3-1.3-1.3h-1.3l.2-1.9h1.1c.6 0 1-.3 1-1.3 0-.8-.4-1.2-1.1-1.2s-1.2.2-1.9.4l-.2-1.9c.7-.4 1.5-.6 2.3-.6 2 0 3 1.3 3 2.9 0 1.2-.4 1.9-1.1 2.3 1 .4 1.3 1.4 1.3 2.5.3 1.8-.6 3.5-2.9 3.5zm4-5.5c0-3.9 1.2-5.5 3.2-5.5s3.2 1.6 3.2 5.5-1.2 5.5-3.2 5.5-3.2-1.6-3.2-5.5zm4.1 0c0-2-.1-3.5-.9-3.5s-1 1.5-1 3.5.1 3.5 1 3.5c.8 0 .9-1.5.9-3.5zm4.5-1.4c-.9 0-1.5-.8-1.5-2.1s.6-2.1 1.5-2.1 1.5.8 1.5 2.1-.5 2.1-1.5 2.1zm0-.8c.4 0 .7-.5.7-1.2s-.2-1.2-.7-1.2-.7.5-.7 1.2.3 1.2.7 1.2z">
                </path>
              </svg>
            </li>
            <li>
              <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                <path fill="currentColor"
                  d="M36.7 31.1l-2.8-1.3-4.7-9.1 7.5-3.5c.4-.2.6-.6.4-1s-.6-.5-1-.4l-7.5 3.5-7.8-15c-.3-.5-1.1-.5-1.4 0l-7.8 15L4 15.9c-.4-.2-.8 0-1 .4s0 .8.4 1l7.5 3.5-4.7 9.1-2.8 1.3c-.4.2-.6.6-.4 1 .1.3.4.4.7.4.1 0 .2 0 .3-.1l1-.4-1.5 2.8c-.1.2-.1.5 0 .8.1.2.4.3.7.3h31.7c.3 0 .5-.1.7-.4.1-.2.1-.5 0-.8L35.1 32l1 .4c.1 0 .2.1.3.1.3 0 .6-.2.7-.4.1-.3 0-.8-.4-1zm-5.1-2.3l-9.8-4.6 6-2.8 3.8 7.4zM20 6.4L27.1 20 20 23.3 12.9 20 20 6.4zm-7.8 15l6 2.8-9.8 4.6 3.8-7.4zm22.4 13.1H5.4L7.2 31 20 25l12.8 6 1.8 3.5z">
                </path>
              </svg>
            </li>
            <li>
              <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                <path fill="currentColor"
                  d="M5.9 5.9v28.2h28.2V5.9H5.9zM19.1 20l-8.3 8.3c-2-2.2-3.2-5.1-3.2-8.3s1.2-6.1 3.2-8.3l8.3 8.3zm-7.4-9.3c2.2-2 5.1-3.2 8.3-3.2s6.1 1.2 8.3 3.2L20 19.1l-8.3-8.4zM20 20.9l8.3 8.3c-2.2 2-5.1 3.2-8.3 3.2s-6.1-1.2-8.3-3.2l8.3-8.3zm.9-.9l8.3-8.3c2 2.2 3.2 5.1 3.2 8.3s-1.2 6.1-3.2 8.3L20.9 20zm8.4-10.2c-1.2-1.1-2.6-2-4.1-2.6h6.6l-2.5 2.6zm-18.6 0L8.2 7.2h6.6c-1.5.6-2.9 1.5-4.1 2.6zm-.9.9c-1.1 1.2-2 2.6-2.6 4.1V8.2l2.6 2.5zM7.2 25.2c.6 1.5 1.5 2.9 2.6 4.1l-2.6 2.6v-6.7zm3.5 5c1.2 1.1 2.6 2 4.1 2.6H8.2l2.5-2.6zm18.6 0l2.6 2.6h-6.6c1.4-.6 2.8-1.5 4-2.6zm.9-.9c1.1-1.2 2-2.6 2.6-4.1v6.6l-2.6-2.5zm2.6-14.5c-.6-1.5-1.5-2.9-2.6-4.1l2.6-2.6v6.7z">
                </path>
              </svg>
            </li>
            <li>
              <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                <path fill="currentColor"
                  d="M35.1 33.6L33.2 6.2c0-.4-.3-.7-.7-.7H13.9c-.4 0-.7.3-.7.7s.3.7.7.7h18l.7 10.5H20.8c-8.8.2-15.9 7.5-15.9 16.4 0 .4.3.7.7.7h28.9c.2 0 .4-.1.5-.2s.2-.3.2-.5v-.2h-.1zm-28.8-.5C6.7 25.3 13 19 20.8 18.9h11.9l1 14.2H6.3zm11.2-6.8c0 1.2-1 2.1-2.1 2.1s-2.1-1-2.1-2.1 1-2.1 2.1-2.1 2.1 1 2.1 2.1zm6.3 0c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1s1-2.1 2.1-2.1 2.1 1 2.1 2.1z">
                </path>
              </svg>
            </li>
            <li>
              <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                <path fill="currentColor"
                  d="M20 33.8c7.6 0 13.8-6.2 13.8-13.8S27.6 6.2 20 6.2 6.2 12.4 6.2 20 12.4 33.8 20 33.8zm0-26.3c6.9 0 12.5 5.6 12.5 12.5S26.9 32.5 20 32.5 7.5 26.9 7.5 20 13.1 7.5 20 7.5zm-.4 15h.5c1.8 0 3-1.1 3-3.7 0-2.2-1.1-3.6-3.1-3.6h-2.6v10.6h2.2v-3.3zm0-5.2h.4c.6 0 .9.5.9 1.7 0 1.1-.3 1.7-.9 1.7h-.4v-3.4z">
                </path>
              </svg>
            </li>
            <li>
              <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                <path fill="currentColor"
                  d="M30.2 29.3c2.2-2.5 3.6-5.7 3.6-9.3s-1.4-6.8-3.6-9.3l3.6-3.6c.3-.3.3-.7 0-.9-.3-.3-.7-.3-.9 0l-3.6 3.6c-2.5-2.2-5.7-3.6-9.3-3.6s-6.8 1.4-9.3 3.6L7.1 6.2c-.3-.3-.7-.3-.9 0-.3.3-.3.7 0 .9l3.6 3.6c-2.2 2.5-3.6 5.7-3.6 9.3s1.4 6.8 3.6 9.3l-3.6 3.6c-.3.3-.3.7 0 .9.1.1.3.2.5.2s.3-.1.5-.2l3.6-3.6c2.5 2.2 5.7 3.6 9.3 3.6s6.8-1.4 9.3-3.6l3.6 3.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9l-3.8-3.6z">
                </path>
              </svg>
            </li>
            <li>
              <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                <path fill="currentColor"
                  d="M34.1 34.1H5.9V5.9h28.2v28.2zM7.2 32.8h25.6V7.2H7.2v25.6zm13.5-18.3a.68.68 0 0 0-.7-.7.68.68 0 0 0-.7.7v10.9a.68.68 0 0 0 .7.7.68.68 0 0 0 .7-.7V14.5z">
                </path>
              </svg>
            </li>
          </ul>
          <p class="text-center mb-0">LT01: 70% wool, 15% polyester, 10% polyamide,
            5% acrylic 900 Grms/mt</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php" ?>