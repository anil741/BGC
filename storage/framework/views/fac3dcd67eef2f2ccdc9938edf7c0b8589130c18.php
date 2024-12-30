
<?php $__env->startSection('title', 'Forgot Password'); ?>
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section id="about" class=" about hold-transition login-page" data-aos="fade-up">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a class="h4">Screen360</a>
            </div>
            <div class="card-body mb-3">
                <p class="login-box-msg" style="font-size: 16px !important;">Forgot Your Password? </br> We will send you a link to reset your password.</p>
                <?php if(session('status')): ?>
                    <div class="alert alert-success" style="font-size: 14px;" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> 
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session('error')): ?>
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> 
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                <form action="reset_password" method="POST">  
                    <?php echo csrf_field(); ?>
                    <label style="font-weight:400;"> Enter Email</label>
                    <div class="input-group mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 mt-3">
                            <center><button type="submit" class="btn btn-primary btn-block">Send Reset Link</button></center>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
      </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/frontend/forgotPassword.blade.php ENDPATH**/ ?>