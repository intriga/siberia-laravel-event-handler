<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png') }}" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/themefisher-font/style.css') }}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/lightbox2/css/lightbox.min.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/animate/animate.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css') }}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>
<body id="body">

  <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!--
  End Preloader
  ==================================== -->

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.html">
        <img loading="lazy" class="logo-default" src="{{ asset('frontend/images/logo.png') }}" alt="logo" />
        <img loading="lazy" class="logo-white" src="{{ asset('frontend/images/logo-white.png') }}" alt="logo" />
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Homepage <i class="tf-ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.html">Homepage</a></li>
              <li><a class="dropdown-item" href="onepage-slider.html">Onepage</a></li>
              <li><a class="dropdown-item" href="onepage-text.html">Onepage 2</a></li>
									
              <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu  <i class="tf-ion-chevron-down"></i></a>
      
                <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                  <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                  <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="service.html">Services</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="portfolio.html">Portfolio</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="team.html">Team</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pricing.html">Pricing</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown02" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages <i class="tf-ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
              <li><a class="dropdown-item" href="404.html">404 Page</a></li>
              <li><a class="dropdown-item" href="blog.html">Blog Page</a></li>
              <li><a class="dropdown-item" href="single-post.html">Blog Single Page</a></li>
									
              <li class="dropdown dropdown-submenu dropleft">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu  <i class="tf-ion-chevron-down"></i></a>
      
                <ul class="dropdown-menu" aria-labelledby="dropdown0201">
                  <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                  <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->

<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url(frontend/images/slider/slide-1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Crafting Digital <br>
						Experience</h1>
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Lorem ipsum dolor sit amet,
						consectetur adipisicing elit. Quod, <br> veritatis tempore nostrum id
						officia quaerat eum corrupti, <br> ipsa aliquam velit.</p>
					<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
						href="service.html">Explore Us</a>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-item th-fullpage hero-area" style="background-image: url(frontend/images/slider/slide-2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">We Combine Design <br> and
						Creativity</h1>
					<p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Create just what you need
						for your Perfect Website. Choose from a wide range
						<br> of Elements & simply put them on our Canvas.</p>
					<a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
						href="service.html">Explore Us</a>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-item th-fullpage hero-area" style="background-image: url(frontend/images/slider/slide-3.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">We Combine Design <br> and
						Creativity</h1>
					<p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Create just what you need
						for your Perfect Website. Choose from a wide range
						<br> of Elements & simply put them on our Canvas.</p>
					<a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
						href="service.html">Explore Us</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Start Portfolio Section
		=========================================== -->

<section class="blog" id="portfolio">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<!-- section title -->
				<div class="title text-center">
					<h2>Our Works</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit amet,
						consectetur adipisicing elit. Minima, vitae? </p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div class="portfolio-filter">
            <button type="button" data-filter="all">All</button>
          @foreach ($categories as $category)
            <button type="button" data-filter="{{ $category->title }}">{{ $category->title }}</button>
          @endforeach
				</div>

				<div class="row">
					<div class="col-12">
						<div class="filtr-container">

						@foreach ($posts as $post)

							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="{{ $post->category->title }}">
								<div class="post-item">
									<div class="media-wrapper">
										<img loading="lazy" src="{{ asset($post->image) }}" alt="amazing caves coverimage" class="img-fluid">
									</div>
				
									<div class="content">
										<h3><a href="single-post.html">{{ $post->title }}</a></h3>
										<p>{!! substr($post->content, 0, 70) !!}...</p>
										<a class="btn btn-main" href="single-post.html">Read more</a>
									</div>
								</div>
							</div>

						@endforeach

						</div>
					</div>
				</div>
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->



 <!--Start Contact Us
	=========================================== -->
 <section class="contact-us" id="contact">
 	<div class="container">
 		<div class="row justify-content-center">
			 <!-- section title -->
 			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Get In Touch</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam
						ut numquam molestiae quaerat incidunt?</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
 		<div class="row">
 			<!-- Contact Details -->
 			<div class="contact-details col-md-6 ">
 				<h3 class="mb-3">Contact Details</h3>
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex
 					explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore
 					adipisci.</p>
 				<ul class="contact-short-info mt-4">
 					<li class="mb-3">
 						<i class="tf-ion-ios-home"></i>
 						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
 					</li>
 					<li class="mb-3">
 						<i class="tf-ion-android-phone-portrait"></i>
 						<span>Phone: +880-31-000-000</span>
 					</li>
 					<li class="mb-3">
 						<i class="tf-ion-android-globe"></i>
 						<span>Fax: +880-31-000-000</span>
 					</li>
 					<li>
 						<i class="tf-ion-android-mail"></i>
 						<span>Email: hello@meghna.com</span>
 					</li>
 				</ul>
 				<!-- Footer Social Links -->
 				<div class="social-icon">
 					<ul>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble-outline"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-linkedin-outline"></i></a></li>
 					</ul>
 				</div>
 				<!--/. End Footer Social Links -->
 			</div>
 			<!-- / End Contact Details -->

 			<!-- Contact Form -->
 			<div class="contact-form col-md-6 ">
 				<form id="contact-form" method="post" role="form">
 					<div class="form-group mb-4">
 						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required>
 					</div>

 					<div class="form-group mb-4">
 						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" required>
 					</div>

 					<div class="form-group mb-4">
 						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required>
 					</div>

 					<div class="form-group mb-4">
 						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required></textarea>
 					</div>
 					<div id="cf-submit">
 						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
 					</div>

 				</form>
 			</div>
 			<!-- ./End Contact Form -->

 		</div> <!-- end row -->
 	</div> <!-- end container -->
 </section> <!-- end section -->


 <!--====  End of Google Map  ====-->
<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <ul>
            <li>
              <h3>Our Services</h3>
            </li>
            <li><a href="service.html">Ui/Ux Design</a></li>
            <li><a href="service.html">Graphic Design</a></li>
            <li><a href="service.html">Web Design</a></li>
            <li><a href="service.html">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <ul>
            <li>
              <h3>Quick Links</h3>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="blog.html">Blogs</a></li>
            <li><a href="404.html">404</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-lg-3 col-md-6">
          <ul>
            <li>
              <h3>Connect with us Socially</h3>
            </li>
            <li><a href="https://www.facebook.com/themefisher/">Facebook</a></li>
            <li><a href="https://www.twitter.com/themefisher/">Twitter</a></li>
            <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA">Youtube</a></li>
            <li><a href="https://www.github.com/themefisher/">Github</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>&copy; Copyright 2020. All rights reserved.</h5>
    <h6>Design and Developed by <a href="https://themefisher.com/">Themefisher</a></h6>
  </div>
</footer> <!-- end footer -->


<!-- end Footer Area
========================================== -->
<!-- 
    Essential Scripts
    =====================================-->
<!-- Main jQuery -->
<script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap4 -->
<script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Parallax -->
<script src="{{ asset('frontend/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
<!-- lightbox -->
<script src="{{ asset('frontend/plugins/lightbox2/js/lightbox.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('frontend/plugins/slick/slick.min.js') }}"></script>
<!-- filter -->
<script src="{{ asset('frontend/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- Smooth Scroll js -->
<script src="{{ asset('frontend/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Custom js -->
<script src="{{ asset('frontend/js/script.js') }}"></script>

</body>

</html>



