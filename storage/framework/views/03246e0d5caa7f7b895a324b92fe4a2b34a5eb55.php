



<?php $__env->startSection('header'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<div class="content">
<form method="post" id='personalDetails' autocomplete="off" action="<?php echo e(Route('saveEduVerification')); ?>" enctype="multipart/form-data"> 
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
                                <button type="button" class="close" data-dismiss="alert">×</button> <?php echo e(Session::get('error')); ?>                  
                            </div>
                        <?php endif; ?>                          
                                                    
                       <?php if(Session::has('values')): ?>
                        <?php $data = Session::get('values'); 
                        //var_dump($data); var_dump($data['values']); die();
                            $units = $data['values']['units'];
                            $form_id = $data['values']['form_id'];
                            $package = $data['values']['package'];
                            ?>
                       <?php endif; ?>
                        
                        <div>  
                           <input type="hidden" name="candidate_id" value="<?php echo e($data['values']['candidate']); ?>" />
                           <input type="hidden" name="units" value="<?php echo e($units); ?>" />
                           <input type="hidden" name="form_id" value="<?php echo e($form_id); ?>" />
                           <input type="hidden" name="package" value="<?php echo e($package); ?>" />
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <label for="">EDUCATION</label>      
                                    <ul>
                                        <li>Please fill all the required information</li>
                                        <li>Only Highest Qualification details are required</li>
                                        <li>Attach Degree Certificate, Mark sheets/Transcripts</li>
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
                                            <td><b>INSTITUTION NAME & ADDRESS</b></td>
                                            <td>Please specify the name and full address of the Institution/University/College</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>COUNTRY</b></td>
                                            <td>Provide the country in which the Institution/University/College located</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>PHONE</b></td>
                                            <td>Provide the contact number of the Institution/University/College</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>DEGREE OBTAINED</b></td>
                                            <td>Please mention the Degree obtained (Example: B.E, B.A, M.S,etc.)</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>ENROLLMEMT NUMBER</b></td>
                                            <td>Please mention the enrolment or registration number as per degree certificate./marksheets</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>DEGREE START DATE</b></td>
                                            <td>Specify the start date and month in the yyyy/mm format</td>
                                        </tr>
                                        <tr>                                         
                                            <td><b>GRADUATED DATE</b></td>
                                            <td>Specify the year of graduation in the yyyy/mm format</td>
                                        </tr>                                       
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-2"></div> 
                            </div>

                            <center><label for="">EDUCATION DETAILS</label></center>

                            <?php for($i = 1; $i <= $units; $i++): ?>
                                <div class="form-group row"> 
                                    <div class="col-sm-2"> </div>
                                    <div class="col-sm-8" style="border: 1px solid #dee2e6; padding:15px;">
                                        <div class="form-group row mt-4">
                                            <label>Enter Highest Education <?php echo e($i); ?> :</label> 
                                            <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="highest_education[<?php echo e($i); ?>]" value="<?php echo e(old('highest_education')); ?>" placeholder="Enter Highest Education *" required>
                                            <?php if($errors->has('highest_education')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('highest_education')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group row">
                                            <label>Enter Institution Name and Full Address</label> 
                                            <textarea class="form-control" name="address[<?php echo e($i); ?>]" placeholder="Enter Institution Name and Full Address *" required><?php echo e(old('address')); ?></textarea>
                                            <?php if($errors->has('address')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label>Enter Degree Obtained</label> 
                                            <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="degree_obtained[<?php echo e($i); ?>]" value="<?php echo e(old('degree_obtained')); ?>" placeholder="Enter Degree Obtained *" required>
                                            <?php if($errors->has('degree_obtained')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('degree_obtained')); ?></span>
                                            <?php endif; ?> 
                                            </div>
                                            <div class="col-md-6">
                                                <label>Enter Enrollment/Registration</label> 
                                                <input type="text" class="form-control" name="enrollment[<?php echo e($i); ?>]" value="<?php echo e(old('enrollment')); ?>" placeholder="Enter Enrollment/Registration *" required pattern="[a-zA-Z0-9\s]+">
                                                <?php if($errors->has('enrollment')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('enrollment')); ?></span>
                                                <?php endif; ?>  
                                            </div>
                                        </div>

                                       <div class="form-group row">
                                            <div class="col-md-6">
                                            <label>Select Degree start date</label> 
                                                <div class="input-group date start_date" id="start_date<?php echo e($i); ?>" data-target-input="nearest">
                                                    <input type="text" placeholder="Select Degree start date (yyyy/mm) *" class="form-control datetimepicker-input" name="start_date[<?php echo e($i); ?>]" value="<?php echo e(old('start_date')); ?>" data-target="#start_date<?php echo e($i); ?>" required/>
                                                    <div class="input-group-append" data-target="#start_date<?php echo e($i); ?>" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                    <?php if($errors->has('start_date')): ?>
                                                        <span class="text-danger"><?php echo e($errors->first('start_date')); ?></span>
                                                    <?php endif; ?>  
                                                </div> 
                                            </div>
                                            <div class="col-md-6">
                                                <label>Select Graduated date</label> 
                                               <div class="input-group date graduated_date" id="graduated_date<?php echo e($i); ?>" data-target-input="nearest">
                                                    <input type="text" placeholder="Select Graduated date (yyyy/mm) *" class="form-control datetimepicker-input" name="graduated_date[<?php echo e($i); ?>]" value="<?php echo e(old('graduated_date')); ?>" data-target="#graduated_date<?php echo e($i); ?>" required/>
                                                    <div class="input-group-append" data-target="#graduated_date<?php echo e($i); ?>" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                    <?php if($errors->has('graduated_date')): ?>
                                                        <span class="text-danger"><?php echo e($errors->first('graduated_date')); ?></span>
                                                    <?php endif; ?>  
                                                </div>   
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            <?php endfor; ?>

                            <center> 
                                <button type="submit" id="submitbtn" class="btn btn-primary mb-3 col-md-2 btn-block">Next</button>
                            </center>
                        </div> 
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

    //Date picker
    var currentDate = new Date();
    $('.start_date').datetimepicker({
        format: 'YYYY/MM',
        maxDate: new Date()
    }); 
    
    $('.graduated_date').datetimepicker({
        format: 'YYYY/MM',
        maxDate: new Date()
    });

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



<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/forms/education_verification_form.blade.php ENDPATH**/ ?>