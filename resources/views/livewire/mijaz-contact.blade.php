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

<div class="p-5">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
        }

        body {
            background-color: #e2e8f0;
            padding: 20px;
        }

        .breadcrumb {
            background-color: #c5cee4;
        }

        .breadcrumb a {
            text-decoration: none;
        }

        .container {
            max-width: 1000px;
            padding: 0;
        }

        p {
            margin: 0;
        }

        .d-flex a {
            text-decoration: none;
            color: #686868;
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .fab.fa-twitter {
            color: #8ab7f1;
        }

        .fab.fa-instagram {
            color: #e1306c;
        }

        .fab.fa-facebook-f {
            color: #5999ec;
        }
    </style>
    <div class="row justify-content-center align-items-center"
        style="
          box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px,
            rgba(17, 17, 26, 0.1) 0px 8px 24px,
            rgba(17, 17, 26, 0.1) 0px 16px 56px;
        ">


        <style>
            .breadcrumb {
                background-color: blue;
                color: #ffffff;
            }
        </style>

        <div class="row ">
            <div class="col-md-6 breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 px-3" style="color: #ffffff">
                        <li class="breadcrumb-item" style="color: #ffffff">
                            <a target="_blank" href="https://www.fiverr.com/dowhfcrt" style="color: #ffffff">My
                                Profile</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a target="_blank" href="https://www.fiverr.com/dowhfcrt" style="color: #ffffff">Contact
                                Me</a>
                        </li>
                        <li class="breadcrumb-item active" style="color: #ffffff">
                            To Get Full Code or Create Something Interesting
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 breadcrumb d-flex justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 px-3">
                        <li class="breadcrumb-item" style="color: #ffffff">
                            <a href="/user/login" style="color: #ffffff">Login</a>
                        </li>
                        <li class="breadcrumb-item">
                            User: user@gmail.com
                        </li>
                        <li class="breadcrumb-item">
                            Pass: 12345678
                        </li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="col-md-5">
            <div class="row">
                <div class="col-12 bg-white p-0 px-3 py-3 mb-3">
                    <div class="d-flex flex-column align-items-center">
                        <img class="photo" src="{{ asset('assets/1.jpg') }}" alt="my-img" />
                        <p class="fw-bold h4 mt-3">Mijaz</p>
                        <span class="text-muted" style="margin-top: -5px">Full Stack Developer</span>
                        <!-- <p class="text-muted mb-3">Bs Computer Science</p> -->
                        <div class="d-flex mt-2">
                            <button class="btn btn-primary follow me-2" onclick="redirectToLinkedIn()">
                                Follow
                            </button>

                            <script>
                                function redirectToLinkedIn() {
                                    window.location.href =
                                        "https://www.linkedin.com/in/mijaz-web-developer/";
                                }
                            </script>

                            <script>
                                function redirectToFiverr() {
                                    window.location.href =
                                        "https://www.linkedin.com/in/mijaz-web-developer/";
                                }
                            </script>
                            <div class="btn btn-outline-primary message" onclick="redirectToFiverr()">
                                Message
                            </div>
                            <script>
                                function redirectToFiverr() {
                                    window.location.href = "https://www.fiverr.com/dowhfcrt";
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-12 bg-white p-0 px-2 pb-3 mb-3">
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><span class="fas fa-globe me-2"></span>Website</p>
                        <a target="_blank" href="https://www.fiverr.com/dowhfcrt">Fiverr</a>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><span class="fab fa-github-alt me-2"></span>Github</p>
                        <a target="_blank" href="https://github.com/Muhammad-ijazCRT">Muhammad-ijazCRT</a>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><span class="fab fa-twitter me-2"></span>Linkedin</p>
                        <a target="_blank"
                            href="https://www.linkedin.com/in/mijaz-web-developer/">@Mijaz-web-developer</a>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><span class="fab fa-instagram me-2"></span>Instagram</p>
                        <a target="_blank" href="">@mijaz</a>
                    </div>
                    <div class="d-flex justify-content-between py-2 px-3">
                        <p><span class="fab fa-facebook-f me-2"></span>facebook</p>
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100088124372974">@miajz</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 ps-md-4">
            <div class="row">
                <div class="col-12 bg-white px-3 mb-3 pb-3">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="py-2">Full Name</p>
                        <p class="py-2 text-muted">Muhammad ijaz</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="py-2">Email</p>
                        <p class="py-2 text-muted">
                            <a href="mailto:ijazkhancc@gmail.com">ijazkhancc@gmail.com</a>
                        </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="py-2">WhatsApp</p>
                        <p class="py-2 text-muted">
                            <a href="https://wa.me/923129496281">+92 312 9496281 (WhatsApp)</a>
                        </p>
                    </div>
                    <!-- <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Mobile</p>
                            <p class="py-2 text-muted">(320) 380-4539</p>
                        </div> -->
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="py-2">Address</p>
                        <p class="py-2 text-muted">Lahore , pakistan</p>
                    </div>
                </div>
                <div class="col-12 bg-white px-3 pb-2">
                    <h6 class="d-flex align-items-center mb-3 fw-bold py-3">
                        <i class="text-info me-2">assignment</i>Project Status
                    </h6>
                    <small>Laravel Full stack</small>
                    <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"
                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Mern full stack</small>
                    <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Database Administrator</small>
                    <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Backend API</small>
                    <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"
                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Blockchain (Smart contract)</small>
                    <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
