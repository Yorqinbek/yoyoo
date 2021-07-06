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
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/yoyoo.svg')}}">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body class="color-theme-blue mont-font">


<div class="main-wrapper">

    <!-- navigation top-->
    <div class="nav-header  bg-white shadow-xs border-0">
        <div class="nav-top">
            <a href="/"><i class="feather-dollar-sign text-success display1-size me-2 ms-0"></i><span
                    class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">yoyoo.uz </span>
            </a>

            <a href="{{route('xabarlar')}}" class="mob-menu p-2 text-center ms-auto menu-icon"><span class="dot-count {{$view ? 'bg-warning' : '' }}"></span><i class="feather-bell font-xl text-current"></i></a>
            <button class="nav-menu me-0 ms-2"></button>
        </div>

        <a href="#" class="p-2 text-center ms-3 menu-icon center-menu-icon"><i
                    class="feather-home font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <a href="#" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                class="feather-zap font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>

        <a href="#" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                class="feather-user font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <a href="#" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
                class="feather-shopping-bag font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <form action="#" class="header-search" style="margin:0 auto">
            <div class="form-group mb-0 icon-input">
                <i class="feather-search font-sm text-grey-400"></i>
                <input type="text" placeholder="Qidiruv..."
                       class="bg-grey border-0 lh-32 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl w350 theme-dark-bg">
            </div>
        </form>
        <a href="{{route('xabarlar')}}" class="p-2 text-center ms-auto menu-icon"><span class="dot-count {{$view ? 'bg-warning' : '' }}"></span><i
                class="feather-bell font-xl text-current"></i></a>
    </div>
    <!-- navigation top -->

    <!-- navigation left -->
    <nav class="navigation scroll-bar">
        <div class="container ps-0 pe-0">
            <div class="nav-content">
                <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                    <div class="card-body position-relative h150 bg-image-cover bg-image-center"
                         style="background-image: url({{asset('images/user_backgroud.jpg')}});"></div>
                    <div class="card-body d-block pt-4 text-center">

                        <h4 class="font-xs ls-1 fw-700 text-grey-900">{{Auth::user()->name}} <span
                                class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{"@".Auth::user()->username}}</span>

                        </h4>

                    </div>
                    <div class="card-body d-block pt-2 text-center">
                        <h4 class="font-xs ls-1 fw-700 text-grey-900">Balans: {{Auth::user()->yo}} yo.<span
                                class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">1 yo. = 100 so`m</span>
                        </h4>
                    </div>

                    <div class="card-body d-block pt-2 text-center">
                        <h4 class="font-xs ls-1 fw-700 text-grey-900">Referal Link
                            <span class="d-block font-xssss fw-500 mt-1 text-grey-500" id="copyt"
                            style=" overflow-wrap: break-word;word-wrap: break-word;hyphens: auto;">{{URL::to('').'/register/'.Auth::user()->username}} <!--<i class="feather-clipboard font-xss text-current" style="cursor: pointer;"></i>--></span>
                        </h4>

                    </div>


                </div>
            </div>
        </div>
        <div class="container ps-0 pe-0">
            <div class="nav-content">
                <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span></div>
                    <ul class="mb-1">
                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <li><a href="/home" class="nav-content-bttn {{ Request::is('home') ||  request()->segment(2) == 'shart' ? 'active' : '' }} open-font h-auto pt-2 pb-2"><i
                                    class="font-sm feather-home me-3 text-grey-500"></i><span>Home</span></a>
                        </li>
                        <li><a href="/home/xabarlar" class="nav-content-bttn {{ Request::is('home/xabarlar') || request()->segment(2) == 'xabarlar'  ? 'active' : '' }} open-font h-auto pt-2 pb-2"><i
                                    class="font-sm feather-bell me-3 text-grey-500"></i><span>Xabarlar</span></a>
                        </li>
                        <li><a href="{{route('money')}}" class="nav-content-bttn {{ Request::is('home/money') || request()->segment(2) == 'money'  ? 'active' : '' }} open-font h-auto pt-2 pb-2"><i
                                    class="font-sm feather-dollar-sign me-3 text-grey-500"></i><span>Pulni yechish</span></a>
                        </li>
                        <li><a href="/home/aloqa" class="nav-content-bttn {{ Request::is('home/aloqa') || request()->segment(2) == 'aloqa'  ? 'active' : '' }} open-font h-auto pt-2 pb-2"><i
                                    class="font-sm feather-help-circle me-3 text-grey-500"></i><span>Aloqa</span></a>
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
                <div class="row feed-body">
                    @yield('content')
                    <div class="col-xl-4 col-xxl-3 col-lg-4 ps-lg-0">
                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 mt-0">
                            <div class="card-body d-flex align-items-center">
                                <h2 class="fw-700 text-grey-900 mt-1">Beeline<span
                                        class="d-block font-xssss fw-500 mt-2 lh-3 text-grey-500">Reklama</span></h2>

                            </div>

                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                                <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                                    <video class="float-right w-100" autoplay muted loop>
                                        <source src="{{asset('images/beeline.mp4')}}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                <a href="#"
                                   class="p-2 lh-28 w-100 bg-primary-gradiant text-white text-center font-xssss fw-700 rounded-xl"><i
                                        class="feather-external-link font-xss me-2"></i>Batafsil</a>
                            </div>
                        </div>


                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex align-items-center">
                                <h2 class="fw-700 text-grey-900 mt-1">yoyoo<span
                                        class="d-block font-xssss fw-500 mt-2 lh-3 text-grey-500">Reklama</span></h2>

                            </div>
                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                                <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                                <img src="{{asset('images/reklama.png')}}" alt="img" class="img-fluid rounded-xxl mb-2">
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                <a href="#"
                                   class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                                        class="feather-external-link font-xss me-2"></i> Batafsil</a>
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

    <div class="app-footer border-0 shadow-lg ">

    </div>

</div>
<script src="{{ asset('css/user/js/plugin.js') }}"></script>
<!--<script src="{{ asset('css/user/js/lightbox.js') }}"></script>-->
<script src="{{ asset('css/user/js/scripts.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>

<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
    @if($view)
        toastr.options.closeButton = true;
        toastr.success('Sizda o`qilmagan xabar bor', 'Xabar', {timeOut: 2000})
    @else
    @endif
</script>
@yield('script')
</body>
</html>
