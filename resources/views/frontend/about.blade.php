@extends('frontend.layout.layout')
@section('content')
<main class="main">

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb" style="background: url('{{asset('assets/img/Gif-10.gif')}}')">
        <div class="container">
        <h2 class="breadcrumb-title">About Us</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="team-area bg de-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="site-title text-center">
                        <h2>About Us</h2>
                        <p class="mb-0">
                            COMPANY AT A GLANCE
                        </p>
                    </div>
                </div>
            </div>

            <div class="team-wpr">
                <p class="mb-0 text-center">
                    Founded in 2009, Connexo is leading Life Science Technical Solutions & Compliance Consulting Company, focusing on Digital Transformation across various verticals i.e. Manufacturing, Quality, R&D, QC, RA, Environmental Sustainability etc.

                    Connexo is a key player for the Consulting, Implementation, Version Upgrade and Operational Management of TrackWise and TrackWise DIGITAL, a world-class EQMS software.
                    Headquartered in Hong Kong and operating in many countries through its regional branch network, Connexo is world’s trusted and proven partner through entire product life cycle.
                </p>
            </div>
        </div>
    </div>

    <!-- Start About
    ============================================= -->
    <div class="about-area pos-rel de-padding">
        {{--  <div class="vector-dozer">
            <img src="assets/img/about/vector-dozer.png" class="dozer-1" alt="thumb">
            <img src="assets/img/about/about-line.png" class="dozer-2" alt="thumb">
        </div>  --}}
        <div class="container">
            <div class="about-wpr">
                <div class="row align-items-center g-5">
                    <div class="col-xl-7">
                        <div class="about-left">
                            <div class="about-left-pic">
                                <img src="{{ asset('assets/img/about/Growth2.jpg') }}" class="about-pic-1" alt="thumb">
                                <!--<img src="https://images.unsplash.com/photo-1622675363311-3e1904dc1885?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDl8fHRlYW13b3JrfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="about-pic-2" alt="thumb">-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-right">
                            <h2 class="about-title">
                                OUR  <span>TEAM</span> !
                            </h2>
                            <p class="about-txt">
                                An experienced and highly calibrated team of professional consultants and dedicated solution
                               engineers for TrackWise and TrackWise DIGITAL implementation and Compliance Wire (LMS).
                            </p>
                            <ul class="about-list">
                                <li>
                                    <i class="icofont-check"></i>
                                    EQMS, EDMS and LMS Focused
                                </li>
                                <li>
                                    <i class="icofont-check"></i>
                                    Professional Validation Services
                                </li>
                                <li>
                                    <i class="icofont-check"></i>
                                    Experience and Expertise across industries
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Team
    ============================================= -->

    <!-- End Team -->

    <!-- Start Video Intro
    ============================================= -->
    <div class="vidz-area mt-5">
        <div class="de-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class=" text-center">
                            <h2 class="about-title">CONNEXO <span>GLOBAL </span> NETWORK</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-xl-4">
                    <div class="mb-30">
                        <h4 class="">

                            Head office in Hong Kong
                        </h4>
                        <ul class="about-list">
                            <li>
                                <i class="icofont-check"></i>
                                Connexo Asia Limited.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="">

                            Regional Office

                        </h4>
                        <ul class="about-list">
                            <li>
                                <i class="icofont-check"></i>
                                India (Central India)
                            </li>
                            <li>
                                <i class="icofont-check"></i>
                                Indonesia (Surabaya)
                            </li>
                            <li>
                                <i class="icofont-check"></i>
                                USA (Virginia)
                            </li>
                            <li>
                                <i class="icofont-check"></i>
                                Korea (Seoul)
                            </li>
                            <li>
                                <i class="icofont-check"></i>
                               Japan (Tokyo)
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8">
    <!--                <video width="800px" height="500px"-->
    <!--    controls="controls"/>-->
         
    <!--    <source src="assets/Pre-Comp.m4v"-->
    <!--        type="video/mp4">-->
    <!--</video>-->
                    <img src="{{asset('assets/map.gif')}}" alt="thumb">
                    {{--  <div class="pl">
                        <a href="https://youtu.be/mZXetb1TPEg" class="item popup-youtube play-bt">
                            <i class="icofont-play"></i>
                        </a>
                    </div>  --}}
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Intro -->
    <div class="review-area de-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class=" text-center">
                        <h2 class="about-title">BUSINESS <span>AREA </span> </h2>

                    </div>
                </div>
            </div>
            <div class="review-wpr" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                <div class="review-box">
                    <div class="review-content">
                        <h4>Professional IT Services</h4>

                        <ul class="about-list">
                            <li>
                                <i class="icofont-check"></i>
                                Consulting / Implementation / Maintenance for EQMS, EDMS, LIMS, MES, EBMR, ELogbook, WMS, LMS.
                            </li>
                            <li>
                                <i class="icofont-check"></i>
                                Life Science System Validation Services
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="review-box">
                    <div class="review-content">
                        <h4>Data Analytics Application</h4>

                        <ul class="about-list">
                            <li>
                                <i class="icofont-check"></i>
                                <!--AI-based Sensing Air Quality for Healthcare Institutions (Hospitals, Pharma..)-->
                                Data mining & Dashboards for meaningful actionable insight.
                            </li>
                            <li>
                                <i class="icofont-check"></i>
                                GDPR compliance Personal Data Protection
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<div class="clearfix"></div>
@endsection
