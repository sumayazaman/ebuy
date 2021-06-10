@extends('layouts.ebuy')

@section('content')
       <!-- Banner2 Part Start -->
   <section id="banner-category">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single category">
                     <h3 class="side-title text-center">Category</h3>
                     <ul class="list-unstyled">
                         @foreach ($categories as $category)
                            <li><a href="">{{ $category -> category_name }}<span class="pull-right">{{ $category -> products_count}}</span></a></li>                             
                         @endforeach
                     </ul>
                </div>
            </div>
            <div class="col-md-8 ">
               <div class="banner-2">
                   <i class="fa fa-chevron-left prv-arrow"></i>
                   <i class="fa fa-chevron-right nxt-arrow"></i>
                    <div class="banner2-main">
                        <div class="banner2-item" style="background:url(images/banner5.jpg) center no-repeat;">
                            <div class="banner2-text text-center">
                                <h3>Best Wooden</h3>
                                <h2>Chair & Waredrobe</h2>
                                <a href="#">View More</a> <a href="#" class="pur">Purchase</a>
                            </div>
                        </div>
                        <div class="banner2-item" style="background:url(images/banner6.jpg) center no-repeat;">
                            <div class="banner2-text text-center">
                                <h3>Best Wooden</h3>
                                <h2>Chair & Waredrobe</h2>
                                <a href="#">View More</a> <a href="#" class="pur">Purchase</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner2 Part End -->

<!-- Newest Part Start -->
<section id="newest">
    <div class="container">
        <div class="row">
            <div class="newest-main">
                @foreach ($categories as $category)
                    @if ($loop -> iteration < 4)
                        <div class="col-md-4 col-sm-4">
                            <div class="newest-item">
                                <img src="{{ asset('uploads/category/'. $category -> category_image)}}" alt="newest1" class="img-responsive">
                                <div class="overlay1 text-center">
                                    <h2></h2>
                                    <h3>{{ $category -> category_name }}</h3>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>                        
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Newest Part End -->

<!-- Featured Part Start -->
<section id="features2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="hot-deals text-center">
                    <div class="deals-head">
                        <h3>Hot Deals</h3>
                    </div>
                    <i class="fa fa-chevron-left prv-arrow ar3"></i>
                    <i class="fa fa-chevron-right nxt-arrow ar4"></i>
                    <div class="deals-slider">
                        <div class="deals-item">
                            <img src="{{ asset('ebuy')}}/images/hot-deals1.png" alt="hot-deals" class="img-responsive text-center">
                            <h2>Smart Watch</h2>
                            <div class="ratings">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="luanch">
                                 <div class="coundown_res">
                                     <div class="count-item text-center">
                                     <div class="coun">
                                         <div class="coun_time">
                                             <h2 id="day"></h2>
                                             <p>days</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="count-item text-center">
                                     <div class="coun">
                                         <div class="coun_time">
                                             <h2 id="hour"></h2>
                                             <p>hours</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="count-item text-center">
                                     <div class="coun">
                                         <div class="coun_time">
                                             <h2 id="month"></h2>
                                             <p>mins</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="count-item text-center">
                                     <div class="coun">
                                         <div class="coun_time">
                                             <h2 id="second"></h2>
                                             <p>sec</p>
                                          </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deals-item">
                            <img src="{{ asset('ebuy')}}/images/hot-deals2.png" alt="hot-deals" class="img-responsive text-center">
                            <h2>Smart Watch</h2>
                            <div class="ratings">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                             <div class="luanch">
                                 <div class="coundown_res">
                                     <div class="count-item text-center">
                                     <div class="coun">
                                         <div class="coun_time">
                                             <h2 id="day"></h2>
                                             <p>days</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="count-item text-center">
                                     <div class="coun">
                                         <div class="coun_time">
                                             <h2 id="hour"></h2>
                                             <p>hours</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="count-item text-center">
                                     <div class="coun">
                                         <div class="coun_time">
                                             <h2 id="month"></h2>
                                             <p>mins</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="count-item text-center">
                                     <div class="coun">
                                         <div class="coun_time">
                                             <h2 id="second"></h2>
                                             <p>sec</p>
                                          </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               <div class="latest-pro">
                   <div class="deals-head text-center">
                        <h3>Latest Product</h3>
                    </div>
                    <div class="col-md-12">
                        @foreach ($products as $product)
                            <a href="product-details.html">
                                <div class="latest-pro-item row">
                                    <div class="col-md-4 pro-img">
                                        <img src="{{ asset('uploads/product/'. $product -> product_photo) }}" class="img-responsive" alt="latest-pro">
                                    </div>
                                    <div class="col-md-8 pro-text pl0">
                                        <h3>{{ $product -> product_name}} <span>${{ $product -> product_price }}</span></h3>
                                        <p>Lorem ipsum dolor sit amet, etuing elit, amar sonar Bangla sed.</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        
                    </div>
                    <div class="clearfix"></div>
               </div>
            </div>
            <div class="col-md-8">
                <div id="featured">
                    <div class="">
                        <div class="">
                            <div class="featured-main">
                                <div class="heading text-center">
                                    <h2>featured Products</h2>
                                </div>
                                <div class="featured-filter">
                                    <div class="text-center">
                                         <button class="btn btn-default active filter-button" data-filter="all">All</button>
                                         <button class="btn btn-default filter-button" data-filter="men">men</button>
                                         <button class="btn btn-default filter-button" data-filter="women">women</button>
                                         <button class="btn btn-default filter-button" data-filter="child">children</button>
                                         <button class="btn btn-default filter-button" data-filter="access">accesorries</button>
                                     </div>
                                       <i class="fa fa-chevron-left prv-arrow ar1"></i>
                                       <i class="fa fa-chevron-right nxt-arrow ar2"></i>  
                                     <div class="feat-main">
                                         <div class="feat-item">
                                             <div class="gallery_product col-md-6 col-sm-6 filter women child">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet1.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet2.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet3.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access men child">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet4.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="feat-item">
                                             <div class="gallery_product col-md-6 col-sm-6 filter women child men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet1.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet2.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet3.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet4.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="feat-item">
                                             <div class="gallery_product col-md-6 col-sm-6 filter women child  men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet1.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet2.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet3.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
                                                 </div>
                                             </div>
                                             <div class="gallery_product col-md-6 col-sm-6 filter women access men">
                                                 <div class="featured-product">
                                                     <a href="product-details.html"><img src="{{ asset('ebuy')}}/images/fet4.jpg" alt="featured-product-img" class="img-responsive"></a>
                                                     <div class="overlay2 text-center">
                                                         <a href="#"><i class="fa fa-heart"></i></a> 
                                                         <a href="#"><i class="fa fa-random"></i></a> 
                                                         <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                                     </div>
                                                 </div>
                                                 <div class="feat-details">
                                                     <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                                                     <div class="clearfix"></div>
                                                 </div>
                                                 <div class="ratings">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-half"></i>
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
<!-- Featured Part End -->

<!-- New Product part start -->
<section id="new-pro">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <div class="discount">
                  <img src="{{ asset('ebuy')}}/images/discount-pro.jpg" alt="discount-product" class="img-responsive">
                  <div class="dis-over">
                      <a href="#">Shop Now</a>
                  </div>
              </div>
              <div class="hot-deals hot-deals2 text-center">
                <div class="deals-head">
                    <h3>Testimonial</h3>
                </div>
                <i class="fa fa-chevron-left prv-arrow ar5"></i>
                <i class="fa fa-chevron-right nxt-arrow ar6"></i>
                <div class="deals-slider2">
                    <div class="deals-item">
                        <img src="{{ asset('ebuy')}}/images/test2-img1.png" alt="testimonial-2" class="img-responsive text-center">
                        <h2>Mahadi Tahsan</h2>
                        <div class="ratings">
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                         </div>
                         <div class="deals-text">
                             <h3>Chief User</h3>
                             <p>Lorem ipsum dolor sit amet, consectetur ading elit, sed do eiusmod tempor incididunt utabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                         </div>
                    </div>
                    <div class="deals-item">
                        <img src="{{ asset('ebuy')}}/images/test2-img1.png" alt="testimonial-2" class="img-responsive text-center">
                        <h2>Saidul Islam Uzzal</h2>
                        <div class="ratings">
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                         </div>
                         <div class="deals-text">
                             <h3>Chief User</h3>
                             <p>Lorem ipsum dolor sit amet, consectetur ading elit, sed do eiusmod tempor incididunt utabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                         </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="heading text-center">
                <h2>New Products</h2>
            </div>
              <div class="latest-main"> 
                    <div class="product-grid-item">
                        @foreach ($latest_categories as $category)
                            <div class="gallery_product col-md-6 col-sm-6">
                                <div class="featured-product">
                                    <a href="product-details.html"><img src="{{ asset('uploads/product/'. $category -> latestProduct -> product_photo)}}" alt="featured-product-img" class="img-responsive"></a>
                                    <div class="overlay2 text-center">
                                        <a href="#"><i class="fa fa-heart"></i></a> 
                                        <a href="#"><i class="fa fa-random"></i></a> 
                                        <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                    </div>
                                </div>
                                <div class="feat-details feat-details2">
                                    <p>{{ $category -> latestProduct -> product_name }}</p><span>${{ $category -> latestProduct -> product_price }}</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                        @endforeach
                         
                    </div>
                </div>
          </div>
      </div>
  </div>
</section>
<!-- New Product part end -->

<!-- Blog Part Start -->
<section id="blog2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="latest-pro">
                   <div class="deals-head text-center">
                        <h3>Best Sellers</h3>
                    </div>
                    <div class="col-md-12">
                            <div class="latest-pro-item row">
                                <div class="col-md-4 pro-img">
                                    <img src="{{ asset('ebuy')}}/images/latest-pro1.jpg" class="img-responsive" alt="latest-pro">
                                </div>
                                 <div class="col-md-8 pro-text pl0">
                                    <h3>Your Product Here <span>$89</span></h3>
                                    <div class="ratings">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star-half"></i>
                                     </div>
                                     <a href="product-details.html">shop now</a>
                                </div>
                            </div>
                            <div class="latest-pro-item row">
                                <div class="col-md-4 pro-img">
                                    <img src="{{ asset('ebuy')}}/images/latest-pro2.jpg" class="img-responsive" alt="latest-pro">
                                </div>
                                 <div class="col-md-8 pro-text pl0">
                                    <h3>Your Product Here <span>$89</span></h3>
                                    <div class="ratings">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star-half"></i>
                                     </div>
                                     <a href="product-details.html">shop now</a>
                                </div>
                            </div>
                            <div class="latest-pro-item row">
                                <div class="col-md-4 pro-img">
                                    <img src="{{ asset('ebuy')}}/images/latest-pro3.jpg" class="img-responsive" alt="latest-pro">
                                </div>
                                 <div class="col-md-8 pro-text pl0">
                                    <h3>Your Product Here <span>$89</span></h3>
                                    <div class="ratings">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star-half"></i>
                                     </div>
                                     <a href="product-details.html">shop now</a>
                                </div>
                            </div>
                            <div class="latest-pro-item row last-latest">
                                <div class="col-md-4 pro-img">
                                    <img src="{{ asset('ebuy')}}/images/latest-pro4.jpg" class="img-responsive" alt="latest-pro">
                                </div>
                                 <div class="col-md-8 pro-text pl0">
                                    <h3>Your Product Here <span>$89</span></h3>
                                    <div class="ratings">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star-half"></i>
                                     </div>
                                     <a href="product-details.html">shop now</a>
                                </div>
                            </div>
                    </div>
                    <div class="clearfix"></div>
               </div>
            </div>
            <div class="col-md-8 blog-2-pro">
                <div class="heading4 text-center">
                    <h2>our blog</h2>
                </div>
                <div class="blog-main">
                    <div class="col-md-6 col-sm-6">
                        <div class="blog-item">
                            <div class="blog-img tahsan111">
                                <img src="{{ asset('ebuy')}}/images/blog1.jpg" alt="blog-img" class="img-responsive">
                                    <div class="overlay3">
                                         <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                         <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                         <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                    </div>
                                </div>
                            <div class="blog-details">
                                <h3>Best E-commerce I’d shopping yet</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p> 
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="blog-item">
                            <div class="blog-img tahsan111">
                                <img src="{{ asset('ebuy')}}/images/blog2.jpg" alt="blog-img" class="img-responsive">
                                    <div class="overlay3">
                                         <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                         <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                         <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                    </div>
                                </div>
                            <div class="blog-details">
                                <h3>I’m satisfy with their services</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p> 
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Part End -->


@endsection