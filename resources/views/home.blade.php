<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/css/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/css/emoji.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/css/lightbox.css') }}" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/yoyoo.svg">

</head>
<body class="color-theme-blue mont-font">
<div class="preloader"></div>


<div class="main-wrapper">

    <!-- navigation top-->
    <div class="nav-header bg-white shadow-xs border-0">
        <div class="nav-top">
            <a href="index.html"><i class="feather-dollar-sign text-success display1-size me-2 ms-0"></i><span
                    class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">yoyoo.uz </span>
            </a>
            <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i
                    class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>

            <button class="nav-menu me-0 ms-2"></button>
        </div>

        <form action="#" class="float-left header-search">
            <div class="form-group mb-0 icon-input">
                <i class="feather-search font-sm text-grey-400"></i>
                <input type="text" placeholder="Start typing to search.."
                       class="bg-grey border-0 lh-32 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl w350 theme-dark-bg">
            </div>
        </form>
        <a href="default.html" class="p-2 text-center ms-3 menu-icon center-menu-icon"><i
                class="feather-home font-lg alert-primary btn-round-lg theme-dark-bg text-current "></i></a>
        <a href="default-storie.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                class="feather-zap font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <a href="default-video.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                class="feather-video font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <a href="default-group.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                class="feather-user font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <a href="shop-2.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                class="feather-shopping-bag font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>

        <a href="#" class="p-2 text-center ms-auto menu-icon" id="dropdownMenu3" data-bs-toggle="dropdown"
           aria-expanded="false"><span class="dot-count bg-warning"></span><i
                class="feather-bell font-xl text-current"></i></a>
        <div class="dropdown-menu dropdown-menu-end p-4 rounded-3 border-0 shadow-lg" aria-labelledby="dropdownMenu3">

            <h4 class="fw-700 font-xss mb-4">Notification</h4>
            <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                <img src="images/user-8.png" alt="user" class="w40 position-absolute left-0">
                <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Hendrix Stamp <span
                        class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 3 min</span></h5>
                <h6 class="text-grey-500 fw-500 font-xssss lh-4">There are many variations of pass..</h6>
            </div>
            <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                <img src="images/user-4.png" alt="user" class="w40 position-absolute left-0">
                <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Goria Coast <span
                        class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 2 min</span></h5>
                <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
            </div>

            <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                <img src="images/user-7.png" alt="user" class="w40 position-absolute left-0">
                <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Surfiya Zakir <span
                        class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 1 min</span></h5>
                <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
            </div>
            <div class="card bg-transparent-card w-100 border-0 ps-5">
                <img src="images/user-6.png" alt="user" class="w40 position-absolute left-0">
                <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Victor Exrixon <span
                        class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 30 sec</span></h5>
                <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
            </div>
        </div>
    </div>
    <!-- navigation top -->

    <!-- navigation left -->
    <nav class="navigation scroll-bar">
        <div class="container ps-0 pe-0">
            <div class="nav-content">
                <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                    <div class="card-body position-relative h150 bg-image-cover bg-image-center"
                         style="background-image: url(http://uitheme.net/sociala/images/bb-9.jpg);"></div>
                    <div class="card-body d-block pt-4 text-center">
                        <figure class="avatar mt--6 position-relative w75 z-index-1 w100 z-index-1 ms-auto me-auto"><img
                                src="http://uitheme.net/sociala/images/pt-1.jpg" alt="image"
                                class="p-1 bg-white rounded-xl w-100"></figure>
                        <h4 class="font-xs ls-1 fw-700 text-grey-900">{{Auth::user()->name}} <span
                                class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{"@".Auth::user()->username}}</span></h4>
                    </div>
                    <div class="card-body d-flex align-items-center ps-4 pe-4 pt-0">
                        <h4 class="font-xsssss text-center text-grey-500 fw-600 ms-2 me-2"><b
                                class="text-grey-900 mb-1 font-xss fw-700 d-inline-block ls-3 text-dark">456 </b>
                            bajargan</h4>
                        <h4 class="font-xsssss text-center text-grey-500 fw-600 ms-2 me-2"><b
                                class="text-grey-900 mb-1 font-xss fw-700 d-inline-block ls-3 text-dark">{{Auth::user()->yo}} </b> yo</h4>
                        <h4 class="font-xsssss text-center text-grey-500 fw-600 ms-2 me-2"><b
                                class="text-grey-900 mb-1 font-xss fw-700 d-inline-block ls-3 text-dark">32k </b> Follow
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ps-0 pe-0">
            <div class="nav-content">
                <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                    <ul class="mb-1">
                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <li><a href="default-settings.html" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                                    class="font-sm feather-settings me-3 text-grey-500"></i><span>Settings</span></a>
                        </li>
                        <li><a href="default-analytics.html" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                                    class="font-sm feather-pie-chart me-3 text-grey-500"></i><span>Analytics</span></a>
                        </li>
                        <li><a href="{{ route('logout') }}" class="nav-content-bttn open-font h-auto pt-2 pb-2"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i
                                    class="font-sm feather-log-out me-3 text-grey-500"></i><span>Chiqish</span></a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navigation left -->
    <!-- main content -->
    <div class="main-content right-chat-active">

        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left">
                <!-- loader wrapper -->
                <div class="preloader-wrap p-3">
                    <div class="box shimmer">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                    <div class="box shimmer mb-3">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                    <div class="box shimmer">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                </div>
                <!-- loader wrapper -->
                <div class="row feed-body">
                    <h1>Shartlar</h1>
                    <div class="col-xl-8 col-xxl-9 col-lg-8">
                        <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-2">
                            <div class="card-body p-0 d-flex">
                                <h2 class="fw-700 text-grey-900 mt-1">Tez aytish!Bunga misol qilib shuni aytish kerakki
                                    gtregaergawrb ar awrfr<span
                                        class="d-block font-xssss fw-500 mt-2 lh-3 text-grey-500">2 soat oldin</span>
                                </h2>
                                <a href="" class="ms-auto"></a><i
                                    class="feather-check text-white bg-success-gradiant me-1 btn-round-xs font-xss-2"
                                    title="Shart bajarilgan"></i></a>
                            </div>
                            <div class="card-body p-0 me-lg-4">
                                <p class="fw-500 text-grey-900 lh-26 font-xssss w-100 mb-2">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non
                                    nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus <a
                                        href="#" class="fw-600 text-primary ms-2">Ko'rish</a></p>
                            </div>
                            <div class="card-body d-block p-0 mb-3">
                                <div class="row ps-2 pe-2">
                                    <div class="col-sm-12 p-1">
                                        <img src="images/tez-aytish.jpg" class="rounded-3 w-100" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex p-0">
                                <a href="#"
                                   class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                        class="feather-dollar-sign text-white bg-danger me-1 btn-round-xs font-xss"></i>1
                                    yo.</i></a>
                                <a href="#"
                                   class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                        class="feather-user-check text-white bg-success-gradiant me-1 btn-round-xs font-xss"></i>300</i>
                                </a>


                                <a href="#"
                                   class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                        class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                        class="d-none-xs">Share</span></a>
                            </div>
                        </div>
                        <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-2">
                            <div class="card-body p-0 d-flex">
                                <h2 class="fw-700 text-grey-900 mt-1">Tez aytish!<span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">2 hour ago</span></h2>
                                <a href="" class="ms-auto" id="dropdownMenu2" data-bs-toggle="dropdown"
                                   aria-expanded="false"></a><i
                                    class="feather-check text-black bg-greylight me-1 btn-round-xs font-xss-2"></i></a>
                            </div>
                            <div class="card-body p-0 me-lg-4">
                                <p class="fw-500 text-grey-900 lh-26 font-xssss w-100 mb-2">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non
                                    nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus <a
                                        href="#" class="fw-600 text-primary ms-2">Ko'rish</a></p>
                            </div>
                            <div class="card-body d-block p-0 mb-3">
                                <div class="row ps-2 pe-2">
                                    <div class="col-sm-12 p-1">
                                        <img src="images/tez-aytish.jpg" class="rounded-3 w-100" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex p-0">
                                <a href="#"
                                   class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                        class="feather-dollar-sign text-white bg-danger me-1 btn-round-xs font-xss"></i>1
                                    yo.</i></a>

                                <a href="#"
                                   class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                        class="feather-user-check text-white bg-success-gradiant me-1 btn-round-xs font-xss"></i>300</i>
                                </a>


                                <a href="#"
                                   class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                        class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                        class="d-none-xs">Share</span></a>
                            </div>
                        </div>
                        <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-2">
                            <h2 class="fw-700 text-grey-900 mt-1">Beeline<span
                                    class="d-block font-xssss fw-500 mt-2 lh-3 text-grey-500">Reklama</span></h2>

                            <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                                <video class="float-right w-100" autoplay muted loop>
                                    <source src="images/beeline.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="card-body p-0 me-lg-4">
                                <h5 class="fw-500 text-grey-700 mt-1">Anthony Daugloi asdfasdfasdf</h5>
                            </div>
                            <div class="card-body d-flex p-0">
                                <a href="#"
                                   class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                        class="feather-external-link text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i></i>
                                    Open</a>

                                <a href="#"
                                   class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                        class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                        class="d-none-xs">Share</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-3 col-lg-4 ps-lg-0">
                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 mt-0">
                            <div class="card-body d-flex align-items-center p-4">
                                <h2 class="fw-700 text-grey-900 mt-1">Beeline<span
                                        class="d-block font-xssss fw-500 mt-2 lh-3 text-grey-500">Reklama</span></h2>

                            </div>

                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                                <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                                    <video class="float-right w-100" autoplay muted loop>
                                        <source src="images/beeline.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>

                        </div>

                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex align-items-center p-4">
                                <h4 class="fw-700 mb-0 font-xssss text-grey-900">Suggest Pages</h4>
                                <a href="default-group.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                            </div>
                            <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                                <img src="images/g-2.jpg" alt="img" class="img-fluid rounded-xxl mb-2">

                            </div>
                            <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                <a href="#"
                                   class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                                        class="feather-external-link font-xss me-2"></i> Like Page</a>
                            </div>

                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0 overflow-hidden">
                                <img src="images/g-3.jpg" alt="img" class="img-fluid rounded-xxl mb-2 bg-lightblue">
                            </div>
                            <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                <a href="#"
                                   class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                                        class="feather-external-link font-xss me-2"></i> Like Page</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- main content -->

    <!-- right chat -->
    <div class="right-chat nav-wrap mt-2 right-scroll-bar">
        <div class="middle-sidebar-right-content bg-white shadow-xss rounded-xxl">

            <!-- loader wrapper -->
            <div class="preloader-wrap p-3">
                <div class="box shimmer">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
                <div class="box shimmer mb-3">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
                <div class="box shimmer">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
            </div>
            <!-- loader wrapper -->

            <div class="section full pe-3 ps-4 pt-4 position-relative feed-body">
                <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">CONTACTS</h4>
                <ul class="list-group list-group-flush">
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                        <figure class="avatar float-left mb-0 me-2">
                            <img src="images/user-8.png" alt="image" class="w35">
                        </figure>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Hurin
                                Seary</a>
                        </h3>
                        <span class="badge badge-primary text-white badge-pill fw-500 mt-0">2</span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                        <figure class="avatar float-left mb-0 me-2">
                            <img src="images/user-7.png" alt="image" class="w35">
                        </figure>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Victor
                                Exrixon</a>
                        </h3>
                        <span class="bg-success ms-auto btn-round-xss"></span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                        <figure class="avatar float-left mb-0 me-2">
                            <img src="images/user-6.png" alt="image" class="w35">
                        </figure>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">{{Auth::user()->name}}</a>
                        </h3>
                        <span class="bg-warning ms-auto btn-round-xss"></span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                        <figure class="avatar float-left mb-0 me-2">
                            <img src="images/user-5.png" alt="image" class="w35">
                        </figure>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Goria
                                Coast</a>
                        </h3>
                        <span class="bg-success ms-auto btn-round-xss"></span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                        <figure class="avatar float-left mb-0 me-2">
                            <img src="images/user-4.png" alt="image" class="w35">
                        </figure>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Hurin
                                Seary</a>
                        </h3>
                        <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">4:09 pm</span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                        <figure class="avatar float-left mb-0 me-2">
                            <img src="images/user-3.png" alt="image" class="w35">
                        </figure>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">David
                                Goria</a>
                        </h3>
                        <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">2 days</span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                        <figure class="avatar float-left mb-0 me-2">
                            <img src="images/user-2.png" alt="image" class="w35">
                        </figure>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Seary
                                Victor</a>
                        </h3>
                        <span class="bg-success ms-auto btn-round-xss"></span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                        <figure class="avatar float-left mb-0 me-2">
                            <img src="images/user-12.png" alt="image" class="w35">
                        </figure>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Ana
                                Seary</a>
                        </h3>
                        <span class="bg-success ms-auto btn-round-xss"></span>
                    </li>

                </ul>
            </div>
            <div class="section full pe-3 ps-4 pt-4 pb-4 position-relative feed-body">
                <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">GROUPS</h4>
                <ul class="list-group list-group-flush">
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">

                        <span class="btn-round-sm bg-primary-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Studio
                                Express</a>
                        </h3>
                        <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">2 min</span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">

                        <span class="btn-round-sm bg-gold-gradiant me-3 ls-3 text-white font-xssss fw-700">AR</span>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Armany
                                Design</a>
                        </h3>
                        <span class="bg-warning ms-auto btn-round-xss"></span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">

                        <span class="btn-round-sm bg-mini-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">De
                                fabous</a>
                        </h3>
                        <span class="bg-success ms-auto btn-round-xss"></span>
                    </li>
                </ul>
            </div>
            <div class="section full pe-3 ps-4 pt-0 pb-4 position-relative feed-body">
                <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">Pages</h4>
                <ul class="list-group list-group-flush">
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">

                        <span class="btn-round-sm bg-primary-gradiant me-3 ls-3 text-white font-xssss fw-700">AB</span>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Armany
                                Seary</a>
                        </h3>
                        <span class="bg-success ms-auto btn-round-xss"></span>
                    </li>
                    <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">

                        <span class="btn-round-sm bg-gold-gradiant me-3 ls-3 text-white font-xssss fw-700">SD</span>
                        <h3 class="fw-700 mb-0 mt-0">
                            <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Entropio
                                Inc</a>
                        </h3>
                        <span class="bg-success ms-auto btn-round-xss"></span>
                    </li>

                </ul>
            </div>

        </div>
    </div>


    <!-- right chat -->


    <div class="app-header-search">
        <form class="search-form">
            <div class="form-group searchbox mb-0 border-0 p-1">
                <input type="text" class="form-control border-0" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline" role="img" class="md hydrated"
                              aria-label="search outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 mt-1 d-inline-block close searchbox-close">
                    <i class="ti-close font-xs"></i>
                </a>
            </div>
        </form>
    </div>

</div>

<div class="modal bottom side fade" id="Modalstory" tabindex="-1" role="dialog" style=" overflow-y: auto;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 bg-transparent">
            <button type="button" class="close mt-0 position-absolute top--30 right--10" data-dismiss="modal"
                    aria-label="Close"><i class="ti-close text-grey-900 font-xssss"></i></button>
            <div class="modal-body p-0">
                <div class="card w-100 border-0 rounded-3 overflow-hidden bg-gradiant-bottom bg-gradiant-top">
                    <div class="owl-carousel owl-theme dot-style3 story-slider owl-dot-nav nav-none">
                        <div class="item"><img src="images/story-5.jpg" alt="image"></div>
                        <div class="item"><img src="images/story-6.jpg" alt="image"></div>
                        <div class="item"><img src="images/story-7.jpg" alt="image"></div>
                        <div class="item"><img src="images/story-8.jpg" alt="image"></div>

                    </div>
                </div>
                <div class="form-group mt-3 mb-0 p-3 position-absolute bottom-0 z-index-1 w-100">
                    <input type="text"
                           class="style2-input w-100 bg-transparent border-light-md p-3 pe-5 font-xssss fw-500 text-white"
                           value="Write Comments">
                    <span class="feather-send text-white font-md text-white position-absolute"
                          style="bottom: 35px;right:30px;"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-popup-chat">
    <div class="modal-popup-wrap bg-white p-0 shadow-lg rounded-3">
        <div class="modal-popup-header w-100 border-bottom">
            <div class="card p-3 d-block border-0 d-block">
                <figure class="avatar mb-0 float-left me-2">
                    <img src="images/user-12.png" alt="image" class="w35 me-1">
                </figure>
                <h5 class="fw-700 text-primary font-xssss mt-1 mb-1">Hendrix Stamp</h5>
                <h4 class="text-grey-500 font-xsssss mt-0 mb-0"><span
                        class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                <a href="#" class="font-xssss position-absolute right-0 top-0 mt-3 me-4"><i
                        class="ti-close text-grey-900 mt-2 d-inline-block"></i></a>
            </div>
        </div>
        <div class="modal-popup-body w-100 p-3 h-auto">
            <div class="message">
                <div class="message-content font-xssss lh-24 fw-500">Hi, how can I help you?</div>
            </div>
            <div class="date-break font-xsssss lh-24 fw-500 text-grey-500 mt-2 mb-2">Mon 10:20am</div>
            <div class="message self text-right mt-2">
                <div class="message-content font-xssss lh-24 fw-500">I want those files for you. I want you to send 1
                    PDF and 1 image file.
                </div>
            </div>
            <div class="snippet pt-3 ps-4 pb-2 pe-3 mt-2 bg-grey rounded-xl float-right" data-title=".dot-typing">
                <div class="stage">
                    <div class="dot-typing"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="modal-popup-footer w-100 border-top">
            <div class="card p-3 d-block border-0 d-block">
                <div class="form-group icon-right-input style1-input mb-0"><input type="text"
                                                                                  placeholder="Start typing.."
                                                                                  class="form-control rounded-xl bg-greylight border-0 font-xssss fw-500 ps-3"><i
                        class="feather-send text-grey-500 font-md"></i></div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('css/user/js/plugin.js') }}"></script>
<script src="{{ asset('css/user/js/lightbox.js') }}"></script>
<script src="{{ asset('css/user/js/scripts.js') }}"></script>
{{--<div id="app">--}}
{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'Laravel') }}--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="navbar-nav mr-auto">--}}

{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <main class="py-4">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                        <div class="card-body">--}}
{{--                            @if (session('status'))--}}
{{--                                <div class="alert alert-success" role="alert">--}}
{{--                                    {{ session('status') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            {{ __('You are logged in!') }}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </main>--}}
{{--</div>--}}
</body>
</html>
