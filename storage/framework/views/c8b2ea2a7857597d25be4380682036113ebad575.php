

<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center">Profile</div>
                </div>

                <div class="col-sm-12 form-group row mt-3">
                    	<div class="col-sm-1"></div>
                    	<div class="col-md-5">
                    		<div class="form-group row">
                    			<div class="col-md-3" > 
	                    			<label for="name">First Name</label>
	                    		</div>
                    			<div class="col-md-9">    
                            		<input type="text" class="form-control mb-2 " id="name" name="name" value="<?php echo e($data->first_name); ?>" readonly>
                            	</div>  
                    		</div>

                    		<div class="form-group row">
                    			<div class="col-md-3" > 
	                    			<label for="name">Email</label>
	                    		</div>
                    			<div class="col-md-9">    
                            		<input type="text" class="form-control mb-2 " id="name" name="name" value="<?php echo e($data->email); ?>" readonly>
                            	</div>  
                    		</div>
                    	</div>

                    	<div class="col-md-5">
                    		<div class="form-group row">
                    			<div class="col-md-3" > 
	                    			<label for="name">Last Name</label>
	                    		</div>
                    			<div class="col-md-9">    
                            		<input type="text" class="form-control mb-2 " id="name" name="name" value="<?php echo e($data->last_name); ?>" readonly>
                            	</div>  
                    		</div>

                    		<div class="form-group row">
                    			<div class="col-md-3" > 
	                    			<label for="name">Mobile no</label>
	                    		</div>
                    			<div class="col-md-9">    
                            		<input type="text" class="form-control mb-2 " id="name" name="name" value="<?php echo e($data->mobno); ?>" readonly>
                            	</div>  
                    		</div>
                    	</div>
                    	<div class="col-sm-1"></div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make( (session('role_category') == 4)? 'backend.layout.org_header': ( (session('role_category') != 4) ? 'backend.layout.header' : 'backend.layout.header') , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/profileView.blade.php ENDPATH**/ ?>