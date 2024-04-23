@extends('frontend.layout.layout')
@section('content')
<main class="main">

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb" style="background: url('{{asset('assets/img/Gif-10.gif')}}')">
        <div class="container">
        <h2 class="breadcrumb-title">{{ $sub->name }}</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">{{ $sub->name }}</li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services
    ============================================= -->
    <div class="service-area pos-rel bg de-padding">
        <div class="faq-shape">
            <img src="{{ asset('assets/img/gallery/gallery-bg.jpg') }}" alt="thumb">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="site-title text-center">
                        <h2>Services</h2>
                        <p class="mb-0">
                            We are together with you every step of the way – in ensuring usability and your compliance is always our top priority.
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog-wpr" id="service-grid" style="margin-bottom: 60px; padding: 20px 10px; box-shadow: 0 8px 24px #80808040; border-radius: 20px;">
                <div class="head text-center" style="font-size: 2.5rem; margin-bottom: 20px; font-weight: bold; color: #d10808;">
                    Key Services
                </div>
                <div class="row">
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>GxP Risk Assessment & Benchmarking 
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Support of inspection readiness and post audit response preparation
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Life Science Software Validation & Implementation 
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Development & Implementation of Quality Systems 
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Training & Coaching
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Support in Remediation plans and CAPAs 
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Due Diligence in M & A 
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Performing Internal Inspections to Ensure All Time Readiness and Compliance 
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i> Building Culture of Quality
                    </div>
                     <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>EQMS (EDMS)
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Manufacturing Execution System (MES)
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Electronic Batch Manufacturing Record(EBMR) 
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Distributed Control Systems (DCS)
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>PLCs & SCADA
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Environmental Monitoring Systems 
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Electronic Log Books
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i> Access Control Systems
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Learning Management Systems (LMS)
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Warehouse Management System   
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Track and Trace
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Barcode Scanners & Barcode Labels
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>GxP Audit Remediation
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>CSV & CSA for all GxP Systems
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>GxP Training
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>GxP Risk Assessment & Gap Analysis
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Version Upgrades and Patch Management
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>AI Based FDA Observation Management
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i> Data Analytics & Visualisation in line with  USFDA Process Metrics Guide
                    </div>
                    <div class="d-flex align-items-baseline col-lg-4 col-md-6">
                        <i class="icofont-hand-right me-3" style="color:#d10808"></i>Risk Based User Access Management for  GxP Systems
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="site-title text-center">
                        <h2>{{ $sub->name }}</h2>
                        <p class="mb-0">
                           {{$sub->description}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="service-wpr row grid-3" style="display:flex; justify-content:center; grid-gap:0;">
                @foreach ($data as $temp)
                <div class="col-lg-4 col-md-6">
                    <div class="service-box" style="margin-bottom:20px;">
                        <div class="service-pic">
                            <a href="{{ asset('uploads/image/'.$temp->photo) }}">
                                <img src="{{ asset('uploads/image/'.$temp->photo) }}" class="service-1" alt="thumb">
                            </a>
                        </div>
                        <div class="service-icon">
                            <i class="icofont-architecture"></i>
                        </div>
                        <div class="service-desc">
                           
                                <h4>{{ $temp->name }}</h4>
                       
                            <p style="-webkit-line-clamp: 1; height: 28px;">
                                {!! $temp->dis !!}
                            </p>
                            <div class="viewdetails" data-id="{{$temp->id}}" data-bs-toggle="modal" data-bs-target="#service-modal" style="color: #d10808; cursor: pointer;">
                                Read More
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            

            </div>


        </div>
    </div>
    <!-- End Services -->

</main>

<div class="clearfix"></div>


<div class="modal fade" id="service-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Services</h4>
        <!--<button type="button" class="btn-close" data-bs-dismiss="modal"></button>-->
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <div id="auditTableinfo"></div>
       
      </div>

    </div>
  </div>
</div>


<style>
    #service-modal .image {
        width:100%;
        aspect-ratio:1/0.6;
        margin-bottom:20px;
    }
    
    #service-modal .title {
        font-size: 2.4rem;
        font-weight: bold;
        margin-bottom: 5px;
    }
    
    #service-modal .content {
        font-size: 1.5rem;
        text-align: justify;
        color: black;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
 <script type='text/javascript'>
        $(document).ready(function() {

            $('.service-desc').on('click', '.viewdetails', function() {
                var auditid = $(this).attr('data-id');

                if (auditid > 0) {

                    // AJAX request
                    var url = "{{ route('service.detail', [':auditid']) }}";
                    url = url.replace(':auditid', auditid);

                    // Empty modal data
                    $('#auditTableinfo').empty();

                    $.ajax({
                        url: url,
                        dataType: 'json',
                        success: function(response) {

                            // Add employee details
                            $('#auditTableinfo').append(response.html);

                            // Display Modal
                            $('#service-modal').modal('show');
                        }
                    });
                }
            });

        });
    </script>
@endsection
