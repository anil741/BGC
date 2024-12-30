
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                	<?php if(isset($data['Action']) && $data['Action'] == "Add"): ?>
                        <div class="card-title font-weight-bold text-center"> <center>Add Services</center> </div>
                    <?php else: ?>
                        <div class="card-title font-weight-bold text-center"> <center>Edit Services</center> </div>
                    <?php endif; ?> 
                </div>
                <div class="row">
	                <div class="col-md-2"></div>
	                <div class="col-md-8">
	                	<?php if(Session::has('error')): ?>
	                		<?php $errors = Session::get('error');?>
	                	<?php endif; ?>
	                	<?php if(Session::has('success')): ?>
	                        <div class="alert alert-success">
	                            <button type="button" class="close" data-dismiss="alert">×</button>
	                            <?php echo e(Session::get('success')); ?>                               
	                        </div>
	                    <?php endif; ?>
	                    <div class="card-body">
	                        	<?php if(isset($data['Action']) && $data['Action'] == "Add"): ?>
	                        		<form method="post" id='assignUserRole' action="<?php echo e(route('saveService')); ?>" enctype="multipart/form-data">             
	                        			<?php echo csrf_field(); ?>
	                        			<div class="form-group row">
	                        				<div class="col-sm-3">                    
			                                    <label> Service name *</label>
			                                </div> 
			                                <div class="col-sm-8">                  
			                                    <input type="text" class="form-control mb-2" id="service_name" required name="service_name" pattern="[a-zA-Z0-9 ]+">
			                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                                    	<?php if(strpos($error, 'service name') !== false): ?>
							                		<span class="text-danger error-text name_err"><?php echo e($error); ?></span>
							                		<?php endif; ?>
							                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                                </div>
	                            		</div> 

	                            		<!-- <div class="form-group row">
	                        				<div class="col-sm-3">                    
			                                    <label> Price *</label>
			                                </div> 
			                                <div class="col-sm-8">           
			                                    <input type="text" class="form-control mb-2" id="price" name="price" required  pattern="[0-9]+">
			                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                                    	<?php if(strpos($error, 'price') !== false): ?>
							                		<span class="text-danger error-text name_err"><?php echo e($error); ?></span>
							                		<?php endif; ?>
							                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                                </div>
	                            		</div>  -->
										<div class="form-group row">
	                        				<div class="col-sm-3">                    
			                                    <label> Description</label>
			                                </div> 
			                                <div class="col-sm-8">           
											<textarea class="form-control mb-2" id="description" name="description"></textarea>
			                                </div>
	                            		</div> 

	                            		<center>
				                            <div class="col-md-4">
				                            	<button type="submit" id="submitbtn" class="btn btn-block btn-success mb-3" >Save</button>
				                            </div>
			                        	</center>
	                        		</form>
	                        	<?php elseif(isset($data['Action']) && $data['Action'] == "Edit"): ?>
	                        		<form method="post" id='assignUserRole' action="<?php echo e(Route('updateService')); ?>" enctype="multipart/form-data">             
	                        			<?php echo csrf_field(); ?>
	                        			<div class="form-group row">
	                        				<div class="col-sm-3">                    
			                                    <label> Service name</label>
			                                </div> 
			                                <div class="col-sm-8">   
			                                	<input type="hidden" name="service_id" id="package_id" value="<?php echo e($data['services']->id); ?>">                          
			                                    <input type="text" class="form-control mb-2" id="service_name" required name="service_name" value="<?php echo e($data['services']->service_name); ?>" pattern="[a-zA-Z0-9 ]+">
			                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                                    	<?php if(strpos($error, 'service name') !== false): ?>
							                		<span class="text-danger error-text name_err"><?php echo e($error); ?></span>
							                		<?php endif; ?>
							                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                                </div>
	                            		</div> 

	                            		<!-- <div class="form-group row">
	                        				<div class="col-sm-3">                    
			                                    <label> Price</label>
			                                </div> 
			                                <div class="col-sm-8">   
			                                	<input type="hidden" name="package_id" id="package_id" value="<?php echo e($data['services']->id); ?>">                          
			                                    <input type="text" class="form-control mb-2" id="price" name="price" required value="<?php echo e($data['services']->price); ?>" pattern="[0-9]+">
			                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                                    	<?php if(strpos($error, 'price') !== false): ?>
							                		<span class="text-danger error-text name_err"><?php echo e($error); ?></span>
							                		<?php endif; ?>
							                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                                </div>
	                            		</div>  -->
										<div class="form-group row">
	                        				<div class="col-sm-3">                    
			                                    <label> Description</label>
			                                </div> 
			                                <div class="col-sm-8">   
			                                	<input type="hidden" name="package_id" id="package_id" value="<?php echo e($data['services']->id); ?>">                          
			                                    <textarea class="form-control mb-2" id="description" name="description"><?php echo e($data['services']->description); ?></textarea>
			                                    
			                                </div>
	                            		</div> 

	                            		<center>
				                            <div class="col-md-4">
				                            	<button type="submit" id="submitbtn" class="btn btn-block btn-success mb-3" >Update</button>
				                            </div>
			                        	</center>
	                        		</form>
	                        	<?php endif; ?>
	                    </div>
	                </div>
	                <div class="col-md-2"></div>
	            </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form role="form" method='post' action='<?php echo e(Route('deletePackage')); ?>' class="col-sm-12 col-md-12">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <label class="modal-title" style="font-size: 25px;">Attention</label> 
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type='hidden' id="packageid" name='packageid' value="">
                    Are you sure you want to delete this record?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger buttonTitle">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>
    $(document).on('click', '.scrap', function(e) {   
        packageId = $(this).attr('data-id');
        $('#packageid').val(packageId);
    });
   
    $(function () {    
        $('#packages').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });

    $(document).ready(function() {
        
    }); 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/addEditServices.blade.php ENDPATH**/ ?>