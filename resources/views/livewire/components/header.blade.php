     <!-- Spinner Start -->
     <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
         <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
             <span class="sr-only">Loading...</span>
         </div>
     </div>
     <!-- Spinner End -->






     <!DOCTYPE html>
     <html lang="en" dir="ltr">

     <head>

         <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4937677683366790"
             crossorigin="anonymous"></script>


         <meta charset="utf-8">
         <title>Digital Clock With Date</title>
         <link rel="stylesheet" href="style.css">
     </head>

     <body onload="initClock()">

     </body>

     </html>
     @php
         use App\Models\Customs;
         $news = Customs::where('type', 'news')->first()->data;
     @endphp

     <marquee behavior="scroll" direction="left" class="p-0 m-0 pt-3 d-flex bg-dark text-light">
         <div class="datetime d-flex p-0 m-0">
             <div class="date">
                 <span id="dayname">Day</span>,
                 <span id="month">Month</span>
                 <span id="daynum">00</span>,
                 <span id="year">Year</span>
             </div>
             &nbsp;&nbsp;&nbsp;
             <div class="time">
                 <span id="hour">00</span>:
                 <span id="minutes">00</span>:
                 <span id="seconds">00</span>
                 <span id="period">AM</span>
             </div>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <div>{!! $news !!}</div>
         </div>
     </marquee>

     <script type="text/javascript">
         function updateClock() {
             var now = new Date();
             var dname = now.getDay(),
                 mo = now.getMonth(),
                 dnum = now.getDate(),
                 yr = now.getFullYear(),
                 hou = now.getHours(),
                 min = now.getMinutes(),
                 sec = now.getSeconds(),
                 pe = "AM";

             if (hou >= 12) {
                 pe = "PM";
             }
             if (hou == 0) {
                 hou = 12;
             }
             if (hou > 12) {
                 hou = hou - 12;
             }

             Number.prototype.pad = function(digits) {
                 for (var n = this.toString(); n.length < digits; n = 0 + n);
                 return n;
             }

             var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October",
                 "November", "December"
             ];
             var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
             var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
             var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
             for (var i = 0; i < ids.length; i++)
                 document.getElementById(ids[i]).firstChild.nodeValue = values[i];
         }

         function initClock() {
             updateClock();
             window.setInterval("updateClock()", 1);
         }
     </script>

     <!-- Navbar & Hero Start -->
     <div class="container-xxl position-relative p-0">
         <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
             <a href="{{ url('/') }}" class="navbar-brand p-0">
                 <img src="{{ url('/assets/images/logo.png') }}" alt="Logo">
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                 <span class="fa fa-bars"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                 <div class="navbar-nav ms-auto py-0">

                     <a href="{{ url('/') }}"
                         class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>

                     {{-- 2 --}}
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             Noun Admission
                         </a>
                         <div class="dropdown-menu m-0">
                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('/tutors') ? 'active' : '' }}">
                                 Noun Admission Requirements
                             </a>

                             {{-- <a href="{{ url('noun-exam-summary') }}"
                                 class="dropdown-item {{ request()->is('noun-exam-summary') ? 'active' : '' }}">
                                 Exam Summary
                             </a> --}}


                             <a href="{{ url('tutors') }}" dropdown-item
                                 class="dropdown-item{{ request()->is('/tutors') ? 'active' : '' }}">

                                 Study Centres
                             </a>

                         </div>
                     </div>



                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             Noun Fees
                         </a>
                         <div class="dropdown-menu m-0">
                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('/tutors') ? 'active' : '' }}">
                                 Exam Summary
                             </a>
                         </div>
                     </div>

                     {{-- 3 --}}
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             TMA App
                         </a>
                         <div class="dropdown-menu m-0">
                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 TMA Solutions
                             </a>

                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 Past Questions
                             </a>
                         </div>
                     </div>

                     {{-- 4 --}}


                     {{-- 5 --}}

                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             Online Tutors
                         </a>
                         <div class="dropdown-menu m-0">

                             <a href="{{ route('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 <i class="bi bi-check-circle text-success"></i> Meet NOUN Verified Tutors
                             </a>

                             <a href="{{ route('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 Unverified Tutors
                             </a>

                             <a href="{{ route('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 NOUN Project Writing
                             </a>

                             <a href="{{ route('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 NOUN Seminar Writing
                             </a>

                             <a href="{{ route('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 NOUN Business Plan Writing
                             </a>

                             {{-- <a href="{{ route('tutor-login') }}" class="dropdown-item">Become Tutor</a> --}}
                         </div>
                     </div>

                     {{-- 6 --}}
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             Timetable
                         </a>
                         <div class="dropdown-menu m-0">
                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 Personalized Timetable
                             </a>

                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 Graduating List
                             </a>
                         </div>
                     </div>

                     {{-- 7 --}}
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             Community
                         </a>
                         <div class="dropdown-menu m-0">
                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 NOUN Community Forum
                             </a>

                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 Blog
                             </a>

                         </div>
                     </div>

                     {{-- 8 --}}
                     <div class="nav-item dropdown">

                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             Slips
                         </a>
                         <div class="dropdown-menu m-0">

                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">Generate
                                 NOUN Project Slip
                             </a>

                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">Exam
                                 NOUN Exam Clearance Slip
                             </a>
                             <a href="{{ url('tutors') }}"
                                 class="dropdown-item {{ request()->is('tutors') ? 'active' : '' }}">
                                 NOUN Seminar Slip
                             </a>
                         </div>
                     </div>


                     {{-- 9  Student  --}}
                     <div class="nav-item dropdown">

                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             Users
                         </a>
                         <div class="dropdown-menu m-0">
                             @if (Auth::guard('student')->check())
                                 <a href="{{ route('tutors') }}"
                                     class="dropdown-item {{ request()->is('student/tutors') ? 'active' : '' }}">Student
                                     Dashboard</a>
                                 <a href="{{ route('student-logout') }}" class="dropdown-item">Logout</a>
                             @else
                                 <a href="#" class="dropdown-item">Student Login</a>
                                 <a href="#" class="dropdown-item">Tutor Login</a>
                                 <a href="#" class="dropdown-item">Sign Up</a>
                             @endif
                         </div>
                     </div>
                 </div>
                 <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal"
                     data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
             </div>
         </nav>

         <div class="container-xxl py-5 bg-primary hero-header mb-5">
             <div class="container my-5 py-5 px-lg-5">
                 <div class="row g-5 py-5">

                     @stack('page')

                 </div>
             </div>
         </div>
     </div>
     <!-- Navbar & Hero End -->


     <!-- Full Screen Search Start -->
     <div class="modal fade" id="searchModal" tabindex="-1">
         <div class="modal-dialog modal-fullscreen">
             <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                 <div class="modal-header border-0">
                     <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                         aria-label="Close"></button>
                 </div>
                 <div class="modal-body d-flex align-items-center justify-content-center">
                     <div class="input-group" style="max-width: 600px;">
                         <input type="text" class="form-control bg-light border-light p-3"
                             placeholder="Type search keyword">
                         <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Full Screen Search End -->
