<!DOCTYPE html>
<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Sure Jobs-Online Job Board</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="">
  <meta name="generator" content=" Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/bootstrap-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/slick/slick.css" rel="stylesheet') }}">
  <link href="{{ asset('plugins/slick/slick-theme.css" rel="stylesheet') }}">
  <link href="{{ asset('plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper">


<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="/">
						<img src="{{ asset('images/logo.png') }}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav main-nav ">
							<li class="nav-item @@home">
								<a class="nav-link" href="/">Home</a>
							</li>
              @isset($auth)
              @if ($auth == "employee")
              <li class="nav-item dropdown dropdown-slide @@dashboard">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Jobs
								</a>
							</li>
              @endif

              @if ($auth == "company")
              <li class="nav-item dropdown dropdown-slide @@dashboard">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Company<span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@dashboardPage" href="">Company</a></li>
									<li><a class="dropdown-item @@dashboardMyAds" href="/addjobs">Add Job vacancies</a></li>
									<li><a class="dropdown-item @@dashboardFavouriteAds" href="">Company Profile</a></li>
								</ul>
							</li>
              @endif
              @endisset
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
              @isset($auth)
              @if ($auth == "employee" || $auth == "company")
							<li class="nav-item">
								<a class="nav-link login-button" href="/login">Logout</a>
							</li>
              @else
              <li class="nav-item">
								<a class="nav-link login-button" href="/login">Login</a>
							</li>
              @endif
              @endisset
              
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="/registration/user"><i class="fa fa-sign-in"></i> Register</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

@yield("content")

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="{{ asset('images/logo-footer.png') }}" alt="logo">
          <!-- description -->
          <p class="alt-color">The greatest way for businesses and job seekers to connect online is through job boards. There are numerous options available, including general boards where any job may be placed and specialist boards that cater to specific industries and positions.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
        <div class="block">
          <h4>Employee</h4>
          <ul>
            <li><a href="Post Your Vacancy">Post Your Vacancy</a></li>
            <li><a href="Top Employers">Top Employers</a></li>
            <li><a href="Top jobs">Top jobs</a></li>
            <li><a href="New to you">New to you</a></li>
            <li><a href="terms-condition">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
        <div class="block">
          <h4>Company</h4>
          <ul>
            <li><a href="registration/company">Create company Profile</a></li>
            <li><a href="candidates">Top candidates</a></li>
            <li><a href="jobs">Add new jobs</a></li>
            <li><a href="Profile">Profile</a>
            </li>
            <li><a href="blog">Blog</a></li>



          </ul>
        </div>
      </div>
      <!-- Mobile app link-->
      <div class="col-lg-4 col-md-7">
        <div class="block-2 app-promotion">
          <div class="mobile d-flex  align-items-center">
            <a href="index">
              <!-- Icon -->
              <img src="{{ asset('images/footer/phone-icon.png') }}" alt="mobile-icon">
            </a>
            <p class="mb-0">Get the SureJobs Mobile App and more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="index"><img src="{{ asset('images/apps/google-play-store.png') }}" class="img-fluid" alt=""></a>
            <a href="index" class=" ml-3"><img src="{{ asset('images/apps/apple-app-store.png') }}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. Designed & Developed by <a class="text-white" href="https://Abeygunawardena.com">K.D.S.M Abeygunawardena</a></p>
            <!-- SIBA undergraduates -->
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Social Icons -->
        <ul class="social-media-icons text-center text-lg-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/"></a></li>
          <li><a class="fa fa-github-alt" href="https://www.github.com/"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="fa fa-angle-up"></i>
  </div>
</footer>
@stack('scripts')
<!-- 
Essential Scripts
=====================================-->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap-slider.js') }}"></script>
<script src="{{ asset('plugins/tether/js/tether.min.js') }}"></script>
<script src="{{ asset('plugins/raty/jquery.raty-fa.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-nice-select/js/jquery.nice-select.min.') }}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{ asset('plugins/google-map/map.js') }}" defer></script>


</body>

</html>