<?php
include "create-session.php";
include "header.php";
?>
<section class="blog-single-post-page">
  <button class="offcanvas-right btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
    aria-controls="offcanvasRight"><i class="fa-solid fa-list"></i></button>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header pt-0">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">SIDEBAR</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="sidebar-title">Blog categories</div>
      <div class="sidebar-content mb-50">
        <ul class="list-unstyled flex">
          <li>
            <a href="#">Accessories<span>(9)</span></a>
          </li>
          <li>
            <a href="#">Bag<span>(9)</span></a>
          </li>
          <li>
            <a href="#">Cookware &amp; Kitchen<span>(9)</span></a>
          </li>
          <li>
            <a href="#">Decor<span>(9)</span></a>
          </li>
          <li>
            <a href="#">Decorate<span>(9)</span></a>
          </li>
          <li>
            <a href="#">Denim<span>(9)</span></a>
          </li>
        </ul>
      </div>
      <div class="sidebar-title">Recent Post</div>
      <div class="sidebar-content mb-50">
        <ul class="list-unstyled flex">
          <li>
            <div class="style-sidebar">
              <div class="article-thumb">
                <a href="blog-detail.html" class="img-box">
                  <img src="assets/images/blog/sidebar-1.jpg" alt="">
                </a>
              </div>
              <div class="article-content">
                <div class="article-label">
                  <a href="blog-detail.html" class="btn">Accessories</a>
                </div>
                <div class="article-title">
                  <a href="blog-detail.html" class="">Effortlessly Blends The Carefree
                    Style</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="style-sidebar">
              <div class="article-thumb">
                <a href="blog-detail.html" class="img-box">
                  <img src="assets/images/blog/sidebar-2.jpg" alt="">
                </a>
              </div>
              <div class="article-content">
                <div class="article-label">
                  <a href="blog-detail.html" class="btn">Accessories</a>
                </div>
                <div class="article-title">
                  <a href="blog-detail.html" class="">The Limited Edition Club des Sports
                    Courchevel</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="style-sidebar">
              <div class="article-thumb">
                <a href="blog-detail.html" class="img-box">
                  <img src="assets/images/blog/sidebar-3.jpg" alt="">
                </a>
              </div>
              <div class="article-content">
                <div class="article-label">
                  <a href="blog-detail.html" class="btn">Fashion</a>
                </div>
                <div class="article-title">
                  <a href="blog-detail.html" class="">Christine Is A True Style Icon</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="sidebar-title">Blog tags</div>
      <div class="sidebar-content mb-50">
        <ul class="sidebar-link-box list-unstyled d-flex flex-row">
          <li>
            <a href="#">Bags</a>
          </li>
          <li>
            <a href="#">Fashion</a>
          </li>
        </ul>
      </div>
      <div class="sidebar-title">Instagram</div>
      <div class="sidebar-content">
        <ul class="grid grid-3-cols list-unstyled">
          <li class="img-box">
            <img src="assets/images/about_us/gallery-1.jpg" alt="blog image">
          </li>
          <li class="img-box">
            <img src="assets/images/about_us/gallery-2.jpg" alt="blog image">
          </li>
          <li class="img-box">
            <img src="assets/images/about_us/gallery-3.jpg" alt="blog image">
          </li>
          <li class="img-box">
            <img src="assets/images/about_us/gallery-4.jpg" alt="blog image">
          </li>
          <li class="img-box">
            <img src="assets/images/about_us/gallery-5.jpg" alt="blog image">
          </li>
          <li class="img-box">
            <img src="assets/images/about_us/gallery-6.png" alt="blog image">
          </li>

        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="link-box d-flex justify-content-center align-content-center">
      <a class="btn">Accessories</a>
      <a class="btn">Bags</a>
    </div>
    <h2 class="title text-center">Something About This Style Of Jeans</h2>
    <div class="text-center mb-5">by <strong>admin</strong> on <strong>Oct 02</strong></div>
    <div class="img-box text-center">
      <img src="assets/images/blog/blog-detail.jpg" alt="blog photo 1" class="blog-hero-img">
    </div>
    <div class="blog-detail">
      <blockquote>
        <img src="assets/images/blog/quote.svg" alt="quote image" class="quote">
        <div class="text fw-5">
          Typography is the work of typesetters, compositors, typographers, graphic designers,
          art directors, manga artists, comic book artists, graffiti artists, and now—anyone
          who arranges words, letters, numbers, and symbols for publication, display, or
          distribution—from clerical workers and newsletter writers to anyone self-publishing
          materials.
        </div>
      </blockquote>
    </div>
    <div class="blog-img-box row">
      <div class="col-6 pe-md-4">
        <img src="assets/images/blog/blog-detail-1.jpg" alt="blog image-1">
      </div>
      <div class="col-6 ps-md-4">
        <img src="assets/images/blog/blog-detail-2.jpg" alt="blog image-2">
      </div>
    </div>
    <div class="blog-description mb-5">
      Pellentesque dapibus hendrerit tortor. Nam ipsum risus, rutrum vitae, vestibulum eu,
      molestie vel, lacus. Sed libero. Phasellus tempus. Etiam feugiat lorem non metus
      Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Pellentesque
      commodo eros a enim. Etiam sit amet orci eget eros faucibus tincidunt. Vestibulum purus
      quam, scelerisque ut, mollis sed, nonummy id, metus.In hac habitasse platea dictumst.
      Etiam ultricies nisi vel augue. Pellentesque egestas, neque sit amet convallis pulvinar,
      justo nulla eleifend augue, ac auctor orci leo non est. Quisque rutrum. Duis leo. <br>
      <br> <br>
      Pellentesque dapibus hendrerit tortor. Nam ipsum risus, rutrum vitae, vestibulum eu,
      molestie vel, lacus. Sed libero. Phasellus tempus. Etiam feugiat lorem non metus. Morbi
      mattis ullamcorper velit. Donec sodales sagittis magna. Curabitur a felis in nunc
      fringilla tristique. Quisque malesuada placerat nisl. Phasellus gravida semper nisi.
      <br> <br> <br>
      Curabitur blandit mollis lacus. Phasellus nec sem in justo pellentesque facilisis.
      Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Fusce ac felis sit
      amet ligula pharetra condimentum. Integer tincidunt. <br> <br> <br>
      Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Pellentesque
      commodo eros a enim. Etiam sit amet orci eget eros faucibus tincidunt. Vestibulum purus
      quam, scelerisque ut, mollis sed, nonummy id, metus.In hac habitasse platea dictumst.
      Etiam ultricies nisi vel augue. Pellentesque egestas, neque sit amet convallis pulvinar,
      justo nulla eleifend augue, ac auctor orci leo non est. Quisque rutrum. Duis leo.
    </div>
    <div class="link-box d-flex justify-content-between align-items-center pb-5 line">
      <a class="btn">Accessories</a>
      <div class="share-icons d-flex justify-content-center align-items-center">
        <p class="m-0"><strong>Share:</strong></p>
        <ul class="d-flex justify-content-center align-items-center list-unstyled grid-gap-sm">
          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="1.4rem" class="fa-x-twitter mb-1">
                <path
                  d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
              </svg>
            </a>
          </li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="article-navigator mb-80 py-5 line d-flex justify-content-between">
      <div class="prev d-flex align-items-center justify-content-start grid-gap-md">
        <a href="#" class="circular-border">
          <i class="fa-solid fa-chevron-left"></i>
        </a>
        <div class="article-nav-text">
          <a href="#" class="slide-link">PREVIOUS</a>
          <h6 class="small-heading">
            <a href="#">Fashionista editors reveal their designer</a>
          </h6>
        </div>
      </div>
      <div class="left-line"></div>
      <div class="next d-flex align-items-center justify-content-end grid-gap-md">
        <div class="article-nav-text text-end">
          <a href="#" class="slide-link">NEXT</a>
          <h6 class="small-heading">
            <a href="#">The next generation of leather alternatives</a>
          </h6>
        </div>
        <a href="#" class="circular-border">
          <i class="fa-solid fa-chevron-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<?php include "footer.php" ?>