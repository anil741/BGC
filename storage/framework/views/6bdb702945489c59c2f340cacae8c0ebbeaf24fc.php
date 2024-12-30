
<?php $__env->startSection('title', 'candidate login'); ?>
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section id="about" class=" about hold-transition login-page" data-aos="fade-up">
  <!-- <div class="container" data-aos="fade-up"> -->
    <div class="login-box mb-3">
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
                <p class="mb-0" style="font-size: 13px;" ><?php echo e(session('status')); ?></p>
              </div>
            <?php endif; ?>
          <form action="<?php echo e(Route('candidateLogin')); ?>" method="post">
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
                  
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>         
     
    </div>
  <!-- </div> -->
</section>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.candidate_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/frontend/candidate_login.blade.php ENDPATH**/ ?>