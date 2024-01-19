<!DOCTYPE html>
<html lang="en">


<head>
    <title>AboveMarts Academy</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="learn.abovemarts.com">
    <meta name="description" content="Abovemarts Learning Portal">

    <!-- Favicon -->
    {{--
    <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;700;700&amp;family=Roboto:wght@400;700;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css')}}">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    @yield('header')

</head>

<body>

    <!-- Header START -->
    <header class="navbar-light navbar-sticky">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="/">
                    <h4>AboveMarts Academy</h4>
                    {{-- <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo"> --}}
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">E-Courses</a>
                            <ul class="dropdown-menu" aria-labelledby="demoMenu">
                                <li> <a class="dropdown-item" href="#">Digital Skills</a></li>
                                <li> <a class="dropdown-item" href="#">Professional Courses</a></li>
                                <li> <a class="dropdown-item" href="#"></a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item" href="#">Vocational Skills</a></li>
                                <li> <a class="dropdown-item" href="#">Agroallied Skills</a></li>


                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">E-Libraries</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <!-- Dropdown submenu -->
                                <li> <a class="dropdown-item" href="/allebooks">E-books</a></li>


                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item" href="#">Video Contents</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>

                        <!-- Nav item 3 Account -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Accounts</a>
                            <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                                <!-- Dropdown submenu -->


                                <li> <a class="dropdown-item" href="#"><i class="fas fa-book fa-fw me-1"></i>Enrolled
                                        Courses</a> </li>
                                <li> <a class="dropdown-item" href="#"><i
                                            class="fas fa-pen fa-fw me-1"></i>Assignments</a> </li>
                                <li> <a class="dropdown-item" href="#"><i
                                            class="fas fa-clock fa-fw me-1"></i>Announcements & Schedules</a> </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>

                        <!-- Nav item 4 Component-->

                        <!-- Nav item 5 link-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
                                <li>
                                    <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                                        <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="docs/index.html" target="_blank">
                                        <i class="text-danger fa-fw bi bi-card-text me-2"></i>Contact Us
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative">
                                <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button
                                    class="btn bg-transparent px-2 py-0 position-absolute top-70 end-0 translate-middle-y"
                                    type="submit"><i class="fas fa-search fs-6 "></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <!-- Profile START -->
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/avatar1.png')}}"
                            alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow"
                                        src="{{ asset('assets/images/avatar/avatar1.png')}}" alt="avatar">
                                </div>

                            </div>
                            <hr>
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item" href="https://abovemarts.com/profile"><i
                                    class="bi bi-person fa-fw me-2"></i>Edit Profile</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                        <li><a onclick='return confirm("Are you sure you want to sign out?")'
                                class="dropdown-item bg-danger-soft-hover" href="/logout"><i
                                    class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Dark mode switch START -->
                        <li>
                            <div class="modeswitch-wrap" id="darkModeSwitch">
                                <div class="modeswitch-item">
                                    <div class="modeswitch-icon"></div>
                                </div>
                                <span>Dark mode</span>
                            </div>
                        </li>
                        <!-- Dark mode switch END -->
                    </ul>
                </div>
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>


        <!-- =======================
Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">



                    <div class="col-xl-12">

                        <!-- Title -->


                        <div class="row g-4">

                            <!-- Course information START -->
                            <div class="col-xxl-6">
                                <div class="card bg-transparent border rounded-3 h-100">

                                    <!-- Catd header -->
                                    <div class="card-header bg-light border-bottom">
                                        <h5 class="card-header-title">{{ $course->title }}</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">

                                        <!-- Course image and info START -->
                                        <div class="row g-4">
                                            <!-- Course image -->
                                            <div class="col-md-6">

                                                <div id='imagecontent'>
                                                    <img src="https://learn.abovemarts.com/public/courseimage/{{ $course->image}}"
                                                        class="rounded" alt="">
                                                </div>


                                                <div class="col-12">
                                                    <!-- Tabs START -->
                                                    <ul class="nav nav-pills nav-pills-bg-soft px-3"
                                                        id="course-pills-tab" role="tablist">
                                                        <!-- Tab item -->
                                                        <li class="nav-item me-2 me-sm-4" role="presentation">
                                                            <button class="nav-link mb-0 active" id="course-pills-tab-1"
                                                                data-bs-toggle="pill" data-bs-target="#course-pills-1"
                                                                type="button" role="tab" aria-controls="course-pills-1"
                                                                aria-selected="true">Overview</button>
                                                        </li>
                                                        <!-- Tab item -->
                                                        <li class="nav-item me-2 me-sm-4" role="presentation">
                                                            <button class="nav-link mb-0" id="course-pills-tab-2"
                                                                data-bs-toggle="pill" data-bs-target="#course-pills-2"
                                                                type="button" role="tab" aria-controls="course-pills-2"
                                                                aria-selected="false" tabindex="-1">Reviews</button>
                                                        </li>
                                                        <!-- Tab item -->
                                                        <li class="nav-item me-2 me-sm-4" role="presentation">
                                                            <button class="nav-link mb-0" id="course-pills-tab-3"
                                                                data-bs-toggle="pill" data-bs-target="#course-pills-3"
                                                                type="button" role="tab" aria-controls="course-pills-3"
                                                                aria-selected="false" tabindex="-1">FAQs </button>
                                                        </li>
                                                        <!-- Tab item -->
                                                        <li class="nav-item me-2 me-sm-4" role="presentation">
                                                            <button class="nav-link mb-0" id="course-pills-tab-4"
                                                                data-bs-toggle="pill" data-bs-target="#course-pills-4"
                                                                type="button" role="tab" aria-controls="course-pills-4"
                                                                aria-selected="false" tabindex="-1">Certificate</button>
                                                        </li>
                                                    </ul>
                                                    <!-- Tabs END -->

                                                    <!-- Tab contents START -->
                                                    <div class="tab-content pt-4 px-3" id="course-pills-tabContent">
                                                        <!-- Content START -->
                                                        <div class="tab-pane fade active show" id="course-pills-1"
                                                            role="tabpanel" aria-labelledby="course-pills-tab-1">
                                                            <!-- Course detail START -->
                                                            <h5 class="mb-3">Course Description</h5>
                                                            {!! $course->description !!}
                                                            <!-- List content -->


                                                        </div>
                                                        <!-- Content END -->

                                                        <!-- Content START -->
                                                        <div class="tab-pane fade" id="course-pills-2" role="tabpanel"
                                                            aria-labelledby="course-pills-tab-2">
                                                            <!-- Review START -->
                                                            <div class="row mb-4">
                                                                <h5 class="mb-4">Our Student Reviews</h5>

                                                                <!-- Rating info -->
                                                                <div class="col-md-4 mb-3 mb-md-0">
                                                                    <div class="text-center">
                                                                        <!-- Info -->
                                                                        <h2 class="mb-0">4.5</h2>
                                                                        <!-- Star -->
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item me-0"><i
                                                                                    class="fas fa-star text-warning"></i>
                                                                            </li>
                                                                            <li class="list-inline-item me-0"><i
                                                                                    class="fas fa-star text-warning"></i>
                                                                            </li>
                                                                            <li class="list-inline-item me-0"><i
                                                                                    class="fas fa-star text-warning"></i>
                                                                            </li>
                                                                            <li class="list-inline-item me-0"><i
                                                                                    class="fas fa-star text-warning"></i>
                                                                            </li>
                                                                            <li class="list-inline-item me-0"><i
                                                                                    class="fas fa-star-half-alt text-warning"></i>
                                                                            </li>
                                                                        </ul>
                                                                        <p class="mb-0">(Based on todays review)</p>
                                                                    </div>
                                                                </div>

                                                                <!-- Progress-bar and star -->
                                                                <div class="col-md-8">
                                                                    <div class="row align-items-center text-center">
                                                                        <!-- Progress bar and Rating -->
                                                                        <div class="col-6 col-sm-8">
                                                                            <!-- Progress item -->
                                                                            <div
                                                                                class="progress progress-sm bg-warning bg-opacity-15">
                                                                                <div class="progress-bar bg-warning"
                                                                                    role="progressbar"
                                                                                    style="width: 100%"
                                                                                    aria-valuenow="100"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-6 col-sm-4">
                                                                            <!-- Star item -->
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <!-- Progress bar and Rating -->
                                                                        <div class="col-6 col-sm-8">
                                                                            <!-- Progress item -->
                                                                            <div
                                                                                class="progress progress-sm bg-warning bg-opacity-15">
                                                                                <div class="progress-bar bg-warning"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-6 col-sm-4">
                                                                            <!-- Star item -->
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <!-- Progress bar and Rating -->
                                                                        <div class="col-6 col-sm-8">
                                                                            <!-- Progress item -->
                                                                            <div
                                                                                class="progress progress-sm bg-warning bg-opacity-15">
                                                                                <div class="progress-bar bg-warning"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-6 col-sm-4">
                                                                            <!-- Star item -->
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <!-- Progress bar and Rating -->
                                                                        <div class="col-6 col-sm-8">
                                                                            <!-- Progress item -->
                                                                            <div
                                                                                class="progress progress-sm bg-warning bg-opacity-15">
                                                                                <div class="progress-bar bg-warning"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-6 col-sm-4">
                                                                            <!-- Star item -->
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <!-- Progress bar and Rating -->
                                                                        <div class="col-6 col-sm-8">
                                                                            <!-- Progress item -->
                                                                            <div
                                                                                class="progress progress-sm bg-warning bg-opacity-15">
                                                                                <div class="progress-bar bg-warning"
                                                                                    role="progressbar"
                                                                                    style="width: 20%"
                                                                                    aria-valuenow="20" aria-valuemin="0"
                                                                                    aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-6 col-sm-4">
                                                                            <!-- Star item -->
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0 small">
                                                                                    <i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Review END -->

                                                            <!-- Student review START -->
                                                            {{-- <div class="row">
                                                                <!-- Review item START -->
                                                                <div class="d-md-flex my-4">
                                                                    <!-- Avatar -->
                                                                    <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/09.jpg"
                                                                            alt="avatar">
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div>
                                                                        <div
                                                                            class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                                            <h5 class="me-3 mb-0">Jacqueline Miller</h5>
                                                                            <!-- Review star -->
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- Info -->
                                                                        <p class="small mb-2">2 days ago</p>
                                                                        <p class="mb-2">Perceived end knowledge
                                                                            certainly day sweetness why cordially. Ask a
                                                                            quick six seven offer see among. Handsome
                                                                            met debating sir dwelling age material. As
                                                                            style lived he worse dried. Offered related
                                                                            so visitors we private removed. Moderate do
                                                                            subjects to distance. </p>

                                                                        <!-- Reply button -->
                                                                        <a href="#" class="text-body mb-0"><i
                                                                                class="fas fa-reply me-2"></i>Reply</a>
                                                                    </div>
                                                                </div>
                                                                <!-- Divider -->
                                                                <hr>
                                                                <!-- Review item END -->

                                                                <!-- Review item START -->
                                                                <div class="d-md-flex my-4">
                                                                    <!-- Avatar -->
                                                                    <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/07.jpg"
                                                                            alt="avatar">
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div>
                                                                        <div
                                                                            class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                                            <h5 class="me-3 mb-0">Dennis Barrett</h5>
                                                                            <!-- Review star -->
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="fas fa-star text-warning"></i>
                                                                                </li>
                                                                                <li class="list-inline-item me-0"><i
                                                                                        class="far fa-star text-warning"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- Info -->
                                                                        <p class="small mb-2">2 days ago</p>
                                                                        <p class="mb-2">Handsome met debating sir
                                                                            dwelling age material. As style lived he
                                                                            worse dried. Offered related so visitors we
                                                                            private removed. Moderate do subjects to
                                                                            distance. </p>
                                                                        <!-- Reply button -->
                                                                        <a href="#" class="text-body mb-0"><i
                                                                                class="fas fa-reply me-2"></i>Reply</a>
                                                                    </div>
                                                                </div>
                                                                <!-- Review item END -->
                                                                <!-- Divider -->
                                                                <hr>
                                                            </div> --}}
                                                            <!-- Student review END -->

                                                            <!-- Leave Review START -->
                                                            <div class="mt-2">
                                                                <h5 class="mb-4">Leave a Review</h5>
                                                                <form class="row g-3">
                                                                    <!-- Name -->
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            id="inputtext" placeholder="Name"
                                                                            aria-label="First name">
                                                                    </div>
                                                                    <!-- Email -->
                                                                    <div class="col-md-6">
                                                                        <input type="email" class="form-control"
                                                                            placeholder="Email" id="inputEmail4">
                                                                    </div>
                                                                    <!-- Rating -->
                                                                    <div class="col-12">
                                                                        <select type="email" class="form-control"
                                                                            id="select">
                                                                            <option value='1'> 1 Star</option>
                                                                            <option value='2'> 2 Star</option>
                                                                            <option value='3'> 3 Star</option>
                                                                            <option value='4'> 4 Star</option>
                                                                            <option value='5'> 5 Star</option>
                                                                    </div>
                                                                    <!-- Message -->
                                                                    <div class="col-12">
                                                                        <textarea class="form-control"
                                                                            id="exampleFormControlTextarea1"
                                                                            placeholder="Your review"
                                                                            rows="3"></textarea>
                                                                    </div>
                                                                    <!-- Button -->
                                                                    <div class="col-12">
                                                                        <button type="submit"
                                                                            class="btn btn-primary mb-0">Post
                                                                            Review</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- Leave Review END -->

                                                        </div>
                                                        <!-- Content END -->

                                                        <!-- Content START -->
                                                        <div class="tab-pane fade" id="course-pills-3" role="tabpanel"
                                                            aria-labelledby="course-pills-tab-3">
                                                            <!-- Title -->
                                                            <h5 class="mb-3">Frequently Asked Questions</h5>
                                                            <!-- FAQ item -->
                                                            <div class="mt-4">
                                                                <h6>What is the duration of this course?</h6>
                                                                <p class="mb-0">The course has a total duration of{{
                                                                    $course->duration }} Hrs.</p>
                                                            </div>
                                                            <div class="mt-4">
                                                                <h6>How much is this course?</h6>
                                                                <p class="mb-0">The discounted price for this course is
                                                                    <b>${{ number_format($course->price) }}</b>, of
                                                                    which the real price is <b>${{
                                                                        number_format($course->slashed_price) }}</b>
                                                                </p>
                                                            </div>
                                                            <div class="mt-4">
                                                                <h6>How much is the course for Abovemart's Platinum
                                                                    members?</h6>
                                                                <p class="mb-0">For Platinun members, the course is
                                                                    brought down to <b>${{ number_format($course->price
                                                                        /2) }}</b>.</p>
                                                            </div>
                                                            <div class="mt-4">
                                                                <h6>Does this course have certification?</h6>
                                                                <p class="mb-0">Yes, this is a certified course.</p>
                                                            </div>

                                                        </div>
                                                        <!-- Content END -->

                                                        <!-- Content START -->
                                                        <div class="tab-pane fade" id="course-pills-4" role="tabpanel"
                                                            aria-labelledby="course-pills-tab-4">
                                                            <!-- Review START -->
                                                            <div class="row mb-4">
                                                                <div class="col-12">
                                                                    <h5 class="mb-4">Certificate available for this
                                                                        course with the following conditions:</h5>

                                                                    <ul>
                                                                        <li>You must have completed all the lectures, tasks and assignments to unlock the Examination module.</li>
                                                                       
                                                                        <li>You must have paid and passed the exam with a score mark above 60% to get certified by our Partner Universities.</li>
                                                                        <li>For physical or online facilitations, further inquiries, complain or technical support, contact Admin <a
                                                                            href='https://wa.me/2347060818784'>here.</a>
                                                                      </li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- Content END -->
                                                    </div>
                                                    <!-- Tab contents END -->
                                                </div>
                                            </div>

                                            <!-- Course info and avatar -->
                                            <div class="col-md-6">

                                                <div class="col-md-6 col-xl-12">
                                                    <!-- Course info START -->
                                                    <div class="card card-body border p-4">
                                                        <!-- Price and share button -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <!-- Price -->
                                                            <h3 class="fw-bold mb-0 me-2">${{
                                                                number_format($course->price, 2) }} <span
                                                                    class='text-danger'><s>${{
                                                                        number_format($course->slashed_price, 2)
                                                                        }}</s></span></h3>
                                                            <!-- Share button with dropdown -->
                                                            <div class="dropdown">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light rounded mb-0 small"
                                                                    role="button" id="dropdownShare"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fas fa-fw fa-share-alt"></i>
                                                                </a>
                                                                <!-- dropdown button -->
                                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                                    aria-labelledby="dropdownShare">
                                                                    <li><a class="dropdown-item"
                                                                            href="https://twitter.com/intent/tweet?text=Hi, have you seen this insightful course at Abovemarts Academy?{{ $course->title }}&url=https://learn.abovemarts.com/preview_course/{{ $course->uid }}"><i
                                                                                class="fab fa-twitter-square me-2"></i>Twitter</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="https://www.facebook.com/sharer/sharer.php?u=https://learn.abovemarts.com/preview_course/{{ $course->uid }}&quote=Hi, have you seen this insightful course at Abovemarts Academy? {{ $course->title }}"><i
                                                                                class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="https://api.whatsapp.com/send?text=Hi, have you seen this insightful course at Abovemarts Academy? {{ $course->title }}&url=https://learn.abovemarts.com/preview_course/{{ $course->uid }}"><i
                                                                                class="fab fa-whatsapp me-2"></i>Whatsapp</a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Buttons -->
                                                        <div class="mt-3 d-grid">
                                                            @if(Auth::check())

                                                            @if(Auth::user()->package == "Basic" || Auth::user()->package == "Bronze"
                                                            )
                                                            <a href='https://abovemarts.com/userpackages'
                                                                class='btn btn-success btn-sm'>Upgrade For Scholarship</a>
                                                            @else
                                                            {{-- <a href='/enroll/{{ $course->uid }}' --}}
                                                            <a href='https://learn.abovemarts.com/allcourses'
                                                                class='btn btn-success btn-sm'>Enroll Now</a>
                                                                @endif
                                                                @else 
                                                                <a href='https://learn.abovemarts.com/allcourses'
                                                                    class='btn btn-success btn-sm'>Login To Enroll</a>

                                                            @endif
                                                        </div>
                                                        <!-- Divider -->
                                                        <hr>

                                                        <!-- Title -->
                                                        <h5 class="mb-3">This course includes</h5>
                                                        <ul class="list-group list-group-borderless border-0">
                                                            <li
                                                                class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="h6 fw-light mb-0"><i
                                                                        class="fas fa-fw fa-book-open text-primary"></i>Category</span>
                                                                <span>{{ $course->cat->name ?? "Not specified" }}</span>
                                                            </li>
                                                            <li
                                                                class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="h6 fw-light mb-0"><i
                                                                        class="fas fa-fw fa-clock text-primary"></i>Duration</span>
                                                                <span>{{ $course->duration }} Hrs</span>
                                                            </li>

                                                            <li
                                                                class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="h6 fw-light mb-0"><i
                                                                        class="fas fa-fw fa-globe text-primary"></i>Language</span>
                                                                <span>English</span>
                                                            </li>

                                                            <li
                                                                class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="h6 fw-light mb-0"><i
                                                                        class="fas fa-fw fa-medal text-primary"></i>Certificate</span>
                                                                <span>Yes</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Divider -->



                                                    </div>
                                                    <!-- Course info END -->
                                                </div>
                                                <div class="accordion accordion-icon accordion-bg-light"
                                                    id="accordionExample2">
                                                    <!-- Item START -->
                                                    <div class="accordion-item mb-3">
                                                        <h6 class="accordion-header font-base" id="heading-0">
                                                            <button
                                                                class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse-0" aria-expanded="false"
                                                                aria-controls="collapse-0">
                                                                Course Introduction
                                                            </button>
                                                        </h6>

                                                        <div id="collapse-0" class="accordion-collapse collapse show"
                                                            aria-labelledby="heading-0"
                                                            data-bs-parent="#accordionExample2">
                                                            <!-- Topic START -->
                                                            <div class="accordion-body mt-3">
                                                                <!-- Video item START -->
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="position-relative">
                                                                        <a href="#"
                                                                            class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i
                                                                                class="fas fa-play"></i></a>
                                                                        <span
                                                                            class="ms-2 mb-0 h6 fw-light">Introduction</span>
                                                                    </div>
                                                                    <!-- Edit and cancel button -->
                                                                    <div>

                                                                    </div>
                                                                </div>
                                                                <!-- Divider -->
                                                                <hr>

                                                                <!-- Add topic -->

                                                            </div>
                                                            <!-- Topic END -->
                                                        </div>
                                                    </div>

                                                    @foreach($sections as $key => $section)
                                                    <div class="accordion-item mb-3">
                                                        <h6 class="accordion-header font-base"
                                                            id="heading-{{ ++$key }}">
                                                            <button
                                                                class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse-{{$key }}"
                                                                aria-expanded="false"
                                                                aria-controls="collapse-{{$key }}">
                                                                {{$section->title}}
                                                            </button>

                                                        </h6>

                                                    </div>

                                                    <div id="collapse-{{$key }}"
                                                        class="accordion-collapse collapse hide"
                                                        aria-labelledby="heading-{{ ++$key }}"
                                                        data-bs-parent="#accordionExample{{ ++$key }}">
                                                        <!-- Topic START -->
                                                        <div class="accordion-body mt-3">
                                                            <!-- Video item START -->
                                                            @foreach(App\Models\SectionVideo::where('section_id',$section->id)->get()
                                                            as
                                                            $video)
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="position-relative">
                                                                    <a href="#"
                                                                        class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i
                                                                            class="fas fa-play"></i></a>
                                                                    <span class="ms-2 mb-0 h6 fw-light">{{ $video->title
                                                                        }}</span>
                                                                </div>
                                                            </div>
                                                            <!-- Divider -->
                                                            <hr>
                                                            @endforeach
                                                            <!-- Video item END -->

                                                            <!-- Video item START -->

                                                            <!-- Divider -->
                                                            <hr>
                                                            <!-- Video item END -->



                                                        </div>
                                                        <!-- Topic END -->
                                                    </div>
                                                    @endforeach
                                                    <!-- Item END -->


                                                    <!-- Item END -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course image and info END -->

                                        <!-- Information START -->
                                        <div class="row mt-3">

                                            <!-- Information item -->


                                            <!-- Information item -->
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                    <!-- Card body END -->
                                </div>
                            </div>
                            <!-- Course information END -->


                        </div> <!-- Row END -->
                    </div>

                    <div class="modal fade" id="addLecture" tabindex="-1" aria-labelledby="addLectureLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-white" id="addLectureLabel">Add Section</h5>
                                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row text-start g-3" method='post'
                                        action="{{ route('createsection') }}">@csrf
                                        <!-- Course name -->
                                        <div class="col-12">
                                            <label class="form-label">Section Title <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name='title' class="form-control"
                                                placeholder="Enter section title">
                                            <input type="hidden" name='course_id' class="form-control"
                                                value="{{ $course->id }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Title Description <span
                                                    class="text-danger">*</span></label>
                                            <input name='description' type="text" class="form-control"
                                                placeholder="Enter section description">

                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger-soft my-0"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success my-0">Create</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Popup modal for add Section END -->

                    <!-- Popup modal for add topic START -->
                    <div class="modal fade" id="gallery" tabindex="-1" aria-labelledby="addTopicLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-white" id="addTopicLabel">Add topic</h5>
                                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger-soft my-0"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success my-0">Create</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="addTopic" tabindex="-1" aria-labelledby="addTopicLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-white" id="addTopicLabel">Add topic</h5>
                                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row text-start g-3" method='post'
                                        action='{{ route("createsectionvideo") }}' enctype="multipart/form-data">@csrf
                                        <!-- Topic name -->
                                        <div class="col-md-12">
                                            <label class="form-label">Topic name</label>
                                            <input class="form-control" name='title' type="text"
                                                placeholder="Enter topic name">
                                            <input class="form-control" name='course_id' type="hidden"
                                                value="{{ $course->id }}">
                                            <input class="form-control" name='section_id' type="hidden" id='section_id'
                                                value="">
                                        </div>

                                        <!-- Video link -->
                                        <div class="col-md-12 mt-3">
                                            <label class="form-label">Videos/PDFS/DOCS</label>
                                            <input class="form-control" multiple='multiple' type="file" name='video[]'
                                                placeholder="Enter Video link">
                                        </div>
                                        <!-- Description -->

                                        <!-- Buttons -->
                                        <div class="col-6 mt-3">
                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <!-- Free button -->
                                                <input type="radio" value='0' class="btn-check" name="options"
                                                    id="option1" checked="">
                                                <label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0"
                                                    for="option1">Free</label>
                                                <!-- Premium button -->
                                                <input type="radio" value='1' class="btn-check" name="options"
                                                    id="option2">
                                                <label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0"
                                                    for="option2">Premium</label>
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger-soft my-0"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success my-0">Create</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Popup modal for add topic END -->

                    <!-- Popup modal for add faq START -->
                    <div class="modal fade" id="uploadAss" tabindex="-1" aria-labelledby="uploadAssLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-white" id="uploadAssLabel">Add FAQ</h5>
                                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row text-start g-3">
                                        <!-- Question -->
                                        <div class="col-12">
                                            <label class="form-label">Question</label>
                                            <input class="form-control" type="text" value="Write a question">
                                        </div>
                                        <!-- Answer -->
                                        <div class="col-12 mt-3">
                                            <label class="form-label">Answer</label>
                                            <textarea class="form-control" rows="4" value="Write a answer"
                                                spellcheck="false"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger-soft my-0"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success my-0">Save topic</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="bg-dark p-3">
        <div class="container">
            <div class="row align-items-center">
                <!-- Widget -->
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <!-- Logo START -->
                    <h5 class='text-white'>AboveMarts Academy</h5>
                    {{-- <a href="index.html"> <img class="h-20px" src="assets/images/logo-light.svg" alt="logo"> </a>
                    --}}
                </div>

                <!-- Widget -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="text-center text-white">
                        Copyrights ©
                        <?php echo Date('Y'); ?> <a href="#" class="text-reset btn-link">AboveMarts Academy</a>. All
                        rights reserved.
                    </div>
                </div>
                <!-- Widget -->
                <div class="col-md-4">
                    <!-- Rating -->
                    <ul class="list-inline mb-0 text-center text-md-end">
                        <li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-inline-item ms-2"><a
                                href="https://twitter.com/intent/tweet?text=Hi, have you seen this insightful course at Abovemarts Academy?{{ $course->title }}&url={{ $course->uid }}"><i
                                    class="text-white fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-70 start-70 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/choices/js/choices.min.js"></script>
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

    <script src="{{ asset('assets/jquery.js')}}"></script>
    <script src="{{ asset('assets/sweetalert.js')}}"></script>
    <script>
        $(document).ready(function() {

@if (session('message'))
            swal('Success!',"{{ session('message') }}",'success');
        @endif
        @if (session('error'))
            swal('Error!',"{{ session('error') }}",'error');
        @endif
})
    </script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Vendors -->
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js')}}"></script>
    <script src="{{ asset('assets/vendor/quill/js/quill.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/stepper/js/bs-stepper.min.js')}}"></script>

    <!-- Template Functions -->
    <script src="{{ asset('assets/js/functions2.js')}}"></script>
    <script src="{{ asset('assets/jquery.js')}}"></script>
    <script src="{{ asset('assets/sweetalert.js')}}"></script>
    <script>
        $(document).ready(function() {

        @if (session('message'))
            			swal('Success!',"{{ session('message') }}",'success');
        			@endif
					@if (session('error'))
            			swal('Error!',"{{ session('error') }}",'error');
        			@endif
        
        $(".add_topic").click(function() {
            id = $(this).data('id')
            $("#section_id").val(id)
        
        })

        $(".upload_ass").click(function() {
            ass_id = $(this).data('id')
            user_id = $(this).data('user_id')
            title =  $(this).data('title')
            section_id =  $(this).data('section')
            $("#upload_ass_id").val(ass_id)
            $("#upload_user_id").val(user_id)
            $("#upload_section_id").val(section_id)
            $("#ass_title").text(title)
            // alert(ass_id, user_id)

           

            // $("#section_id").val(id)
        
        })

        $(".playvideo").click(function() {
            vid = $(this).data('id')
            console.log(vid)
            $("#imagecontent").hide()
            $("#videocontent").show()
            $("#divVideo video").attr('src','/sectionvideos/'+vid);
            $("#divVideo video")[0].load();
        })
        $(".playass").click(function() {
            vid = $(this).data('id')
            console.log(vid)
            $("#imagecontent").hide()
            $("#videocontent").show()
            $("#divVideo video").attr('src','/assignment_content/'+vid);
            $("#divVideo video")[0].load();
        })
       

    })
    </script>

</body>

<!-- Mirrored from eduport.webestica.com/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 20:31:51 GMT -->

</html>