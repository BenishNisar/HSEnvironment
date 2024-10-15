<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Dashboard_assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset( 'Dashboard_assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('Dashboard_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset  ('Dashboard_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset ('Dashboard_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="'{{ asset ('Dashboard_assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset ('Dashboard_assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset ('Dashboard_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset  ('Dashboard_assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset( 'Dashboard_assets/css/style.css')}}" rel="stylesheet">
  <style>

.nav-link {
    color: white;
    background-color: transparent; /* Removing background colors */
    transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover */
  }

  .nav-link:hover {
    background-color: green; /* Background becomes green on hover */
    color: darkgrey; /* Text color becomes dark grey */
  }

  .nav-item i {
    color: inherit; /* Icons take the same color as text */
  }
  .logo-img {
    width: 300px;  /* Set fixed width */
    height: 250px; /* Set fixed height */
    object-fit: contain; /* Ensures the image fits within the bounds without distortion */
    margin: 0 auto; /* Center the image */
}


html, body {
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
  margin: 0;
}

main {
  flex: 1;
}

footer {
  background-color: #f8f9fa;
  padding: 10px;
  text-align: center;
  position: relative;

  bottom: 0;
}





 </style>


  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">


    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('Dashboard_assets/img/health_logo.png') }}"  alt="Logo">
<span>Health Safety</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <div class="search-bar mt-3">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->




        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
            data-bs-toggle="dropdown"
            onmouseover="this.style.backgroundColor='transparent';"
            onmouseout="this.style.backgroundColor='transparent';">

            <img src="{{ asset('Dashboard_assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
         </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" >

    <ul class="sidebar-nav" id="sidebar-nav" >

      <li  class="nav-item" >
        <a  class="nav-link"  href="{{ asset("dashboard") }}">
            <i class="fas fa-hard-hat text-dark"></i>

          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li   class="nav-item">
        <a   class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
            <i style="color:black;" class="fas fa-users"></i>
            <span>Users Manage</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Users </span>
            </a>
          </li>

          <li>
            <a href="{{ asset('dashboard/admin/role') }}">
              <i class="bi bi-circle"></i><span>Roles</span>
            </a>
          </li>



        </ul>
      </li>



      <li class="nav-item" >
        <a   class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i style="color: brown;" class="fas fa-exclamation-triangle"></i>
            <span>Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a   href="{{ asset("dashboard/admin/incidents") }}">
              <i class="bi bi-circle"></i><span >Incidents</span>
            </a>
          </li>
          <li>

            <a   href="{{ asset("dashboard/admin/investigations") }}">
              <i class="bi bi-circle"></i><span>Investigations</span>
            </a>
          </li>
          <li>
            <a  href="components-badges.html">
              <i class="bi bi-circle"></i><span>
                Safe Manhours</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->



      <li class="nav-item">
        <a  class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i  class="fas fa-clipboard-check"></i>
            <span>Safety Inspections </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Safety Audits </span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Training Needs Assessment (TNA) </span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Training Planning</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Training Effectiveness</span>
            </a>
          </li>

          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Safety Audits</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->





      <li class="nav-item">
        <a  class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i style="color: green" class="bi bi-gem"></i><span>Safety Communications </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ asset('dashboard/admin/role') }}">
              <i class="bi bi-circle"></i><span>Risk Assessments</span>
            </a>
          </li>


          <li>
            <a href="{{ asset('dashboard/admin/role') }}">
              <i class="bi bi-circle"></i><span>Department Safety</span>
            </a>
          </li>


          <li>
            <a href="{{ asset('dashboard/admin/role') }}">
              <i class="bi bi-circle"></i><span>Compliance Tracking</span>
            </a>
          </li>
          <li>
            <a href="{{ asset('dashboard/admin/role') }}">
              <i class="bi bi-circle"></i><span>Corrective Actions</span>
            </a>
          </li>
          <li>
            <a href="{{ asset('dashboard/admin/role') }}">
              <i class="bi bi-circle"></i><span>Preventive Actions </span>
            </a>
          </li>

        </ul>
      </li><!-- End Icons Nav -->







      <li class="nav-item">
        <a   class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="fas fa-stethoscope"></i>
            <span>Medical Testing</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Health Screening</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span> Emergency Plans </span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->




      <li   class="nav-item">
        <a  class="nav-link collapsed" data-bs-target="#environment-nav" data-bs-toggle="collapse" href="#">
            <i style="color: green" class="fas fa-leaf"></i>
            <span>ENVIRONMENTAL REQUIREMENTS</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="environment-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Emissions Monitoring </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Energy Production</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Water Usage Records </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Effluents Handling </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Legal Compliance </span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a  class="nav-link collapsed" data-bs-target="#safe-nav" data-bs-toggle="collapse" href="#">
            <i style="color: brown" class="fas fa-globe"></i>
            <span> Sustainability Requirements</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="safe-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Fuel & Energy Usage </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>GHG Emissions </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Water Usage Records </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Water Management </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Soil Management </span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Human Rights Compliance </span>
            </a>
          </li>




        </ul>
      </li>


      <li class="nav-item">
        <a  class="nav-link collapsed" data-bs-target="#fuel-nav" data-bs-toggle="collapse" href="#">
            <i style="color:#c92e27;" class="fas fa-apple-alt"></i>
            <span>FOOD SAFETY </span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="fuel-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Hazard / Risk Assessments </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Internal Audits  </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Complaint Handling  </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Non-Conformance Control </span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Maintenance & Calibration  </span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Supplier Management </span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>IMS Training Management</span>
            </a>
          </li>



        </ul>
      </li>




      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{ url('dashboard/admin/incidents') }}">
          <i style="color:black ;" class="bi bi-person"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a  class="nav-link collapsed" href="{{ url('dashboard/admin/incidents') }}">
            <i style="color: blue;"
             class="bi bi-chat-dots"></i>
          <span>Feedback</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a style="background-color:#17d3ba;color:white;" class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a  class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a  class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a  class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a  class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a  class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->







  <main id="main" class="main">

    @yield('AdminContent')
  </main>



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>Health Safety And Environment</span></strong>. All Rights Reserved
        </div>


      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{ asset ('Dashboard_assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset  ('Dashboard_assets/vendor/chart.js/chart.umd.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/echarts/echarts.min.js')}}"></script>
      <script src="{{ asset('Dashboard_assets/vendor/quill/quill.js')}}"></script>
      <script src=  "{{ asset( 'Dashboard_assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
      <script src="{{asset  ('Dashboard_assets/vendor/tinymce/tinymce.min.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/php-email-form/validate.js')}}"></script>

      <!-- Template Main JS File -->
      <script src="{{  asset('Dashboard_assets/js/main.js')}}"></script>

    </body>

    </html>
