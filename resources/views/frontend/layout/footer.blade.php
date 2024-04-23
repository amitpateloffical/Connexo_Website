<!--============================================= -->
<footer>
    <div class="footer-widget">
        <div class="container">
            <div class="footer-widget-wpr de-padding">
                <div class="row g-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget-box about-us">
                            <div class="footer-logo">
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="thumb">
                            </div>
                            <p>
                                Founded in 2009, Connexo is Asia’s leading Digtal Transformation consulting and professional services company, focusing on system validation and implementation.
                            <div class="footer-sub">
                                {{--  <form>
                                    <input type="text" class="input-style-1" placeholder="Enter Email..">
                                    <button type="submit" class="input-btn">
                                        <i class="flaticon-envelope"></i>
                                    </button>
                                </form>  --}}
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li>
                                    <a href="{{route('about')}}">
                                        <i class="icofont-hand-right"></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('customer')}}">
                                        <i class="icofont-hand-right"></i>
                                       Customer
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('regulatory')}}">
                                        <i class="icofont-hand-right"></i>
                                        Regulatory Compilance
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">
                                        <i class="icofont-hand-right"></i>
                                        Contact
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Services</h4>
                             @php
                                      
                                        $ser = DB::table('servicecategories')->get()->take(4);
                                    @endphp
                            <ul class="footer-list">
                                  @foreach ($ser as $temp)
                                <li>
                                    <a href="{{ route('service',$temp->id) }}">
                                        <i class="icofont-hand-right"></i>
                                        {{ $temp->name }}
                                    </a>
                                </li>
                                   
                                    @endforeach
                                
                               

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Contact Us</h4>
                            <ul class="footer-list">
                                <li>
                                    <a href="#">
                                        <i class="icofont-hand-right"></i>
                                        701 Silvercord Tower 2, 30 Canton Road, TST, Kowloon, Hong Kong
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-hand-right"></i>
                                        Ste 1512-1513, H Business Park-C, Beobwon-ro, 9 gil 26, Songpa-gu, Seoul, Republic of Korea.
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+852. 5501. 5469">
                                        <i class="icofont-hand-right"></i>
                                        TEL +852 2162 7511
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+852. 5501. 5469">
                                        <i class="icofont-hand-right"></i>
                                        FAX +852 3011 5485
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@connexo.io">
                                        <i class="icofont-hand-right"></i>
                                        MAIL info@connexo.io
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-content">
                <p class="mb-0">
                    Copyright © 2023. All Rights Reserved Connexo. 
                </p>
                <ul class="footer-social">
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer-->

<!-- Start Scroll top
============================================= -->
<a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
<!-- End Scroll top-->

  <!-- jQuery Frameworks
============================================= -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-menu.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/wodry.min.js') }}"></script>
<script src="{{ asset('assets/js/count-to.js') }}"></script>
<script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
<script src="{{ asset('assets/js/color-option.js') }}"></script>
<script src="{{ asset('assets/js/typed.js') }}"></script>
<script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/active-class.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('build/js/intlTelInput.js?1638200991544') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

<script>
var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    hiddenInput: "full_phone",
     placeholderNumberType: 'MOBILE',
    utilsScript: "build/js/utils.js?1638200991544" // just for formatting/placeholders etc
  });
  
  $(".js-select2").select2({
	closeOnSelect : false,
	placeholder : "Select Service",
	// allowHtml: true,
	allowClear: true,
	tags: true // создает новые опции на лету
    });
  
  $(".js-select3").select2({
	closeOnSelect : false,
	placeholder : "Select Solution",
	// allowHtml: true,
	allowClear: true,
	tags: true // создает новые опции на лету
    });
    
    
  
 </script>
 
 <style>
     .fade.modal-backdrop.show {
         /*display:none;*/
     }
 </style>

</body>

</html>
