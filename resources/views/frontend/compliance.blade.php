@extends('frontend.layout.layout')
@section('content')
<main class="main">

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb" style="background: url('{{asset('assets/img/Gif-10.gif')}}')">
        <div class="container">
        <h2 class="breadcrumb-title">ComplianceWire</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">ComplianceWire </li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="digitaleco de-padding1 ">
         <div class="row">
              <div class="col-md-5 col-lg-5">
                    <a href="https://www.ul.com/software/compliancewire-gxp-learning-and-qualification-management-system-life-science" target="_blank">
                        <img src="{{asset('uploads/image/1675872727.jpg')}}" class="img-fluid">
                    </a>
              </div>
              <div class="col-md-7 col-lg-7">
                    <h2 style="font-size: 2.25em; line-height: 1.361em;">Enabling a digital ecosystem to drive proactive quality across the supply chain</h2>
                    <p>ComplianceWire️® is the industry-leading training learning management system (LMS) for compliance and qualification management specializing in life sciences organizations and is compliant with 21 CFR Part 11 and EU Annex 11 validation requirements. This proven technology is used globally by pharmaceutical, medical device and biologics companies as well as global regulatory authorities in the U.S., China, Brazil and India to promote public health through training related to the development of safe and effective medicines and medical devices
</p>
              </div>
         </div>
    </div>
<!--    <div class="container">-->
<!--       <div class="Digital-Thought">-->
<!--             <p class="text-center" style="font-size: 37px;">TrackWise QMS Thought Leadership From Sparta Systems</p>-->
<!--          <div class="row">-->
<!--                <div class="col-md-4 col-lg-4">-->
<!--                    <div class="card  card-Digital-Thought1">-->
<!--                     <div class="card-header font-weight-bold text-center">-->
<!--                          Blog-->
<!--                     </div>    -->
<!--                     <img class="card-img-top" src="{{asset('assets/img/trackwise12/blog-1670546537649.jpeg.webp')}}" alt="Card image cap">-->
<!--                     <div class="card-body">-->
                         
<!--                       <h5 class="card-title">Where Are You on the Quality Management Maturity Spectrum?</h5>-->
<!--                         <p class="card-text">Life sciences manufacturers have diverse quality management capabilities–from emerging companies that are still struggling with foundational processes and…</p>-->
                       
<!--                     </div>-->
<!--                   </div>-->
<!--                </div>-->
<!--                 <div class="col-md-4 col-lg-4">-->
<!--                        <div class="card card-Digital-Thought1">-->
<!--                     <div class="card-header font-weight-bold text-center">-->
<!--                          Blog-->
<!--                     </div>    -->
<!--                      <img class="card-img-top" src="{{asset('assets/img/trackwise12/WQW22_1200x627.webp')}}" alt="Card image cap">-->
<!--                     <div class="card-body">-->
                         
<!--                       <h5 class="card-title">Reflecting on World Quality Week</h5>-->
<!--                         <p class="card-text">The theme of this year’s World Quality celebration is Quality Conscience: Doing the Right Thing. In today’s newsletter, Sparta reflects on World Quality Week with valuable resources and key insights on quality from customers. We also want to know—what does quality conscience mean to you?</p>-->
                      
<!--                     </div>-->
<!--                   </div>-->
<!--                </div>-->
<!--                 <div class="col-md-4 col-lg-4">-->
<!--                        <div class="card card-Digital-Thought1">-->
<!--                     <div class="card-header font-weight-bold text-center">-->
<!--                          Blog-->
<!--                     </div>    -->
<!--                       <img class="card-img-top" src="{{asset('assets/img/trackwise12/blog-ALCOA.jpeg.webp')}}" alt="Card image cap">-->
<!--                     <div class="card-body">-->
                         
<!--                       <h5 class="card-title">Harnessing the Power of Data Integrity with ALCOA+</h5>-->
<!--                         <p class="card-text">Ensure data integrity by following the ALCOA+ principles with the help of a digital quality management system (QMS).</p>-->
                       
<!--                     </div>-->
<!--                   </div>-->
<!--                </div>-->
<!--          </div>-->
<!--       </div>-->
<!--    </div>-->
<!--    <div class="container ">-->
        
<!--             <h1 class="text-center mt-5 mb-5" style="font-size: 37px;">TrackWise Digital Helps Deliver High Quality Products</h1>-->
<!--             <div class="de-padding2 bg">-->
<!--                 <div class="accordion" id="accordionExample">-->
<!--  <div class="accordion-item">-->
<!--    <h2 class="accordion-header" id="headingOne">-->
<!--      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
<!--        QUALITY DATA AND ACTIONABLE INSIGHTS-->
<!--      </button>-->
<!--    </h2>-->
<!--    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">-->
<!--      <div class="accordion-body">-->
<!--        <p>Lower the risk of recalls and keep consumers safe by identifying trends and preventing problems before they occur. TrackWise offers a comprehensive look at quality across your organization. </p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="accordion-item">-->
<!--    <h2 class="accordion-header" id="headingTwo">-->
<!--      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
<!--        ENSURE REGULATORY COMPLIANCE-->
<!--      </button>-->
<!--    </h2>-->
<!--    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
<!--      <div class="accordion-body">-->
<!--        Save time and effort when reporting to regulatory agencies. TrackWise lets you create regulatory submissions electronically and receive confirmation of receipt.-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="accordion-item">-->
<!--    <h2 class="accordion-header" id="headingThree">-->
<!--      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
<!--        INTEGRATE QUALITY ACROSS THE ENTERPRISE-->

<!--      </button>-->
<!--    </h2>-->
<!--    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
<!--      <div class="accordion-body">-->
<!--      Ensure real-time interoperability among of all your enterprise systems. TrackWise can integrate with your ERP, CRM, LIMS and MES systems.-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="accordion-item">-->
<!--    <h2 class="accordion-header" id="headingfour">-->
<!--      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">-->
<!--        FLEXIBILITY AND CHOICE-->
<!--      </button>-->
<!--    </h2>-->
<!--    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">-->
<!--      <div class="accordion-body">-->
<!--        Extend the capabilities of TrackWise QMS with TrackWise Digital and QualityWise.ai with our unique hybrid solution. Take advantage of the reach and agility of cloud solutions at your own pace and see the power of AI-enabled quality.-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--        </div> -->
<!--    </div>-->
    
    
<!-- <div class="container">-->
<!--    <div class="de-padding2"> -->
<!--     <p class="text-center mt-5 mb-5" style="font-size: 37px;">The Most Trusted Enterprise-->
<!--Quality Management Software System</p>-->
<!--     <p class="text-center mt-5 mb-5" style="font-size: 17px;">Innovation built for Quality Management</p>-->
<!--         <div class="row">-->
<!--              <div class="col-md-4 col-lg-4">-->
<!--                   <div class="card bg cardinn">-->
<!--                       <div class="card-header" style="background: #000A41 linear-gradient(90deg,#000A41 0%,#00DBDE 100%) 0% 0% no-repeat;">-->
                           
<!--                       </div>-->
<!--                        <div class="card-body">-->
<!--                            <h3>BEST PRACTICE QUALITY PROCESSES</h3>-->
<!--                            <p>Based on Sparta’s 25+ years of experience, TrackWise Digital’s Quality Process Accelerators (QPAs) provide rapid value and streamline end-to-end digital quality.</p>-->
<!--                        </div>-->
<!--                   </div>-->
<!--              </div>-->
<!--               <div class="col-md-4 col-lg-4">-->
<!--                    <div class="card bg cardinn">-->
<!--                       <div class="card-header" style="background: #000A41 linear-gradient(90deg,#000A41 0%,#00DBDE 100%) 0% 0% no-repeat;">-->
                           
<!--                       </div>-->
<!--                        <div class="card-body">-->
<!--                            <h3>AI INSIGHTS</h3>-->
<!--                            <p>Achieve effective autocorrelation of quality records by rapidly searching through all available current and historical data to identify correlations, trends & patterns.</p>-->
<!--                        </div>-->
<!--                   </div>-->
<!--              </div>-->
<!--               <div class="col-md-4 col-lg-4">-->
<!--                    <div class="card bg cardinn">-->
<!--                       <div class="card-header" style="background: #000A41 linear-gradient(90deg,#000A41 0%,#00DBDE 100%) 0% 0% no-repeat;">-->
                           
<!--                       </div>-->
<!--                        <div class="card-body">-->
<!--                            <h3>HYBRID: A BRIDGE TO TRACKWISE DIGITAL</h3>-->
<!--                            <p>Leverage the existing investment you’ve made in TrackWise while taking advantage of the reach and agility of TrackWise Digital through a hybrid deployment.</p>-->
<!--                        </div>-->
<!--                   </div>-->
<!--              </div>-->
<!--         </div>-->
<!--        </div>  -->
<!--    </div>-->
<!--    <div class="container mt-2">-->
<!--         <div class="de-padding2">-->
<!--             <p class="text-center mt-5 mb-5" style="font-size: 37px;">More Quality Management Solutions</p>-->
<!--             <div class="row">-->
<!--                 <div class="col-md-3 col-lg-3 pt-5 pl-3" style=" padding-left: 29px;">-->
<!--                     <img src="{{asset('assets/img/trackwise12/Sparta_Consultation_icon_1-1-1.svg')}}" style="width: 38%;">-->
<!--                     <p style="font-size: 17px;padding-top:20px;">AUDIT MANAGEMENT</p>-->
<!--                 </div>-->
<!--                 <div class="col-md-3 col-lg-3">-->
<!--                    <img src="{{asset('assets/img/trackwise12/Manufacturing-Quality-Icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">CAPA</p>-->
<!--                 </div>-->
<!--                 <div class="col-md-3 col-lg-3">-->
<!--                     <img src="{{asset('assets/img/trackwise12/Digital-Shop-Floor-Icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">Change Management</p>-->
<!--                 </div>-->
<!--                  <div class="col-md-3 col-lg-3">-->
<!--                    <img src="{{asset('assets/img/trackwise12/R-and-D-Icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">Complaints Management</p>-->
<!--                 </div>-->
<!--                  <div class="col-md-3 col-lg-3">-->
<!--                     <img src="{{asset('assets/img/trackwise12/Deviations-icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">Deviations and Quality Events </p>-->
<!--                 </div>-->
<!--                  <div class="col-md-3 col-lg-3">-->
<!--                     <img src="{{asset('assets/img/trackwise12/Supply-Chain-Icon (1).svg')}}">-->
<!--                     <p style="font-size: 17px;">Document Management System </p>-->
<!--                 </div>-->
<!--                  <div class="col-md-3 col-lg-3">-->
<!--                     <img src="{{asset('assets/img/trackwise12/Nonconformance-out-of-spec-icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">Nonconformance</p>-->
<!--                 </div>-->
<!--                  <div class="col-md-3 col-lg-3">-->
<!--                     <img src="{{asset('assets/img/trackwise12/exception-icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">Out of Specification  </p>-->
<!--                 </div>-->
<!--                  <div class="col-md-3 col-lg-3">-->
<!--                     <img src="{{asset('assets/img/trackwise12/AI-Enabled-Icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">Quality Risk Management  </p>-->
<!--                 </div>-->
<!--                  <div class="col-md-3 col-lg-3">-->
<!--                     <img src="{{asset('assets/img/trackwise12/Supply-Chain-Icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">Supplier Quality Management   </p>-->
<!--                 </div>-->
<!--                  <div class="col-md-3 col-lg-3">-->
<!--                     <img src="{{asset('assets/img/trackwise12/exception-icon.svg')}}">-->
<!--                     <p style="font-size: 17px;">Training Management   </p>-->
<!--                 </div>-->
                 
<!--             </div>-->
<!--         </div>-->
<!--    </div>-->
     <!--<div class="container ">-->
     <!--    <div class="de-padding2" style="background:url('{{asset('assets/img/trackwise12/Sparta_Contact_4_new.jpg')}}')">-->
     <!--        <div class="row">-->
     <!--            <div class="col-md-6">-->
                     
     <!--            </div>-->
     <!--             <div class="col-md-6">-->
     <!--                <div class="card">-->
                         
     <!--                </div>-->
     <!--            </div>-->
     <!--        </div>-->
     <!--    </div>-->
     <!--</div>-->
@endsection    