<?php
    include_once("Config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

<!-- meta tags -->

<?php
  include_once("cssfile.php");
?>
    <title>Login</title>
<!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">
  
<!-- preloader start -->

<!-- <div id="ht-preloader">
  <div class="loader clear-loader">
    <img class="img-fluid" src="assets/images/loader.gif" alt="">
  </div>
</div> -->

<!-- preloader end -->


<!--header start-->

<?php
  include_once("Header.php");
?>

<!--header end-->


<!--hero section start-->

<section class="banner pos-r p-0">
  <div class="banner-slider owl-carousel no-pb owl-2" data-dots="false" data-nav="true">
    <div class="item bg-pos-rt" data-bg-img="assets/images/bg/01.jpg">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-lg-7 col-md-12 custom-py-1 position-relative z-index-1">
              <h6 class="font-w-6 text-primary animated3">Welcome Ekocart</h6>
              <h1 class="mb-4 animated3">A New Online<br> Shop experience</h1>
              <div class="animated3">
                <a class="btn btn-primary btn-animated" href="#">Shop Now</a>
              </div>
              <div class="hero-circle animated4"></div>
            </div>
          </div>
        </div>
    </div>
    <div class="item bg-pos-rt" data-bg-img="assets/images/bg/02.jpg">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-lg-7 col-md-12 custom-py-1 position-relative z-index-1">
              <h6 class="font-w-6 text-primary animated3">2020 Latest Style</h6>
              <h1 class="mb-4 animated3">Trending Men's Collection</h1>
              <div class="animated3">
                <a class="btn btn-primary btn-animated" href="#">View Collection</a>
              </div>
              <div class="hero-circle animated4"></div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">

<!--feature start-->

<section class="pb-0">
  <div class="container">
    <!-- / .row -->
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="d-flex">
          <div class="mr-2">
            <i class="las la-truck ic-2x text-primary"></i>
          </div>
          <div>
            <h5 class="mb-1">Free Shipping</h5>
            <p class="mb-0">Writing result-oriented</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-3 mt-sm-0">
        <div class="d-flex">
          <div class="mr-2">
            <i class="las la-hand-holding-usd ic-2x text-primary"></i>
          </div>
          <div>
            <h5 class="mb-1">Money Return</h5>
            <p class="mb-0">Writing result-oriented</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-3 mt-lg-0">
        <div class="d-flex">
          <div class="mr-2">
            <i class="las la-lock ic-2x text-primary"></i>
          </div>
          <div>
            <h5 class="mb-1">Secure Payment</h5>
            <p class="mb-0">Writing result-oriented</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-3 mt-lg-0">
        <div class="d-flex">
          <div class="mr-2">
           <i class="las la-headset ic-2x text-primary"></i>
          </div>
          <div>
            <h5 class="mb-1">24/7 Support</h5>
            <p class="mb-0">Writing result-oriented</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--feature end-->


<!--product start-->

<section>
  <div class="container-fluid px-lg-8">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10">
        <div class="mb-8">
          <h6 class="text-primary mb-1">
                  — New Collection
              </h6>
          <h2 class="mb-0">Trending Products</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card product-card">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
          </button>
          <a class="card-img-hover d-block" href="#">
            <img class="card-img-top card-img-back" src="assets/images/product/01.jpg" alt="...">
            <img class="card-img-top card-img-front" src="assets/images/product/02.jpg" alt="...">
          </a>
          <div class="card-info">
            <div class="card-body">
              <div class="product-title"><a class="link-title" href="#">Women Lather Jacket</a>
              </div>
              <div class="mt-1"> <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <div class="product-link d-flex align-items-center justify-content-center">
                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                </button>
                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 mt-8 mt-md-0">
        <div class="card product-card">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
          </button>
          <a class="card-img-hover d-block" href="#">
            <img class="card-img-top card-img-back" src="assets/images/product/03.jpg" alt="...">
            <img class="card-img-top card-img-front" src="assets/images/product/04.jpg" alt="...">
          </a>
          <div class="card-info">
            <div class="card-body">
              <div class="product-title"><a class="link-title" href="#">Women Sweater</a>
              </div>
              <div class="mt-1"> <span class="product-price"><del class="text-muted">$24.00</del> $18.00</span>
                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <div class="product-link d-flex align-items-center justify-content-center">
                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                </button>
                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 mt-8 mt-lg-0">
        <div class="card product-card">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
          </button>
          <a class="card-img-hover d-block" href="#">
            <img class="card-img-top card-img-back" src="assets/images/product/05.jpg" alt="...">
            <img class="card-img-top card-img-front" src="assets/images/product/06.jpg" alt="...">
          </a>
          <div class="card-info">
            <div class="card-body">
              <div class="product-title"><a class="link-title" href="#">Gold Framed Sunglasses</a>
              </div>
              <div class="mt-1"> <span class="product-price"><del class="text-muted">$12.00</del> $9.00</span>
                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <div class="product-link d-flex align-items-center justify-content-center">
                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                </button>
                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 mt-8 mt-lg-0">
        <div class="card product-card">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
          </button>
          <a class="card-img-hover d-block" href="#">
            <img class="card-img-top card-img-back" src="assets/images/product/07.jpg" alt="...">
            <img class="card-img-top card-img-front" src="assets/images/product/08.jpg" alt="...">
          </a>
          <div class="card-info">
            <div class="card-body">
              <div class="product-title"><a class="link-title" href="#">Unpaired Running Shoe</a>
              </div>
              <div class="mt-1"> <span class="product-price"><del class="text-muted">$32.00</del> $26.00</span>
                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <div class="product-link d-flex align-items-center justify-content-center">
                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                </button>
                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 mt-8">
        <div class="card product-card">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
          </button>
          <a class="card-img-hover d-block" href="#">
            <img class="card-img-top card-img-back" src="assets/images/product/09.jpg" alt="...">
            <img class="card-img-top card-img-front" src="assets/images/product/10.jpg" alt="...">
          </a>
          <div class="card-info">
            <div class="card-body">
              <div class="product-title"><a class="link-title" href="#">Luxury Fashion Bag</a>
              </div>
              <div class="mt-1"> <span class="product-price"><del class="text-muted">$19.00</del> $13.00</span>
                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <div class="product-link d-flex align-items-center justify-content-center">
                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                </button>
                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 mt-8">
        <div class="card product-card">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
          </button>
          <a class="card-img-hover d-block" href="#">
            <img class="card-img-top card-img-back" src="assets/images/product/11.jpg" alt="...">
            <img class="card-img-top card-img-front" src="assets/images/product/12.jpg" alt="...">
          </a>
          <div class="card-info">
            <div class="card-body">
              <div class="product-title"><a class="link-title" href="#">Bright Hipster Cloth</a>
              </div>
              <div class="mt-1"> <span class="product-price"><del class="text-muted">$42.00</del> $37.00</span>
                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <div class="product-link d-flex align-items-center justify-content-center">
                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                </button>
                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 mt-8">
        <div class="card product-card">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
          </button>
          <a class="card-img-hover d-block" href="#">
            <img class="card-img-top card-img-back" src="assets/images/product/13.jpg" alt="...">
            <img class="card-img-top card-img-front" src="assets/images/product/14.jpg" alt="...">
          </a>
          <div class="card-info">
            <div class="card-body">
              <div class="product-title"><a class="link-title" href="#">Men's Brand Tshirts</a>
              </div>
              <div class="mt-1"> <span class="product-price"><del class="text-muted">$18.00</del> $15.00</span>
                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <div class="product-link d-flex align-items-center justify-content-center">
                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                </button>
                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 mt-8">
        <div class="card product-card">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
          </button>
          <a class="card-img-hover d-block" href="#">
            <img class="card-img-top card-img-back" src="assets/images/product/15.jpg" alt="...">
            <img class="card-img-top card-img-front" src="assets/images/product/16.jpg" alt="...">
          </a>
          <div class="card-info">
            <div class="card-body">
              <div class="product-title"><a class="link-title" href="#">Crewneck Sweatshirt</a>
              </div>
              <div class="mt-1"> <span class="product-price"><del class="text-muted">$26.00</del> $22.00</span>
                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <div class="product-link d-flex align-items-center justify-content-center">
                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                </button>
                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--product end-->


<!--countdown start-->

<section class="p-0">
  <div class="container-fluid pl-0">
    <div class="row">
      <div class="col-md-6 col-sm-5 parallaxie custom-py-3 rounded" data-bg-img="assets/images/bg/03.jpg"></div>
      <div class="col-md-6 col-sm-7 py-sm-0 py-5">
        <div class="pl-lg-6 pr-lg-8 p-2 pt-sm-10"> <span class="bg-primary py-1 px-2 d-inline-block rounded mb-3 text-white text-uppercase">Limited Offer</span>
          <h2 class="mb-5 font-w-5 line-h-1">Weekly Sale on<br> <span class="text-primary font-w-8">60% OFF</span> All Products</h2>
          <ul class="countdown list-inline d-flex" data-countdown="2020/08/23"></ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!--countdown end-->


<!--product start-->

<section class="tab p-0 mt-n15">
  <div class="container-fluid pr-sm-0">
    <div class="row">
      <div class="col-lg-10 col-md-11 ml-auto">
        <div class="shadow p-sm-8 p-3 bg-white">
          <div class="row align-items-end mb-6">
            <div class="col-lg-6">
              <div>
                <h6 class="text-primary mb-1">
                  — New Collection
              </h6>
                <h2 class="mb-0">Our Products</h2>
              </div>
            </div>
            <div class="col-lg-6 text-lg-right mt-4 mt-lg-0">
              <!-- Nav tabs -->
              <nav>
                <div class="nav nav-tabs d-inline-block justify-content-md-end" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-tab1" data-toggle="tab" href="#tab1-1" role="tab" aria-selected="true">Top Rated</a>
                  <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2" role="tab" aria-selected="false">New Product</a>
                  <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab1-3" role="tab" aria-selected="false">Best Seller</a>
                </div>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <!-- Tab panes -->
              <div class="tab-content p-0" id="nav-tabContent">
                <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                  <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="3" data-lg-items="3" data-md-items="2" data-sm-items="1">
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/02.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/01.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Women Lather Jacket</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/12.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/11.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Bright Hipster Cloth</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$42.00</del> $37.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/14.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/13.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Men's Brand Tshirts</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$18.00</del> $15.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/10.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/09.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Luxury Fashion Bag</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$19.00</del> $13.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                  <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="3" data-lg-items="3" data-md-items="2" data-sm-items="1">
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/02.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/01.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Women Lather Jacket</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/12.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/11.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Bright Hipster Cloth</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$42.00</del> $37.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/14.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/13.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Men's Brand Tshirts</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$18.00</del> $15.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/10.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/09.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Luxury Fashion Bag</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$19.00</del> $13.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab1-3">
                  <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="3" data-lg-items="3" data-md-items="2" data-sm-items="1">
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/02.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/01.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Women Lather Jacket</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/12.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/11.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Bright Hipster Cloth</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$42.00</del> $37.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/14.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/13.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Men's Brand Tshirts</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$18.00</del> $15.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
                        </button>
                        <a class="card-img-hover d-block" href="#">
                          <img class="card-img-top card-img-back" src="assets/images/product/10.jpg" alt="...">
                          <img class="card-img-top card-img-front" src="assets/images/product/09.jpg" alt="...">
                        </a>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title"><a class="link-title" href="#">Luxury Fashion Bag</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$19.00</del> $13.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="Compare" type="button"><i class="las la-random"></i> 
                              </button>
                              <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                              </button>
                              <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--product end-->


<!--product-add start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-8">
        <div class="position-relative rounded overflow-hidden text-right shadow-sm">
          <!-- Background -->
          <img class="img-fluid hover-zoom" src="assets/images/product-ad/01.jpg" alt="">
          <!-- Body -->
          <div class="position-absolute top-50 pl-5 text-left">
            <h6 class="text-dark">New Women's Collection</h6>
            <!-- Heading -->
            <h3><span class="font-w-7 text-primary d-block">50% OFF</span> Popular Items!</h3>
            <!-- Link --> <a class="btn btn-sm btn-primary btn-animated" href="#">Shop Now
                </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mt-5 mt-md-0">
        <div class="position-relative rounded overflow-hidden">
          <!-- Background -->
          <img class="img-fluid w-100 hover-zoom" src="assets/images/product-ad/02.jpg" alt="">
          <!-- Body -->
          <div class="position-absolute top-50 pl-5">
            <h4 class="mb-0">New Men's<br> Collection</h4>
          </div>
        </div>
        <div class="position-relative rounded overflow-hidden mt-5 shadow-sm">
          <!-- Background -->
          <img class="img-fluid w-100 hover-zoom" src="assets/images/product-ad/03.jpg" alt="">
          <!-- Body -->
          <div class="position-absolute top-50 pl-5">
            <h4 class="mb-0">Leather Bags<br> And Purses</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--product-add end-->


<!--multi sec start-->

<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-8">
      <div class="col-lg-6 col-md-10">
        <div class="mb-4">
          <h6 class="text-primary mb-1">
                  — Newsletter
              </h6>
          <h2 class="mb-0">Subscribe Our Newsletter</h2>
        </div>
        <div class="subscribe-form">
          <form id="mc-form" class="row align-items-center no-gutters mb-3">
            <div class="col">
              <input value="" name="EMAIL" class="email form-control input-2 bg-white" id="mc-email" placeholder="Email Address" required="" type="email">
            </div>
            <div class="col-auto">
              <input class="btn btn-primary overflow-auto" name="subscribe" value="Subscribe" type="submit">
            </div>
          </form> <small>Get started for 1 Month free trial No Purchace required.</small>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-0 mt-n11">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex flex-wrap align-items-center text-center bg-white shadow">
          <div class="clients-logo">
            <img class="img-fluid" src="assets/images/client/01.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-fluid" src="assets/images/client/02.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-fluid" src="assets/images/client/03.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-fluid" src="assets/images/client/04.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-fluid" src="assets/images/client/05.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-fluid" src="assets/images/client/06.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-fluid" src="assets/images/client/07.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-fluid" src="assets/images/client/08.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--multi sec end-->


<!--blog start-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-12 col-md-10 col-lg-8">
        <div>
          <h6 class="text-primary mb-1">
                  — Fashion Blog
              </h6>
          <h2 class="mb-0">Latest News Feed</h2>
        </div>
      </div>
    </div>
    <!-- / .row -->
    <div class="row">
      <div class="col-12 col-lg-4">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-relative rounded overflow-hidden">
            <div class="position-absolute z-index-1 bottom-0 bg-white text-primary shadow-primary text-center py-1 px-2 rounded ml-3 mb-3">20 Apr</div>
            <img class="card-img-top hover-zoom" src="assets/images/blog/01.jpg" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Cloth,</a>
              <a class="d-inline-block link-title btn-link text-small" href="#">Fashion</a>
            </div>
            <h2 class="h5 font-w-6 mt-2 mb-0">
                <a class="link-title" href="#">Spring summer fashion trends new high collection</a>
              </h2>
          </div>
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 mt-5 mt-lg-0">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-relative rounded overflow-hidden">
            <div class="position-absolute z-index-1 bottom-0 bg-white text-primary shadow-primary text-center py-1 px-2 rounded ml-3 mb-3">15 Mar</div>
            <img class="card-img-top hover-zoom" src="assets/images/blog/02.jpg" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Cloth,</a>
              <a class="d-inline-block link-title btn-link text-small" href="#">Fashion</a>
            </div>
            <h2 class="h5 font-w-6 mt-3">
                <a class="link-title" href="#">When it’s Winter outdoors gifts but you feel like ekocart</a>
              </h2>
          </div>
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 mt-5 mt-lg-0">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-relative rounded overflow-hidden">
            <div class="position-absolute z-index-1 bottom-0 bg-white text-primary shadow-primary text-center py-1 px-2 rounded ml-3 mb-3">13 Apr</div>
            <img class="card-img-top hover-zoom" src="assets/images/blog/03.jpg" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Cloth,</a>
              <a class="d-inline-block link-title btn-link text-small" href="#">Fashion</a>
            </div>
            <h2 class="h5 font-w-6 mt-3">
                <a class="link-title" href="#">Whatever the will make it special For You Every</a>
              </h2>
          </div>
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
    </div>
    <div class="row justify-content-center text-center mt-5">
      <div class="col"> <a class="btn btn-dark" href="#">View All Blog</a>
      </div>
    </div>
  </div>
</section>

<!--blog end-->


<!--instagram start-->

<section class="p-0">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-4 order-lg-1 align-items-center d-flex justify-content-center bg-dark p-5">
        <div class="d-flex align-items-center">
          <img class="img-fluid" src="assets/images/insta/instagram-logo.png" alt="">
          <div class="ml-3">
            <h6 class="text-white mb-0">Follow Us on</h6>
            <h3 class="text-white mb-0">Instagram</h3>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <a class="insta-item" href="#">
          <img class="img-fluid" src="assets/images/insta/01.jpg" alt="">
          <div class="insta-icon"><i class="lab la-instagram"></i>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <a class="insta-item" href="#">
          <img class="img-fluid" src="assets/images/insta/02.jpg" alt="">
          <div class="insta-icon"><i class="lab la-instagram"></i>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2 order-lg-1">
        <a class="insta-item" href="#">
          <img class="img-fluid" src="assets/images/insta/03.jpg" alt="">
          <div class="insta-icon"><i class="lab la-instagram"></i>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2 order-lg-1">
        <a class="insta-item" href="#">
          <img class="img-fluid" src="assets/images/insta/04.jpg" alt="">
          <div class="insta-icon"><i class="lab la-instagram"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!--instagram end-->

</div>

<!--body content end--> 


<!--footer start-->

<?php
  include_once("Footer.php");
?>

<!--footer end-->

</div>

<!-- page wrapper end -->

<!-- Cart Modal -->
<div class="modal fade cart-modal" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Your Cart (2)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <div class="row align-items-center">
            <div class="col-5 d-flex align-items-center">
              <div class="mr-4">
                <button type="submit" class="btn btn-primary btn-sm"><i class="las la-times"></i>
                </button>
              </div>
              <!-- Image -->
              <a href="#">
                <img class="img-fluid" src="assets/images/product/01.jpg" alt="...">
              </a>
            </div>
            <div class="col-7">
              <!-- Title -->
              <h6><a class="link-title" href="#">Women Lather Jacket</a></h6>
              <div class="product-meta"><span class="mr-2 text-primary">$25.00</span><span class="text-muted">x 1</span>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5">
        <div>
          <div class="row align-items-center">
            <div class="col-5 d-flex align-items-center">
              <div class="mr-4">
                <button type="submit" class="btn btn-primary btn-sm"><i class="las la-times"></i>
                </button>
              </div>
              <!-- Image -->
              <a href="#">
                <img class="img-fluid" src="assets/images/product/13.jpg" alt="...">
              </a>
            </div>
            <div class="col-7">
              <!-- Title -->
              <h6><a class="link-title" href="#">Men's Brand Tshirts</a></h6>
              <div class="product-meta"><span class="mr-2 text-primary">$27.00</span><span class="text-muted">x 1</span>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5">
        <div class="d-flex justify-content-between align-items-center mb-8"> <span class="text-muted">Subtotal:</span>  <span class="text-dark">$52.00</span> 
        </div> <a href="#" class="btn btn-primary btn-animated mr-2"><i class="las la-shopping-cart mr-1"></i>View Cart</a>
        <a href="#" class="btn btn-dark"><i class="las la-money-check mr-1"></i>Continue To Checkout</a>
      </div>
    </div>
  </div>
</div>

<!-- Quick View Modal -->
<div class="modal fade view-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row align-items-center">
          <div class="col-lg-5 col-12">
            <img class="img-fluid rounded" src="assets/images/product/large/01.jpg" alt="" />
          </div>
          <div class="col-lg-7 col-12 mt-5 mt-lg-0">
            <div class="product-details">
              <h3 class="mb-0">Women Sweater</h3>
              <div class="star-rating mb-4"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
              </div> <span class="product-price h4">$25.00 <del class="text-muted h6">$35.00</del></span>
              <ul class="list-unstyled my-4">
                <li class="mb-2">Availibility: <span class="text-muted"> In Stock</span> 
                </li>
                <li>Categories :<span class="text-muted"> Women's</span>
                </li>
              </ul>
              <p class="mb-4">Nulla eget sem vitae eros pharetra viverra Nam vitae luctus ligula suscipit risus nec eleifend Pellentesque eu quam sem, ac malesuada</p>
              <div class="d-sm-flex align-items-center mb-5">
                <div class="d-flex align-items-center mr-sm-4">
                  <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
                  </button>
                  <input class="form-product" type="number" name="form-product" value="1">
                  <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
                  </button>
                </div>
                <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect01">
                  <option selected>Size</option>
                  <option value="1">XS</option>
                  <option value="2">S</option>
                  <option value="3">M</option>
                  <option value="3">L</option>
                  <option value="3">XL</option>
                  <option value="3">XXL</option>
                </select>
                <div class="d-flex text-center ml-sm-4 mt-3 mt-sm-0">
                  <div class="form-check pl-0 mr-3">
                    <input type="radio" class="form-check-input" id="color-filter01" name="Radios">
                    <label class="form-check-label" for="color-filter01" data-bg-color="#3cb371"></label>
                  </div>
                  <div class="form-check pl-0 mr-3">
                    <input type="radio" class="form-check-input" id="color-filter02" name="Radios" checked>
                    <label class="form-check-label" for="color-filter02" data-bg-color="#4876ff"></label>
                  </div>
                  <div class="form-check pl-0 mr-3">
                    <input type="radio" class="form-check-input" id="color-filter03" name="Radios">
                    <label class="form-check-label" for="color-filter03" data-bg-color="#0a1b2b"></label>
                  </div>
                  <div class="form-check pl-0">
                    <input type="radio" class="form-check-input" id="color-filter04" name="Radios">
                    <label class="form-check-label" for="color-filter04" data-bg-color="#f94f15"></label>
                  </div>
                </div>
              </div>
              <div class="d-sm-flex align-items-center mt-5">
                <button class="btn btn-primary btn-animated mr-sm-4 mb-3 mb-sm-0"><i class="las la-shopping-cart mr-1"></i>Add To Cart</button>
                <a class="btn btn-animated btn-dark" href="#"> <i class="lar la-heart mr-1"></i>Add To Wishlist</a>
              </div>
              <div class="d-sm-flex align-items-center border-top pt-4 mt-5">
                <h6 class="mb-sm-0 mr-sm-4">Share It:</h6>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-facebook"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-dribbble"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-instagram"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-twitter"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



 
<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->

<script src="assets/js/theme-plugin.js"></script>
<script src="assets/js/theme-script.js"></script>

<!-- inject js end -->

</body>

<!-- Mirrored from themeht.com/ekocart/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 18:21:14 GMT -->
</html>
