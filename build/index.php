<?php
include "create-session.php";
include "food-header.php";
?>
<section class="food-home-page">
  <section class="carousel">
    <div id="slider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="assets/images/slider-food-1.jpg" class="d-block w-100 h-100" alt="...">
          <div class="carousel-caption text-start fade-up">
            <div class="carousel-text">
              <div class="carousel-text-header">
                Healthy Plant-Based <br />
                to your door
              </div>
              <p class="carousel-description">
                Transform Your Meals With Our Delicious Plant Based Recipes
              </p>
              <a href="#" class="carousel-link"><span>Shop collection</span>
                <i class="fa-solid fa-chevron-right carousel-icon"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="assets/images/slider-food-2.jpg" class="d-block w-100 h-100" alt="...">
          <div class="carousel-caption text-start fade-up">
            <div class="carousel-text">
              <div class="carousel-text-header">
                Vegan Meals Delivered <br />
                to Your Door
              </div>
              <p class="carousel-description">
                Upgrade Your Meal With Our Delicious Plant Based Creations
              </p>
              <a href="#" class="carousel-link"><span>Shop collection</span>
                <i class="fa-solid fa-chevron-right carousel-icon"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="assets/images/slider-food-3.jpg" class="d-block w-100 h-100" alt="...">
          <div class="carousel-caption slider-text-3 text-start fade-up">
            <div class="carousel-text">
              <div class="carousel-text-header">Multi-faceted Beauty</div>
              <p class="carousel-description">
                From casual to foraml, we have got you covered
              </p>
              <a href="#" class="carousel-link"><span>Shop collection</span>
                <i class="fa-solid fa-chevron-right carousel-icon"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="benefits">
    <div class="container-fluid">
      <div class="container">
        <h2 class="text-center">Discover the benefits of a
          <br>
          plant-based diet
        </h2>
        <div class="row">
          <div class="col-xl-3 col-md-6 col-12">
            <div class="benefits-card text-center">
              <img src="assets/images/health-improve.svg" alt="health icon" />
              <div class="benefits-text">
                <a href="#" class="benefits-link">Improved Health</a>
                <p>
                  Plant-based diets are associated with lower risks of heart
                  disease, obesity, type 2 diabetes, and certain cancers.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-12">
            <div class="benefits-card text-center">
              <img src="assets/images/energy.svg" alt="energy icon" />
              <div class="benefits-text">
                <a href="#" class="benefits-link">Increased energy</a>
                <p>
                  Studies show that plant-based diets can lower the risk of heart
                  disease, obesity, type 2 diabetes, and various cancers.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-12">
            <div class="benefits-card text-center">
              <img src="assets/images/glowing-skin.svg" alt="glowing-skin icon" />
              <div class="benefits-text">
                <a href="#" class="benefits-link">Glowing skin</a>
                <p>
                  Choosing a plant-based diet may help reduce the risk of heart
                  disease, obesity, type 2 diabetes, and certain cancers.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-12">
            <div class="benefits-card text-center">
              <img src="assets/images/better-sleep.svg" alt="moon icon" />
              <div class="benefits-text">
                <a href="#" class="benefits-link">Better sleep</a>
                <p>
                  Following a plant-based diet is linked to reduced risks of heart
                  disease, obesity, type 2 diabetes, and certain cancers.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="info-box">
    <div class="container">
      <div class="header-title pb-large">
        <div class="title text-center">
          <h2>Here’s what you’ll find in our nutritionist</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 p-0 img-effect">
          <img src="assets/images/banner-food1.jpg" alt="containres full of food" class="img-fluid">
        </div>
        <div class="col-lg-5 offset-lg-1 py-4 px-0">
          <div class="food-description-container">
            <div class="food-description">
              <h5 class="heading-title">Plant protein</h5>
              <p>
                Utilise a combination of protein-rich wholefoods like legumes,
                tempeh, nuts, and seeds to ensure your body is getting
                everything it needs to thrive.
              </p>
            </div>
            <div class="food-description">
              <h5 class="heading-title">Natural flavours</h5>
              <p>
                Be it by roasting or caramelising, soaking or seasoning, our
                experienced, plant-based chefs know how to bring out the natural
                flavours, textures, and aromas in plant-based ingredients,
                giving them the chance to shine.
              </p>
            </div>
            <div class="food-description">
              <h5 class="heading-title">Superfoods</h5>
              <p>
                Abundant in trending and ‘everyday’ superfoods with unique
                health-promoting properties, Soulara meals offer a myriad of
                vitamins, minerals, protective antioxidants, and polyphenols -
                plant compounds with countless health benefits.
              </p>
            </div>
            <div class="food-description">
              <h5 class="heading-title">Local produce</h5>
              <p>
                To make our meals as nutrient-dense as possible, we source
                fresh, seasonal fruits and vegetables from Australian farmers.
                We’re all for supporting local and shortening the supply chain.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="info-box-2">
    <div class="container">
      <div class="row flex-column-reverse flex-lg-row">
        <div class="col-lg-5 col-12 text-center text-md-start pe-4">
          <div class="food-description-container  align-items-center align-items-md-start">
            <div class="header-title">
              <div class="title">
                <h2>The Ecomus difference</h2>
              </div>
            </div>
            <div class="food-description food-flex-container flex-column flex-md-row">
              <div class="img-box">
                <img src="assets/images/cls-food1.png" alt="food image 1" />
              </div>
              <div class="content-box">
                <h5 class="heading-title">Diverse and Delicious</h5>
                <p>
                  Utilise a combination of protein-rich wholefoods like legumes,
                  tempeh, nuts, and seeds to ensure your body is getting
                  everything it needs to thrive.
                </p>
              </div>
            </div>
            <div class="food-description food-flex-container flex-column flex-md-row">
              <div class="img-box">
                <img src="assets/images/cls-food2.png" alt="food image 2" />
              </div>
              <div class="content-box">
                <h5 class="heading-title">Customizable and Convenient</h5>
                <p>
                  Utilise a combination of protein-rich wholefoods like legumes,
                  tempeh, nuts, and seeds to ensure your body is getting
                  everything it needs to thrive.
                </p>
              </div>
            </div>
            <div class="food-description food-flex-container flex-column flex-md-row">
              <div class="img-box">
                <img src="assets/images/cls-food3.png" alt="food image 3" />
              </div>
              <div class="content-box">
                <h5 class="heading-title">Nutrient-Rich and Balanced</h5>
                <p>
                  Utilise a combination of protein-rich wholefoods like legumes,
                  tempeh, nuts, and seeds to ensure your body is getting
                  everything it needs to thrive.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-12 p-5 img-effect">
          <img src="assets/images/banner-food2.png" alt="containres full of food" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="food-display line">
    <div class="container">
      <div class="header-title pb-large">
        <div class="title text-center">
          <h2>Choose your meal size</h2>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-md-4 col-6 p-0">
          <div class="item-container">
            <div class="item-img">
              <a href="#"><img src="assets/images/grid-food-1.jpg" alt="Image of Pizza" />
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
            <div class="item-text">
              <a href="#" class="item-link">Pizza</a>
              <span class="item-price">$30.00</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 p-0">
          <div class="item-container">
            <div class="item-img">
              <a href="#"><img src="assets/images/grid-food-2.jpg" alt="Image Potato Snack" /></a>
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
            <div class="item-text">
              <a href="#" class="item-link">Ptato Snack</a>
              <span class="item-price">$10.00</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 p-0">
          <div class="item-container">
            <div class="item-img">
              <a href="#"><img src="assets/images/grid-food-3.jpg" alt="Image of Avacado Salad" /></a>
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
            <div class="item-text">
              <a href="#" class="item-link">Avacado Salad</a>
              <span class="item-price">$36.00</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 p-0">
          <div class="item-container">
            <div class="item-img">
              <a href="#"><img src="assets/images/grid-food-4.jpg" alt="Image of Salmon Salad" /></a>
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
            <div class="item-text">
              <a href="#" class="item-link">Salmon Salad</a>
              <span class="item-price">$42.00</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 p-0">
          <div class="item-container">
            <div class="item-img">
              <a href="#"><img src="assets/images/grid-food-5.jpg" alt="Image of Peas Salad" /></a>
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
            <div class="item-text">
              <a href="#" class="item-link">Peas Salad</a>
              <span class="item-price">
                <span class="old-price">$36.00</span>
                <span class="new-price">$32.00</span>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 p-0">
          <div class="item-container">
            <div class="item-img">
              <a href="#"><img src="assets/images/grid-food-6.jpg" alt="Image of Straw Mushrooms Salad" /></a>
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
            <div class="item-text">
              <a href="#" class="item-link">Straw Mushrooms Salad</a>
              <span class="item-price">$36.00</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 p-0">
          <div class="item-container ">
            <div class="item-img">
              <a href="#"><img src="assets/images/grid-food-7.jpg" alt="Image of Pasta" /></a>
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
            <div class="item-text">
              <a href="#" class="item-link">Pasta</a>
              <span class="item-price">
                <span class="old-price">$45.00</span>
                <span class="new-price">$35.00</span>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-6 p-0">
          <div class="item-container">
            <div class="item-img">
              <a href="#"><img src="assets/images/grid-food-8.jpg" alt="Image of Ramen" /></a>
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
            <div class="item-text">
              <a href="#" class="item-link">Ramen</a>
              <span class="item-price">$35.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="loadmore-btn-container text-center">
        <button class="loadmore-btn"><span>Load more</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
            <path
              d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
            </path>
          </svg>
        </button>
      </div>
      <div class="see-less-btn-container text-center">
        <button class="see-less-btn">
          <span>See less</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
            <path
              d="M205.66,125.66a8,8,0,0,1-11.32,0L128,59.31,61.66,125.66a8,8,0,0,1-11.32-11.32l72-72a8,8,0,0,1,11.32,0l72,72A8,8,0,0,1,205.66,125.66Z">
            </path>
          </svg>
        </button>
      </div>
    </div>
  </section>
  <section class="section-how">
    <div class="container">
      <div class="header-title pb-large">
        <div class="title text-center">
          <h2> How it works</h2>
        </div>
      </div>
      <div class="row gx-5">
        <div class="info-container col-lg-4">
          <div class="how-img-box">
            <img src="assets/images/food-blog1.png" alt="Food in a plate" />
          </div>
          <div class="how-text-box text-center">
            <h5 class="heading-title">Create your menu</h5>
            <p>
              Enjoy our ever-growing selection of meals, snacks and drinks,
              with over 60+ options that will have you coming back for more.
            </p>
          </div>
        </div>
        <div class="info-container col-lg-4">
          <div class="how-img-box">
            <img src="assets/images/food-blog2.png" alt="Photo of a chef" />
          </div>
          <div class="how-text-box text-center">
            <h5 class="heading-title">Made with love</h5>
            <p>
              Savor a curated variety of more than 60 delicious meals, snacks,
              and drinks designed to delight your taste buds.
            </p>
          </div>
        </div>
        <div class="info-container col-lg-4">
          <div class="how-img-box">
            <img src="assets/images/food-blog3.png" alt="Picture of Food conatiners" />
          </div>
          <div class="how-text-box text-center">
            <h5 class="heading-title">Delivered to you weekly</h5>
            <p>
              Dive into our menu, featuring over 60 unique choices of meals,
              snacks, and drinks, each offering a distinct culinary
              experience.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="parallax-section">
    <div class="parallax-content-box">
      <div class="container">
        <a href="#">
          <h4 class="parallax-heading mb-0">Join the Plant-Based Movement</h4>
          <p class="parallax-text mb-0">
            Become part of a thriving community that embraces plant-based
            living and shares their journey towards a healthier, greener
            future.
          </p>
          <button class="parallax-btn btn mb-0"><span>Start today</span></button>
        </a>
      </div>
    </div>
  </section>
  <div class="marquee">
    <div class="marquee-wrapper">
      <div class="marquee-text">
        <p>
          Use <a href="#" title="#">code GET30</a> at checkout for 30% off
          your first order
        </p>
      </div>
      <div class="marquee-text">
        <p>
          Use <a href="#" title="#">code GET30</a> at checkout for 30% off
          your first order
        </p>
      </div>
      <div class="marquee-text">
        <p>
          Use <a href="#" title="#">code GET30</a> at checkout for 30% off
          your first order
        </p>
      </div>
    </div>
  </div>
</section>
<?php include "footer.php" ?>