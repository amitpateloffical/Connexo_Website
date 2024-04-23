<aside class="main-sidebar text-white elevation-4" style="background-color: #222b69;" >
    <!-- Brand Logo -->
    <a href="#" class=" text-white brand-link">
      <img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo" class="brand-image" style="opacity: .8;width:70%;height:80%;">
      <span class="brand-text text-white font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!--<div class="image">-->
        <!--  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">-->
        <!--</div>-->
        <!--<div class="info">-->
        <!--  <a href="#" class=" text-white d-block">HEAL</a>-->
        <!--</div>-->
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar  flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a  href="/dashboard" class="nav-link text-white ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/ad-servicecategory" class="nav-link text-white">
              <i class="nav-icon fa fa-handshake"></i>
              <p>
                Service-Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/ad-service" class="nav-link text-white">
              <i class="nav-icon fa fa-handshake"></i>
              <p>
                Service
              </p>
            </a>
          </li>
          {{--  <li class="nav-item">
            <a href="/ad-equipment" class="nav-link text-white">
              <i class="nav-icon fa fa-handshake"></i>
              <p>
                Equipment
              </p>
            </a>
          </li>  --}}
          <!--<li class="nav-item">-->
          <!--  <a href="/ad-solutioncategory" class="nav-link text-white">-->
          <!--    <i class="nav-icon fa fa-landmark"></i>-->
          <!--    <p>-->
          <!--      Solution-Category-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <li class="nav-item">
            <a href="/ad-industry" class="nav-link text-white">
              <i class="nav-icon fa fa-landmark"></i>
              <p>
                Solutions
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/ad-gallery" class="nav-link text-white">
              <i class="nav-icon fa fa-images"></i>
              <p>
                Our Customers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/ad-notification" class="nav-link text-white">
              <i class="nav-icon fa fa-bell"></i>
              <p>
                REGULATORY COMPLIANCE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="getquote" class="nav-link text-white">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Talk experts
              </p>
            </a>
          </li>


          <!--<li class="nav-item">-->
          <!--  <a href="/ad-client" class="nav-link text-white">-->
          <!--    <i class="nav-icon fa fa-users"></i>-->
          <!--    <p>-->
          <!--      Our Customers-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="/ad-contact" class="nav-link text-white">-->
          <!--    <i class="nav-icon fa fa-phone"></i>-->
          <!--    <p>-->
          <!--      Contact Us-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
