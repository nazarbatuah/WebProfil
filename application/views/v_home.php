<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url=base_url().'asset/';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nazarudin Syah</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo $url. 'vendor/bootstrap/css/bootstrap.min.css'; ?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo $url. 'vendor/font-awesome/css/font-awesome.min.css'; ?>">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo $url. 'css/landy-iconfont.css'; ?>">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800'">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo $url. 'vendor/owl.carousel/assets/owl.carousel.css'; ?>">
    <link rel="stylesheet" href="<?php echo $url. 'vendor/owl.carousel/assets/owl.theme.default.css'; ?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo $url. 'css/style.default.css'; ?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo $url. 'css/custom.css'; ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top"><a href="<?php base_url().'c_data'; ?>" class="navbar-brand">Nazar Batuah</a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
            <li class="nav-item"><a href="#extra-features" class="nav-link link-scroll">Home</a></li>
            <li class="nav-item"><a href="#browser" class="nav-link link-scroll">Writings</a></li>
            <li class="nav-item"><a href="#testimonials" class="nav-link link-scroll">My Family</a></li>
            <!-- <li class="nav-item"><a href="text.html" class="nav-link">Text Page</a></li> -->
          </ul>
          <div class="navbar-text">   
            <!-- Button trigger modal--><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Login</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Modal-->
    <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Login Admin</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form id="signupform" form action="<?php echo base_url('c_login/cek_login'); ?>" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" maxlength="16" placeholder="Username" id="username" required="">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" maxlength="12" placeholder="Password" id="password" required="">
              </div>
              <div class="form-group">
                <button type="submit" name="submit" class="submit btn btn-primary btn-shadow btn-gradient">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <section id="extra-features" class="extra-features bg-primary">
      <div class="container text-center">
        <header>
          <h2>{ nazarudinsyah.com }            </h2>
          <div class="row">
            <p class="lead col-lg-8 mx-auto">Ngaji -> Ngoding -> Ngajar</p>
          </div>
        </header>
        <div class="grid row">

        <?php foreach($user as $u){ ?>
          <div class="item col-lg-4 col-md-6">
            <div class="icon"> <i class="icon-quality"></i></div>
            <h3 class="h5"><?php echo $u->nama_kategori ?></h3>
            <p><?php echo $u->rincian ?></p>
          </div>
          
        <?php } ?>
        </div>
      </div>
    </section>
    <section id="browser" class="browser">
      <div class="container">
        <div class="row d-flex justify-content-center"> 
          <div class="col-lg-8 text-center">
            <h2 class="h3 mb-5">Artikel Terbaru</h2>
            <div class="browser-mockup">
              <div id="nav-tabContent" class="tab-content">
                <div id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab" class="tab-pane fade show active">
                	<img src="http://localhost/maju/asset/img/preview-3.png" alt="..." class="img-fluid">
                </div>
                <div id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab" class="tab-pane fade">
                	<img src="http://localhost/maju/asset/img/preview-2.png" alt="..." class="img-fluid">
                </div>
                <div id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab" class="tab-pane fade">
                	<img src="http://localhost/maju/asset/img/preview-1.png" alt="..." class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="myTab" role="tablist" class="nav nav-tabs">
          <div class="row">
            <div class="col-md-4">
            	<a id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-expanded="true" class="nav-item nav-link active"> <span class="number">1</span>Choose any website to turn into an interactive pinboard for feedback</a>
            </div>
            <div class="col-md-4">
            	<a id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" class="nav-item nav-link"> <span class="number">2</span>Choose any website to turn into an interactive pinboard for feedback</a>
            </div>
            <div class="col-md-4">
            	<a id="nav-third-tab" data-toggle="tab" href="#nav-third" role="tab" aria-controls="nav-third" class="nav-item nav-link"> <span class="number">3</span>Choose any website to turn into an interactive pinboard for feedback</a>
            </div>
        </div>
      </div>
    </section>
    <section id="testimonials" class="testimonials">
      <div class="container">
        <header class="text-center no-margin-bottom">   
          <h2>Happy Clients</h2>
          <p class="lead">There are many variations of passages of Lorem Ipsum available, but the majority have</p>
        </header>
        <div class="owl-carousel owl-theme testimonials-slider"> 
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="http://localhost/maju/asset/img/avatar-3.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="http://localhost/maju/asset/img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="http://localhost/maju/asset/img/avatar-5.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="http://localhost/maju/asset/img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Sarrah Wood</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="http://localhost/maju/asset/img/avatar-3.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="http://localhost/maju/asset/img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="http://localhost/maju/asset/img/avatar-5.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="http://localhost/maju/asset/img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Sarrah Wood</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
    <footer class="main-footer bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6"><a href="#" class="brand">Nazarudin Syah</a>
            <ul class="contact-info list-unstyled">
              <li><a href="mailto:sales@landy.com">nazar.abdussamad@gmail.com</a></li>
              <li><a href="tel:123456789">+628 315060 4848</a></li>
            </ul>
            <ul class="social-icons list-inline">
              <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <p>&copy; Copyright 2018 nazarudinsyah.com                       </p>
            </div>
            <div class="col-md-5 text-right">
              <p>Template By <a href="https://bootstrapious.com/" class="external">Bootstrapious</a>  </p>
              <!-- Please do not remove the backlink to Bootstrapious unless you support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :) -->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="<?php echo $url. 'vendor/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo $url. 'vendor/jquery.cookie/jquery.cookie.js'; ?>"> </script>
    <script src="<?php echo $url. 'vendor/owl.carousel/owl.carousel.min.js'; ?>"></script>
    <script src="<?php echo $url. 'js/front.js'; ?>"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>