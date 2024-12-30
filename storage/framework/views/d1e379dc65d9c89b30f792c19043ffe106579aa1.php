
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<meta name="csrf_token_final_submission" content="<?php echo e(csrf_token()); ?>" />
<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                
                    <div class="card-title font-weight-bold text-center"> Add Packages </div>                    
                    
                </div>
                <div class="row">	   
                    <div class="col-md-1"> </div>           
	                <div class="col-md-10">
	                	<?php if(Session::has('error')): ?>
	                	<?php $errors = Session::get('error');?>
	                       <div class="alert alert-danger">
	                            <button type="button" class="close" data-dismiss="alert">×</button>
	                            <?php echo e(Session::get('error')); ?>                               
	                        </div> 
                    	<?php endif; ?>  

                    	<?php if(Session::has('success')): ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo e(Session::get('success')); ?>                               
                        </div>
                    	<?php endif; ?>  

                    	<div class="alert alert-success alert-block" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                              
                        </div>
                    	
		                <div class="card-body">		                	
                            <form method="post" id='assignUserRole' action="<?php echo e(Route('saveOrgCustomPackage')); ?>" enctype="multipart/form-data">             
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <div class="col-sm-3">                    
                                        <label> Add Package Name:</label>
                                    </div> 
                                    <div class="col-sm-9">   
                                        <input type="hidden" name="package_id" id="package_id" value="<?php echo e($data['packages']->id); ?>">                          
                                        <input type="text" title="Only alphanumeric and space are allowed." pattern="[a-zA-Z0-9 ]+" class="form-control mb-2" id="package_name" name="package_name" placeholder="Enter Package Name *" value="<?php echo e(old('package_name')); ?>" required>
                                    </div>
                                </div> 

                                <?php if(isset($data['services']) && $data['services'] != ""): ?>
                                    <table id="packages" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <!-- <th>ID</th> -->
                                                <th>Service Name</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                            <?php
                                                $checked = "";
                                            ?>  
                                               
                                                    <tr>                                                           
                                                        <td>       
                                                            <?php if(in_array($value->id, $data['package_services'])): ?>                                                        
                                                                <input class="permissionCheck" type="checkbox" name ="Services_name[]" value="<?php echo e($value->id); ?> "/><label class="m-2"><?php echo e($value->service_name); ?></label>
                                                            <?php else: ?>
                                                                <input class="permissionCheck" type="checkbox" name ="Services_name[]" value="<?php echo e($value->id); ?> "/><label class="m-2"><?php echo e($value->service_name); ?></label> 
                                                            <?php endif; ?>
                                                        </td>
                                                        <td style="max-width: 14rem;"><?php echo e($value->description); ?></td>
                                                    </tr>
                                              
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>

                                    </table>
                                <?php endif; ?>
                                    
                                <center>
                                    <div class="col-sm-4">  
                                        <button type="submit" id="submitbtn" class="btn btn-primary mb-3 btn-block">Save</button>
                                    </div>
                                </center>   
                            </form>	 
		                </div>
		            </div>	
                    <div class="col-md-1"> </div>          	          
	        	</div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>
    $(document).ready(function() {
        $('#updatePackage').submit(function() {
            var $fields = $(this).find('input[name="Services_name[]"]:checked');
            console.log($fields.length);
            if (!$fields.length) {
                alert('You must check at least one Service!');
                return false; // The form will *not* submit
            }
        });
    });
    $(function () {    
        $('#packages').DataTable({
        "paging": false,
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
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/organisation/org_packages_save.blade.php ENDPATH**/ ?>