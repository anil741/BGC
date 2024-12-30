



<?php $__env->startSection('header'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<div class="content">
	<form method="post" id='referenceVerification' autocomplete="off" action="<?php echo e(Route('saveReferenceForm')); ?>" enctype="multipart/form-data"> 
    	<?php echo csrf_field(); ?>
    	<div class="content">
	        <div class="row">           
	            <div class="col-md-12"> 
	            	<div class="card card-primary card-outline shadow mt-3">
	                    <div class="car-header p-3">
	                        <div class="card-title font-weight-bold text-center"> INSTRUCTIONS </div>
	                    </div>   
	                    <div class="card-body">
	                        <?php if(Session::has('error')): ?>
	                            <div class="alert alert-danger">
	                                <button type="button" class="close" data-dismiss="alert">×</button>
	                                <?php echo e(Session::get('error')); ?>                               
	                            </div>
	                        <?php endif; ?> 

	                        <?php if(Session::has('values')): ?>
	                        <?php $data = Session::get('values'); 
	                            $units = $data['values']['units'];
	                            $form_id = $data['values']['form_id'];
	                            $package = $data['values']['package'];
	                        ?>
	                       <?php endif; ?>

	                       <input type="hidden" name="candidate_id" value="<?php echo e($data['values']['candidate']); ?>" />
	                        <input type="hidden" name="units" value="<?php echo e($units); ?>" />
	                        <input type="hidden" name="form_id" value="<?php echo e($form_id); ?>" />
	                        <input type="hidden" name="package" value="<?php echo e($package); ?>" />
                        
	                        <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <label for="">REFERENCES</label>      
                                    <ul>
                                        <li>Please fill all the required information</li>
                                        <li> THREE references are mandatory and should be from your previous employers in the last 7 years</li>
                                        <li>One reference must be a Direct Reporting Manager or Supervisor from last employer</li>
                                        <li>Referees are to be informed that an email will be sent with set of questions to complete the reference check from Screen 360°</li>
                                    </ul>
                                </div>
                                <div class="col-sm-2"></div> 
                            </div> 

                            <div class="form-group row">
                            	<div class="col-sm-2"></div> 
                                <div class="col-sm-8">
                                    <table id="instructions" class="table table-bordered table-striped">
                                       <tbody>
                                        <tr>                                         
                                            <td><b>NAME OF THE REFERENCE</b></td>
                                            <td>Please provide the name of the reference from your previous organization, preferably Manager/Supervisor</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>REFERENCE’S DESIGNATION</b></td>
                                            <td>Provide the position of the reference at present</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>PHONE NUMBER</b></td>
                                            <td>Provide reference’s contact number with country code</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>EMAIL</b></td>
                                            <td>Please provide official Email ID of reference</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>REPORTING DURATION</b></td>
                                            <td>Please mention the period of employment together with the reference</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>COMPANY NAME</b></td>
                                            <td>Please mention the company/organization worked together</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>REFERENCE’S CURRENT EMPLOYER</b></td>
                                            <td>Please mention the name of the company the reference is currently employed with</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>COUNTRY/PROVINCE WORKED TOGETHER</b></td>
                                            <td>Please specify the country/province worked together with the reference</td>
                                        </tr>                                        
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-2"></div> 
                            </div>

                            <div class="car-header p-3">
		                        <div class="card-title font-weight-bold text-center" style="text-decoration:underline;"> PROFESSIONAL REFERENCE FORM</div>
		                    </div>  

		                    <?php for($i = 1; $i <= $units; $i++): ?>
			                    <div class="form-group row"> 
	                                <div class="col-sm-1"> </div>                                
	                                <div class="col-sm-10" style="border: 1px solid #dee2e6;">
	                                    <br><strong><center>Reference <?php echo e($i); ?> : <?php if($i !=1){ echo "From Current Employer, should be a direct report."; }?>
	                                    </center></strong>

	                                    <div class="form-group row mt-4"> 
	                                    	<div class="col-md-6 mt-2 mb-2">
												<label for="" class="required">Name of the Reference</label>
		                                    	<input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" class="form-control" name="reference_nm[<?php echo e($i); ?>]" value="<?php echo e(old('reference_nm_1')); ?>" placeholder="Enter Name of the Reference" required>
			                                    <?php if($errors->has('reference_nm_1')): ?>
			                                        <span class="text-danger"><?php echo e($errors->first('reference_nm_1')); ?></span>
			                                    <?php endif; ?>
			                                </div>
			                                <div class="col-md-6 mt-2 mb-2">
												<label for="" class="required">Reference’s Designation</label>
			                                    <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="reference_designation[<?php echo e($i); ?>]" value="<?php echo e(old('reference_designation_1')); ?>" placeholder="Enter Reference’s Designation" required>
			                                    <?php if($errors->has('reference_designation_1')): ?>
			                                        <span class="text-danger"><?php echo e($errors->first('reference_designation_1')); ?></span>
			                                    <?php endif; ?>
			                                </div>
	                                    </div>

	                                    <div class="form-group row"> 
	                                    	<div class="col-md-6 mb-2">
												<label for="" class="required">Phone Number</label>
		                                    	<input type="tel" class="form-control" name="reference_mob[<?php echo e($i); ?>]" value="<?php echo e(old('reference_mob_1')); ?>" pattern="\d{10}" title="10 digits are required." onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" placeholder="Enter Phone Number" required>
			                                    <?php if($errors->has('reference_mob_1')): ?>
			                                        <span class="text-danger"><?php echo e($errors->first('reference_mob_1')); ?></span>
			                                    <?php endif; ?>
			                                </div>
			                                <div class="col-md-6 mb-2">
												<label for="" class="required">Email (Official only)</label>
			                                    <input type="text" class="form-control" name="reference_email[<?php echo e($i); ?>]" value="<?php echo e(old('reference_email_1')); ?>" title="Contact's email (format: xxx@xxx.xxx)" 
												pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="Enter Email (Official only)" required>
			                                    <?php if($errors->has('reference_email_1')): ?>
			                                        <span class="text-danger"><?php echo e($errors->first('reference_email_1')); ?></span>
			                                    <?php endif; ?>
			                                </div>
	                                    </div>

	                                    <div class="form-group row"> 
	                                    	<div class="col-md-6 mb-2">
												<label for="" class="required">Reporting Duration From (yyyy/mm/dd)</label><br>
	                                    		<div class="input-group date reporting_durationFrm" id="reporting_durationFrm<?php echo e($i); ?>" data-target-input="nearest">
				                                    <input type="text" placeholder="Enter Reporting Duration From (yyyy/mm/dd)" class="form-control datetimepicker-input" name="reporting_durationFrm[<?php echo e($i); ?>]" value="<?php echo e(old('reporting_durationFrm_1')); ?>" data-target="#reporting_durationFrm<?php echo e($i); ?>" required/>
			                                        <div class="input-group-append" data-target="#reporting_durationFrm<?php echo e($i); ?>" data-toggle="datetimepicker">
			                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
			                                        </div>
			                                        <?php if($errors->has('reporting_durationFrm_1')): ?>
			                                            <span class="text-danger"><?php echo e($errors->first('reporting_durationFrm_1')); ?></span>
			                                        <?php endif; ?> 
		                                        </div> 
			                                </div>

			                                <div class="col-md-6 mb-2">
												<label for="" class="required">Reporting Duration To (yyyy/mm/dd)</label><br>
			                                	<div class="input-group date reporting_durationTo" id="reporting_durationTo<?php echo e($i); ?>" data-target-input="nearest">
				                                    <input type="text" placeholder="Enter Reporting Duration To (yyyy/mm/dd)" class="form-control datetimepicker-input" name="reporting_durationTo[<?php echo e($i); ?>]" value="<?php echo e(old('reporting_durationTo_1')); ?>" data-target="#reporting_durationTo<?php echo e($i); ?>" required/>
			                                        <div class="input-group-append" data-target="#reporting_durationTo<?php echo e($i); ?>" data-toggle="datetimepicker">
			                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
			                                        </div>
			                                        <?php if($errors->has('reporting_durationTo_1')): ?>
			                                            <span class="text-danger"><?php echo e($errors->first('reporting_durationTo_1')); ?></span>
			                                        <?php endif; ?>  
			                                	</div>
	                                    	</div>
	                               		</div> 

	                               		<div class="form-group row mb-3"> 
	                                    	<div class="col-md-6 mb-2">
												<label for="" class="required">Company Name</label>
		                                    	<input type="tel" class="form-control" name="company_nm[<?php echo e($i); ?>]" value="<?php echo e(old('company_nm_1')); ?>" placeholder="Enter Company Name " required>
			                                    <?php if($errors->has('company_nm_1')): ?>
			                                        <span class="text-danger"><?php echo e($errors->first('company_nm_1')); ?></span>
			                                    <?php endif; ?>
			                                </div>
			                                <div class="col-md-6 mb-2">
												<label for="" class="required">Country/Province where worked together</label>
			                                    <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="country_pro[<?php echo e($i); ?>]" value="<?php echo e(old('country_pro_1')); ?>" placeholder="Enter Country/Province where worked together" required>
			                                    <?php if($errors->has('country_pro_1')): ?>
			                                        <span class="text-danger"><?php echo e($errors->first('country_pro_1')); ?></span>
			                                    <?php endif; ?>
			                                </div>
	                                    </div>                 
		                                <div class="col-sm-2"> </div>
		                            </div>

		                            <div class="col-sm-1"> </div>
	                        	</div>
                        	<?php endfor; ?>                       

                            <center><button type="submit" id="submitbtn" class=" col-md-2 btn btn-primary mb-3 btn-block">Next</button> </center>

                        </div> <!-- card-body div end -->
                	</div>
	            </div>
	        </div>
    	</div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##

<script>
	$(document).ready(function() {
        function disableBack() { window.history.forward() }
        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
    //Date picker
	var currentDate = new Date();
    $('.reporting_durationFrm').datetimepicker({
        format: 'YYYY/MM/DD',
        maxDate: new Date()
    }); 
    
    $('.reporting_durationTo').datetimepicker({
        format: 'YYYY/MM/DD',
        maxDate: new Date()
    });

    // $('#reporting_durationFrm_2').datetimepicker({
    //     format: 'YYYY/MM/DD',
        //maxDate: new Date()
    // }); 

    // $('#reporting_durationTo_2').datetimepicker({
    //     format: 'YYYY/MM/DD',
        //maxDate: new Date()
    // });

    // $('#reporting_durationFrm_3').datetimepicker({
    //     format: 'YYYY/MM/DD',
       // maxDate: new Date()
    // }); 

    // $('#reporting_durationTo_3').datetimepicker({
    //     format: 'YYYY/MM/DD',
        //maxDate: new Date()
    // });

    $(function () {    
        $('#instructions').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });

             
    });
   
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/forms/reference_verification.blade.php ENDPATH**/ ?>