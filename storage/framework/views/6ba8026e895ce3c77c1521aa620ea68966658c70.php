
<?php $__env->startSection('title', 'Forgot Password'); ?>
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section id="about" class=" about hold-transition login-page" data-aos="fade-up">
	<div class="container">
		<div class="container">
	  		<center> 
			    <h3 style="font-family: inherit!important;">Sorry!</h3>
			    <label style="font-size: 20px;">Your are not authenticated user to access this page.</label>
				</br>
			    <a href="<?php echo e(url('/login')); ?>" class=" col-md-2 mt-3 btn btn-primary">Back</a>
	  		</center>   
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

<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/frontend/auth_page.blade.php ENDPATH**/ ?>