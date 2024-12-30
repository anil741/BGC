





<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<div class="content">

    <div class="content">
        <div class="row">           
            <div class="col-md-12">               
                <div class="card card-primary card-outline shadow mt-3" style="padding: 30px;">
                    <div style="border: 1px solid #dee2e6;">
                        <div class="car-header p-3">
                            <div class="card-title font-weight-bold text-center"> Section A: PERSONAL DETAILS </div>
                        </div>                
                        
                        <div class="card-body" style="padding:1.25rem 1.25rem 0rem 1.25rem;">
                            <?php if(Session::has('error')): ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <?php echo e(Session::get('error')); ?>                               
                                </div>
                            <?php endif; ?>                          
                            <form method="post" id='personalDetails' autocomplete="off" action="<?php echo e(Route('personalDetailsSave')); ?>" enctype="multipart/form-data"> 
                                <?php echo csrf_field(); ?> 
                                <div>  
                                    <label for="">Name of Applicant: (as in Passport)</label>                           
                                    <div class="form-group row">
                                        <div class="col-sm-4">     
                                            <label for="">First Name</label>            
                                            <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="first_name" value="<?php echo e(isset($data['personalDetails']->first_name)  ? $data['personalDetails']->first_name : $data['details']->first_name); ?>" placeholder="Enter First Name *" required>
                                            <?php if($errors->has('first_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-sm-4">  
                                            <label for="">Middle Name</label>                                 
                                            <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="middle_name" value="<?php echo e(isset($data['personalDetails']->middle_name) ? $data['personalDetails']->middle_name : ""); ?>" placeholder="Enter Middle Name">

                                            <?php if($errors->has('middle_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('middle_name')); ?></span>
                                            <?php endif; ?>
                                        </div> 
                                        <div class="col-sm-4">  
                                            <label for="">Last Name</label>                                 
                                            <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="last_name" value="<?php echo e(isset($data['personalDetails']->last_name) ? $data['personalDetails']->last_name : $data['details']->last_name); ?>" placeholder="Enter Last Name *" required>
                                            <?php if($errors->has('last_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                            <?php endif; ?>
                                        </div>                     
                                    
                                    </div> 

                                    <label for="">Previous Name: (if applicable)</label> 
                                    <div class="form-group row">
                                        <div class="col-sm-8">                                       
                                            <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="pervious_name" value="<?php echo e(isset($data['personalDetails']->pervious_name) ? $data['personalDetails']->pervious_name : ""); ?>" placeholder="Enter Previous Name">
                                            <?php if($errors->has('pervious_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('pervious_name')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <div class="col-sm-4"> </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row">                               
                                        <div class="col-sm-6">  
                                            <label for="">Date of birth</label>                                     
                                            <div class="input-group date" id="dob" data-target-input="nearest">
                                               
                                                <input type="text" placeholder="Select Date of Birth (yyyy/mm/dd) *" class="form-control datetimepicker-input" name="dob" value="<?php echo e(isset($data['personalDetails']->dob) ? $data['personalDetails']->dob : ""); ?>" data-target="#dob" required/>
                                                <div class="input-group-append" data-target="#dob" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                                <?php if($errors->has('dob')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('dob')); ?></span>
                                                <?php endif; ?>
                                            </div>  
                                        </div>                                
                                        <div class="col-sm-6">     
                                            <label for="">Father Name</label>                              
                                            <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="father_name" value="<?php echo e(isset($data['personalDetails']->father_name) ? $data['personalDetails']->father_name : ""); ?>" placeholder="Enter Father's Name *" required>
                                            <?php if($errors->has('father_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('father_name')); ?></span>
                                            <?php endif; ?>
                                        </div>                                     
                                    </div>   

                                    
                                    <div class="form-group row">
                                        <?php
                                            $maleSelected = "";
                                            $femaleSelected = "";
                                            $othersSelected = "";

                                            if(!empty($data['personalDetails'])){
                                           
                                                if($data['personalDetails']->gender == "Male")
                                                {
                                                    $maleSelected = "checked";
                                                }elseif($data['personalDetails']->gender == "Female"){
                                                    $femaleSelected = "checked";
                                                }
                                                elseif($data['personalDetails']->gender == "Others"){
                                                    $othersSelected = "checked";
                                                }
                                            }
                                        ?>
                                        <div class="col-sm-6">    
                                            <label for="">Gender</label>   <br>                                
                                             <input type="radio" id="male" name="gender" value="Male" <?php echo e($maleSelected); ?> required>
                                            <label class="mr-3" for="html">Male</label>
                                            <input class="ml-3" type="radio" id="female" name="gender" <?php echo e($femaleSelected); ?> value="Female">
                                            <label for="css">Female</label>
                                            <input class="ml-3" type="radio" id="others" name="gender" <?php echo e($othersSelected); ?> value="Others">
                                            <label for="css">Others</label>
                                            <!-- <?php if($errors->has('city')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                                            <?php endif; ?> -->
                                        </div>

                                        <div class="col-sm-6">    
                                            <label for="">SIN</label>                               
                                            <input type="text" class="form-control mb-2" pattern="\d{9}" title="9 digits are required." onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" name="SIN" value="<?php echo e(isset($data['personalDetails']->SIN) ? $data['personalDetails']->SIN : ""); ?>" placeholder="Enter SIN" maxlength="9">
                                            <?php if($errors->has('SIN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('SIN')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>   
                                    <label for="">Address</label>
                                    <div class="form-group row">
                                        <div class="col-sm-12">                                       
                                            <textarea class="form-control mb-2" name="address" placeholder="Enter Address *" required><?php echo e(isset($data['personalDetails']->address) ? $data['personalDetails']->address : ""); ?></textarea>
                                            <?php if($errors->has('address')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                                            <?php endif; ?>
                                        </div> 
                                    </div> 

                                    <div class="form-group row">                               
                                        <div class="col-sm-6">    
                                            <label for="">Mobile Number</label>                                    
                                            <input type="text" class="form-control mb-2" pattern="\d{10}" title="10 digits are required." onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" name="mobile_phone"  maxlength="10" value="<?php echo e(isset($data['personalDetails']->mobile_phone) ? $data['personalDetails']->mobile_phone : $data['details']->contact); ?>" placeholder="Enter Mobile Number*" required>
                                            <?php if($errors->has('mobile_phone')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('mobile_phone')); ?></span>
                                            <?php endif; ?>
                                        </div>                                
                                        <div class="col-sm-6">    
                                            <label for="">Email ID</label>                               
                                            <input type="email" class="form-control mb-2" title="Contact's email (format: xxx@xxx.xxx)" 
                                            pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" name="email_id" value="<?php echo e(isset($data['personalDetails']->email) ? $data['personalDetails']->email : $data['details']->email); ?>" placeholder="Enter Email ID *" required>
                                            <?php if($errors->has('email_id')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('email_id')); ?></span>
                                            <?php endif; ?>
                                        </div>                                     
                                    </div> 

                                    <div class="form-group row">                               
                                        <div class="col-sm-6">    
                                            <label for="">Home Number</label>                                    
                                            <input type="text" class="form-control mb-2" pattern="\d{10}" title="10 digits are required." onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" name="home_phone" maxlength="10" value="<?php echo e(isset($data['personalDetails']->home_phone) ? $data['personalDetails']->home_phone : ""); ?>" placeholder="Enter Home Number*" required>
                                            <?php if($errors->has('home_phone')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('home_phone')); ?></span>
                                            <?php endif; ?>
                                        </div>                                
                                        <div class="col-sm-6">   
                                            <label for="">Driver License</label>                                
                                            <input type="text" class="form-control mb-2" pattern="[a-zA-Z0-9\s]+" name="driver_lincense" value="<?php echo e(isset($data['personalDetails']->driver_lincense) ? $data['personalDetails']->driver_lincense : ""); ?>" placeholder="Enter Driver License *" required>
                                            <?php if($errors->has('driver_lincense')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('driver_lincense')); ?></span>
                                            <?php endif; ?>
                                        </div>                                     
                                    </div>
                                        <input type="hidden" name="form_id" value="1">
                                    <?php if(isset($data['personalDetails']) && $data['personalDetails'] != "" ): ?>
                                        <input type="hidden" name="is_update" value="update">
                                    <?php endif; ?>
                                    
                                    <div class="form-group row mt-3">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" id="submitbtn" class="btn btn-primary mb-3 mt-5 btn-block" >Next</button>
                                        </div>
                                    </div>  
                                    
                                </div> 
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </form> -->
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
    $('#dob').datetimepicker({
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



<?php echo $__env->make('backend.layout.candidate_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/frontend/forms/personal_details_form.blade.php ENDPATH**/ ?>