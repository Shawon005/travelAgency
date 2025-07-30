<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('')}}lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="l{{asset('')}}ib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('')}}css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    @include('userSection.topsection.nav')
    <!-- Topbar End -->

    <!-- Hero Section -->
    @yield('hero')

    <!-- Footer Start -->
    @include('userSection.footer.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('')}}lib/easing/easing.min.js"></script>
    <script src="{{asset('')}}lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('')}}lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('')}}lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('')}}lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('')}}mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('')}}mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('')}}js/main.js"></script>
</body>

</html>