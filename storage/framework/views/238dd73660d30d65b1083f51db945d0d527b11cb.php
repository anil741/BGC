
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<meta name="csrf_token_assignment" content="<?php echo e(csrf_token()); ?>" />
<div class="content">
	<?php if(Session::has('error')): ?>
		<?php $errors = Session::get('error');?>
	<?php endif; ?>
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
        		<div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> <center>Select Candidate</center> </div>
                </div>

                <div class="card-body">
                	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<center><span class="text-danger error-text name_err"><?php echo e($error); ?></span></center>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                	<form method="post" id='assignUserRole' action="<?php echo e(Route('applicantFormDetails')); ?>" enctype="multipart/form-data">
	                    <?php echo csrf_field(); ?> 
	                    <div class="form-group row">
	                    	<div class="col-sm-3"></div>
                            <div class="col-sm-2">
                            	<label for="role"> Select Candidate </label><br>
                            </div>
                            <div class="col-sm-4">
                                <select id="candidate" name="candidate" class=" form-control col-md-12" required=""> 
                                    <option value="" disabled selected>Please Select</option>
                                    <?php if(isset($partialCandidate) && $partialCandidate != "" ): ?>
                                        <?php $__currentLoopData = $partialCandidate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($value->id); ?>">
                                                <?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?> ( <?php echo e($value->email); ?>)
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                    <?php endif; ?>                                    
                                </select>
                                <span class="text-danger error-text role_err"></span>
                            </div>
                            <div class="col-sm-3"></div>
                        </div> 
	                	
	                    <center class="mt-5">
					        <div class="col-md-2">
					            <button type="submit" id="submitbtn" class="btn btn-block btn-primary mb-3" >Save</button>
					        </div>
				        </center>
			        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/organisation/partialCandiate.blade.php ENDPATH**/ ?>