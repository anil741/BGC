
<?php $__env->startSection('title', 'Forgot Password'); ?>
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section id="about" class=" about hold-transition login-page" data-aos="fade-up">
    <div class="login-box" style="width:500px!important;">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h4">Screen360</a>
            </div>
            <div class="card-body mb-3">
                <p class="login-box-msg">Change Password. <br> It's a good idea to use a strong password that you don't use elsewhere.</p>
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> 
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
               <?php  if(session('email')){
                    $email = session('email');
                } ?>
                <form action="<?php echo e(Route('change_password')); ?>" method="post">  
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="email" name="email" value="<?php echo $email; ?>"/>
                    <label style="font-weight:400;"> Enter New password</label>
                    <div class="input-group mb-3">
                        <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"  title="password should have 1 uppercase, 1 lowercase, 1 number, 1 special character and minimum 6 characters" class="form-control" placeholder="New password" value="" name="password" required="" id="txt1" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <label style="font-weight:400;"> Confirm password</label>
                    <div class="input-group mb-3">
                        <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"  title="password should have 1 uppercase, 1 lowercase, 1 number, 1 special character and minimum 6 characters" name="repassword" class="form-control" placeholder="Confirm new password" value="" required id="txt2"  />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label class="" style="font-size: 15px;"> <span class="fa fa-info-circle" style="font-size:18px;"></span> Password Should be of minimum 6 characters which should contain atleat  1 uppercase, 1 lowercase, 1 number, 1 special character</label>
                    </div>
                
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-8">
                            <center><button type="submit" class="btn btn-primary btn-block">Submit</button></center>
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
<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/frontend/new_password.blade.php ENDPATH**/ ?>