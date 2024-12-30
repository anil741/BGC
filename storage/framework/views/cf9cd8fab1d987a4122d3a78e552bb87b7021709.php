
<?php $__env->startSection('title', 'Forgot Password'); ?>
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section id="about" class=" about hold-transition login-page" data-aos="fade-up">
  <!-- <div class="container" data-aos="fade-up"> -->
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          
          <a href="" class="logo"><img width="150" height="80" src="<?php echo e(asset('Home/assets/img/logo.png')); ?>" alt="" class="img-fluid"></a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Sign in to start your session</p>
            <?php if(session('status')): ?>
              <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> 
                <?php echo e(session('status')); ?>

              </div>
            <?php endif; ?>
          <form action="userLogin" method="post">
            <?php echo csrf_field(); ?>
            <label style="font-weight:400;"> Enter Email</label>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>">
              <div class="input-group-append">
                <div class="input-group-text background_orange">
                  <span class="fas fa-envelope text-white"></span>
                </div>
              </div>
            </div>
            <label  style="font-weight:400;"> Enter Password</label>
            <div class="input-group mb-3">
              
              <input type="password" name="password" class="form-control" placeholder="Password"  value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
              <div class="input-group-append">
                <div class="input-group-text background_orange">
                  <span class="fas fa-lock text-white"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <!-- <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label> -->
                  <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
                  <label for="remember">Remember me</label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <!-- <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
          </div> -->
          <!-- /.social-auth-links -->

          <div class="text-center mt-2">
            <p class="mb-1">
              <a  class="text_color" href="forgotPassword">I forgot my password</a>
            </p>
          </div>
        
        <p class="mb-0 mt-3 text-center">
          <a  href="<?php echo e(url('/signup')); ?>" class="text-center text_color"><b>Register a new membership</b></a>
        </p>
    </div>
  <!-- </div> -->
</section>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
    function disableBack() { window.history.forward() }
    window.onload = disableBack();
    window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
  });
   
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/frontend/login.blade.php ENDPATH**/ ?>