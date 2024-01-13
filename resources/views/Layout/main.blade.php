<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->


    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('Template') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/css/responsive.css">

    {{-- Cdnnn Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    {{-- cdnnn bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="{{ request()->is('hotel_axio/home') ? 'active' : '' }}"
                                                href="{{ route('home.index') }}">Home</a></li>
                                        <li><a class="{{ request()->is('hotel_axio/kamar') ? 'active' : '' }}"
                                                href="{{ route('kamar.index') }}">Kamar</a></li>
                                        <li><a class="{{ request()->is('hotel_axio/fasilitas_hotel') ? 'active' : '' }}"
                                                href="{{ route('fasilitas_hotel.index') }}">Fasilitas Hotel</a></li>
                                        <li><a class="{{ request()->is('hotel_axio/resepsionis') ? 'active' : '' }}"
                                                href="{{ route('resepsionis.index') }}">Resep</a></li>
                                        {{-- <li><a class="{{ request()->is('hotel_axio/administrator')? 'active':'' }}"  href="{{ route('administrator.index') }}">Admin</a></li> --}}
                                        <li><a href="#">Admin</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('admin_kamar') }}">Kamar</a></li>
                                                <li><a href="{{ route('admin_fasilitas_hotel') }}">Fasilitas Hotel</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    {{-- <img src="img/logo.png" alt=""> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Book A Room</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <h3 id="nama_hotel">Hotel Axio</h3>
    </div>
    <!-- bradcam_area_end -->
    @yield('isi')

    <!-- forQuery_end-->



    <!-- footer -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                address
                            </h3>
                            <p class="footer_text"> 200, Green road, Mongla, <br>
                                New Yor City USA</p>
                            <a href="#" class="line-button">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Reservation
                            </h3>
                            <p class="footer_text">+10 367 267 2678 <br>
                                reservation@montana.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navigation
                            </h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Rooms</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Sign Up</button>
                            </form>
                            <p class="newsletter_text">Subscribe newsletter to get updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Check Availability</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-6">
                            <input id="datepicker" placeholder="Check in date">
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker2" placeholder="Check out date">
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Adult">1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Children">1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                        <div class="col-xl-12">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Room type">Room type</option>
                                <option value="1">Laxaries Rooms</option>
                                <option value="2">Deluxe Room</option>
                                <option value="3">Signature Room</option>
                                <option value="4">Couple Room</option>
                            </select>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Check Availability</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->


    <!-- JS here -->
    <script src="{{ asset('Template') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('Template') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('Template') }}/js/popper.min.js"></script>
    <script src="{{ asset('Template') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('Template') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('Template') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('Template') }}/js/ajax-form.js"></script>
    <script src="{{ asset('Template') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('Template') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('Template') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('Template') }}/js/scrollIt.js"></script>
    <script src="{{ asset('Template') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('Template') }}/js/wow.min.js"></script>
    <script src="{{ asset('Template') }}/js/nice-select.min.js"></script>
    <script src="{{ asset('Template') }}/js/jquery.slicknav.min.js"></script>
    <script src="{{ asset('Template') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('Template') }}/js/plugins.js"></script>
    <script src="{{ asset('Template') }}/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="{{ asset('Template') }}/js/contact.js"></script>
    <script src="{{ asset('Template') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('Template') }}/js/jquery.form.js"></script>
    <script src="{{ asset('Template') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('Template') }}/js/mail-script.js"></script>

    <script src="{{ asset('Template') }}/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>

    @include('sweetalert::alert')
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    {{-- Confirm Alert pemesanan --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.confirm-pemesanan');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    var form = this.closest('form');
                    Swal.fire({
                        title: 'Konfirmasi confirm',
                        text: 'Apakah Anda yakin untuk melanjutkan pemesanan?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, lanjutkan!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
    {{-- Confirm Alert Delete --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    var form = this.closest('form');
                    Swal.fire({
                        title: 'Konfirmasi hapus',
                        text: 'Apakah Anda yakin untuk hapus data ini?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
