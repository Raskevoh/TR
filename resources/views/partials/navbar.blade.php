<link rel="stylesheet" href="{{ asset('assets/css') }}">
  <div class="bg-info text-white fixed-top py-1" style="z-index:1100;">
    <marquee id="intakeMarquee"behavior="scroll" direction="left">
         January Intake Ongoing 🚀 — 
        <a href="{{ route('academic.programs') }}"
           class="btn btn-warning btn-sm mx-2"
           style="font-weight: bold; border-radius: 20px;">
           Apply Now
        </a>      
        — Limited slots — Enroll today!
    </marquee>
</div>
<div id="mainNavbar" class="container-fluid bg-light shadow-sm fixed-top" style="top:8px; z-index:1000;">

<div style="margin-top:30px;"></div>
  <header class="d-flex justify-content-between align-items-center text-primary py-3 bg-opacity-50 hover-success">
    <!-- Left side: Logo + Nav -->
    <div class="d-flex align-items-center fw-light fs-4">
      <a class="navbar-brand d-flex align-items-center text-decoration-none me-4" href="{{ route('home') }}">
        <img src="{{ asset('assets/img/logo.png') }}" 
     class="img-fluid me-2" 
     alt="Logo" 
     style="height: 70px; object-fit: contain;">
        <!-- <span class="text-uppercase fs-6 text-primary py-1 pt-sm-0 fst-italic">
          Siloam medical, technical<br>and commercial training college
        </span> -->
      </a>

      <ul class="nav nav-pills fs-5">
        <li class="nav-item"><a href="" class="nav-link">Administration</a></li>
  <li class="nav-item dropdown position-static">
    <div class="nav-link dropdown-toggle text-decoration-none" id="academicsDropdown" 
    role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Academics</div>
          <!-- Mega Menu -->
          <div class="dropdown-menu w-100 border-0 shadow-lg py-4" aria-labelledby="academicsDropdown">
            <div class="container">
              <div class="row">

                <!-- Programs column -->
                <div class="col-md-3">
                  <h6 class="fw-bold text-primary">Programs</h6>
                  <ul class="list-unstyled">
                    <li><a class="dropdown-item py-1" href="{{ route('academic.programs') }}">Courses</a></li>
                 
                    <li><a class="dropdown-item py-1" href="{{ route('school.packages') }}">Computer Studies</a></li>
                  </ul>
                </div>

                <!-- Departments column -->
              <div class="col-md-3">
                  <h6 class="fw-bold text-primary">Departments</h6>
                  <ul class="list-unstyled">
                    <li><a class="dropdown-item py-1" href="#">Health Sciences</a></li>
                    <li><a class="dropdown-item py-1" href="#">ICT & Computer Studies</a></li>
                    <li><a class="dropdown-item py-1" href="#">Bussiness & Commerce</a></li>
                  </ul>
                </div> 
                <!-- <div class="col-md-3">
                  <h6 class="fw-bold text-primary">Faculties</h6>
                  <ul class="list-unstyled">
                    <li><a class="dropdown-item py-1" href="#">Science</a></li>
                    <li><a class="dropdown-item py-1" href="#">Arts</a></li>
                    <li><a class="dropdown-item py-1" href="#">Business</a></li>
                  </ul>
                </div> -->
              <div class="col-md-3">
  <h6 class="fw-bold text-primary">Related Links</h6>
  <ul class="list-unstyled">
    <li>
      <a class="dropdown-item py-1" href="{{ asset('assets/Files/TIMETABLE.pdf') }}" target="_blank" rel="noopener noreferrer">
        Teaching Timetables
      </a>
    </li>
    <li>
      <a class="dropdown-item py-1" href="{{ asset('assets/Files/ACADEMIC CALENDAR.pdf') }}" target="_blank" rel="noopener noreferrer">
        Academic Calendars
      </a>
    </li>
     <li>
      <a class="dropdown-item py-1" href="" target="_blank" rel="noopener noreferrer" onclick="return false;">
        Fee Structures
      </a>
    </li>
  </ul>
</div>

              </div>
            </div>
          </div>
        </li>
        <li class="nav-item"><a href="{{ route('academic.faqs') }}" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
      </ul>
    </div>

    <!-- Right side: Staff | Student -->
    <!-- <div class="fs-5 text-right">
      <a href="{{ route('home')}}" class="text-decoration-none text-primary">Staff</a>
      <span class="text-dark mx-2">|</span>
      <a href="{{ route('home') }}" class="text-decoration-none text-primary">Student</a>
    </div> -->

  </header>
</div>
<script src="{{ asset('js/home.js') }}">
</script>
