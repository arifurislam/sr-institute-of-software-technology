<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','dashboard')</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{asset('admin')}}/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/helper.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style.css" rel="stylesheet">

    @stack('css')
</head>

<body>

    <!-- sidebar -->
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{url('dashboard')}}">
                           <span>SR Software Technology</span></a>
                    </div>
                    <li class="label">Main</li>


                    <li class="{{Request::is('dashboard')? 'active':''}}"><a href="{{url('dashboard')}}"><i
                                class="ti-home"></i>Dashboard</a></li>
                    <li class="{{Request::is('dashboard/contact*')? 'active':''}}"><a
                            href="{{url('dashboard/contact')}}"><i class="ti-dropbox"></i>Contacts</a></li>
                             @if(Auth::user()->role_id == 1)
                    <li class="{{Request::is('dashboard/users*')? 'active':''}}"><a href="{{url('dashboard/users')}}"><i
                                class="ti-user"></i>Users</a></li>
                    @endif
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            <i class="ti-close"></i> Logout
                        </a>
                    </li>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <!-- /sidebar -->

    <!-- topbar -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">{{Auth::user()->email}}
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /topbar -->


    <!-- contents -->
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                @yield('contents')

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>
                                <script>
                                    var CurrentYear = new Date().getFullYear()
                                    document.write(CurrentYear)

                                </script>
                                <a href="#">@ SR Institute Of Software Technology</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin')}}/js/lib/jquery.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/menubar/sidebar.js"></script>
    <script src="{{asset('admin')}}/js/lib/preloader/pace.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/bootstrap.min.js"></script>
    <script src="{{asset('admin')}}/js/scripts.js"></script>
    <script src="{{asset('admin')}}/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="{{asset('admin')}}/js/lib/chartist/chartist.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="{{asset('admin')}}/js/dashboard2.js"></script>

    @stack('js')
</body>

</html>
