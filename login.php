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

<!-- inject css end -->

</head>
<?php
        if(isset($_REQUEST['btnSignin']))
        {
          $txtmail = $_REQUEST['txtEmail'];
            $str="select * from tblUser where Email='".$txtmail."' and Password='".$_REQUEST['txtPassword']."'";
            // echo $str;
            $rs=mysqli_query($con,$str) or die(mysqli_error());
            if(mysqli_num_rows($rs)>0)
            {
                $res=mysqli_fetch_array($rs);
                $_SESSION["UserID"]=$res["UserID"];
                $_SESSION["FirstName"]=$res["FirstName"];
                $_SESSION["LastName"]=$res["LastName"];
                header("location:index.php");
              
            }
            else
            {
    ?>
               <!--  <div class="col-sm-6 col-12">
                        <button type="button" class="btn btn-danger btn-raised btn-block mb-5" id="type-error" >Error</button>
                    </div> -->
                <script type="text/javascript" id="error">alert('Invalid Email / Password');</script>
    <?php
            }
        }
    ?>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">
  
<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <img class="img-fluid" src="assets/images/loader.gif" alt="">
  </div>
</div>

<!-- preloader end -->


<!--header start-->

<?php
  include_once("Header.php");
?>

<!--header end-->



<!--body content start-->

<div class="page-content">

<!--login start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-12">
        <img class="img-fluid" src="assets/images/login.png" alt="">
      </div>
      <div class="col-lg-5 col-12">
        <div>
          <h3 class="text-center mb-3 text-uppercase">User Login</h3>
          <form method="post">
            <div class="messages"></div>
            <div class="form-group">
              <input id="form_name" type="text" name="txtEmail" class="form-control" placeholder="Email">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input id="form_password" type="password" name="txtPassword" class="form-control" placeholder="Password">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group mt-4 mb-5">
              <div class="remember-checkbox d-flex align-items-center justify-content-between">
                <div class="checkbox">
                  <input type="checkbox" id="check2" name="check2">
                  <label for="check2">Remember me</label>
                </div>
                 <a href="#">Forgot Password?</a>
              </div>
            </div> <input type="Submit" class="btn btn-primary btn-block" name="btnSignin" value="Login Now">
           
           
          </form>
          <div class="d-flex align-items-center text-center justify-content-center mt-4">
                  <span class="text-muted mr-1">Don't have an account?</span>
                   <a href="signup.php">Sign Up</a>
                </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--login end-->

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
              <a href="product-left-image.html">
                <img class="img-fluid" src="assets/images/product/01.jpg" alt="...">
              </a>
            </div>
            <div class="col-7">
              <!-- Title -->
              <h6><a class="link-title" href="product-left-image.html">Women Lather Jacket</a></h6>
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
              <a href="product-left-image.html">
                <img class="img-fluid" src="assets/images/product/13.jpg" alt="...">
              </a>
            </div>
            <div class="col-7">
              <!-- Title -->
              <h6><a class="link-title" href="product-left-image.html">Men's Brand Tshirts</a></h6>
              <div class="product-meta"><span class="mr-2 text-primary">$27.00</span><span class="text-muted">x 1</span>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5">
        <div class="d-flex justify-content-between align-items-center mb-8"> <span class="text-muted">Subtotal:</span>  <span class="text-dark">$52.00</span> 
        </div> <a href="product-cart.html" class="btn btn-primary btn-animated mr-2"><i class="las la-shopping-cart mr-1"></i>View Cart</a>
        <a href="product-checkout.html" class="btn btn-dark"><i class="las la-money-check mr-1"></i>Continue To Checkout</a>
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

<!-- Mirrored from themeht.com/ekocart/html/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 18:24:51 GMT -->
</html>
