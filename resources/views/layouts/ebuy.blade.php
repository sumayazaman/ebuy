<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>E-BUY</title>
    <link rel="stylesheet" href="{{ asset('ebuy/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ebuy/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ebuy/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('ebuy/css/meanmenu.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ebuy/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ebuy/css/media.css') }}">
</head>
<body id="index2">
   <!-- Header Part Start -->
   <header id="header">
       <div class="container">
           <div class="row">
               <div class="header-content">
                   <div class="col-md-4">
                       <div class="header-left">
                            <div class="sel-box">
                                 <select class="bdr">
                                    <option>ENG</option>
                                    <option>BAN</option>
                                    <option>ESP</option>
                                </select>
                            </div>
                            <div class="sel-box">
                                 <select>
                                    <option>USD</option>
                                    <option>EUR</option>
                                    <option>GBP</option>
                                </select>
                            </div>
                            <div class="sel-box">
                                 <a href="tel:+12345678900">Toll Free: +123 4567 8900</a>
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-md-offset-4">
                       <div class="header-right text-right">
                           <ul>
                               <li>
                                   <a href="shopping-cart.html"><i class="fa fa-heart"></i> Wishlist</a>
                               </li>
                               <li>
                                   <a href="my-account.html"><i class="fa fa-user"></i> My Account</a>
                               </li>
                               <li>
                                   <a href="my-account.html">Login / Register</a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
<!-- Header Part End -->
   
<!-- mobile menu end -->     
<nav class="mobile-menu hidden">
  <a href="index2.html">
      <img src="{{ asset('ebuy')}}/images/logo.png" alt="logo">
  </a>
   <ul>
        <li class="">
            <a href="#">
              Home
            </a>
            <ul>
              <a class="" href="index.html">Home 1</a>
              <a class="" href="index2.html">Home 2</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Shop
            </a>
            <ul>
              <a class="" href="product-grid-view.html">Product Grid View</a>
              <a class="" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
              <a class="" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
              <a class="" href="product-details.html">Product Details</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <ul>
              <a class="" href="about.html">About</a>
              <a class="" href="shopping-cart.html">Cart</a>
              <a class="" href="checkout.html">Checkout</a>
              <a class="" href="my-account.html">Login</a>
              <a class="" href="my-account.html">Register</a>
              <a class="" href="shopping-cart.html">Whislist</a>
              <a class="" href="404.html">404</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <ul>
              <a class="" href="blog-grid-view.html">Blog Grid View</a>
              <a class="" href="blog-grid-with-sidebar.html">Blog Grid View With Sidebar</a>
              <a class="" href="blog-grid-list-view.html">Blog List View With Sidebar</a>
              <a class="" href="blog-details.html">Blog Details</a>
            </ul>
          </li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>
<!-- mobile menu end -->   
 
<!-- Navbar Part Start -->   
    <nav class="navbar navbar-default hidden-xs">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index2.html">
              <img src="{{ asset('ebuy')}}/images/logo.png" alt="logo" class="img-responsive">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
<!--            <li class="active"><a href="index.html">Home</a></li>-->
<!--            <li><a href="product-grid-view.html">Men</a></li>-->
<!--            <li><a href="product-grid-view-with-sidebar.html">Women</a></li>-->
<!--            <li><a href="product-list-view-with-sidebar.html">Accesorries</a></li>-->
<!--            <li><a href="blog-grid-view.html">Blog</a></li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Home
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.html">Home 1</a>
                  <a class="dropdown-item" href="index2.html">Home 2</a>
                </div>
              </li>
              <li><a class="dropdown-item" href="about.html">About</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="product-grid-view.html">Product Grid View</a>
                  <a class="dropdown-item" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
                  <a class="dropdown-item" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
                  <a class="dropdown-item" href="product-details.html">Product Details</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="shopping-cart.html">Cart</a>
                  <a class="dropdown-item" href="checkout.html">Checkout</a>
                  <a class="dropdown-item" href="my-account.html">Login</a>
                  <a class="dropdown-item" href="my-account.html">Register</a>
                  <a class="dropdown-item" href="shopping-cart.html">Whislist</a>
                  <a class="dropdown-item" href="404.html">404</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="blog-grid-view.html">Blog Grid View</a>
                  <a class="dropdown-item" href="blog-grid-with-sidebar.html">Blog Grid View With Sidebar</a>
                  <a class="dropdown-item" href="blog-grid-list-view.html">Blog List View With Sidebar</a>
                  <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                </div>
              </li>
            <li><a href="contact.html">Contact</a></li>
          </ul> 
          <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="search-form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="search" id="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </li>
            <li class="tahsan"><span><a href="#"><i class="fa fa-shopping-bag"></i> 2 Items</a>
              </span>

                  <div class="items text-left">
                      <div class="items-total">
                          <p>You have <span>02 items</span> in your shopping bag</p>
                      </div>
                      <div class="item-choose-main">
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="{{ asset('ebuy')}}/images/items1.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="{{ asset('ebuy')}}/images/items2.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="total-price">
                          <h3>Total <span>$ 500.00</span></h3>
                      </div>
                      <div class="items-check text-center">
                          <a href="#">view cart</a>
                          <a class="check-out" href="#">Checkout</a>
                      </div>
                  </div>
              </li>
           </ul>
        </div>
    </div>
</nav>
<!-- Navbar Part End -->
    
<!-- mobile logo start -->      
<nav class="navbar-default visible-xs">
  <div class="container">
      <div class="navbar-header">
          <a class="navbar-brand" href="index2.html">
              <img src="{{ asset('ebuy')}}/images/logo.png" alt="logo" class="img-responsive">
          </a>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="search-form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </li>
            <li class="tahsan"><span><a href="#"><i class="fa fa-shopping-bag"></i> 2 Items</a>
              </span>

                  <div class="items text-left">
                      <div class="items-total">
                          <p>You have <span>02 items</span> in your shopping bag</p>
                      </div>
                      <div class="item-choose-main">
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="{{ asset('ebuy')}}/images/items1.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="{{ asset('ebuy')}}/images/items2.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="total-price">
                          <h3>Total <span>$ 500.00</span></h3>
                      </div>
                      <div class="items-check text-center">
                          <a href="#">view cart</a>
                          <a class="check-out" href="#">Checkout</a>
                      </div>
                  </div>
              </li>
           </ul>
        </div>
    </div>
</nav>
<!-- mobile logo end -->
   
@yield('content')

<!-- Brand Start -->
<section id="brand">
    <i class="fa fa-chevron-left prv-arrow4 ar8"></i>
    <i class="fa fa-chevron-right nxt-arrow4 ar9"></i>
     <div class="container">
         <div class="row">
             <div class="brand-slider3">
                 <div class="col-md-2">
                     <a href="#">
                         <div class="brand-item">
                             <img src="{{ asset('ebuy')}}/images/brand2.png" alt="brand" class="img-responsive">
                         </div>
                     </a>
                 </div>
                 <div class="col-md-2">
                     <a href="#">
                         <div class="brand-item">
                             <img src="{{ asset('ebuy')}}/images/brand1.png" alt="brand" class="img-responsive">
                         </div>
                     </a>
                 </div>
                 <div class="col-md-2">
                     <a href="#">
                         <div class="brand-item">
                             <img src="{{ asset('ebuy')}}/images/brand3.png" alt="brand" class="img-responsive">
                         </div>
                     </a>
                 </div>
                 <div class="col-md-2">
                     <a href="#">
                         <div class="brand-item">
                             <img src="{{ asset('ebuy')}}/images/brand4.png" alt="brand" class="img-responsive">
                         </div>
                     </a>
                 </div>
                 <div class="col-md-2">
                     <a href="#">
                         <div class="brand-item">
                             <img src="{{ asset('ebuy')}}/images/brand5.png" alt="brand" class="img-responsive">
                         </div>
                     </a>
                 </div>
                 <div class="col-md-2">
                     <a href="#">
                         <div class="brand-item">
                             <img src="{{ asset('ebuy')}}/images/brand3.png" alt="brand" class="img-responsive">
                         </div>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Brand End -->
   
   <!-- Footer Part Start -->
   <section id="footer">
       <div class="footer-bg">
           <div class="container">
               <div class="row">
                   <div class="footer-main">
                       <div class="col-md-3 col-sm-6">
                           <div class="footer-logo">
                               <a href="#"><img src="{{ asset('ebuy')}}/images/footer-logo.png" alt="footer-logo" class="img-responsive"></a>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                               <p>magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                           </div>
                       </div>
                       <div class="col-md-3 col-sm-6">
                           <div class="contact">
                            <h2>Contact us</h2>
                               <p><i class="fa fa-map-marker"></i> <a href="#">1234, Parkstreet Avenue, NewYork</a> </p>
                               <p><i class="fa fa-phone"></i> <a href="tel:+12345678900">+123 456 78900</a>,<a href="tel:+00987654321"> +009 876 54321</a> </p>
                               <p><i class="fa fa-envelope"></i> <a href="mailto:info@e-feri.com">info@e-feri.com</a>,<a href="mailto:e-feri@info.com"> e-feri@info.com</a> </p>
                               <p><i class="fa fa-globe"></i> <a href="www.e-feri.com">www.e-feri.com</a>,<a href="www.infoferi.com">www.infoferi.com</a> </p>
                           </div>
                       </div>
                       <div class="col-md-2 col-sm-6">
                           <div class="account">
                              <h2>my account</h2>
                               <a href="my-account.html">my account</a>
                               <a href="shopping-cart.html">wishlist</a>
                               <a href="shopping-cart.html">shopping cart</a>
                               <a href="#">compare</a>
                               <a href="checkout.html">checkout</a>
                           </div>
                       </div>
                       <div class="col-md-4 col-sm-6">
                           <div class="newsletter">
                               <h2>Sign Up For Newsletter</h2>
                                   <form action="" method="">
                                       <div class="input-group">
                                            <input id="1" class="form-control" type="text" name="search" placeholder="Your Mail" required/>
                                            <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                            </span>
                                       </div>
                                   </form>
                               <div class="footer-social">
                                   <h3>follow us on</h3>
                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                   <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                   <a href="#"><i class="fa fa-behance"></i></a>
                                   <a href="#"><i class="fa fa-linkedin"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Footer Part End -->
   
   <!-- Footer Bottom Start -->
   <section id="footer-btm">
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-xs-12">
                  <div class="copywright">
                       <p>Copyright &copy; 2017. All right reserved by <a href="index.html">E-BUY</a></p>
                   </div>
               </div>
               <div class="col-md-6 col-xs-12">
                   <div class="payment text-right">
                       <img src="{{ asset('ebuy')}}/images/card1.png" alt="card" class="img-responsive">
                       <img src="{{ asset('ebuy')}}/images/card2.png" alt="card" class="img-responsive">
                       <img src="{{ asset('ebuy')}}/images/card3.png" alt="card" class="img-responsive">
                       <img src="{{ asset('ebuy')}}/images/card4.png" alt="card" class="img-responsive">
                       <img src="{{ asset('ebuy')}}/images/card5.png" alt="card" class="img-responsive">
                   </div>
               </div>
           </div>
       </div>
   </section>   
   <!-- Footer Bottom End -->   
   

    <script src="{{ asset('ebuy/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('ebuy/js/slick.js') }}"></script>
    <script src="{{ asset('ebuy/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ebuy/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('ebuy/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('ebuy/js/main.js') }}"></script>
</body>
</html>