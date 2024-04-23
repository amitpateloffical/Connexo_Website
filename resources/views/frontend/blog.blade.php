@extends('frontend.layout.layout')
@section('content')
<main class="main">

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb" style="background: url('{{asset('assets/img/Gif-10.gif')}}')">
        <div class="container">
        <h2 class="breadcrumb-title">News</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">News</li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-page-area bg de-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <aside class="sidebar">
                        <!-- Search-->
                        <div class="widget search">
                            <h5 class="work-title">Search</h5>
                            <form class="search-form">
                                <input type="text" class="input-style-2" placeholder="Search">
                                <button class="btn-sub">
                                    <i class="icofont-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- Category -->
                        <div class="widget category">
                            <h5 class="work-title">Category</h5>
                            <div class="category-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-attachment"></i>
                                            <span>News and events</span>
                                        </a>
                                    </li>
                                    <!--<li>-->
                                    <!--    <a href="#">-->
                                    <!--        <i class="icofont-attachment"></i>-->
                                    <!--        <span>BROCHURES & DATA SHEETS</span>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="#">-->
                                    <!--        <i class="icofont-attachment"></i>-->
                                    <!--        <span>Videos</span>-->
                                    <!--    </a>-->
                                    <!--</li>-->

                                </ul>
                            </div>
                        </div>
                        <!-- Recent Post -->
                        <div class="widget recent-post">
                            <h5 class="work-title">Recent Post</h5>
                            <div class="recent-post-single">
                                {{--  <div class="recent-post-pic">
                                    <img src="assets/img/single/80x80.png" alt="thumb">
                                </div>  --}}
                                <div class="recent-post-bio">
                                    <h6>
                                        Connexo Newsletter – Jan. 2019
                                    </h6>
                                    {{--  <span>
                                        <i class="icofont-ui-user"></i>
                                        09 June, 2021
                                    </span>  --}}
                                </div>
                            </div>
                            <div class="recent-post-single">
                                <div class="recent-post-pic">
                                    <img src="assets/img/single/80x80.png" alt="thumb">
                                </div>
                                <div class="recent-post-bio">
                                    <h6>
                                        Connexo Participated in Sparta Partner Showcase Event in Mumbai, India
                                    </h6>
                                    {{--  <span>
                                        <i class="icofont-ui-user"></i>
                                        09 June, 2021
                                    </span>  --}}
                                </div>
                            </div>
                            <div class="recent-post-single">
                                <div class="recent-post-pic">
                                    <img src="assets/img/single/80x80.png" alt="thumb">
                                </div>
                                <div class="recent-post-bio">
                                    <h6>
                                        Connexo Sponsored and Exhibited at 2018 Winter PQM Academic Conference
                                    </h6>
                                    {{--  <span>
                                        <i class="icofont-ui-user"></i>
                                        09 June, 2021
                                    </span>  --}}
                                </div>
                            </div>
                        </div>
                        <!-- Recent Post -->
                        <div class="widget sidebar-tags">
                            <h5 class="work-title">Tags</h5>
                            <div class="tags">
                                <a href="#" class="tags-link">News</a>
                                <a href="#" class="tags-link">Events</a>
                                <a href="#" class="tags-link">BROCHURES</a>
                                <a href="#" class="tags-link">DATA SHEETS
                                </a>
                                <a href="#" class="tags-link">Videos</a>
                                {{--  <a href="#" class="tags-link">Laravels</a>  --}}
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-8">
                    <div class="blog-pagination">
                        <div class="blog-page-wpr">
                            <div class="blog-page-single">
                                {{--  <div class="blog-pic">
                                    <img src="#" alt="thumb">
                                </div>  --}}
                                <div class="blog-content">

                                    <div class="blog-user mb-30">
                                        <div class="blog-user-info">
                                            {{--  <img src="assets/img/single/user-1-s.png" alt="thumb">  --}}
                                            <div class="blog-user-bio">
                                                {{--  <h4>Christian Bale</h4>  --}}
                                                <span>Admin</span>
                                            </div>
                                        </div>
                                        <ul class="blog-mta">
                                            <li><i class="fas fa-calendar-alt"></i>September 25, 2019</li>
                                            {{--  <li><i class="fas fa-comments"></i>23</li>
                                            <li><i class="fas fa-thumbs-up"></i>25</li>  --}}
                                        </ul>
                                    </div>
                                    <div class="blog-page-up">
                                        <h3 class="blog-page-title mb-30">
                                            Connexo Participated in a GPA-sponsored Education Seminar in Guangzhou, China.
                                        </h3>

                                    </div>
                                    <div class="blog-text">
                                        <p class="mb-0">
                                            Connexo China, a leading EQMS implementation and consulting services provider across Greater China, participated in a training and education seminar for pharmaceutical quality VPs and representatives from Sept 25 to 27 2019. The event was sponsored by the  ...<span class="text-danger">Read more</span>
                                        </p>
                                    </div>
                                    <div class="red-more mt-30">
                                        <a href="single.html" class="btn-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-page-single">
                                {{--  <div class="blog-pic">
                                    <img src="#" alt="thumb">
                                </div>  --}}
                                <div class="blog-content">

                                    <div class="blog-user mb-30">
                                        <div class="blog-user-info">
                                            {{--  <img src="assets/img/single/user-1-s.png" alt="thumb">  --}}
                                            <div class="blog-user-bio">
                                                <h4>Mumbai, India</h4>
                                                <span>Admin</span>
                                            </div>
                                        </div>
                                        <ul class="blog-mta">
                                            <li><i class="fas fa-calendar-alt"></i>September 20, 2019</li>
                                            {{--  <li><i class="fas fa-comments"></i>23</li>
                                            <li><i class="fas fa-thumbs-up"></i>25</li>  --}}
                                        </ul>
                                    </div>
                                    <div class="blog-page-up">
                                        <h3 class="blog-page-title mb-30">
                                            Connexo Participated in Sparta Partner Showcase Event in Mumbai, India
                                        </h3>

                                    </div>
                                    <div class="blog-text">
                                        <p class="mb-0">
                                            Connexo, a leading EQMS implementation and consulting services provider across India, Greater China and Korea, participated in a Sparta Partner Showcase Event in Sept 20, 2019.  ...<span class="text-danger">Read more</span>
                                        </p>
                                    </div>
                                    <div class="red-more mt-30">
                                        <a href="single.html" class="btn-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-page-single">
                                {{--  <div class="blog-pic">
                                    <img src="#" alt="thumb">
                                </div>  --}}
                                <div class="blog-content">

                                    <div class="blog-user mb-30">
                                        <div class="blog-user-info">
                                            {{--  <img src="assets/img/single/user-1-s.png" alt="thumb">  --}}
                                            <div class="blog-user-bio">
                                                <h4>HONG KONG</h4>
                                                <span>Admin</span>
                                            </div>
                                        </div>
                                        <ul class="blog-mta">
                                            <li><i class="fas fa-calendar-alt"></i>April 08, 2019</li>
                                            {{--  <li><i class="fas fa-comments"></i>23</li>
                                            <li><i class="fas fa-thumbs-up"></i>25</li>  --}}
                                        </ul>
                                    </div>
                                    <div class="blog-page-up">
                                        <h3 class="blog-page-title mb-30">
                                            Connexo Provides TrackWise Consulting/Implementation Services to CBMG in China
                                        </h3>

                                    </div>
                                    <div class="blog-text">
                                        <p class="mb-0">
                                            Connexo, a leading provider of TrackWise QMS consulting/implementation services in Asia, has become the appointed QMS implementation partner to Cellular Biomedicine Group Inc (CBMG), a NASDAQ listed company in China  ...<span class="text-danger">Read more</span>
                                        </p>
                                    </div>
                                    <div class="red-more mt-30">
                                        <a href="single.html" class="btn-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination">
                            <span class="page-value current">1</span>
                            <a class="page-value" href="#">2</a>
                            <a class="next page-value" href="#">
                                <i class="ti ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

</main>

<div class="clearfix"></div>
@endsection
