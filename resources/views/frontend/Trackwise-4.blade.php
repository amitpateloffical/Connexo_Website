@extends('frontend.layout.layout')
@section('content')
<main class="main">
    
    <style>
        .card-Digital-Thought {
            height: auto;
        }
        .card-Digital-Thought .card-title{
            display:-webkit-box;
            -webkit-line-clamp:2;
            -webkit-box-orient:vertical;
            overflow:hidden;
            height:51px;
        }
        .card-Digital-Thought .card-text{
            display:-webkit-box;
            -webkit-line-clamp:5;
            -webkit-box-orient:vertical;
            overflow:hidden;
            height:168px;
        }
        .trackwise-quality-4 .quality-4{
            padding:20px 5px;
            display:flex;
            justify-content:space-between;
            border-bottom:2px solid var(--clr-def);
        }
    </style>

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb" style="background: url('{{asset('assets/img/Gif-10.gif')}}')">
        <div class="container">
        <h2 class="breadcrumb-title">Trackwise</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">Trackwise</li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="digitaleco de-padding1 ">
         <div class="row">
              <div class="col-md-5 col-lg-5">
                   <img src="{{asset('assets/img/trackwise-4.webp')}}" class="img-fluid" style="max-width:400px; margin:0px auto; display:block;">
              </div>
              <div class="col-md-7 col-lg-7">
                    <p>TrackWise® is the world’s leading on-premises QMS software. It brings all your quality processes together in a single place to give you the big picture of your compliance and operational effectiveness. TrackWise offers several industry best-practice workflows and can also adapt to fit your existing process and workflow. Companies across several industries use TrackWise to increase efficiency, improve quality, achieve compliance and reduce risk.</p>
              </div>
         </div>
    </div>
    <div class="container">
       <div class="Digital-Thought">
             <h2 class="text-center" style="font-size: 37px;">TrackWise QMS Thought Leadership From Sparta Systems</h2>
          <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="card  card-Digital-Thought">
                     <div class="card-header font-weight-bold text-center">
                          Blog
                     </div>    
                     <img class="card-img-top" src="{{asset('assets/img/trackwisedigital/blog-dms-AdobeStock_TWD_561808476-1920x942.jpeg.webp')}}" alt="Card image cap">
                     <div class="card-body">
                         
                       <h5 class="card-title">Where are You on the Quality Management Maturity spectrum?</h5>
                         <p class="card-text">Life sciences manufacturers have diverse quality management capabilities–from emerging companies that are still struggling with foundational processes and…</p>
                       
                     </div>
                   </div>
                </div>
                 <div class="col-md-4 col-lg-4">
                        <div class="card card-Digital-Thought">
                     <div class="card-header font-weight-bold text-center">
                          Blog
                     </div>    
                      <img class="card-img-top" src="{{asset('assets/img/trackwisedigital/blog-dms-AdobeStock_240748853-1920x1080.jpeg.webp')}}" alt="Card image cap">
                     <div class="card-body">
                         
                       <h5 class="card-title">Reflecting on World Quality Week</h5>
                         <p class="card-text">The theme of this year’s World Quality celebration is Quality Conscience: Doing the Right Thing. In today’s newsletter, Sparta reflects on World Quality Week with valuable resources and key insights on quality from customers. We also want to know—what does quality conscience mean to you?</p>
                      
                     </div>
                   </div>
                </div>
                 <div class="col-md-4 col-lg-4">
                        <div class="card card-Digital-Thought">
                     <div class="card-header font-weight-bold text-center">
                          Case Study
                     </div>    
                       <img class="card-img-top" src="{{asset('assets/img/trackwisedigital/casestudy-Eisai.jpeg.webp')}}" alt="Card image cap">
                     <div class="card-body">
                         
                       <h5 class="card-title">Harnessing the Power of Data Integrity with ALCOA+</h5>
                         <p class="card-text">Ensure data integrity by following the ALCOA+ principles with the help of a digital quality management system (QMS).</p>
                       
                     </div>
                   </div>
                </div>
          </div>
       </div>
    </div>
    <div class="container ">
        
             <h1 class="text-center" style="font-size: 37px; margin:40px 0px;">TrackWise Helps Ensure Quality and Compliance</h1>
             
        <div class="row">
            <div class="col-lg-6">
                <div class="trackwise-quality-4">
                    <div class="quality-4">
                        <div>QUALITY DATA AND ACTIONABLE INSIGHTS</div>
                        <div>></div>
                    </div>
                    <div class="quality-4">
                        <div>ENSURE REGULATORY COMPLIANCE</div>
                        <div>></div>
                    </div>
                    <div class="quality-4">
                        <div>INTEGRATE QUALITY ACROSS THE ENTERPRISE</div>
                        <div>></div>
                    </div>
                    <div class="quality-4">
                        <div>FLEXIBILITY AND CHOICE</div>
                        <div>></div>
                    </div>
                </div>
            </div>
        </div>
  
  
    </div>
        </div> 
    </div>
@endsection    