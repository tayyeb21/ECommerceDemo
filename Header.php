<header class="site-header">
  <div class="header-top bg-dark py-1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 d-flex align-items-center justify-content-between text-white">
          <div class="d-none d-md-flex align-items-center"> <small class="mr-3"><i class="las la-store text-primary mr-1 align-middle"></i>Welcome to Our store Demo</small>  <small><i class="las la-truck text-primary mr-1 align-middle"></i> Free shipping worldwide</small> 
          </div>
          <div class="d-flex align-items-center">
            <div class="language-selection mr-2">
              <div class="dropdown">
                <button class="btn btn-sm text-white dropdown-toggle" data-toggle="dropdown">English</button>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">English</a>
                  
                </div>
              </div>
            </div>
            <div class="social-icons">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="text-muted" href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-muted" href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-muted" href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-muted" href="#"><i class="lab la-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-md-3 py-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 d-none d-md-flex align-items-center">
          <a class="navbar-brand logo d-none d-lg-block" href="index.php">
            <img class="img-fluid" src="assets/images/logo.png" alt="">
          </a>
          <div class="media ml-lg-11"> <i class="las la-mobile-alt ic-2x bg-white rounded p-2 shadow-sm mr-2 text-primary"></i>
            <div class="media-body"> <span class="mb-0 d-block">Call Us</span>
              <a class="text-muted" href="tel:+910000000000">+91-000-0000-0000</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-nav align-items-center d-flex justify-content-end">
            <form class="form-inline border rounded w-100" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
              <select class="custom-select border-0 rounded-0 bg-light form-control d-none d-lg-inline">
                <option selected>All Categories</option>
                <option value="1">Men</option>
                <option value="2">Women</option>
                <option value="3">Kids</option>
              </select>
              <input class="form-control border-0 border-left col" type="search" placeholder="Enter Your Keyword" aria-label="Search">
              <button class="btn btn-primary text-white col-auto" type="submit"><i class="las la-search"></i>
              </button>
            </form>
          </div>
        </div>
        <!--menu end-->
      </div>
    </div>
  </div>
  <div id="header-wrap" class="shadow-sm">
    <div class="container">
      <div class="row">
        <!--menu start-->
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light position-static">
            <a class="navbar-brand logo d-lg-none" href="index.php">
              <img class="img-fluid" src="assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item position-static"> <a class="nav-link" href="coming-soon.html" >Catalog</a>
                  
                </li>
                <li class="nav-item position-static"> <a class="nav-link" href="coming-soon.html">Shop</a>
                 
                
                
                <li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact</a>
                </li>
                
                
                
              <?php
                  if(isset($_SESSION["UserID"]))
                {
                ?>
                  <li class="nav-item"> <a class="nav-link" href="Logout.php">Log out</a>
                </li>
                <?php
                }
                
               else
                {
                ?>
                   <li class="nav-item"> <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="login.php">Login</a>
                </li>
                <?php
                }
                ?>
                 
               
                

              </ul>
            </div>
             <?php
                  if(isset($_SESSION["UserID"]))
                {
                ?>
            <!-- &nbsp;hi,&nbsp; --><?php echo $_SESSION['FirstName']." ".$_SESSION['LastName'];?>
              <?php
                }?>
            <div class="right-nav align-items-center d-flex justify-content-end"> <a class="mr-1 mr-sm-3" href="#"><i class="las la-user-alt"></i></a>
              <a class="mr-3 d-none d-sm-inline" href="#"><i class="lar la-heart"></i></a>
              <div>
                
                <a class="d-flex align-items-center" href="#" id="header-cart-btn" data-toggle="modal" data-target="#cartModal"> <span class="bg-white px-2 py-1 shadow-sm rounded" data-cart-items="2">
                  <i class="las la-shopping-cart"></i>
                </span>
                  <div class="ml-4 d-none d-md-block"> <small class="d-block text-muted">My Cart</small>
                    <span class="text-dark">2 Items - $52</span>
                  </div>
                </a>
              </div>
            </div>
          </nav>
        </div>
        <!--menu end-->
      </div>
    </div>
  </div>
</header>