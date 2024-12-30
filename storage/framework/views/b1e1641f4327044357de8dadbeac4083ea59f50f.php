
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
                    <div class="card-title font-weight-bold text-center"> <center>Order Type</center> </div>
                </div>

                <div class="card-body">
                	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<center><span class="text-danger error-text name_err"><?php echo e($error); ?></span></center>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                	<!-- <form method="post" id='assignUserRole' action="<?php echo e(Route('applicantFormDetails')); ?>" enctype="multipart/form-data">
	                    <?php echo csrf_field(); ?>  -->
	                    <div class="form-group row">
	                    	<div class="col-sm-4"></div>
                            <!-- <div class="col-sm-2">
                            	<label for="role"> Select Order Types </label><br>
                            </div> -->
                            <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="order_type" id="self_candidate" value="1" required>
                                <label class="form-check-label" for="self_candidate">
                                    Send the credential email to the candidate to fill out the BGC details
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="order_type" id="behalf_candidate" value="2" required>
                                <label class="form-check-label" for="behalf_candidate">
                                        Fill the checks by yourself
                                </label>
                            </div>
                                <span class="text-danger error-text role_err"></span>
                            </div>
                            <div class="col-sm-3"></div>
                        </div> 
	                	
	                    <center class="mt-5">
					        <div class="col-md-2">
					            <button type="submit" id="submitbtn" class="btn btn-block btn-danger mb-3" onclick="redirect_order_page()" >Next</button>
					        </div>
				        </center>
			        <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function redirect_order_page() {
    // Get the value of the selected radio button
    var orderType;
    if (document.getElementById("self_candidate").checked) {
        orderType = "1";
    } else if (document.getElementById("behalf_candidate").checked) {
        orderType = "2";
    } else {
        // If no radio button is selected, you can handle this case or show an error
        alert("Please select an order type");
        return; // Stop further execution
    }

    // Define the URL to redirect based on the selected order type
    var redirectUrl;
    if (orderType === "1") {
        // If Self Candidate is selected
        redirectUrl = "<?php echo e(route('candidateDetailsForm')); ?>";
    } else if (orderType === "2") {
        // If Behalf Candidate is selected
        redirectUrl = "<?php echo e(route('getPackage')); ?>";
    }

    // Redirect to the appropriate page
    window.location.href = redirectUrl;
}

</script>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/organisation/org_order_type.blade.php ENDPATH**/ ?>