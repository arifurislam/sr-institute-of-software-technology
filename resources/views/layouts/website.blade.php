<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Sr-institute-of-software-techonology')</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','SR Institute Of Software Technology')</title>


    <link rel="stylesheet" href="{{asset('website')}}/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{asset('website')}}/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{asset('website')}}/plugins/animate/animate.css">
    <link rel="stylesheet" href="{{asset('website')}}/plugins/aos/aos.css">
    <link rel="stylesheet" href="{{asset('website')}}/plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="{{asset('website')}}/css/style.css" rel="stylesheet">
    @stack('web-css')
    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('website')}}/images/fav-icon.png" type="image/x-icon">
    <link rel="icon" href="/{{asset('website')}}/images/fav-icon.png" type="image/x-icon">

</head>

<body>

    <!-- header -->
    <header class=" header">
        <!-- top header -->
        <div class="top-header py-2 bg-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 text-center text-lg-left">
                        <a class="text-color mr-3" href="+880 1919414153"><strong>CALL</strong> +880 1919414153</a>
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.facebook.com/srinstituteofsoftwaretechnology"><i
                                        class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i
                                        class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i
                                        class="ti-linkedin"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i
                                        class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="{{url('/notice')}}">notice</a></li>
                            <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="{{url('/research')}}">research</a></li>
                            <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#"
                                    data-toggle="modal" data-target="#loginModal">login</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('website')}}/images/logo-sr.png" alt="logo" style="height: 100px;">
                    </a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item {{Request::is('/')? 'active':''}}">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item {{Request::is('/about')? 'active':''}}">
                                <a class="nav-link" href="{{url('/about')}}">About</a>
                            </li>
                            <li class="nav-item {{Request::is('/services')? 'active':''}}">
                                <a class="nav-link" href="{{url('/services')}}">Our Services</a>
                            </li>
                            <li class="nav-item {{Request::is('/seip/registration')? 'active':''}}">
                                <a class="nav-link" href="{{url('/seip/registration')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- Modal -->
 
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Log In</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="POST" action="{{ route('login') }}" class="row">
                        @csrf
                        <div class="col-12">
                        </div>
                        <div class="col-12">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <input id="email" class="form-control mb-3" type="email" name="email" :value="old('email')"
                                required autofocus>
                        </div>
                        <div class="col-12">
                            <label for="">Password <span class="text-danger">*</span></label>
                            <input id="password" class="form-control mb-3" type="password" name="password" required
                    autocomplete="current-password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    @yield('website')


    <!-- footer -->
    <footer>
        <!-- newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
                        <h3 class="text-white">Subscribe Now</h3>
                        <form action="#">
                            <div class="input-wrapper">
                                <input type="email" class="form-control border-0" id="newsletter" name="newsletter"
                                    placeholder="Enter Your Email...">
                                <button type="submit" value="send" class="btn btn-primary">Join</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content -->
        <div class="footer bg-footer section border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                        <!-- logo -->
                        <a class="logo-footer" href="{{url('/')}}"><img class="img-fluid mb-4" style="height: 70px;"
                                src="{{asset('website')}}/images/logo-sr.png" alt="logo"></a>
                        <ul class="list-unstyled">
                            <li class="mb-2">Mohammadia Supper Market (3rd Floor).</li>
                            <li class="mb-2">4 No. Tollabag, Sobahanbag.
                                (Opposit of A.R Plaza).</li>
                            <li class="mb-3">Mirpur Road, Dhanmonddi Dhaka-1207</li>
                            <li>training.sr.bteb@gmail.com</li>
                        </ul>
                    </div>

                    <!-- support -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">SUPPORT</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="#">Web Design &
                                    Development</a></li>
                            <li class="mb-3"><a class="text-color" href="#">UI/UX Design</a></li>
                            <li class="mb-3"><a class="text-color" href="#">SEO & Digital Marketing
                                    Plan</a></li>
                            <li class="mb-3"><a class="text-color" href="#">Mobile Apps Development</a>
                            </li>
                        </ul>
                    </div>
                    <!-- support -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">RECOMMEND</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
                            <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
                            <li class="mb-3"><a class="text-color" href="#">E-Commerce</a></li>
                            <li class="mb-3"><a class="text-color" href="#">Blog</a></li>
                        </ul>
                    </div>

                    <!-- policy -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">About SR </h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="#">Our Story</a></li>
                            <li class="mb-3"><a class="text-color" href="#">Refund Policy</a></li>
                            <li class="mb-3"><a class="text-color" href="#">Terms & Conditions</a></li>
                            <li class="mb-3"><a class="text-color" href="#">News & Events</a></li>
                        </ul>
                    </div>
                    <!-- payments -->
                    <div class="col-lg-12 mt-5">
                        <div class="d-flex justify-content-center align-items-center payment-slider">
                            <span class="mr-5">Pay With |</span>
                            <img src="{{asset('website')}}/images/payments/bKash.png" class="img-fluid mr-3"
                                alt="bkash">
                            <img src="{{asset('website')}}/images/payments/Nagad.png" class="img-fluid mr-3"
                                alt="bkash">
                            <img src="{{asset('website')}}/images/payments/Rocket.png" class="img-fluid mr-3"
                                alt="bkash">
                            <img src="{{asset('website')}}/images/payments/Agrani-Bank.png" class="img-fluid mr-3"
                                alt="bkash">
                            <img src="{{asset('website')}}/images/payments/Southeast-Bank.png" class="img-fluid"
                                alt="bkash">
                            <span class="ml-5">| We Recieve</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright py-4 bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-sm-left">
                        <p class="mb-0">Copyright©
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)

                            </script>
                            SR Institute Of Software Technology. All right reserved
                        </p>
                    </div>
                    <div class="col-sm-5 text-sm-right text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="d-inline-block p-2" target="_blank"
                                    href="https://www.facebook.com/srinstituteofsoftwaretechnology"><i
                                        class="ti-facebook text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i
                                        class="ti-twitter-alt text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i
                                        class="ti-linkedin text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i
                                        class="ti-instagram text-primary"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="{{asset('website')}}/plugins/jQuery/jquery.min.js"></script>
    <script src="{{asset('website')}}/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset('website')}}/plugins/slick/slick.min.js"></script>
    <script src="{{asset('website')}}/plugins/aos/aos.js"></script>
    <script src="{{asset('website')}}/plugins/venobox/venobox.min.js"></script>
    <script src="{{asset('website')}}/plugins/filterizr/jquery.filterizr.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="{{asset('website')}}/plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="{{asset('website')}}/js/script.js"></script>
    @push('web-js')

</body>

</html>
