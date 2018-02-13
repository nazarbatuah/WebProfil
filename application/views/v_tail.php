<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url=base_url().'asset/';
?>

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
    <!-- Bootstrap CSS-->
    <script type="text/javascript" src="<?php echo base_url().'ckeditor/ckeditor.js'; ?>"></script>
    <script src="<?php echo $url. 'js/front.js'; ?>"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script src="<?php echo $url.'js/jquery-3.1.1.min.js'; ?>"></script>
    <script src="<?php echo $url.'js/bootstrap.min.js'; ?>"></script>
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