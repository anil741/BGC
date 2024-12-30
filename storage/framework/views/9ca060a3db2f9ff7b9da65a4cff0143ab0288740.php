
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

    
<div class="content">  
      
    <?php if(isset($data['personalDetails']) && $data['personalDetails'] != ""): ?>
        <div class="row">           
            <div class="col-md-12">               
                <div class="card card-primary card-outline shadow mt-3">
                    <div class="car-header p-3">
                        <div class="card-title font-weight-bold text-center"> Section A: PERSONAL DETAILS </div>
                    </div>
                    <div class="card-body" style="padding:1.25rem 1.25rem 0rem 1.25rem;">                        
                        <div> 
                        <div class="form-group row">
                                
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-4">
                                <?php if(isset($data['candidate']) && $data['candidate']->agreement): ?>
                                    <div class="card-title font-weight-bold"> Agreement </div>
                                    <div class="form-group row">           
                                            <div class="col-md-12"> 
                                            <a href="<?php echo e(asset('agreement/' . $data['candidate']->agreement)); ?>" download><?php echo e($data['candidate']->agreement); ?></a>
                                            </div>
                                    </div>
                                <?php endif; ?>
                                </div>
                                <div class="col-sm-4">
                                <?php if(isset($data['documents']) && $data['documents'] != ""): ?>
                                    <div class="card-title font-weight-bold"> Documents </div>
                                    <div class="form-group row"> 
                                        <?php $__currentLoopData = $data['documents']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>           
                                            <div class="col-md-12"> 
                                            <a href="<?php echo e(asset($document->path)); ?>" download><?php echo e($document->path); ?></a>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                               
                            </div>   
                            <label for="">Name of Applicant: (as in Passport)</label>                           
                            <div class="form-group row">
                                <div class="col-sm-4">     
                                    <label for="">First Name</label>            
                                    <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="first_name" value="<?php echo e($data['personalDetails']->first_name); ?>" placeholder="First Name" readonly>
                                    <?php if($errors->has('first_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-sm-4">  
                                    <label for="">Middle Name</label>                                 
                                    <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="middle_name" value="<?php echo e($data['personalDetails']->middle_name); ?>" placeholder="Middle Name" readonly>
                                    <?php if($errors->has('middle_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('middle_name')); ?></span>
                                    <?php endif; ?>
                                </div> 
                                <div class="col-sm-4">  
                                    <label for="">Last Name</label>                                 
                                    <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="last_name" value="<?php echo e($data['personalDetails']->last_name); ?>" placeholder="Last Name" readonly>
                                    <?php if($errors->has('last_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                    <?php endif; ?>
                                </div>                     
                            
                            </div> 

                            <label for="">Previous Name: (if applicable)</label> 
                            <div class="form-group row">
                                <div class="col-sm-8">                                       
                                    <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="pervious_name" value="<?php echo e($data['personalDetails']->pervious_name); ?>" placeholder="Previous Name" readonly>
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
                                        
                                        <input type="text" placeholder="Select Date of Birth (yyyy/mm/dd)" class="form-control datetimepicker-input" name="dob" value="<?php echo e($data['personalDetails']->dob); ?>" data-target="#dob" readonly/>
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
                                    <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="father_name" value="<?php echo e($data['personalDetails']->father_name); ?>" placeholder="Father's Name" readonly>
                                    <?php if($errors->has('father_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('father_name')); ?></span>
                                    <?php endif; ?>
                                </div>                                     
                            </div>   

                            <label for="">Gender</label>
                            <div class="form-group row">
                                <div class="col-sm-6">     
                                    <?php
                                        $mChecked = "";
                                        $fChecked = "";
                                        $OChecked = "";
                                        if($data['personalDetails']->gender == 'Male'){
                                            $mChecked = "checked";
                                        }
                                        if($data['personalDetails']->gender == 'Female'){
                                            $fChecked = "checked";
                                        }
                                        if($data['personalDetails']->gender == 'Others'){
                                            $OChecked = "checked";
                                        }
                                    ?>                                  
                                    <input type="radio" id="male" name="gender" value="Male" <?php echo e($mChecked); ?> disabled>
                                    <label class="mr-3" for="html">Male</label>
                                    <input class="ml-3" type="radio" id="female" name="gender" value="Female" <?php echo e($fChecked); ?> disabled>
                                    <label for="css">Female</label>
                                    <input class="ml-3" type="radio" id="others" name="gender" value="Others"  <?php echo e($OChecked); ?> disabled>
                                    <label for="css">Others</label>
                                    <!-- <?php if($errors->has('city')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                                    <?php endif; ?> -->
                                </div>

                                <div class="col-sm-6">    
                                    <label for="">SIN</label>                               
                                    <input type="text" class="form-control mb-2" name="SIN" value="<?php echo e($data['personalDetails']->SIN); ?>" placeholder="SIN" readonly>
                                    <?php if($errors->has('SIN')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('SIN')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>   
                            <label for="">Address</label>
                            <div class="form-group row">
                                <div class="col-sm-12">                                       
                                    <textarea class="form-control mb-2" name="address" placeholder="Address" readonly><?php echo e($data['personalDetails']->address); ?></textarea>
                                    <?php if($errors->has('address')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                                    <?php endif; ?>
                                </div> 
                            </div> 

                            <div class="form-group row">                               
                                <div class="col-sm-6">    
                                    <label for="">Mobile Number</label>                                    
                                    <input type="text" class="form-control mb-2" pattern="\d{10}" title="10 digits are readonly." onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" name="mobile_phone" value="<?php echo e($data['personalDetails']->mobile_phone); ?>" placeholder="Mobile Phon" readonly>
                                    <?php if($errors->has('mobile_phone')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('mobile_phone')); ?></span>
                                    <?php endif; ?>
                                </div>                                
                                <div class="col-sm-6">    
                                    <label for="">Email ID</label>                               
                                    <input type="email" class="form-control mb-2" title="Contact's email (format: xxx@xxx.xxx)" 
                                    pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" name="email_id" value="<?php echo e($data['personalDetails']->email); ?>" placeholder="Email ID" readonly>
                                    <?php if($errors->has('email_id')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email_id')); ?></span>
                                    <?php endif; ?>
                                </div>                                     
                            </div> 

                            <div class="form-group row">                               
                                <div class="col-sm-6">    
                                    <label for="">Home Contact Number</label>                                    
                                    <input type="text" class="form-control mb-2" pattern="\d{10}" title="10 digits are readonly." onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" name="home_phone" value="<?php echo e($data['personalDetails']->home_phone); ?>" placeholder="Home Phone" readonly>
                                    <?php if($errors->has('home_phone')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('home_phone')); ?></span>
                                    <?php endif; ?>
                                </div>                                
                                <div class="col-sm-6">   
                                    <label for="">Driver License</label>                                
                                    <input type="text" class="form-control mb-2" name="driver_lincense" value="<?php echo e($data['personalDetails']->driver_lincense); ?>" placeholder="Driver License" readonly>
                                    <?php if($errors->has('driver_lincense')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('driver_lincense')); ?></span>
                                    <?php endif; ?>
                                </div>                                     
                            </div>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if(isset($data['education']) && $data['education'] != ""): ?>
        <?php $__currentLoopData = $data['education']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eduDetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">           
                <div class="col-md-12">               
                    <div class="card card-primary card-outline shadow mt-3">
                        <div class="car-header p-3">
                            <div class="card-title font-weight-bold text-center"> EDUCTION DETAILS </div>
                        </div>
                    
                            <div class="card-body" >                        
                                <div> 
                                    <div style="border: 1px solid #dee2e6; padding:15px;">
                                        <div class="form-group row mb-3"> 
                                            <div class="col-sm-2"> </div>                
                                            <div class="col-sm-8">
                                                <label for="">Highest Education</label>    
                                                <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="highest_education" value="<?php echo e($eduDetails->highest_education); ?>" placeholder="Enter Highest Education " readonly>
                                                <?php if($errors->has('highest_education')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('highest_education')); ?></span>
                                                <?php endif; ?>
                                            </div>                  
                                            <div class="col-sm-2"> </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-2"> </div>    
                                            <div class="col-sm-8">
                                                <label for="">Institution Name and Full Address</label>
                                                <textarea class="form-control mb-2" name="address" placeholder="Enter Institution Name and Full Address " readonly><?php echo e($eduDetails->address); ?></textarea>
                                                <?php if($errors->has('address')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                                                <?php endif; ?>
                                            </div> 
                                            <div class="col-sm-2"> </div>    
                                        </div> 

                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-4">
                                                <label for="">Degree</label>
                                                <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="degree_obtained" value="<?php echo e($eduDetails->degree_obtained); ?>" placeholder="Enter Degree Obtained " readonly>
                                                <?php if($errors->has('degree_obtained')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('degree_obtained')); ?></span>
                                                <?php endif; ?>                                    
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="">Enrollment/Registration</label>
                                                <input type="text" class="form-control mb-2" name="enrollment" value="<?php echo e($eduDetails->enrollment); ?>" placeholder="Enter Enrollment/Registration " readonly>
                                                <?php if($errors->has('enrollment')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('enrollment')); ?></span>
                                                <?php endif; ?>                                   
                                            </div>
                                            <div class="col-sm-2"></div> 
                                        </div>   
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div> 
                                            <div class="col-sm-4">
                                                <label>Select Degree start date</label> 
                                                <div class="input-group date start_date" id="start_date" data-target-input="nearest">
                                                    <input type="text" placeholder="Select Degree start date (yyyy/mm) " class="form-control datetimepicker-input" name="start_date" value="<?php echo e($eduDetails->start_date); ?>" data-target="#start_date" readonly/>
                                                    <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                    <?php if($errors->has('start_date')): ?>
                                                        <span class="text-danger"><?php echo e($errors->first('start_date')); ?></span>
                                                    <?php endif; ?>  
                                                </div> 
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Select Graduated date</label> 
                                                <div class="input-group date graduated_date" id="graduated_date" data-target-input="nearest">
                                                    <input type="text" placeholder="Select Graduated date (yyyy/mm) " class="form-control datetimepicker-input" name="graduated_date" value="<?php echo e($eduDetails->graduated_date); ?>" data-target="#graduated_date" readonly/>
                                                    <div class="input-group-append" data-target="#graduated_date" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                    <?php if($errors->has('graduated_date')): ?>
                                                        <span class="text-danger"><?php echo e($errors->first('graduated_date')); ?></span>
                                                    <?php endif; ?>  
                                                </div>   
                                            </div>
                                            <div class="col-sm-2"></div> 
                                        </div>    
                                    </div>                                               
                                </div>  
                            </div> 
                        
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    
    <?php if(isset($data['employee']) && $data['employee'] != ""): ?>
    <?php
        $i=1;
    ?>
    <?php $__currentLoopData = $data['employee']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">           
            <div class="col-md-12">               
                <div class="card card-primary card-outline shadow mt-3">
                    <div class="car-header p-3">
                        <div class="card-title font-weight-bold text-center"> EMPLOYMENT DETAILS (As per resume) </div>
                    </div>
                
                        <div class="card-body" >                        
                            <div> 
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
                                            <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="employer_name[<?php echo e($i); ?>]" value="<?php echo e($employer->employer_name); ?>" placeholder="Enter Employer Name " readonly>
                                            <?php if($errors->has('employer_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('employer_name')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>First Name</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="first_name[<?php echo e($i); ?>]" value="<?php echo e($employer->first_name); ?>" placeholder="Enter First Name " readonly>
                                                <?php if($errors->has('first_name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Middle Name</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="middle_name[<?php echo e($i); ?>]" value="<?php echo e($employer->middle_name); ?>" placeholder="Enter Middle Name" readonly>
                                                <?php if($errors->has('middle_name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('middle_name')); ?></span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Last Name</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="last_name[<?php echo e($i); ?>]" value="<?php echo e($employer->last_name); ?>" placeholder="Enter Last Name " readonly>
                                                <?php if($errors->has('last_name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label>Email</label> 
                                                <input type="email" class="form-control mb-2" title="Contact's email (format: xxx@xxx.xxx)" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" name="email[<?php echo e($i); ?>]" value="<?php echo e($employer->email); ?>" placeholder="Enter Contact E-mail (Official) " readonly>
                                                <?php if($errors->has('email')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Designation & Department</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="department[<?php echo e($i); ?>]" value="<?php echo e($employer->department); ?>" placeholder="Enter Designation & Department (Ex.HR/Owner): " readonly>
                                                <?php if($errors->has('designation')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('designation')); ?></span>
                                                <?php endif; ?>  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label>Employee ID</label> 
                                                <input type="text" class="form-control mb-2" name="employee_id[<?php echo e($i); ?>]" value="<?php echo e($employer->employee_id); ?>" placeholder="Enter Employee ID " readonly>
                                                <?php if($errors->has('employee_id')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('employee_id')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Job Title</label> 
                                                <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="job_title[<?php echo e($i); ?>]" value="<?php echo e($employer->job_title); ?>" placeholder="Enter Job Title " readonly>
                                                <?php if($errors->has('job_title')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('job_title')); ?></span>
                                                <?php endif; ?> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label>Reason for Leaving</label> 
                                            <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="reason_for_leaving[<?php echo e($i); ?>]" value="<?php echo e($employer->reason_for_leaving); ?>" placeholder="Enter Reason for Leaving " readonly>
                                            <?php if($errors->has('reason_for_leaving')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('reason_for_leaving')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group row">
                                            <label>Employment Type (Permanent/Contract):<br><span style="font-weight: 400;"> If Contract, Please mention the agency name.</span> </label>
                                            <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="employment_type[<?php echo e($i); ?>]" value="<?php echo e($employer->employment_type); ?>" placeholder="Enter Employment Type " readonly>
                                            <?php if($errors->has('employment_type')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('employment_type')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-12">Employment Duration (yyyy/mm/dd):</label> 
                                            <div class="col-md-6">
                                                <div class="input-group date from_date" id="from_date<?php echo e($i); ?>" data-target-input="nearest">
                                                    <input type="text" placeholder="From (yyyy/mm/dd) " class="form-control datetimepicker-input" name="from_date[<?php echo e($i); ?>]" value="<?php echo e($employer->from_date); ?>" data-target="#from_date<?php echo e($i); ?>" readonly/>
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
                                                    <input type="text" placeholder="To (yyyy/mm/dd) " class="form-control datetimepicker-input" name="to_date[<?php echo e($i); ?>]" value="<?php echo e($employer->to_date); ?>" data-target="#to_date<?php echo e($i); ?>" readonly/>
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
                            </div>  
                        </div> 
                    
                </div>
            </div>
        </div>
        <?php
            $i++;
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    
    <?php if(isset($data['reference']) && $data['reference'] != ""): ?>
    <?php
        $j=1;
    ?>
    <?php $__currentLoopData = $data['reference']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> PROFESSIONAL REFERENCE FORM </div>
                </div>
            
                    <div class="card-body" >                        
                        <div> 
                            <div class="form-group row"> 
                                <div class="col-sm-1"> </div>                                
                                <div class="col-sm-10" style="border: 1px solid #dee2e6;">
                                    <br><strong><center>Reference <?php echo e($j); ?> : <?php if($j !=1){ echo "From Current Employer, should be a direct report."; }?>
                                    </center></strong>

                                    <div class="form-group row mt-4"> 
                                        <div class="col-md-6 mt-2 mb-2">
                                            <label for="">Name of the Reference</label>
                                            <input type="text" class="form-control" name="reference_nm[<?php echo e($j); ?>]" value="<?php echo e($reference->reference_nm); ?>" placeholder="Enter Name of the Reference " readonly>
                                            <?php if($errors->has('reference_nm_1')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('reference_nm_1')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-6 mt-2 mb-2">
                                            <label for="">Reference’s Designation</label>
                                            <input type="text" class="form-control" name="reference_designation[<?php echo e($j); ?>]" value="<?php echo e($reference->reference_designation); ?>" placeholder="Enter Reference’s Designation " readonly>
                                            <?php if($errors->has('reference_designation_1')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('reference_designation_1')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row"> 
                                        <div class="col-md-6 mb-2">
                                            <label for="">Phone Number</label>
                                            <input type="tel" class="form-control" name="reference_mob[<?php echo e($j); ?>]" value="<?php echo e($reference->reference_mob); ?>" placeholder="Enter Phone Number " readonly>
                                            <?php if($errors->has('reference_mob_1')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('reference_mob_1')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="">Email (Official only)</label>
                                            <input type="text" class="form-control" name="reference_email[<?php echo e($j); ?>]" value="<?php echo e($reference->reference_email); ?>" placeholder="Enter Email (Official only) " readonly>
                                            <?php if($errors->has('reference_email_1')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('reference_email_1')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row"> 
                                        <div class="col-md-6 mb-2">
                                            <label for="">Reporting Duration From (yyyy/mm/dd)</label><br>
                                            <div class="input-group date reporting_durationFrm" id="reporting_durationFrm<?php echo e($j); ?>" data-target-input="nearest">
                                                
                                                <input type="text" placeholder="Enter Reporting Duration From (yyyy/mm/dd)" class="form-control datetimepicker-input" name="reporting_durationFrm[<?php echo e($j); ?>]" value="<?php echo e($reference->reporting_durationFrm); ?>" data-target="#reporting_durationFrm<?php echo e($j); ?>" readonly/>
                                                <div class="input-group-append" data-target="#reporting_durationFrm<?php echo e($j); ?>" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                                <?php if($errors->has('reporting_durationFrm_1')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('reporting_durationFrm_1')); ?></span>
                                                <?php endif; ?> 
                                            </div> 
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="">Reporting Duration To (yyyy/mm/dd)</label><br>
                                            <div class="input-group datereporting_durationTo" id="reporting_durationTo<?php echo e($j); ?>" data-target-input="nearest">
                                                <input type="text" placeholder="Enter Reporting Duration To (yyyy/mm/dd)" class="form-control datetimepicker-input" name="reporting_durationTo[<?php echo e($j); ?>]" value="<?php echo e($reference->reporting_durationTo); ?>" data-target="#reporting_durationTo<?php echo e($j); ?>" readonly/>
                                                <div class="input-group-append" data-target="#reporting_durationTo<?php echo e($j); ?>" data-toggle="datetimepicker">
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
                                            <label for="">Company Name</label>
                                            <input type="tel" class="form-control" name="company_nm[<?php echo e($j); ?>]" value="<?php echo e($reference->company_nm); ?>" placeholder="Enter Company Name " readonly>
                                            <?php if($errors->has('company_nm_1')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('company_nm_1')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="">Country/Province where worked together</label>
                                            <input type="text" class="form-control" name="country_pro[<?php echo e($j); ?>]" value="<?php echo e($reference->country_pro); ?>" placeholder="Enter Country/Province where worked together " readonly>
                                            <?php if($errors->has('country_pro_1')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('country_pro_1')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>                 
                                    <div class="col-sm-2"> </div>
                                </div>

                                <div class="col-sm-1"> </div>
                            </div>                                              
                        </div>  
                    </div> 
                
            </div>
        </div>
    </div>
    <?php
        $j++;
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>
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
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/all_form_fill_details_view.blade.php ENDPATH**/ ?>