<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Screen360</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE/dist/css/adminlte.min.css')); ?>">

  <link href="<?php echo e(asset('Home/assets/css/style.css')); ?>" rel="stylesheet">  
   <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('Home/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Home/assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Home/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Home/assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Home/assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Home/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Home/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/dist/css/style.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/dist/css/intlTelInput.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</head>

<body>
  <?php $__env->startSection('header'); ?>
   <header id="header" class="fixed-top " style="background: black;">
    <div class="container d-flex align-items-center justify-content-between">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="" class="logo"><img src="<?php echo e(asset('Home/assets/img/logo.png')); ?>" alt="" class="img-fluid"></a>

      
      <!-- .nav-menu -->

      

    </div>
  </header><!-- End Header -->

  <?php echo $__env->yieldSection(); ?>

  <main id="main">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
   

  <?php $__env->startSection('footer'); ?>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Screen360<span></span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">        
        
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <!-- Vendor JS Files -->

  <script src="<?php echo e(asset('AdminLTE/plugins/jquery/jquery.min.js')); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo e(asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo e(asset('AdminLTE/dist/js/adminlte.min.js')); ?>"></script>

  <script src="<?php echo e(asset('Home/assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/venobox/venobox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/counterup/counterup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('Home/assets')); ?>/js/countries.js"></script>


  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('Home/assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH /app/app1/html/BGC/resources/views/frontend/layouts/candidate_header.blade.php ENDPATH**/ ?>