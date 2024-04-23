<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> Connexo - Smarter Data</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
	<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
	 
	<!-- ========== Start Stylesheet ========== -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/icofont.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/site-flaticon.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css?1638200991544') }}">
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages : 'en,zh-CN,zh-TW,ko,ja', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>
     

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<!-- ========== End Stylesheet ========== -->

</head>

<body id="bdy">

	<!-- Start PreLoader
    ============================================= -->
	<!-- <div class="preloader">
		<div class="preloader-container">
			<span class="preloader-text">Koni</span>
			<div class="preloader-animation">
			</div>
		</div>
	</div> -->
	<!-- Start PreLoader-->

	<!-- Start header
    ============================================= -->
    <div class="topbar" style="background-color:#d10808;">
    <div class="container" >
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <!--<div class="col-6">-->
                    <!--    <p class="text-white" style=" margin-right:25px; margin-bottom:-5px;"><i class="icofont-call"></i> +852. 5501. 5469</p>-->
                    <!--</div>-->
                    <div class="col-12">
                        <p class="text-white" style=" margin-right:25px; margin-bottom:-5px;"> info@connexo.io</p>
                    </div>
                </div>
            </div>
           
            <div class="col-8 text-right">
                <span class="text-white" style="margin-right:20px;"><a class="text-white" href="{{route('contact')}}">Contact</a></span>
                <span class="text-white" style="margin-right:20px;"><a class="text-white" href="{{route('career')}}">Career</a></span>
                <!--<span class="text-white" style="margin-right:20px;"><a class="text-white" href="{{route('blog')}}">News</a></span>-->
                

             
                 <!--<a href="" target="_blank"><i class="text-white fab fa-facebook-f" style="margin-right:20px;"></i></a>-->
                 <!--<a href="" target="_blank"><i class="text-white fab fa-instagram" style="margin-right:20px;"></i></a>-->
                <!--<a href="https://www.linkedin.com/company/connexo-asia-limited?originalSubdomain=hk" target="_blank"><i class="text-white fab fa-linkedin" style="margin-right:20px;"></i></a>-->
            </div>
          <!--  <div class="col-2">-->
          <!--  <div id="google_translate_element" class="pull-left"></div>-->
          <!--</div>-->

        </div>
    </div>
    </div>
    <header class="header header-1">
		<div class="main-navigation">
			<nav id="navbar_top" class="navbar navbar-expand-sm bg-light">
				<div class="container">
					<a class="navbar-brand" href="/">
					  <img src="{{ asset('assets/img/logo/logo.png') }}" class="logo-display" alt="thumb">
						<img src="{{ asset('assets/img/logo/logo.png') }}" class="logo-scrolled " alt="thumb">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="ti-menu-alt"></i></span>
					</button>
					<div class="collapse navbar-collapse" id="main_nav">
						<ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
								<a class="nav-link" href="/" >
                                   Home
								</a>

							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('about')}}"> About Us </a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="" data-bs-toggle="dropdown"> Solutions </a>
                                <ul class="dropdown-menu fade-up">
                                    <li style="overflow:hidden">
										<a class="dropdown-item"  href="https://web.venturingdigitally.com/trackwise12">
											Trackwise
										</a>
									</li>
									<li style="overflow:hidden">
										<a class="dropdown-item"  href="https://web.venturingdigitally.com/trackwisedigital">
											Trackwise Digital
										</a>
									</li>
									<li style="overflow:hidden">
										<a class="dropdown-item"  href="https://web.venturingdigitally.com/complaince">
											ComplianceWire (LMS)
										</a>
									</li>
                                    @php
                                        $sol = DB::table('industries')->get();
                                        $ser = DB::table('servicecategories')->get();
                                    @endphp
                                    @foreach ($sol as $temp)
                                    <li style="overflow:hidden">
										<a class="dropdown-item"  href="{{ route('solution',$temp->id) }}" style="white-space: initial;">
											{{ $temp->title }}
										</a>
									</li>
                                    @endforeach

<!--									<li>-->
<!--										<a class="dropdown-item text-lowercase" href="trackwise">-->
<!--											TRACKWISE-->
<!--										</a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a class="dropdown-item text-lowercase" href="trackwise-digital">-->
<!--											TRACKWISE-->
<!--DIGITAL-->
<!--										</a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a class="dropdown-item text-lowercase" href="trackwise-3">-->
<!--											TRACKWISE-->
<!--QUALITY PROCESSES-->
<!--										</a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a class="dropdown-item text-lowercase" href="quality-view">-->
<!--											TRACKWISE-->
<!--QUALITY VIEW-->
<!--										</a>-->
<!--									</li>-->
<!--                                    <li>-->
<!--										<a class="dropdown-item text-lowercase" href="quality-solution">-->
<!--											Quality Solutions-->
<!--										</a>-->
<!--									</li>-->
<!--                                    <li>-->
<!--										<a class="dropdown-item text-lowercase" href="audit-solution">-->
<!--											Audit Solutions-->
<!--										</a>-->
<!--									</li>-->
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" data-bs-toggle="dropdown"> Services </a>
                                <ul class="dropdown-menu fade-up">
                                    @foreach ($ser as $temp)
                                    <li style="overflow:hidden">
										<a class="dropdown-item " href="{{ route('service',$temp->id) }}">
											{{ $temp->name }}
										</a>
									</li>
                                    @endforeach
									{{--  <li>
										<a class="dropdown-item" href="service">
											Key Services
										</a>
									</li>
									<li>
										<a class="dropdown-item text-lowercase" href="quality">
											QUALITY Services
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="profession">
											Professional Validation
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="audit">
											Audit & Solutions Consulting
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="training">
											Training/Education
										</a>
									</li>
                                    <li>
										<a class="dropdown-item" href="risk-based">
											Risk Based Implementations<br> Across All Layers
										</a>
									</li>  --}}

								</ul>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="{{route('customer')}}">
Customer
								</a>
								{{--  <ul class="dropdown-menu fade-up">
									<li><a class="dropdown-item" href="blog.html"> Blog </a></li>
									<li>
										<a class="dropdown-item" href="blog-right-sidebar.html">
											Blog Right Sidebar
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="blog-left-sidebar.html">
											Blog Left Sidebar
										</a>
									</li>
									<li><a class="dropdown-item" href="single.html"> Blog Single</a></li>
								</ul>  --}}
							</li>
							<li class="nav-item"><a class="nav-link" href="{{route('regulatory')}}"> Regulatory-Compliance </a></li>


                            <li class="nav-item"> <div class="hero-btn">
                                <a href="{{route('schedule-demo')}}" class="tm-btn-2" style="margin-top: 25px;">
                                   Talk to experts
                                </a>
                            </div></li>
						</ul>
					</div>
					<!-- navbar-collapse.// -->
					{{--  <div class="search-cart">
						<ul class="cart-li">
							<li>
								<div class="site-cart">
									<input type="checkbox" class="site-checkbox-cart" id="site-checkbox-cart">
									<label for="site-checkbox-cart" class="site-cart-label">
										<i class="icofont-shopping-cart"></i>
									</label>
									<div class="site-cart-list">
										<ul>
											<li>
												<div class="site-cart-up">
													<div class="site-cart-pic">
														<img src="assets/img/single/cart-pic.jpg" alt="thumb">
													</div>
													<div class="site-cart-desc">
														<h6>Lampost Frame Loft</h6>
														<span>1 × $299.00</span>
													</div>
												</div>
											</li>
											<li>
												<div class="site-cart-up">
													<div class="site-cart-pic">
														<img src="assets/img/single/cart-pic.jpg" alt="thumb">
													</div>
													<div class="site-cart-desc">
														<h6>Lampost Frame Loft</h6>
														<span>1 × $299.00</span>
													</div>
												</div>
											</li>
										</ul>
										<div class="site-cart-bottom text-center">
											<div class="sub-total">
												<span>Subtotal: $499.00</span>
											</div>
											<div class="site-cart-button">
												<a href="#" class="button-btns">View Cart</a>
												<a href="#" class="button-btns">Checkout</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="site-search">
									<input type="checkbox" class="site-input-checkbox" id="site-input-checkbox">
									<label for="site-input-checkbox" class="site-input-label">
										<i class="icofont-search"></i>
										<span class="site-close">
											<i class="icofont-close"></i>
										</span>
									</label>
									<div class="navigation__background">&nbsp;</div>
									<div class="site-search-content">
										<form>
											<input type="text" placeholder="Search" class="input-style-3">
											<button type="submit">Search</button>
										</form>
									</div>
								</div>
							</li>
						</ul>
					</div>  --}}
				</div> <!-- container -->
			</nav>
		</div>
    </header>
