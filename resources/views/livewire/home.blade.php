@push('title')
    <title>Home -Welcome to NOUN TMA Solutions Application</title>
@endpush

@push('page')
    <div class="col-lg-6 text-center text-lg-start">
        <h1 class="text-white mb-4 animated zoomIn"> National Open University of Nigeria, NOUN. <p>Welcome to NOUN Tma
                Solution App - Live Answers</h1>
        </p>
        <p class="text-white pb-3 animated zoomIn">A solution platform for all students of National Open University of
            Nigeria, NOUN. All in One! Simple, Intuitive and Highly innovative for best results.</p>
        <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">TMA Answers</a>
        <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Past Questions</a>
    </div>
    <div class="col-lg-6 text-center">
        <img class="img-fluid" src="{{ url('/assets/images/hero.png') }}" alt="">
    </div>
@endpush

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Learn more......</h6>
                    <h2 class="mt-2"></h2>
                </div>
                <p class="mb-4"><b><a href="http://nounloaded.com.ng">Nounloaded.com.ng</a></b> is one of its kind Web
                    Application that seeks to provide best suitable solutions for students of National Open University
                    of Nigeria, NOUN in terms of NOUN TMA Solutions, NOUN Past Questions and Answers, NOUN Course/Exams
                    Summary and connecting NOUN students with highly qualifies skilled tutors and many more features…..
                </p>

                <b>
                    <p>Tags:</p>
                </b>
                <p>www.nou.edu.ng</p>
                <p>www.nouonline.net</p>
                <p>www.elearn.nouedu2.net</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>NOUN Tma Live Answers</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>DOWNLOAD NOUN Past Questions
                        </h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Connect with qualify Tutors</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Make Money lecturing Online</h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ url('/assets/images/about.jpg') }}">
            </div>
        </div>
    </div>
</div>
<h2>
    {{-- ijazkhan --}}
    {{-- <p>National Open University, NOUN Whatsapp Group Link <a
            href="https://chat.whatsapp.com/DeNYpFAGRs3JNvUFiOul9Y">JOIN NOW
</h2></a>:</p> --}}
    <!-- About End -->


    {{-- ================ countdownd + new latter (copy from other website) ================ --}}


    <style>
        .cube-container {
            width: 200px;
            height: 200px;
            perspective: 800px;
            margin: 50px auto;
        }

        .cube {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            animation: rotate 8s infinite linear;
        }

        .face {
            position: absolute;
            width: 200px;
            height: 200px;
            color: green;
            font-size: 18px;
            text-align: center;
            line-height: 200px;
            background: transparent;
            opacity: 0.9;
            border: 2px solid;
            border-image: linear-gradient(to right, #ff6b6b, #355c7d, #557d35, #cfcf16, #a51f1f) 1;
            box-shadow: 0 0 100px green;
        }

        .front {
            transform: translateZ(100px);
        }

        .back {
            transform: rotateY(180deg) translateZ(100px);
        }

        .right {
            transform: rotateY(90deg) translateZ(100px);
        }

        .left {
            transform: rotateY(-90deg) translateZ(100px);
        }

        .top {
            transform: rotateX(90deg) translateZ(100px);
        }

        .bottom {
            transform: rotateX(-90deg) translateZ(100px);
        }

        .cube-container:hover .cube {
            animation-play-state: paused;
        }

        @keyframes rotate {
            0% {
                transform: rotateX(0) rotateY(0) rotateZ(0);
            }

            100% {
                transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
            }
        }
    </style>



    <!-- End Header -->


    <style>
        .countdown-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #2E8B57;
            padding: 20px;
            color: #fff;
        }

        .countdown-item {
            text-align: center;
        }

        .countdown-item-value {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .countdown-item-label {
            font-size: 18px;
        }

        @keyframes glow-animation {
            0% {
                text-shadow: 0 0 5px green;
            }

            50% {
                text-shadow: 0 0 20px seagreen;
            }

            100% {
                text-shadow: 0 0 5px green;
            }
        }

        .glowing-text {
            text-align: center;
            animation: glow-animation 2s infinite;
        }
    </style>
    <div class="container" style="text-align: center;">
        <button id="joinButton">Join WhatsApp Group</button>
    </div>
    {{-- countdown --}}

    <hr>
    <h3 class="glowing-text">NOUN Academic Calendar 2024_1</h3>
    @foreach ($countDowns as $countDown)
        <div class="d-flex justify-content-center my-3" id="countdown">
            <div class="col-md-8">
                <div class="timer">
                    <div style="text-align: center;" class="timer-box">
                        <div class="timer-title"
                            style="background-color: #007bff; padding: 10px; color: #fff; font-weight: bold; font-size: 16px;">
                            <strong>{{ $countDown->title ?? '--' }}</strong>
                        </div>
                        <div style="background-color: #f0f0f0 color: red; font-size: small;">
                            <span style="font-size: 16px; text-align: left; color: red; animation: glow 2s infinite;">
                                Days Left To Go:
                            </span>
                        </div>
                        <div class="timer-countdown"
                            style="background-color: #f0f0f0; font-family: 'Digital Clock', sans-serif; display: flex;">
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Days">
                                    <button type="button" class="btn" id="days_{{ $countDown->id }}"
                                        style="background-color: blue; color: white; font-weight: bold;"></button>
                                </div>
                                <div class="timer-label mb-2" style="font-family: 'Arial', sans-serif;"><span
                                        class="badge bg-warning text-dark">Days</span></div>
                            </div>
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Hours">
                                    <button type="button" class="btn" id="hours_{{ $countDown->id }}"
                                        style="background-color: blue; color: white; font-weight: bold;"></button>
                                </div>
                                <div class="timer-label"><span class="badge bg-warning text-dark">Hours</span></div>
                            </div>
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Minutes">
                                    <button type="button" class="btn" id="minutess_{{ $countDown->id }}"
                                        style="background-color: blue; color: white; font-weight: bold;"></button>
                                </div>
                                <div class="timer-label"><span class="badge bg-warning text-dark">Mins</span></div>
                            </div>
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Seconds">
                                    <button type="button" class="btn" id="secondss_{{ $countDown->id }}"
                                        style="background-color: red; color: white; font-weight: bold;"></button>
                                </div>
                                <div class="timer-label"><span class="badge bg-warning text-dark">Secs</span></div>
                            </div>
                        </div>
                        <span class="badge bg-warning text-dark">Planned Date:</span>
                        <div id="showDate" style="color: red; font-size: small;">
                            {{ \Carbon\Carbon::parse($countDown->time)->format('l, j F Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
    <script>
        // Update the countdown every second
        var countdownInterval = setInterval(function() {
            @if (!empty($countDowns) && is_iterable($countDowns))
                @foreach ($countDowns as $countDown)
                    // Get the target date from the server
                    var targetDate = new Date("{{ $countDown->time }}").getTime();

                    // Get the current date and time
                    var now = new Date().getTime();

                    // Calculate the time remaining
                    var distance = targetDate - now;

                    // Calculate days, hours, minutes, and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the countdown
                    document.getElementById("days_{{ $countDown->id }}").innerText = days;
                    document.getElementById("hours_{{ $countDown->id }}").innerText = hours;
                    document.getElementById("minutess_{{ $countDown->id }}").innerText = padWithZeroes(minutes);
                    document.getElementById("secondss_{{ $countDown->id }}").innerText = padWithZeroes(seconds);


                    // If the countdown is finished, clearInterval to stop the countdown
                    if (distance < 0) {
                        clearInterval(countdownInterval);
                        document.getElementById("countdown").innerHTML = "<h2>Registration Closed!</h2>";
                    }
                @endforeach
            @endif
        }, 1000);

        // Function to pad minutes and seconds with leading zeros if necessary
        function padWithZeroes(number) {
            if (number < 10) {
                return "0" + number;
            }
            return number;
        }
    </script>
    {{-- {dd(countDowns)} --}}

    <style>
        #joinButton {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            animation: blink 1s infinite;
            /* Added animation property for blinking effect */
        }

        @keyframes blink {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }
    </style>
    <script>
        document.getElementById('joinButton').addEventListener('click', function() {
            // Add your specific JavaScript functionality for the button here
            // This function will be triggered when the button is clicked
            alert('You clicked the Join WhatsApp Group button!');
            // Add more actions or integrate with WhatsApp API as needed
        });
        document.getElementById('joinButton').addEventListener('click', function() {

            // Construct the WhatsApp link
            var whatsappLink = 'https://chat.whatsapp.com/DeNYpFAGRs3JNvUFiOul9Y';

            // Open the WhatsApp link in a new tab/window
            window.open(whatsappLink, '_blank');
        });
    </script>



    <!-- green background -->
    <style>
        #joinButton {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            animation: blink 1s infinite;
            /* Added animation property for blinking effect */
        }

        @keyframes blink {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }
    </style>
    <script>
        document.getElementById('joinButton').addEventListener('click', function() {
            // Add your specific JavaScript functionality for the button here
            // This function will be triggered when the button is clicked
            alert('You clicked the Join WhatsApp Group button!');
            // Add more actions or integrate with WhatsApp API as needed
        });
        document.getElementById('joinButton').addEventListener('click', function() {

            // Construct the WhatsApp link
            var whatsappLink = 'https://chat.whatsapp.com/BMTY6yhg7Pl8SE66m1iIfz';

            // Open the WhatsApp link in a new tab/window
            window.open(whatsappLink, '_blank');
        });
    </script>
    <p></p>


    <!-- 3 -->



    </div>
    <style>
        #breaking-news {
            font-family: Arial, sans-serif;
            font-size: 2vw;
            /* Responsive font size */
            font-weight: bold;
            border: 2px solid #f00;
            padding: auto;
            /* Responsive padding */
            width: auto;
            /* Responsive width */
            max-width: auto;
            /* Maximum width */
            overflow: hidden;
            white-space: nowrap;
        }

        #breaking-news a {
            color: #f00;
            text-decoration: none;
        }

        #headline-link {
            font-size: 1vw;
            /* Responsive font size */
        }

        @keyframes typing {
            0% {
                width: 0;
            }

            100% {
                width: 100%;
            }
        }

        /* Mobile Styles */
        @media only screen and (max-width: 600px) {
            #breaking-news {
                font-size: 2vw;
            }

            #headline-link {
                font-size: 2vw;
            }

            #breaking-news a {
                font-size: 2vw;
            }
        }
    </style>



    <script data-cfasync="false" type="text/javascript" id="clever-core">
        /* <![CDATA[ */
        (function(document, window) {
            var a, c = document.createElement("script"),
                f = window.frameElement;

            c.id = "CleverCoreLoader77951";
            c.src = "https://scripts.cleverwebserver.com/2865b46663e6d9a9170acda5132157d0.js";

            c.async = !0;
            c.type = "text/javascript";
            c.setAttribute("data-target", window.name || (f && f.getAttribute("id")));
            c.setAttribute("data-callback", "put-your-callback-function-here");
            c.setAttribute("data-callback-url-click", "put-your-click-macro-here");
            c.setAttribute("data-callback-url-view", "put-your-view-macro-here");


            try {
                a = parent.document.getElementsByTagName("script")[0] || document.getElementsByTagName("script")[0];
            } catch (e) {
                a = !1;
            }

            a || (a = document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]);
            a.parentNode.insertBefore(c, a);
        })(document, window);
        /* ]]> */
    </script>
    <div class="clever-core-ads"></div>
    {{-- ================ countdownd + new latter end ================ --}}

    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">How to Search for Live Tma Answers</h3>
                    <small class="text-white">You only copy and paste part of the live questions on the search bar
                        and
                        you
                        easily locate the answer(s)</small>
                    <div class="position-relative w-100 mt-3">

                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Question" style="height: 48px;" id="search_tma">

                        <button type="button"
                            onclick="window.livewire.emit( 'tma_search', document.getElementById('search_tma').value )"
                            class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-search text-primary fs-4"></i></button>

                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="height: 250px;"
                        src="{{ url('/assets/images/newsletter.png') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    {{-- {{ dd($tutors) }} --}}


    <div class="container">

        <div class="mb-3">
            <h5>Filter Tutors in Faculty</h5>
            <select wire:model='faculty' class="form-select" id="floatingSelect" aria-label="faculty">
                <option value="">Select Faculty</option>
                @foreach ($faculties as $fac)
                    <option value="{{ $fac->id }}">{{ $fac->faculty_name }}</option>
                @endforeach
            </select>
            @error('faculty')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>


        {{-- {{ dd($tutors) }} --}}
        @if (isset($tutors[0]))
            @foreach ($tutors as $tutor)
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card mt-5 shadow">
                        <div class="card-body">
                            <div class="d-flex flex-column text-center">
                                <h6 class="bg-primary text-white p-2 rounded">Specialty: @if ($tutor->speciality == '')
                                        None
                                    @else
                                        {{ $tutor->speciality }}
                                    @endif
                                </h6>
                                <div class="p-2">
                                    @if ($tutor->profile_img == '' || $tutor->pay_status == 'unpaid' || $tutor->pay_status == '')
                                        <i class="fa-solid fa-6x fa-user"></i>
                                    @else
                                        <img src="{{ DisplayImage('tutorprofile/' . $tutor->profile_img) }}"
                                            class="w-50 rounded-circle">
                                    @endif
                                </div>
                                <div class="my-2">
                                    <h4>{{ $tutor->name }}</h4>
                                    <p class="text-muted font-size-sm text-wrap">{{ ucfirst($tutor->bio) }}</p>
                                    <h6>
                                        @if (!empty($tutor->tutor_faculty))
                                            {{ $faculties->where('id', $tutor->tutor_faculty)->first()->faculty_name }}
                                        @else
                                            No Faculty!
                                        @endif
                                    </h6>
                                    <h5>
                                        @if ($tutor->pay_status == 'paid')
                                            <span class="text-success">Verified Tutor (Recommended)</span>
                                        @else
                                            <span class="text-danger">Unverified Tutor (Free)</span>
                                        @endif
                                    </h5>
                                </div>
                                <div class="mb-3 p-2 text-left text-dark">
                                    <div class="d-flex">
                                        <h6><small>Teaching Experience:</h6>
                                        &nbsp;{{ $tutor->teaching_experience }}</small>
                                    </div>
                                    <div class="d-flex">
                                        <h6><small>Institution:</h6>&nbsp;{{ $tutor->institution }}</small>
                                    </div>
                                    <div class="d-flex">
                                        <h6><small>Prefered Application:</h6>
                                        &nbsp;{{ $tutor->application }}</small>
                                    </div>
                                    <div class="d-flex">
                                        <h6><small>Bonus:</h6>&nbsp;{{ $tutor->bonus_class }}</small>
                                    </div>
                                    <div class="d-flex">
                                        <h6><small>Class Scheduled Date:</h6>&nbsp; <span
                                            class="text-danger"><b>None</b></span> </small>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-2">
                            <center>
                                <a href="#" class="btn btn-dark">View Profile</a>
                            </center>

                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No Tutor Found!</p>
        @endif


    </div>

    <div class="mt-5 d-flex justify-content-center">
        {{-- {{ $tutors->links() }} --}}
    </div>

    {{-- profile --}}


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">FEATURES</h6>
                <h2 class="mt-2"></h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">NOUN Tma Answers</h5>
                        <p>Submitting your NOUN Tmas becomes easier. With our App you can easily search for
                            questions
                            and
                            instantly get to see the answer for submission.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('tutors') }}">Read
                            More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Meeting a Tutor</h5>
                        <p>If you’re looking for an online tutor in any of your Courses, then you don’t need to go
                            far
                            because we have qualify educators in your field that can lecture you with other students
                        </p>
                        <a class="btn px-3 mt-auto mx-auto" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">NOUN Past Questions</h5>
                        <p>Our Past Questions comprises of different years with different semesters. With just a
                            click
                            you
                            can easily download all Courses you’re taking this semester</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('tutors') }}">Read
                            More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Making Money Tutoring</h5>
                        <p>Are you a qualify graduate and can tutor students online using either Zoom, Google
                            Hangout
                            etc?
                            If yes, then you can start making cool cash</p>
                        <a class="btn px-3 mt-auto mx-auto" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">NOUN School Fees</h5>
                        <p>You don’t need to start cracking your head to know Courses or fees. Right here you can
                            simply
                            know the Courses and Fees to register and the exact fee to pay this semester.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('tutors') }}">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Share to friends</h5>
                        <p>If you find this web App interesting, we’ll appreciate if you can share it to your
                            friends
                            either
                            in whatsapp groups, facebook, telegram or any other social media platforms.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('tutors') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
