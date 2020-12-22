@extends('layouts.products')
@section('content')

<!-- Header slider -->

<div class="header_container" style="width: 100%">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="/storage/images/general_images/header_img1.jpg" alt="header image1" style="width:100%;">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="carousel-item">
        <img src="/storage/images/general_images/header_img2.jpg" alt="header image2" style="width:100%;">
        <div class="carousel-caption">
          
        </div>
      </div>
    
      <div class="carousel-item">
        <img src="/storage/images/general_images/header_img3.jpg" alt="header image3" style="width:100%;">
        <div class="carousel-caption">
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



    <div class="container" style="font-size: 1.2vw;">

        <div class="social_media">
            <img class="social" src="/storage/images/general_images/social_media.png" alt="social media">
        </div>
        
        <!-- <img src="/images/social_media.png" class="social_media" alt="these are our social media icons" /> -->
        <div class="additional_info_box">
            <div class="additional_info">
                <img class="additional_info_image responsive" src="/storage/images/general_images/home_delivery.png" alt="home delivery" />
                <h4 class="low_margin" style="font-size: 1.5vw">Home Delivery</h4>
                <p>We offer free home delivery. Anywhere. Anytime.</p>
            </div>
            <div class="additional_info">
                <img class="additional_info_image responsive" src="/storage/images/general_images/order_online.png" alt="online order" />
                <h4 class="low_margin" style="font-size: 1.5vw">Order Online</h4>
                <p>Shop at your own pace at the comfort of your home. </p>
            </div>
            <div class="additional_info">
                <img class="additional_info_image responsive" src="/storage/images/general_images/loved_by_all.png" alt="loved by all" />
                <h4 class="low_margin" style="font-size: 1.5vw">Earn Points</h4>
                <p>Get points with your every purchase. Redeem anytime.</p>
            </div>
        </div>


        <div class="incredible_deals">
            <div class="incredible_text">
                <h1 class="green_header responsive_header">Incredible Deals</h1>
                <h6 style="font-family: 'Lora', serif; font-style: italic;">Use Code: Covid-19</h6>
                <p>Your membership on our site gives you access to the best deals on smartphones! Follow the link below to our About page to learn more about our partnerships with telecommunications companies. This enables us to save big on the cost of devices, and we pass these savings on to our members!</p>
                <p>We have new deals every month so be sure to register and stay updated on our offers.</p>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/about';" style="color: #fff; text-decoration: none;">Learn more</button>
            </div>
            <div class="hand_img"><img class="hand_phone responsive" src="/storage/images/general_images/hand-phone.jpg" alt="hand phone" /></div>
        </div>

        <div class="lower_half">
            <div class="hot_deals"><h4 style="font-family: 'Lora', serif; font-style: italic;">Hot Deals</h4></div>
            <div class="plans" style="margin-top: 0;">
                <div class="standard">
                    <h4 class="green_header responsive_header">Google</h4>
                        <p>$50 downpayment<p>
                        <p>Free delivery<p>
                        <p>Easy Return</p>
                    <button type="button" 
                    onclick="window.location.href='/products/google-pixel-5';" class="btn btn-success" style="color: #fff; text-decoration: none;">Details</button>  
                </div>
                <div class="premium">
                    <h4 class="green_header responsive_header">Samsung</h4>
                        <p>$20 downpayment</p>
                        <p>Free delivery</p>
                        <p>Easy Return</p>
                    <button type="button"  
                    onclick="window.location.href='/products/samsung-galaxy-a42-5g';" class="btn btn-success" style="color: #fff; text-decoration: none;">Details</button>
                </div>
                <div class="deluxe">
                    <h4 class="green_header responsive_header">Apple</h4>
                        <p>$100 downpayment</p>
                        <p>Free delivery</p>
                        <p>Easy Return</p>
                     <button type="button" class="btn btn-success" 
                     onclick="window.location.href='/products/apple-iphone-12-pro';" style="color: #fff; text-decoration: none;">Details</button>
                </div>
            </div>

            <div class="phones_img">
                <img class="responsive" src="/storage/images/general_images/phones.png" alt="phones" />
                <h2 class="green_header responsive_header">Select From Our Exclusive Range</h2>
                <button type="button" class="btn btn-primary"
                onclick="window.location.href='/products';" style=" padding: 5px 2%;color: #fff; text-decoration: none;">Buy Now</button>
            </div>
            
        </div>

        
    </div><!-- container -->

@endsection

