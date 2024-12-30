
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<meta name="csrf_token_final_submission" content="<?php echo e(csrf_token()); ?>" />
<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                	 <?php if(isset($data['Action']) && $data['Action'] == "Edit"): ?>
                        <div class="card-title font-weight-bold text-center"> <center>Edit Packages</center> </div>
                    <?php else: ?>
                    <div class="card-title font-weight-bold text-center" style="float: none!important;"> <center>Add Packages and It's services</center> </div>
                    <?php endif; ?>
                </div>
                <div class="row">
	                <div class="col-md-2"></div>
	                <div class="col-md-8">
	                	<?php if(Session::has('error')): ?>
	                	<?php $errors = Session::get('error');?>
	                        <!-- <div class="alert alert-danger">
	                            <button type="button" class="close" data-dismiss="alert">×</button>
	                            <?php echo e(Session::get('error')); ?>                               
	                        </div> -->
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
		                	<?php if(isset($data['Action']) && $data['Action'] == "Edit"): ?>
		                		<form method="post" id='assignUserRole' action="<?php echo e(Route('updatePackages')); ?>" enctype="multipart/form-data">             
	                        		<?php echo csrf_field(); ?>
	                        			<div class="form-group row">
	                        				<div class="col-sm-3">                    
			                                    <label> package name</label>
			                                </div> 
			                                <div class="col-sm-8">   
			                                	<input type="hidden" name="package_id" id="package_id" value="<?php echo e($data['packages']->id); ?>">                          
			                                    <input type="text" class="form-control mb-2" id="package_name" name="package_name" value="<?php echo e($data['packages']->package_name); ?>" pattern="[a-zA-Z0-9 ]+">
			                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							                		<span class="text-danger error-text name_err"><?php echo e($error); ?></span>
							                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
					                        		<tr>
                                        				<!-- <td><?php echo e($value->id); ?></td> -->
                                        				<td>
                                        					<?php if(in_array($value->id, $data['package_services'])): ?>
					                                            <input class="permissionCheck" type="checkbox" name ="Services_name[]" value="<?php echo e($value->id); ?> " checked/><label class="m-2"><?php echo e($value->service_name); ?></label>
					                                            <?php //continue; ?>
					                                        <?php else: ?> 
					                                            <input class="permissionCheck" type="checkbox" name ="Services_name[]" value="<?php echo e($value->id); ?> "/><label class="m-2"><?php echo e($value->service_name); ?></label> 
					                                        <?php endif; ?>
                                        				</td>
														<!-- <td>
															<textarea id="description" class="form-control" name="Services_description[<?php echo e($value->id); ?>]"><?php echo e($data['package_services_description'][$value->id] ?? ''); ?></textarea>
														</td> -->
                                        				<td><?php echo e($value->description); ?></td>
                                        			</tr>
					                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                        </tbody>
					                    </table>
	                            		<?php endif; ?>

	                            		<center>
				                            <div class="col-md-4">
				                            	<button type="submit" id="submitbtn" class="btn btn-block btn-success mb-3" >Update</button>
				                            </div>
			                        	</center>
	                        	</form>
		                	<?php else: ?>
		                		<form method="post" id='assignUserRole' action="savePackages" enctype="multipart/form-data">             
	                        	<?php echo csrf_field(); ?>
	                        	<div class="form-group row">
	                                <div class="col-sm-8">   
										<label> Package Name</label>                          
	                                    <input type="text" class="form-control mb-2" id="package_name" name="package_name" placeholder="Enter Package Name *" pattern="[a-zA-Z0-9 ]+" required>
	                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                		<span class="text-danger error-text name_err"><?php echo e($error); ?></span>
					                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                                </div>
	                                <!-- <div class="col-sm-3">                                  
	                                    <a id="btAdd" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add service</a><br>
	                                </div>  -->
	                            </div> 

	                            <div id="AddDoc">
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
					                        		<tr>
                                        				<!-- <td><?php echo e($value->id); ?></td> -->
                                        				<td>
					                                        <input class="permissionCheck" type="checkbox" name ="Services_name[]" value="<?php echo e($value->id); ?> "/><label class="m-2"><?php echo e($value->service_name); ?></label>
                                        				</td>
                                        				<!-- <td>$<?php echo e($value->price); ?></td> -->
														<td>
															<?php echo e($value->description); ?>

														</td>
                                        			</tr>
					                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                        </tbody>
					                    </table>
	                            </div>

	                            <center>
		                            <div class="col-md-4">
		                            	<button type="submit" id="submitbtn" class="btn btn-block btn-success mb-3" >Save</button>
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

<!-- delete pop up box -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form role="form" method='post' action='<?php echo e(Route('deletePackageServices')); ?>' class="col-sm-12 col-md-12">
        	<?php echo csrf_field(); ?>
            <div class="modal-content">
		        <!-- Modal Header -->
		        <div class="modal-header bg-danger">
		         	<label class="modal-title" style="font-size: 25px;">Attention</label> 
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        <!-- Modal body -->
		        <div class="modal-body">
		        	<input type='hidden' id="service_id" name='service_id' value="">
		        	<input type='hidden' id="packageid" name='packageid' value="">
		        	Are you sure you want to delete this record?
		        </div>
		        <!-- Modal footer -->
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
		scrapId = $(this).attr('data-id');
        $('#service_id').val(scrapId);
        packageId = $(this).attr('data-val');
        $('#packageid').val(packageId);
	});

	// var i=0; 
 //   	$('#btAdd').click(function() 
 //   	{
	//       i++;
	//       var foo = document.getElementById("AddDoc");
	//       $('#AddDoc').append('<div class="form-group row mt-3"> <div class="col-md-6"><input type="text" maxlength="30" id="service_name['+i+']"  name="service_name['+i+']"  class="form-control" placeholder="Enter service name" required /> <?php if($errors->has('service-name')): ?><span class="text-danger"><?php echo e($errors->first('service-name')); ?></span><?php endif; ?></div>                                                                <div class="col-md-6"> <input type="tel" autocomplete="off" id="price['+i+']" name="price['+i+']"  class="col-md-7 form-control" placeholder="Enter service price" pattern="[0-9]+" required/></div> </div>');
 //   	});
   
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

	function Editservice(service_id)
	{
		var res =  service_id; 
	    document.getElementById("service_nm"+res).style.display="none";
	    document.getElementById("service_name"+res).style.display="block";

	    document.getElementById("price"+res).style.display="none";
	    document.getElementById("new_price"+res).style.display="block";

	    document.getElementById("edit"+res).style.display="none";
	    document.getElementById("delete"+res).style.display="none";
	    document.getElementById("save"+res).style.display="block";
	    document.getElementById("cancel"+res).style.display="block";
	}

	function Cancelservice(service_id)
	{
		var res =  service_id; 
	    document.getElementById("service_nm"+res).style.display="block";
	    document.getElementById("service_name"+res).style.display="none";

	    document.getElementById("price"+res).style.display="block";
	    document.getElementById("new_price"+res).style.display="none";

	    document.getElementById("edit"+res).style.display="block";
	    document.getElementById("delete"+res).style.display="block";
	    document.getElementById("save"+res).style.display="none";
	    document.getElementById("cancel"+res).style.display="none";
	}

	function Saveservice(service_id)
	{
		var res =  service_id; 
		var package_id = $('#package_id').val();
	    var new_service = document.getElementById("service_name"+res).value;
    	var new_price = document.getElementById("new_price"+res).value;
    	$.ajax({
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token_final_submission"]').attr('content')
              },
              url: '/updatePackageServices',
              type: 'post',
              dataType: 'json',
              data: { 'service_id':res,  'service_name': new_service, 'new_price': new_price, 'package_id' : package_id},

               success:function(data){
                     //alert(data.success);
                    printUpdateMsg(data, service_id, package_id);
                    setTimeout(function(){ window.location = '/editPackage/'+package_id; }, 1000);
                }
        });
	}

	function printUpdateMsg (msg, service_id, package_id)
	{
        if($.isEmptyObject(msg.error)){
            console.log(msg.success);
                $('.service_name_err'+service_id).text('');
                $('.alert-block').css('display','block').append('<strong class="msgRemove">'+msg.success+'</strong>');
                setTimeout(function(){
                    $('.msgRemove').remove();
                    $('.alert-block').css('display','none');
                    document.getElementById("edit"+service_id).style.display="block";
				    document.getElementById("delete"+service_id).style.display="block";
				    document.getElementById("save"+service_id).style.display="none";
				    document.getElementById("cancel"+service_id).style.display="none";
				    document.getElementById("service_nm"+service_id).style.display="block";
				    document.getElementById("service_name"+service_id).style.display="none";
				    document.getElementById("price"+service_id).style.display="block";
				    document.getElementById("new_price"+service_id).style.display="none";
				    window.location = '/editPackage/'+package_id;
                }, 2000);

        }else{
                $('.service_name_err'+service_id).text('');
                $.each( msg.error, function( key, value ) {               
                    $('.'+key+'_err'+service_id).text(value);
                });
        }
    }

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/savePackages.blade.php ENDPATH**/ ?>