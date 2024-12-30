
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
                    <div class="card-title font-weight-bold text-center"> <center>Select Background Checks</center> </div>
                </div>

                <div class="card-body">                
                    <?php if(Session::has('error')): ?>	                	
	                       <div class="alert alert-danger">
	                            <button type="button" class="close" data-dismiss="alert">×</button>
	                            <?php echo e(Session::get('error')); ?>                               
	                        </div> 
                    	<?php endif; ?>  

					<?php if(!isset($data['customPackage']) && $data['customPackage'] == "" ): ?>
						<center><span class="text-danger error-text name_err">Create package first!</span></center>
					<?php endif; ?>
                	<form method="post" id='assignUserRole' action="<?php echo e(Route('applicantDetails')); ?>" enctype="multipart/form-data">
	                    <?php echo csrf_field(); ?> 
	                    <div class="form-group row">
	                    	<div class="col-sm-3"></div>
                            <div class="col-sm-2">
                            	<label for="role"> Select Package </label><br>
                            </div>
                            <div class="col-sm-4">
                                <select id="package" name="package" class=" form-control col-md-12" onchange="get_services()"> 
                                    <option value="" disabled selected>Please Select Role</option>
                                    <?php if(isset($data['customPackage']) && $data['customPackage'] != "" ): ?>
                                        <?php $__currentLoopData = $data['customPackage']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($value->id); ?>">
                                                <?php echo e($value->package_name); ?> 
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                    <?php endif; ?>                                    
                                </select>
                                <span class="text-danger error-text role_err"></span>
                            </div>
                            <div class="col-sm-3"></div>
                        </div> 

                        <div id="servicesData" class="mt-2">

                        </div>

	                	<!-- <table id="packages" class="table table-bordered table-striped">
	                        <thead>
	                            <tr>
	                                <th></th>
	                                <th>Price</th>
	                                <th>Units</th>
	                            </tr>
	                        </thead>
	                        <tbody>
		                        <?php if(isset($details) && $details != "" ): ?>
		                        	<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                        <tr>
				                        	<td> <input class="permissionCheck" type="checkbox" name ="Services_name[]" value="<?php echo e($value->id); ?> "/><label class="m-2"><?php echo e($value->service_name); ?></label> </td>

				                        	<td><?php echo e($value->price); ?></td>

				                        	<td> <input type="text" class="form-control col-md-6 mb-2" id="service_units" name="service_units[<?php echo e($value->id); ?>]" value="" pattern="[0-9]+"> </td>
				                        </tr>
				                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				                <?php endif; ?>
	                        </tbody>
	                    </table> -->
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
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>
   
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

<script type="text/javascript">
    setTimeout(function() {
        var selectElement = document.getElementById('package');
        selectElement.selectedIndex = 1;
        selectElement.dispatchEvent(new Event('change'));
    }, 500);
  function get_services()
  {
    package = document.getElementById("package").value;
    $.ajax({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token_assignment"]').attr('content')
              },
       	url:"<?php echo e(Route('get_org_services')); ?>",
        type: 'post',
        dataType: 'json',
       	data:{'package_id':package},
       success:function(data)
       {
        	// $('#permissionDiv').css('display', 'block');
         //  	$('#permissionTable').html(data);
                $('#servicesData').show();
                $('#servicesData').html(data);
                $('#packages').DataTable({
                    "paging": false,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });

         
       },
       error: function(data){
              //var data = 'Something went wrong !.';
              $.notify(data);
              
            }
    })
  }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/organisation/requestPackage_list.blade.php ENDPATH**/ ?>