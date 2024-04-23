@extends('frontend.layout.layout')
@section('content')
<main class="main">

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb" style="background: url(https://www.chemanager-online.com/sites/default/files/styles/gallery/public/2021-09/nichtverwenden_adobestock_236506650.jpg?h=3a42c0f3&itok=6DSk8raT)">
        <div class="container">
        <h2 class="breadcrumb-title">{{ $data->title }}</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">{{ $data->title }}</li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Product
    ============================================= -->
    <div class="product-area service-single bg de-padding">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">
                        <div class="theme-single">
                            <div class="theme-pic mb-30">
                                <img src="{{ asset('uploads/image/'.$data->img) }}" class="big-pic" alt="thumb">
                                <h2 class="pdt-title">{{ $data->title }} </h2>
                            </div>
                            <div class="theme-info">
                                <div class="theme-desc">
                                    <p class="mb-30">
                                       {!! $data->desc !!}
                                    </p>
                                    <!--<ul class="about-list colmn-2 mb-30">-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--       Business Process Optimization-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--        Requirement Definition-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--        Solution design and implementation-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--        Data migration-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--        Integration and reporting-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--        Testing and validation-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--        Program management-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--        Change management-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <i class="icofont-check"></i>-->
                                    <!--       Digital solution development-->
                                    <!--    </li>-->
                                    <!--</ul>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product -->

</main>

<div class="clearfix"></div>
@endsection
