@push('title')
    <title>
        Verified Tutors - NOUN</title>
@endpush

@push('page')
    <div class="col-12 text-center">
        <h1 class="text-white animated zoomIn">All Tutors</h1>
        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Tutors</li>
            </ol>
        </nav>
    </div>
@endpush

<div class="container">




    {{-- start image --}}
    <div class="jumbotron jumbotron-fluid mb-3 pt-0 pb-0 bg-lightblue position-relative"
        style="background-color: #e8f3ec;   background-size: cover;">
        <div class="pl-4 pr-0 h-100 tofront" style="padding: 7rem 1rem;">
            <div class="row justify-content-between">
                <div class="col-md-6 pt-6 pb-6 align-self-center">
                    <h1 class="secondfont mb-3 font-weight-bold">List of NOUN Study Centres, Addresses &amp;
                        Contact Details</h1>
                    <p class="mb-3">

                        Discover the latest information about National Open University of Nigeria (NOUN) Study
                        Centers, including addresses and contact details. Stay updated on the locations and
                        contact information to enhance your educational journey with NOUN. </p>

                </div>
                <div class="col-md-6 d-none d-md-block pr-0"
                    style="background-size: cover; background-image: url('https://scontent.flhe11-1.fna.fbcdn.net/v/t39.30808-6/291991878_713397170114698_4516727155425225116_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=783fdb&_nc_ohc=CG3AfOQzApMAX8APtsB&_nc_ht=scontent.flhe11-1.fna&oh=00_AfByhA99MG_-emxbl9Wdph9RunMwua3lnUr-Tm6pTY2LHA&oe=65ABB764');">

                </div>

            </div>
        </div>
    </div>
    {{-- end image --}}
    <div class="main-body">

        <div class="row">
            <div class="col-12 my-3">
                <h4>Get Professional Online Home Tutors as a student of NOUN</h4>
                <h4>This feature is Under development, please check back soon. Thanks)</h4>
                <p>Nounloaded focuses on connecting potential learners with highly qualifies skilled tutors. Our
                    interest is to beyond the norm of formal education by providing tutors for basically anything a
                    student may wish to learn.</p>
                <h4>Who We Are</h4>
                <p><b><b><a href="http://nounloaded.com.ng/">Nounloaded.com.ng</a></b></b> is an open source
                    community
                    that brings professional, competent online tutors right to your home (literally). We aim to
                    break
                    from the norm of formal education by providing competent tutors for everything you want to
                    learn.
                </p>
                <p>Thus, we offer 3 wide varieties for students of National Open University of Nigeria, NOUN.</p>
                <p>i. For Students that needs Tutor(s) for Course Materials</p>
                <p>ii. For Students that needs Tutor(s) for Answers in NOUN Past Questions (300L-800L)</p>
                <p>iii. For Students that needs Tutor(s) for NOUN Facilitation/Orientation etc</p>
                <p>Here in Nounloaded, we believe that real learning requires a private strategy because no two
                    learners
                    are precisely the same. Therefore, through our tutorial platform, which include one-on-one and
                    group
                    learner’s tutorial sessions, we strive to provide students with very engaging teaching
                    procedures.
                </p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>


        <div class="row">
            <div class="text-center mb-3 p-1">
                <h4 class="p-0 m-0 ">Noun Verified Online Tutors</h4>
                <h4 class="p-0 m-0 ">Noun Course Materials_Post PQ</h4>
            </div>
            {{-- <hr> --}}
            <div class="row">



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

                @if (isset($tutors[0]))

                    @foreach ($tutors as $tutor)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="card mt-5 shadow">
                                <div class="card-body">
                                    <div class="d-flex flex-column text-center">
                                        <h6 class="bg-primary text-white p-2 rounded">Specialty @if ($tutor->speciality == '')
                                                None
                                            @else
                                                <p class="">
                                                    @if ($tutor->speciality == '(i) Noun Project Writing, (Ii) Noun Seminar Writing & (Iii) Noun Business Plan (Gst302)')
                                                        <span style="color: green">
                                                            <i class="fas fa-check-square"></i>
                                                        </span> NOUN Course Materials
                                                        <br><span style="color: green">
                                                            <i class="fas fa-check-square"></i>
                                                        </span> POP PQ (Answers & Revision)
                                                    @elseif ($tutor->speciality == '(i) NOUN Course Materials (ii) NOUN POP Past Questions & Answers/Revision (300L-800L)')
                                                        <span style="color: green">
                                                            <i class="fas fa-check-square"></i>
                                                        </span> NOUN Course Materials
                                                        <br><span style="color: green">
                                                            <i class="fas fa-check-square"></i>
                                                        </span> NOUN POP Past Questions & Answers/Revision (300L-800L)
                                                    @else
                                                        --
                                                    @endif

                                                </p>
                                            @endif
                                        </h6>
                                        <div class="p-2">
                                            @if ($tutor->profile_img == '')
                                                <i class="fa-solid fa-6x fa-user"></i>
                                            @else
                                                <img src="{{ DisplayImage('tutorprofile/' . $tutor->profile_img) }}"
                                                    class="w-50 rounded-circle">
                                            @endif
                                        </div>
                                        <div class="my-2">
                                            <h4>{{ $tutor->name }}</h4>
                                            <p class="text-muted font-size-sm text-wrap">
                                                {{ Illuminate\Support\Str::limit(ucfirst($tutor->bio), 200) }}</p>
                                            {{-- <p class="fw-600 mx-2"><i>"{{ Illuminate\Support\Str::limit(ucfirst($tutor->bio), 200) }}"</i></p> --}}
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
                                                    <span class="text-danger">Unverified Tutor</span>
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="mb-3 p-2 text-left text-dark">
                                            <div class="d-flex">
                                                <h6><small><b>Teaching Experience:</b></h6>
                                                &nbsp;{{ $tutor->teaching_experience }}</small>
                                            </div>
                                            <div class="d-flex">
                                                <h6><small><b>Institution:</b></h6>
                                                &nbsp;{{ $tutor->institution }}</small>
                                            </div>
                                            <div class="d-flex">
                                                <h6><small><b>Prefered Application:</b></h6>
                                                &nbsp;{{ $tutor->application }}</small>
                                            </div>
                                            <div class="d-flex">
                                                <h6><small><b>Bonus:</b></h6>&nbsp;{{ $tutor->bonus_class }}</small>
                                            </div>
                                            <div class="d-flex">
                                                <h6><small><b>Class Scheduled Date:</b></h6>&nbsp; <span
                                                    class="text-danger"><b>
                                                        @if (count($tutor->classes) > 0)
                                                            Active
                                                        @else
                                                            None
                                                        @endif
                                                    </b></span> </small>
                                            </div>
                                            <div class="text-muted p-1">
                                                <span class="fa fa-star stared"></span>
                                                {{-- {{ round($star_rating, 1) }} --}}
                                                {{ round($this->getAverageReviews($tutor->reviews)) ?? '0' }}
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <center>
                                        <a href="{{ route('tutors-profiles', [Str::slug($tutor->name), $tutor->id]) }}"
                                            class="btn btn-dark">View Profile</a>
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
                {{ $tutors->links() }}
            </div>

            <div class="row">

                <div class="col-12 my-3">

                    <h4>Get yourself an Online Home Tutor anywhere across all NOUN Study Centres in Nigeria</h4>
                    <p>Are you satisfied with your academic performance in NOUN? Do you think you can do better
                        academically
                        if assisted? Do you need a competent and professional online home tutor to help shape your
                        academic
                        performance? That’s why we are here, get your a home tutor today and see yourself move from
                        average
                        to excellent.</p>
                    <p></p>
                    <p></p>
                    <p></p>

                </div>

            </div>

        </div>
    </div>
</div>
