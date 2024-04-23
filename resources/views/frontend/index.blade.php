@extends('frontend.layout.layout')
@section('content')
<main class="main">
    
    @php
        $data = DB::table('industries')->get()->take(9);
        $service = DB::table('services')->get()->take(6);
    @endphp

    <!-- Start Slider
    ============================================= -->
    <div class="hero-section pos-rel" style="background-image: url('{{asset('front.gif')}}')">
        {{--  <div class="hero-shape">
            <img src="assets/img/shape/hdr-shape.png" class="hero-1" alt="thumb">
            <img src="assets/img/shape/shape-7.png" class="hero-2" alt="thumb">
            <img src="assets/img/shape/shape-5.png" class="hero-3" alt="thumb">
            <img src="assets/img/shape/shape-6.png" class="hero-4 round-move" alt="thumb">
            <img src="assets/img/shape/shape-9.png" class="hero-6" alt="thumb">
        </div>  --}}
        <div class="hero-section-content hero-sldr owl-carousel owl-theme">
            <div class="hero-single">
                <div class="container g-0">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="hero-content">
                                <div class="hero-desc">
                                    <h2 class="hero-title">
                                        Technical Solutions
                                    </h2>
                                    <p>
                                        Compliance Consulting & Professional Validation Services for Life Sciences.
                                    </p>
                                    <div class="hero-btn">
                                        <a href="{{url('contact')}}" target="_blank" class="tm-btn-2">
                                            <i class="icofont-long-arrow-right"></i>
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single">
                <div class="container g-0">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="hero-content">
                                <div class="hero-desc">
                                    <h2 class="hero-title">
                                        EQMS Solution Consulting
                                    </h2>
                                    <p>
                                        Founded in 2009, Connexo is Asia’s leading Digital Transformation consulting and professional services company, focusing on system validation.
                                    </p>
                                    <div class="hero-btn">
                                        <a href="{{url('contact')}}" target="_blank" class="tm-btn-2">
                                            <i class="icofont-long-arrow-right"></i>
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single">
                <div class="container g-0">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="hero-content">
                                <div class="hero-desc">
                                    <h2 class="hero-title">
                                        TrackWise (QMS)
                                    </h2>
                                    <p>
                                        TrackWise® (QMS) is the world’s leading on-premises QMS software. It brings all your quality processes together 
                                        in a single place to give you the big picture of your compliance and operational effectiveness. 
                                        TrackWise offers several industry best-practice workflows and can also adapt to fit your existing 
                                        process and workflow. Companies across several industries use TrackWise to increase efficiency, 
                                        improve quality, achieve compliance and reduce risk.
                                    </p>
                                    <div class="hero-btn">
                                        <a href="/trackwise12" class="tm-btn-2">
                                            <i class="icofont-long-arrow-right"></i>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single">
                <div class="container g-0">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="hero-content">
                                <div class="hero-desc">
                                    <h2 class="hero-title">
                                        TrackWise Digital
                                    </h2>
                                    <p>
                                        TrackWise Digital® (QMS, DMS & TMS) is an industry-leading, cloud-based Quality Management System (QMS) with 
                                        integrated modules that work together to support quality, compliance and more efficient and 
                                        effective decision making. With reporting and advanced analytics across all quality processes, 
                                        users can leverage quality data to strengthen their culture of quality and impact company-wide performance.
                                    </p>
                                    <div class="hero-btn">
                                        <a href="/trackwisedigital" class="tm-btn-2">
                                            <i class="icofont-long-arrow-right"></i>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single">
                <div class="container g-0">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="hero-content">
                                <div class="hero-desc">
                                    <h2 class="hero-title">
                                        ComplianceWire(LMS)
                                    </h2>
                                    <p>
                                        ComplianceWire️® is the industry-leading training learning management system (LMS) for compliance and
                                        qualification management specializing in life sciences organizations and is compliant with 21 CFR 
                                        Part 11 and EU Annex 11 validation requirements. This proven technology is used globally by pharmaceutical, 
                                        medical device and biologics companies as well as global regulatory authorities in the U.S., China, Brazil 
                                        and India to promote public health through training related to the development of safe and effective medicines and medical devices
                                    </p>
                                    <div class="hero-btn">
                                        <a href="https://www.ul.com/software/compliancewire-gxp-training-and-qualification-management-life-sciences" class="tm-btn-2">
                                            <i class="icofont-long-arrow-right"></i>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($data as $temp)
            <div class="hero-single">
                <div class="container g-0">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="hero-content">
                                <div class="hero-desc">
                                    <h2 class="hero-title">
                                        {{ $temp->title }}
                                    </h2>
                                    <p>
                                        {{ $temp->desc }}
                                    </p>
                                    <div class="hero-btn">
                                        <a href="{{ route('solution',$temp->id) }}" class="tm-btn-2">
                                            <i class="icofont-long-arrow-right"></i>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Fature
    ============================================= -->
    
    <div class="feature-area de-pt index-service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="site-title text-center">
                        <h2>TRUSTED & PROVEN PARTNER</h2>
                        <p class="mb-0">
                            Leverage Connexo’s unmatched level of expertise in EDMS, LMS, enterprise quality management solutions and system validation experiences with market-proven consulting and services delivery.
                        </p>
                    </div>
                </div>
            </div>
             <div class="blog-wpr grid-3 pb-5">
                
               
                <div class="blog-box">

                    <div class="blog-pic" style="width:100%; aspect-ratio:1/0.7;">
                        <img src="{{asset('assets/img/trackwisedigital/1673863470.jpg')}}"  alt="thumb">
                    </div>
                    <div class="blog-desc">

                        <div class="blog-content">
                            <a href="trackwise12">
                                <h4>
                                   TrackWise (QMS)
                                </h4>
                            </a>
                            <p>
                              TrackWise® (QMS) is the world’s leading on-premises QMS software. It brings all your quality processes together 
                                        in a single place to give you the big picture of your compliance and operational effectiveness. 
                                        TrackWise offers several industry best-practice workflows and can also adapt to fit your existing 
                                        process and workflow. Companies across several industries use TrackWise to increase efficiency, 
                                        improve quality, achieve compliance and reduce risk.
                            </p>
                            <a href="trackwise12" class="btn-2">Read More</a>
                        </div>
                    </div>
                </div>
                 <div class="blog-box">

                    <div class="blog-pic" style="width:100%; aspect-ratio:1/0.7;">
                        <img src="{{asset('assets/img/trackwisedigital/1673863491.jpg')}}"  alt="thumb">
                    </div>
                    <div class="blog-desc">

                        <div class="blog-content">
                            <a href="trackwisedigital">
                                <h4>
                                   TrackWise Digital (QMS, DMS & TMS)
                                </h4>
                            </a>
                            <p>
                               TrackWise Digital® (QMS, DMS & TMS) is an industry-leading, cloud-based Quality Management System (QMS) with 
                                        integrated modules that work together to support quality, compliance and more efficient and 
                                        effective decision making. With reporting and advanced analytics across all quality processes, 
                                        users can leverage quality data to strengthen their culture of quality and impact company-wide performance.
                            </p>
                            <a href="trackwisedigital" class="btn-2">Read More</a>
                        </div>
                    </div>
                </div>
                 <div class="blog-box">

                    <div class="blog-pic" style="width:100%; aspect-ratio:1/0.7;">
                        <a href="https://www.ul.com/software/compliancewire-gxp-training-and-qualification-management-life-sciences">
                        <img src="{{asset('uploads/image/1675872727.jpg')}}"  alt="thumb" class="w-100 h-100">
                        </a>
                    </div>
                    <div class="blog-desc">

                        <div class="blog-content">
                            <a href="https://www.ul.com/software/compliancewire-gxp-training-and-qualification-management-life-sciences">
                                <h4>
                                   ComplianceWire(LMS)
                                </h4>
                            </a>
                            <p>
                              ComplianceWire️® is the industry-leading training learning management system (LMS) for compliance and qualification management specializing in life sciences organizations and is compliant with 21 CFR Part 11 and EU Annex 11 validation requirements. This proven technology is used globally by pharmaceutical, medical device and biologics companies as well as global regulatory authorities in the U.S., China, Brazil and India to promote public health through training related to the development of safe and effective medicines and medical devices
                            </p>
                            <a href="https://www.ul.com/software/compliancewire-gxp-training-and-qualification-management-life-sciences" class="btn-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>        
            <div class="blog-wpr grid-3">
                @foreach ($data as $temp)
                <div class="blog-box">

                    <div class="blog-pic" style="width:100%; aspect-ratio:1/0.7;">
                        <img src="{{ asset('uploads/image/'.$temp->img) }}"  alt="thumb">
                    </div>
                    <div class="blog-desc">

                        <div class="blog-content">
                            <a href="{{ route('solution',$temp->id) }}">
                                <h4>
                                    {{ $temp->title }}
                                </h4>
                            </a>
                            <p>
                                {{ strip_tags($temp->desc) }} 
                              
                            </p>
                            <a href="{{ route('solution',$temp->id) }}" class="btn-2">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--<div class="blog-box">-->

                <!--    <div class="blog-pic">-->
                <!--        <img src="assets/img/trackwise.jpg"  style="height:210px; width:350px;" alt="thumb">-->
                <!--    </div>-->
                <!--    <div class="blog-desc">-->

                <!--        <div class="blog-content">-->
                <!--            <a href="trackwise" target="_blank">-->
                <!--                <h4>-->
                <!--                    TrackWise-->
                <!--                </h4>-->
                <!--            </a>-->
                <!--            <p>-->
                <!--                An integrated and centralized solution for enterprise quality management.-->
                <!--            </p>-->
                <!--            <a href="trackwise" class="btn-2">Read More</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="blog-box">-->

                <!--    <div class="blog-pic">-->
                <!--        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5N3XYPB4toOoiESrFYB7kuCCMg624NrQpX8uAN_GR-kx56RQ8ZQm4O7L3tiiLIz7dAbQ&usqp=CAU"  style="height:210px; width:350px;" alt="thumb">-->
                <!--    </div>-->
                <!--    <div class="blog-desc">-->

                <!--        <div class="blog-content">-->
                <!--            <a href="trackwise" target="_blank">-->
                <!--                <h4>-->
                <!--                    TrackWise-Digital-->
                <!--                </h4>-->
                <!--            </a>-->
                <!--            <p>-->
                <!--                Cost-effective cloud-based QMS for quicker turnaround.-->
                <!--            </p>-->
                <!--            <a href="trackwise" class="btn-2">Read More</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="blog-box">-->

                <!--    <div class="blog-pic">-->
                <!--        <img src="https://is4-ssl.mzstatic.com/image/thumb/Purple111/v4/24/ef/de/24efdebe-35e0-233f-7f0f-180fbdef66ea/source/512x512bb.jpg"  style="height:210px; width:350px;" alt="thumb">-->
                <!--    </div>-->
                <!--    <div class="blog-desc">-->

                <!--        <div class="blog-content">-->
                <!--            <a href="trackwise" target="_blank">-->
                <!--                <h4>-->
                <!--                    ComplianceWire-->
                <!--                </h4>-->
                <!--            </a>-->
                <!--            <p>-->
                <!--                Achieve Compliance for 21 CFR Part 11 and EU Annex 11 Validation Requirements.-->
                <!--            </p>-->
                <!--            <a href="trackwise" class="btn-2">Read More</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="blog-box">-->

                <!--    <div class="blog-pic">-->
                <!--        <img src="https://www.vimachem.com/wp-content/uploads/home-optimz-pharma-platform.png"  style="height:210px; width:350px;" alt="thumb">-->
                <!--    </div>-->
                <!--    <div class="blog-desc">-->

                <!--        <div class="blog-content">-->
                <!--            <a href="trackwise" target="_blank">-->
                <!--                <h4>-->
                <!--                    Professional Validation Services-->
                <!--                </h4>-->
                <!--            </a>-->
                <!--            <p>-->
                <!--                Full range of total validation services and offerings...-->
                <!--            </p>-->
                <!--            <a href="trackwise" class="btn-2">Read More</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

                    </div>
                </div>

        </div>
    </div>
    <!-- End Fature -->

    <!-- Start About
    ============================================= -->
    <div class="about-area pos-rel de-padding">
        {{--  <div class="vector-dozer">
            <img src="assets/img/about/vector-dozer.jpg" class="dozer-1" alt="thumb">
            <img src="assets/img/about/pngegg.png" class="dozer-2" alt="thumb">
        </div>  --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="about-title  text-center">
                        <h2 class="up-move rad-50"style="color: rgb(7, 7, 54)">Digitally & Truly yours : <span>The Future is Here!</span></h2>

                    </div>
                </div>
            </div>
            <div class="about-wpr">
                <div class="row g-5">
                    <div class="col-xl-7">
                        <div class="about-left">
                            <div class="about-left-pic">
                                <!--<img src="https://cdn.dribbble.com/users/61434/screenshots/2771959/media/be25d841a2f97fc12540d45b7a22e553.gif" class="about-pic-1" alt="thumb">-->
                                <img src="assets/02.jpg" style="margin-top:30px;" alt="thumb" >

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-right">
                            <h2 class="about-title">
                                WHAT <span>WE </span>DO
                            </h2>
                            <p class="about-txt">
                                We adopt a complete end-to-end life-cycle approach to Digital Transformation implementation, operational management and system validation for life science companies to improve quality, achieve business goals and ensure future sustainability.
                            </p>
                            <p class="about-txt">From initial discovery and assessment, to implementation and training as well as support and maintenance, we are together with you every step of the way – in ensuring usability and your compliance is always our top priority.</p>
                            <ul class="about-list">
                                <li>
                                    <i class="icofont-check"></i>
                                    Consulting & Implementation

                                </li>
                                <li>
                                    <i class="icofont-check"></i>
                                    Operational Management
                                </li>
                                <li>
                                    <i class="icofont-check"></i>
                                    Professional Validation Services
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services
    ============================================= -->
    <div class="service-area pos-rel serv-overlay de-padding" style="background-image: url(https://www.chemanager-online.com/sites/default/files/styles/gallery/public/2021-09/nichtverwenden_adobestock_236506650.jpg?h=3a42c0f3&itok=6DSk8raT)">
        {{--  <div class="service-shape">
            <img src="assets/img/shape/shape-10.png" alt="thumb">
        </div>  --}}
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="site-title wh text-center">
                        <h2>Quality Services</h2>
                        <p class="mb-0">
                            We are together with you every step of the way – in ensuring usability and your compliance is always our top priority.
                        </p>
                    </div>
                </div>
            </div>
            <div class="service-wpr grid-3">
                @foreach($service as  $temp)
                <div class="service-box">
                    <div class="service-pic">
                        <img src="{{ asset('uploads/image/'.$temp->photo) }}" class="service-1" alt="thumb">
                    </div>
                    <div class="service-icon">
                        <i class="icofont-architecture"></i>
                    </div>
                    <div class="service-desc">
                        <h4>{{ $temp->name }}</h4>
                        <p>
                            {{ $temp->dis }}
                        </p>
                    </div>
                </div>
                @endforeach
                <!--<div class="service-box">-->
                <!--    <div class="service-pic">-->
                <!--        <img src="https://images.unsplash.com/photo-1590650516494-0c8e4a4dd67e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Y29uc3VsdGluZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="service-1" alt="thumb">-->
                <!--    </div>-->
                <!--    <div class="service-icon">-->
                <!--        <i class="icofont-architecture"></i>-->
                <!--    </div>-->
                <!--    <div class="service-desc">-->
                <!--        <a href="service-single#" target="_blank">-->
                <!--            <h4>Consulting & Implementation</h4>-->
                <!--        </a>-->
                <!--        <p>-->
                <!--            Adhering to industry regulations and global standards, we share the best compliance practices while catering to your internal SOPs, delivering a world-class compliant EQMS solution tailor-made to suit your requirements.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="service-box">-->
                <!--    <div class="service-pic">-->
                <!--        <img src="https://us.123rf.com/450wm/wrightstudio/wrightstudio1910/wrightstudio191000025/131078497-operation-management-business-process-control-optimisation-industrial-technology-concept-.jpg?ver=6" class="service-1" alt="thumb">-->
                <!--    </div>-->
                <!--    <div class="service-icon">-->
                <!--        <i class="icofont-barricade"></i>-->
                <!--    </div>-->
                <!--    <div class="service-desc">-->
                <!--        <a href="service-single#" target="_blank"><h4>Operational Management</h4></a>-->
                <!--        <p>-->
                <!--            From implementation go-live to system roll-out, we believed in increasing system adoption by providing ongoing customer-focused support and maintenance in realizing the true long-term benefits of your EQMS solution.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="service-box">-->
                <!--    <div class="service-pic">-->
                <!--        <img src="https://www.sqs.es/wp-content/uploads/2020/09/Foto_Validacion-sector-farma-scaled.jpg" class="service-1" alt="thumb">-->
                <!--    </div>-->
                <!--    <div class="service-icon">-->
                <!--        <i class="icofont-industries-3"></i>-->
                <!--    </div>-->
                <!--    <div class="service-desc">-->
                <!--        <a href="service-single#" target="_blank"><h4>Professional Validation Services</h4></a>-->
                <!--        <p>-->
                <!--            Validation is an integral aspect of software deployments for the life sciences industry. Our validation team of experts, with our proven methodology and know-how, helps you to minimize validation efforts ensuring compliance in protecting your brand always.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->

            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Counter
    ============================================= -->
    <div class="counter-area de-padding">
        <div class="container">
            <div class="counter-wpr grid-4 gap-0 counter-1">
                <div class="fun-fact">
                    <div class="fun-icon">
                        <i class="icofont-architecture-alt"></i>
                    </div>
                    <div class="fun-desc">
                        <p class="timer" data-count="+" data-to="15000" data-speed="3000"></p>
                        <span class="medium">Users</span>
                    </div>
                </div>
                <div class="fun-fact">
                    <div class="fun-icon">
                        <i class="icofont-worker"></i>
                    </div>
                    <div class="fun-desc">
                        <p class="timer" data-count="+" data-to="13" data-speed="3000"></p>
                        <span class="medium">years Of Experience</span>
                    </div>
                </div>
                <div class="fun-fact">
                    <div class="fun-icon">
                        <i class="icofont-globe-alt"></i>
                    </div>
                    <div class="fun-desc">
                        <p class="timer" data-count="+" data-to="10" data-speed="3000"></p>
                        <span class="medium">Countries work with</span>
                    </div>
                </div>
                <div class="fun-fact">
                    <div class="fun-icon">
                        <i class="icofont-industries-2"></i>
                    </div>
                    <div class="fun-desc">
                        <p class="timer" data-count="+" data-to="35" data-speed="3000"></p>
                        <span class="medium">Implementations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter -->

    <!-- Start Credential
    ============================================= -->
    <div class="creden-area de-padding">
        <div class="creden-wpr pos-rel creden-padding">
            {{--  <div class="creden-shape">
                <img src="assets/img/header/shape-line.png" alt="thumb">
            </div>  --}}
            <div class="crden-bottom">
                <img src="assets/img/bg/bg-dot.jpg" alt="thumb">
            </div>
            <div class="row r-0">
                <div class="col-xl-4 my-auto">
                    <div class="creden-left">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNhcmVlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="thumb">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="creden-right">
                        <div class="creden-right-info" style="background-color:#0000000a; border: 1px solid #808080a6;">
                            <div class="creden-right-text">
                                <h2 style="color:black;">Career Section</h2>
                                <p class="mb-0" style="color:black;">
                                    At connexo Smarter data, you will work with the most talented engineers
                                </p>
                            </div>
                            <form action="{{route('career-form')}}" method="post">
                                @csrf
                                <div class="creden-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <input type="text" class="form-control input-style-2" name="name" value="{{old('name')}}" placeholder="Your Full Name*">
                                            @if($errors->has('name'))<span class="text-danger">{{$errors->first('name')}}</span>@endif

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <input type="email" class="form-control input-style-2" name="email" value="{{old('email')}}" placeholder="Your Email Address*">
                                                                                @if($errors->has('email'))<span class="text-danger">{{$errors->first('email')}}</span>@endif

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group d-flex country-dropdown" style="border: 1px solid #ccc; border-radius: 5px; margin-bottom:20px;">
                                            <select name="countryCode" class="form-control input-style-2 border-0">
                                        	<option data-countryCode="HK" value="852" selected>Hong Kong (+852)</option>
                                        	<option data-countryCode="AU" value="61">Australia (+61)</option>
                                        	<option data-countryCode="CN" value="86">China (+86)</option>
                                        	<option data-countryCode="IN" value="91">India (+91)</option>
                                        	<option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                        	<option data-countryCode="JP" value="81">Japan (+81)</option>
                                        	<option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                        	<option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                        	<option data-countryCode="US" value="1">USA (+1)</option>
                                        	<option data-countryCode="KR" value="82">Korea South (+82)</option>
                                        	<optgroup label="Other countries">
                                        		<option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                        		<option data-countryCode="AD" value="376">Andorra (+376)</option>
                                        		<option data-countryCode="AO" value="244">Angola (+244)</option>
                                        		<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                        		<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                        		<option data-countryCode="AR" value="54">Argentina (+54)</option>
                                        		<option data-countryCode="AM" value="374">Armenia (+374)</option>
                                        		<option data-countryCode="AW" value="297">Aruba (+297)</option>
                                        		<option data-countryCode="AT" value="43">Austria (+43)</option>
                                        		<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                        		<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                        		<option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                        		<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                        		<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                        		<option data-countryCode="BY" value="375">Belarus (+375)</option>
                                        		<option data-countryCode="BE" value="32">Belgium (+32)</option>
                                        		<option data-countryCode="BZ" value="501">Belize (+501)</option>
                                        		<option data-countryCode="BJ" value="229">Benin (+229)</option>
                                        		<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                        		<option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                        		<option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                        		<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                        		<option data-countryCode="BW" value="267">Botswana (+267)</option>
                                        		<option data-countryCode="BR" value="55">Brazil (+55)</option>
                                        		<option data-countryCode="BN" value="673">Brunei (+673)</option>
                                        		<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                        		<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                        		<option data-countryCode="BI" value="257">Burundi (+257)</option>
                                        		<option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                        		<option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                        		<option data-countryCode="CA" value="1">Canada (+1)</option>
                                        		<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                        		<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                        		<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                        		<option data-countryCode="CL" value="56">Chile (+56)</option>
                                        		<option data-countryCode="CO" value="57">Colombia (+57)</option>
                                        		<option data-countryCode="KM" value="269">Comoros (+269)</option>
                                        		<option data-countryCode="CG" value="242">Congo (+242)</option>
                                        		<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                        		<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                        		<option data-countryCode="HR" value="385">Croatia (+385)</option>
                                        		<option data-countryCode="CU" value="53">Cuba (+53)</option>
                                        		<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                        		<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                        		<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                        		<option data-countryCode="DK" value="45">Denmark (+45)</option>
                                        		<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                        		<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                        		<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                        		<option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                        		<option data-countryCode="EG" value="20">Egypt (+20)</option>
                                        		<option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                        		<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                        		<option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                        		<option data-countryCode="EE" value="372">Estonia (+372)</option>
                                        		<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                        		<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                        		<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                        		<option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                        		<option data-countryCode="FI" value="358">Finland (+358)</option>
                                        		<option data-countryCode="FR" value="33">France (+33)</option>
                                        		<option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                        		<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                        		<option data-countryCode="GA" value="241">Gabon (+241)</option>
                                        		<option data-countryCode="GM" value="220">Gambia (+220)</option>
                                        		<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                        		<option data-countryCode="DE" value="49">Germany (+49)</option>
                                        		<option data-countryCode="GH" value="233">Ghana (+233)</option>
                                        		<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                        		<option data-countryCode="GR" value="30">Greece (+30)</option>
                                        		<option data-countryCode="GL" value="299">Greenland (+299)</option>
                                        		<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                        		<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                        		<option data-countryCode="GU" value="671">Guam (+671)</option>
                                        		<option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                        		<option data-countryCode="GN" value="224">Guinea (+224)</option>
                                        		<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                        		<option data-countryCode="GY" value="592">Guyana (+592)</option>
                                        		<option data-countryCode="HT" value="509">Haiti (+509)</option>
                                        		<option data-countryCode="HN" value="504">Honduras (+504)</option>
                                        		<option data-countryCode="HU" value="36">Hungary (+36)</option>
                                        		<option data-countryCode="IS" value="354">Iceland (+354)</option>
                                        		<option data-countryCode="IR" value="98">Iran (+98)</option>
                                        		<option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                        		<option data-countryCode="IE" value="353">Ireland (+353)</option>
                                        		<option data-countryCode="IL" value="972">Israel (+972)</option>
                                        		<option data-countryCode="IT" value="39">Italy (+39)</option>
                                        		<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                        		<option data-countryCode="JO" value="962">Jordan (+962)</option>
                                        		<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                        		<option data-countryCode="KE" value="254">Kenya (+254)</option>
                                        		<option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                        		<option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                        		<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                        		<option data-countryCode="LA" value="856">Laos (+856)</option>
                                        		<option data-countryCode="LV" value="371">Latvia (+371)</option>
                                        		<option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                        		<option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                        		<option data-countryCode="LR" value="231">Liberia (+231)</option>
                                        		<option data-countryCode="LY" value="218">Libya (+218)</option>
                                        		<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                        		<option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                        		<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                        		<option data-countryCode="MO" value="853">Macao (+853)</option>
                                        		<option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                        		<option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                        		<option data-countryCode="MW" value="265">Malawi (+265)</option>
                                        		<option data-countryCode="MV" value="960">Maldives (+960)</option>
                                        		<option data-countryCode="ML" value="223">Mali (+223)</option>
                                        		<option data-countryCode="MT" value="356">Malta (+356)</option>
                                        		<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                        		<option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                        		<option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                        		<option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                        		<option data-countryCode="MX" value="52">Mexico (+52)</option>
                                        		<option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                        		<option data-countryCode="MD" value="373">Moldova (+373)</option>
                                        		<option data-countryCode="MC" value="377">Monaco (+377)</option>
                                        		<option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                        		<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                        		<option data-countryCode="MA" value="212">Morocco (+212)</option>
                                        		<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                        		<option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                        		<option data-countryCode="NA" value="264">Namibia (+264)</option>
                                        		<option data-countryCode="NR" value="674">Nauru (+674)</option>
                                        		<option data-countryCode="NP" value="977">Nepal (+977)</option>
                                        		<option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                        		<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                        		<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                        		<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                        		<option data-countryCode="NE" value="227">Niger (+227)</option>
                                        		<option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                        		<option data-countryCode="NU" value="683">Niue (+683)</option>
                                        		<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                        		<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                        		<option data-countryCode="NO" value="47">Norway (+47)</option>
                                        		<option data-countryCode="OM" value="968">Oman (+968)</option>
                                        		<option data-countryCode="PW" value="680">Palau (+680)</option>
                                        		<option data-countryCode="PA" value="507">Panama (+507)</option>
                                        		<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                        		<option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                        		<option data-countryCode="PE" value="51">Peru (+51)</option>
                                        		<option data-countryCode="PH" value="63">Philippines (+63)</option>
                                        		<option data-countryCode="PL" value="48">Poland (+48)</option>
                                        		<option data-countryCode="PT" value="351">Portugal (+351)</option>
                                        		<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                        		<option data-countryCode="QA" value="974">Qatar (+974)</option>
                                        		<option data-countryCode="RE" value="262">Reunion (+262)</option>
                                        		<option data-countryCode="RO" value="40">Romania (+40)</option>
                                        		<option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                        		<option data-countryCode="SM" value="378">San Marino (+378)</option>
                                        		<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                        		<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                        		<option data-countryCode="SN" value="221">Senegal (+221)</option>
                                        		<option data-countryCode="CS" value="381">Serbia (+381)</option>
                                        		<option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                        		<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                        		<option data-countryCode="SG" value="65">Singapore (+65)</option>
                                        		<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                        		<option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                        		<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                        		<option data-countryCode="SO" value="252">Somalia (+252)</option>
                                        		<option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                        		<option data-countryCode="ES" value="34">Spain (+34)</option>
                                        		<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                        		<option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                        		<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                        		<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                        		<option data-countryCode="SD" value="249">Sudan (+249)</option>
                                        		<option data-countryCode="SR" value="597">Suriname (+597)</option>
                                        		<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                        		<option data-countryCode="SE" value="46">Sweden (+46)</option>
                                        		<option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                        		<option data-countryCode="SI" value="963">Syria (+963)</option>
                                        		<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                        		<option data-countryCode="TH" value="66">Thailand (+66)</option>
                                        		<option data-countryCode="TG" value="228">Togo (+228)</option>
                                        		<option data-countryCode="TO" value="676">Tonga (+676)</option>
                                        		<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                        		<option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                        		<option data-countryCode="TR" value="90">Turkey (+90)</option>
                                        		<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                        		<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                        		<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                        		<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                        		<option data-countryCode="UG" value="256">Uganda (+256)</option>
                                        		 <option data-countryCode="GB" value="44">UK (+44)</option> 
                                        		<option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                        	    <option data-countryCode="GB" value="44">UK (+44)</option>
                                        		<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                        		<option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                        		 <option data-countryCode="US" value="1">USA (+1)</option> 
                                        		<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                        		<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                        		<option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                        		<option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                        		<option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                        		<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                        		<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                        		<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                        		<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                        		<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                        		<option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                        		<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                        	</optgroup>
                                        </select>
                                        <input type="number" name="number" class="form-control input-style-2 border-0" placeholder="Mobile Number">
                                        @if($errors->has('number'))<span class="text-danger">{{$errors->first('number')}}</span>@endif

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <input type="type" class="form-control input-style-2" name="department" value="{{old('depatment')}}" placeholder="Department">
                                                                                @if($errors->has('department'))<span class="text-danger">{{$errors->first('department')}}</span>@endif

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <input type="file" class="form-control input-style-2" id="white-color" name="file" value="{{old('file')}}" placeholder="...">
                                                                              @if($errors->has('file'))<span class="text-danger">{{$errors->first('file')}}</span>@endif

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control mb-4 input-style-2" name="message" placeholder="Your Description...">{{old('message')}}</textarea>
                                                                            @if($errors->has('message'))<span class="text-danger">{{$errors->first('message')}}</span>@endif

                                        <div class="contact-sub-btn text-center">
                                            <button type="submit" name="submit" id="submit" class="btn-4">
                                                Send Message &nbsp;
                                                <i class="fas fa-chevron-right"></i>
                                            </button>
                                        </div>
                                        <!-- Alert Message -->
                                        <div class="alert-notification">
                                            <div id="message" class="alert-msg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Credential -->
    
    <style>
        .creden-area .creden-right form input::placeholder,
        .creden-area .creden-right form textarea::placeholder{
            color:black;
        }
    </style>

    <!-- Start Review
    ============================================= -->
    {{--  <div class="review-area de-padding">
        <div class="container">
            <div class="review-wpr rev-sldr owl-carousel owl-theme">
                <div class="review-box">
                    <div class="quote">
                        <i class="icofont-quote-right quote-right"></i>
                        <i class="icofont-quote-left quote-left"></i>
                    </div>
                    <div class="review-pic">
                        <img src="assets/img/single/100x100.png" alt="thumb">
                    </div>
                    <div class="review-content">
                        <h4>John Monroe</h4>
                        <span>CEO</span>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, aperiam, voluptates. Quisquam voluptas animi, ratione.
                        </blockquote>
                        <div class="sh-de-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="quote">
                        <i class="icofont-quote-right quote-right"></i>
                        <i class="icofont-quote-left quote-left"></i>
                    </div>
                    <div class="review-pic">
                        <img src="assets/img/single/100x100.png" alt="thumb">
                    </div>
                    <div class="review-content">
                        <h4>Sinthiya Kaite</h4>
                        <span>Asst. Manager</span>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, aperiam, voluptates. Quisquam voluptas animi, ratione.
                        </blockquote>
                        <div class="sh-de-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="quote">
                        <i class="icofont-quote-right quote-right"></i>
                        <i class="icofont-quote-left quote-left"></i>
                    </div>
                    <div class="review-pic">
                        <img src="assets/img/single/100x100.png" alt="thumb">
                    </div>
                    <div class="review-content">
                        <h4>John blake</h4>
                        <span>Businessman</span>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, aperiam, voluptates. Quisquam voluptas animi, ratione.
                        </blockquote>
                        <div class="sh-de-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- End Review -->


    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-us pos-rel de-padding">
        <div class="contact-build">
            <img src="assets/img/bg/contact.png" alt="thumb">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="site-title text-center">
                        <h2>Contact us</h2>
                        <p class="mb-0">
                            No matter where you are in your quality management digital journey, Connexo has solutions for you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="contact-us-wpr">
                <div class="addr-box grid-3">
                    <div class="addr-box-single">
                        <div class="addr-icon">
                            <i class="icofont-google-map"></i>
                        </div>
                        <div class="addr-desc">
                            <h5>Office Address</h5>
                            <p class="mb-0">
                                Asia HQ : Connexo Asia Limited.
701 Silvercord Tower 2, 30 Canton Road, TST, Kowloon, Hong Kong.
                            </p>
                        </div>
                    </div>
                    <div class="addr-box-single">
                        <div class="addr-icon">
                            <i class="icofont-phone"></i>
                        </div>
                        <div class="addr-desc">
                            <h5>Phone Number</h5>
                            <p class="mb-0">
                                <span style="font-weight:bold;">Phone : </span>
                               +852 2162 7511
                            </p>
                            <p class="mb-0">
                                <span style="font-weight:bold;">Fax : </span>
                                +852 3011 5485
                            </p>
                        </div>
                    </div>
                    <div class="addr-box-single">
                        <div class="addr-icon">
                            <i class="icofont-email"></i>
                        </div>
                        <div class="addr-desc">
                            <h5>Email</h5>
                            <p class="mb-0">
                                info@connexo.io<br>
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Contact Us -->

    <!-- Start Blog
    ============================================= -->

    <!-- End Blog -->

</main>

<div class="clearfix"></div>
@endsection
