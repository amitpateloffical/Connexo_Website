@extends('frontend.layout.layout')
@section('content')
<main class="main">

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb" style="background: url('{{asset('assets/img/Gif-10.gif')}}')">
        <div class="container">
        <h2 class="breadcrumb-title">Our Customers</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Our Customers</li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="blog-area de-padding" style="background:#003bb091;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="site-title text-center">
                        <h2 class="text-light">Business References</span></h2>
                        <p class="mb-0 text-light">
                            Some business references
                        </p>
                    </div>
                </div>
            </div>

            <div class="blog-wpr grid-3">
                @php
                    $data = DB::table('galleries')->get();
                @endphp
                @foreach ($data as $temp)
                <div class="blog-box text-center" style="align-content:center;  position: relative; box-sizing:border-box; box-shadow:0 8px 24px #014a992e; padding: 20px;
                    max-width:250px; aspect-ratio:1/0.8; margin:0px auto 20px; display: flex; justify-content: center; align-items: center; width: 100%; background:#ffffff;">

                    <div class="blog-pic">
                        <img src="{{ asset('uploads/image/'.$temp->gimage) }}" style="height:100%; width:100%;   align-content:center; object-fit:contain;" alt="thumb">
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</main>
@endsection
