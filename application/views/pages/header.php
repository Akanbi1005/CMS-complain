<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title class="Header">Gbagada Hospital</title>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?=base_url('assets/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    
    <!-- Stylesheet -->
    <!-- ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/prettyPhoto.css')?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?=base_url('assets/js/modernizr.custom.js')?>"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
    <div id="status"> <img src="<?=base_url('assets/img/preloader1.gif')?>" width="64" height="64" alt=""> </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" id="nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
            <a class="navbar-brand page-scroll" href="#page-top"> <i class="">Gbagada</i><span style="color:orange"> General Hospital</span></a> </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav" id="olami">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden"> <a href="#page-top"></a> </li>
                <li> <a class="page-scroll" href="#about">About</a> </li>
                <li> <a class="page-scroll" href="#services">Services</a> </li>
                <li> <a class="page-scroll" href="#works">Portfolio</a> </li>
                <li> <a class="page-scroll" href="#team">Team</a> </li>
                <li> <a class="page-scroll" href="#testimonials">Testimonials</a> </li>
                <li> <a class="page-scroll" href="#contact">Contact</a> </li>
                <li> <a class="page-scroll" href="<?=site_url('Login')?>">Admin Log</a> </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
