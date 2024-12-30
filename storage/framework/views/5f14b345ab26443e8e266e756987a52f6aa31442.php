
<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Dashboard</h1>
			</div>
		</div>
	</div>
</div>
<?php if(Session::has('success')): ?>
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>

<?php if(Session::get('org_verified') == 1): ?>
<section class="content">
	<?php if(Session::has('error')): ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo e(Session::get('error')); ?>

	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-lg-12 col-6">
			
			<div class="small-box bg_model_color_three" style="background-color: #F2991F !important;border-radius: 0px;">
			<label class="pl-4 pt-4" style="color: #000 !important">
				Last 6 Months
			</label>
				<div class="p-2 d-flex font-black">				
					<div class="inner col-lg-2">
					<a href="<?php echo e(Route('partialRequest')); ?>" >
						<h3><?php echo e($data['partial_app']); ?></h3>

						<p>Partial Orders</p>
					</a>
					</div>
					<div class="vertical-line col-lg-0"></div>
					<div class="inner col-lg-2">
						<a href="<?php echo e(Route('showOrgPendingOrderList')); ?>">
						<h3><?php echo e($data['pending_app']); ?></h3>

						<p>Pending Orders</p>
						</a>
					</div>
					<div class="vertical-line col-lg-0"></div>
					<div class="inner col-lg-2">
					 <a href="<?php echo e(Route('applicationInprogressList')); ?>" >
						<h3><?php echo e($data['inprogress_app']); ?></h3>

						<p>Inprogress Orders</p>
					 </a>
					</div>
					<div class="vertical-line col-lg-0"></div>
					<div class="inner col-lg-2">
					<a href="<?php echo e(Route('applicationCompletedList')); ?>">
						<h3><?php echo e($data['completed_app']); ?></h3>

						<p>Completed Orders</p>
						</a>
					</div>
					<div class="vertical-line col-lg-0"></div>
					<div class="inner col-lg-2">
						<a href="<?php echo e(Route('applicationRejectedList')); ?>">
						<h3><?php echo e($data['cancelled_app']); ?></h3>

						<p>Cancelled Orders</p>
						</a>
					</div>
					<!-- <i class="ion ion-bag"></i> -->
				</div>
				<!-- <div class="small-box-footer" style="padding: 7%;"></div> -->
			</div>
		</div>
	</div>
	
</section>
<style>
	.small-box h3 {
	 font-weight: 200 !important; 
	}
	</style>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/organisation/organisation.blade.php ENDPATH**/ ?>