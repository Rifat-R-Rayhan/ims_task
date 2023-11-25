<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>

    <!-- animate.css-->
    <link href="masterlayouts/assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="masterlayouts/assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="masterlayouts/assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="masterlayouts/assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="masterlayouts/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="masterlayouts/assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- OffCanvasMenu -->
    <link href="masterlayouts/assets/vendor/OffCanvasMenuEffects/css/menu_sideslide.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="masterlayouts/assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="masterlayouts/assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="masterlayouts/assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="masterlayouts/assets/custom/css/custom-responsive.css" rel="stylesheet">




    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="user/lib/animate/animate.min.css" rel="stylesheet">
    <link href="user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="user/css/style.css" rel="stylesheet">

</head>

<body>

    <div class="search-section">
        <a class="close-search" href="#"></a>
        <div class="d-flex justify-content-center align-items-center h-100">
            <form method="post" action="#" class="w-50">
                <div class="row">
                    <div class="col-10">
                        <input type="search" value=""
                            class="form-control palce bg-transparent border-0 search-input"
                            placeholder="Search Here ..." />
                    </div>
                    <div class="col-2 mt-3">
                        <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <!-- Start Top Header -->
    <div class="fables-forth-background-color fables-top-header-signin">
        <div class="container">
            <div class="row" id="top-row">
                <div class="col-12 col-sm-3 col-lg-5">
                    <a href="{{route('login')}}"
                        class="top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block float-left"><span
                            class="fables-iconuser"></span> Sign in</a>
                    <a href="{{route('registration')}}"
                        class="top-link top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block border-left-0 float-left"><i
                            class="fas fa-user-plus"></i> Register </a>
                </div>
                <div class="col-12 col-sm-5 col-lg-4 text-left text-lg-right">
                    <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone : (+880)
                        1610 158095 - (+880) 1760 158095</p>
                </div>
                <div class="col-12 col-sm-4 col-lg-3 text-left text-lg-right">
                    <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email:
                        rifatrayhan2001@gmail.com</p>
                </div>

            </div>
        </div>
    </div>

    <!-- /End Top Header -->

    <main>
        @hasSection('content')
            @yield('content')
        @else
            <h2>No content found</h2>
        @endif
    </main>


    <div class="copyright fables-main-background-color mt-0 border-0 white-color">
        <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
            <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <p class="mb-0">Copyright © Rifat 2023. All rights reserved.</p>

    </div>

    <!-- /End Footer 2 Background Image -->



    <script src="masterlayouts/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="masterlayouts/assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="masterlayouts/assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="masterlayouts/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="masterlayouts/assets/vendor/popper/popper.min.js"></script>
    <script src="masterlayouts/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="masterlayouts/assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="masterlayouts/assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="masterlayouts/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="masterlayouts/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="masterlayouts/assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="masterlayouts/assets/custom/js/custom.js"></script>
</body>

</html>
