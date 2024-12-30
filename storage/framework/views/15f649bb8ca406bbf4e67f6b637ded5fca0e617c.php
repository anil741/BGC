
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<div class="content">
<form method="post" id='saveOrg' autocomplete="off" action="saveEmployment" enctype="multipart/form-data"> 
    <?php echo csrf_field(); ?>
    <div class="content">
        <div class="row">           
            <div class="col-md-12">               
                <div class="card card-primary card-outline shadow mt-3">
                    <div class="car-header p-3">
                        <div class="card-title font-weight-bold text-center"> Employment Verification Form </div>
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

                            <center>                                  
                                <label for="">INSTRUCTIONS</label>
                            </center>

                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <label for="">EMPLOYMENT</label>      
                                    <ul>
                                        <li>Please provide all the requested information from your previous organizations.</li>
                                        <li>Provide information from all the companies you were employed in the last 7 years, if you had more than 4 employers in the last 7 years, please use additional form attached in the same email.</li>
                                        <li>Supporting documents (Relieving/Experience Letter, Employment letter) mentioning your employment details are to be submitted along with the BG form.</li>
                                        <li>If you are employed by an employment/contracting agency, please declare the agency name and contact details as your employer.</li>
                                    </ul>
                                </div>
                                <div class="col-sm-1"></div> 
                            </div>      
                            
                            <div class="form-group row">
                                <div class="col-sm-1"></div> 
                               
                                <div class="col-sm-10">
                                    <table id="instructions" class="table table-bordered table-striped">
                                       <tbody>
                                        <tr>                                         
                                            <td><b>EMPLOYER NAME</b></td>
                                            <td>Please write your company’s name(as per resume start from the latest company to the first company employed)</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>CONTACT NAME</b></td>
                                            <td>Provide the contact person from the company to verify your employment</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>CONTACT E-MAIL(OFFICIAL)</b></td>
                                            <td>Please provide the official E-mail ID of the contact person from your company</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>DESIGNATION & DEPARTMENT</b></td>
                                            <td>Please provide the job position and the department/service area of the contact person. Preferably HR.</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>EMPLOYEE ID</b></td>
                                            <td>Provide your Employee ID as per paystubs. If you are employed through an agency, please provide agency provided Employee ID.</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>JOB TITLE</b></td>
                                            <td>Please provide your Designation/position at the time of employment with this employer</td>
                                        </tr> 
                                        <tr>                                         
                                            <td><b>REASON FOR LEAVING</b></td>
                                            <td>Please provide the exact reason for leaving the organization</td>
                                        </tr>                                        
                                        <tr>                                         
                                            <td><b>EMPLOYMENT TYPE</b></td>
                                            <td>Please specify if you were full time or contract employee</td>
                                        </tr>  
                                        <tr>                                         
                                            <td><b>EMPLOYMENT DURATION</b></td>
                                            <td>Please provide the start and end dates of employment with the organization</td>
                                        </tr>                                      
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-1"></div> 
                            </div>

                            <center>
                                <label>EMPLOYMENT DETAILS (As per resume)</label>
                            </center>

                            <?php for($i = 1; $i <= $units; $i++): ?>
                                <div class="form-group row mt-5"> 
                                    <div class="col-sm-1"> </div>
                                    <div class="col-sm-10" style="border: 1px solid #dee2e6; padding:15px;">
                                        <div class="row" style="border-bottom: 1px solid rgba(0,0,0,.1);">
                                            <label>Employer <?php echo e($i); ?> : <?php if($i !=1){ echo "Prior to Previous Organization";} else{ echo "Current or Previous Organization (If you are still employed in this organization, please fill in the
                                        date before which you would not like the verification to be initiated in the “To” column. If you are not sure or
                                        would like to intimate this date later, please write 'Still Employed')";} ?></label>
                                        </div>

                                        <div class="form-group row mt-4">
                                            <label>Enter Employer Name</label> 
                                            <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="employer_name[<?php echo e($i); ?>]" value="<?php echo e(old('employer_name')); ?>" placeholder="Enter Employer Name *" required>
                                            <?php if($errors->has('employer_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('employer_name')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>First Name</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="first_name[<?php echo e($i); ?>]" value="<?php echo e(old('first_name')); ?>" placeholder="Enter First Name *" required>
                                                <?php if($errors->has('first_name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Middle Name</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="middle_name[<?php echo e($i); ?>]" value="<?php echo e(old('middle_name')); ?>" placeholder="Enter Middle Name">
                                                <?php if($errors->has('middle_name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('middle_name')); ?></span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Last Name</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="last_name[<?php echo e($i); ?>]" value="<?php echo e(old('last_name')); ?>" placeholder="Enter Last Name *" required>
                                                <?php if($errors->has('last_name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label>Email</label> 
                                                <input type="email" class="form-control mb-2" title="Contact's email (format: xxx@xxx.xxx)" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" name="email[<?php echo e($i); ?>]" value="<?php echo e(old('email')); ?>" placeholder="Enter Contact E-mail (Official) *" required>
                                                <?php if($errors->has('email')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Designation & Department</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="department[<?php echo e($i); ?>]" value="<?php echo e(old('designation')); ?>" placeholder="Enter Designation & Department (Ex.HR/Owner): *" required>
                                                <?php if($errors->has('designation')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('designation')); ?></span>
                                                <?php endif; ?>  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label>Employee ID</label> 
                                                <input type="text" class="form-control mb-2" name="employee_id[<?php echo e($i); ?>]" value="<?php echo e(old('employee_id')); ?>" placeholder="Enter Employee ID *" required>
                                                <?php if($errors->has('employee_id')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('employee_id')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Job Title</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="job_title[<?php echo e($i); ?>]" value="<?php echo e(old('job_title')); ?>" placeholder="Enter Job Title *" required>
                                                <?php if($errors->has('job_title')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('job_title')); ?></span>
                                                <?php endif; ?> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label>Reason for Leaving</label> 
                                            <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="reason_for_leaving[<?php echo e($i); ?>]" value="<?php echo e(old('reason_for_leaving')); ?>" placeholder="Enter Reason for Leaving *" required>
                                            <?php if($errors->has('reason_for_leaving')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('reason_for_leaving')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group row">
                                            <label>Employment Type (Permanent/Contract):<br><span style="font-weight: 400;"> If Contract, Please mention the agency name.</span> </label>
                                            <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="employment_type[<?php echo e($i); ?>]" value="<?php echo e(old('employment_type')); ?>" placeholder="Enter Employment Type *" required>
                                            <?php if($errors->has('employment_type')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('employment_type')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                         <div class="form-group row">
                                            <label class="col-md-12">Employment Duration (yyyy/mm/dd):</label> 
                                            <div class="col-md-6">
                                                <div class="input-group date from_date" id="from_date<?php echo e($i); ?>" data-target-input="nearest">
                                                    <input type="text" placeholder="From (yyyy/mm/dd) *" class="form-control datetimepicker-input" name="from_date[<?php echo e($i); ?>]" value="<?php echo e(old('from_date')); ?>" data-target="#from_date<?php echo e($i); ?>" required/>
                                                    <div class="input-group-append" data-target="#from_date<?php echo e($i); ?>" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                    <?php if($errors->has('from_date')): ?>
                                                        <span class="text-danger"><?php echo e($errors->first('from_date')); ?></span>
                                                    <?php endif; ?>  
                                                </div>    
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group date to_date" id="to_date<?php echo e($i); ?>" data-target-input="nearest">
                                                    <input type="text" placeholder="To (yyyy/mm/dd) *" class="form-control datetimepicker-input" name="to_date[<?php echo e($i); ?>]" value="<?php echo e(old('to_date')); ?>" data-target="#to_date<?php echo e($i); ?>" required/>
                                                    <div class="input-group-append" data-target="#to_date<?php echo e($i); ?>" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                    <?php if($errors->has('to_date')): ?>
                                                        <span class="text-danger"><?php echo e($errors->first('to_date')); ?></span>
                                                    <?php endif; ?>  
                                                </div>    
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-1"> </div>
                                </div>
                            <?php endfor; ?>
                        <center> 
                            <button type="submit" id="submitbtn" class="btn btn-primary mb-3 col-md-2 mt-5 btn-block">Next</button>
                        </center>
                    </div> 
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

    var currentDate = new Date();
    $('.from_date').datetimepicker({
        format: 'YYYY/MM/DD',
        maxDate: new Date()
    });
    $('.to_date').datetimepicker({
        format: 'YYYY/MM/DD',
        maxDate: new Date()
    });
    function lettersOnly() 
    {
        var charCode = event.keyCode;
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
            return true;
        else
            return false;
    }

    function ValidateSize(file) {
        var re = /(\.jpg|\.jpeg|\.pdf|\.docx|\.png)$/i;
        if (!re.exec(file.files[0].name)) {
            alert("File must be in PDF, JPG, PNG, DOCX format.");
            $(file).val('');
        }
        if (file.files[0].size > 2097152) // 2 MiB for bytes.
        {     
            alert("File size cannot exceed 2 MB.");
            $(file).val(''); //for clearing with Jquery
        } 
    }
    $(document).ready(function() {       
      
    }); 
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/forms/employment_verification_form.blade.php ENDPATH**/ ?>