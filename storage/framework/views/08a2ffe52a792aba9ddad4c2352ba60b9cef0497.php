
<?php $__env->startSection('content'); ?>
<style>    
/* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }

    input[type="checkbox"][readonly] {
        pointer-events: none;
    }
</style>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<meta name="csrf_token_final_submission" content="<?php echo e(csrf_token()); ?>" />
<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                
                    <div class="card-title font-weight-bold text-center"> Select Services for Background Checks </div>                    
                    
                </div>
                <div class="row">	   
                    <div class="col-md-1"> </div>           
	                <div class="col-md-10">

	                	<?php if(Session::has('error')): ?>	                	
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
                    	
		                <div class="card-body">		                	
                            <form method="post" id='assignUserRole' action="<?php echo e(Route('saveCandidateService')); ?>" enctype="multipart/form-data">             
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">  
                                    <input type="hidden" name="candidate_id"  value="<?php echo e($data['candidate_id']); ?>"> 
                                </div> 

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>                                    
                                    <div class="col-sm-8">
                                        <label for="role"> Select Package </label><br>
                                        <select id="package" name="package" class=" form-control col-md-12" onchange="getCustomPacakgeAndLoadTable()" required> 
                                            <option value="" disabled selected>Please Select Package</option>
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
                                    <div class="col-sm-2"></div>
                                </div> 

                                <div class="form-group row">
                                    <div class="col-sm-1"></div>                                    
                                    <div class="col-sm-10">
                                        <div id="servicesData" class="mt-2"></div>   
                                    </div>
                                    <div class="col-sm-1"></div> 
                                </div> 

                                <div class="form-group row">                                    
                                    <div class="col-sm-9"></div>
                                    <div class="col-sm-2">  
                                        <button type="submit" id="submitbtn" class="btn btn-primary btn-block mb-3">Next</button>
                                    </div>  
                                    <div class="col-sm-1"></div>
                                                                  
                                </div>   
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }
        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
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
</script>

<script type="text/javascript">
    setTimeout(function() {
        var selectElement = document.getElementById('package');
        selectElement.selectedIndex = 1;
        selectElement.dispatchEvent(new Event('change'));
    }, 500);
    function getCustomPacakgeAndLoadTable()
    {
        package = document.getElementById("package").value;        
        $.ajax({           
            url:"<?php echo e(Route('getCustomPacakgeAndLoadTable')); ?>",
            type: 'post',
            dataType: 'json',
            data:{_token: "<?php echo e(csrf_token()); ?>",'package_id':package},
            success:function(data)
            {   
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
        });
    }  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/organisation/org_candidate_service_selection.blade.php ENDPATH**/ ?>