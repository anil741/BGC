
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

	<section class="content">
		<?php if(Session::get('role_category') == 3): ?>
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_one">
						<div class="inner">
						<h3><?php echo e($data['organisationList']); ?></h3>

						<p>Total Organisation</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-bag"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;"></div>
					</div>
				</div>
			
				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_two">
						<div class="inner">
						<h3><?php echo e($data['candidates']); ?></h3>

						<p>Total Candidates</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-person-add"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_three">
						<div class="inner">
						<h3><?php echo e($data['packages']); ?></h3>

						<p>Total Packages</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-person-add"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_four">
						<div class="inner">
						<h3><?php echo e($data['subServices']); ?></h3>

						<p>Total sub-Services</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_one" style="background: #17A2B8!important;">
						<div class="inner">
						<h3><?php echo e($data['op_candidateApplication']); ?></h3>

						<p>Total Orders</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%; background: #136A78;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_two" style="background: #FFC107!important;">
						<div class="inner">
						<h3><?php echo e($data['op_inprogress_app']); ?></h3>

						<p>In-progress Orders</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%; background: #BC900A;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_three" style="background:#28A745!important;" >
						<div class="inner">
						<h3><?php echo e($data['op_completed_app']); ?></h3>

						<p>Completed Orders</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%; background: #1D7831;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_four" style="background:#F16767!important;">
						<div class="inner">
						<h3><?php echo e($data['op_rejected_app']); ?></h3>

						<p>Cancelled Orders</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%; background: #A84949;"></div>
					</div>
				</div>
			</div>
		<?php else: ?>   	
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_one">
						<div class="inner">
						<h3><?php echo e($data['organisationList']); ?></h3>

						<p>Total Organisation</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-bag"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;"></div>
					</div>
				</div>
			
				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_two">
						<div class="inner">
						<h3><?php echo e($data['candidates']); ?></h3>

						<p>Total Candidates</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-stats-bars"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_three">
						<div class="inner">
						<h3><?php echo e($data['packages']); ?></h3>

						<p>Total Packages</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-person-add"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_four">
						<div class="inner">
						<h3><?php echo e($data['subServices']); ?></h3>

						<p>Total sub-Services</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_one" style="background: #17A2B8!important;">
						<div class="inner">
						<h3><?php echo e($data['candidateApplication']); ?></h3>

						<p>Total Orders</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%; background: #136A78;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_two" style="background: #FFC107!important;">
						<div class="inner">
						<h3><?php echo e($data['inprogress_app']); ?></h3>

						<p>In-progress Orders</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-bars"></i> <i class="fad fa-signal-4"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%; background: #BC900A;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_three" style="background:#28A745!important;">
						<div class="inner">
						<h3><?php echo e($data['completed_app']); ?></h3>

						<p>Completed Orders</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%;  background: #1D7831;"></div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg_model_color_four" style="background:#F16767!important;">
						<div class="inner">
						<h3><?php echo e($data['rejected_app']); ?></h3>

						<p>Cancelled Orders</p>
						</div>
						<div class="icon text-white">
						<i class="ion ion-pie-graph"></i>
						</div>
						<div class="small-box-footer" style="padding: 7%; background: #A84949;"></div>
					</div>
				</div>
			</div>
			

		
		<?php endif; ?>
	</section>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/super_admin_dashboard.blade.php ENDPATH**/ ?>