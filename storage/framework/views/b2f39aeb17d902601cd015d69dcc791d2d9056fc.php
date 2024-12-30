



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> Candidate Details </div>
                </div>                
                   
                <div class="card-body">
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo e(Session::get('error')); ?>                               
                        </div>
                    <?php endif; ?>  
                                                
                    
                    <form method="post" id='saveOrg' autocomplete="off" action="<?php echo e(Route('newCandidateDetailsSave')); ?>" enctype="multipart/form-data"> 
                        <?php echo csrf_field(); ?>
                        <div>                                                        
                            <div class="form-group row">                              
                                <div class="col-sm-2"></div> 
                                <div class="col-sm-4"> 
                                    <label for=""> First Name</label>                                      
                                    <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="Enter First Name *" required>
                                    <?php if($errors->has('first_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                    <?php endif; ?>
                                </div>    
                                
                                <div class="col-sm-4">   
                                    <label for=""> Last Name</label>                               
                                    <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="Enter Last Name *" required>
                                    <?php if($errors->has('last_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                    <?php endif; ?>
                                </div>                                                                  
                                <div class="col-sm-2"></div>  
                            </div> 

                            <div class="form-group row">  
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">     
                                    <label for=""> Phone Number</label>    
                                    <input type="hidden" id='validPhone' name="contact">                    
                                    <input type="tel" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" class="form-control mb-2" id="org_contact" name="phone" value="<?php echo e(old('contact')); ?>" placeholder="Enter Phone Number *" required>
                                    <span class="text-danger" id="numberval" style="display:none;">Enter valid number</span>
                                    
                                    <?php if($errors->has('contact')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('contact')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-4">     
                                    <label for=""> Email </label> 
                                    <input type="email" class="form-control" title="Contact's email (format: xxx@xxx.xxx)" 
                                    pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" id="can_email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Email *" required>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div> 
                                <div class="col-sm-2"></div>
                            </div>                           
                           
                            <div class="form-group row">                              
                                <div class="col-sm-2 "></div>
                                <div class="col-sm-8">    
                                    <label for="">Attach Resume</label>
                                    <div class="custom-file"> 
                                        <input type="file" name="candidate_resume" class="custom-file-input" id="customFile" onchange="ValidateSize(this)" required>
                                        <label class="custom-file-label" for="customFile" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Choose file</label>
                                        <?php if($errors->has('candidate_resume')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('candidate_resume')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>    
                                <div class="col-sm-2 "></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-7"></div>
                                <div class="col-sm-3">  
                                    <button type="submit" id="submitbtn" class="btn btn-primary mb-3 float-right">Next</button>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>                              
                    </form>    
                      
                    
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
<script src="<?php echo e(asset('AdminLTE')); ?>/dist/js/intlTelInput.js"></script>
<script type="text/javascript">
    var input = document.querySelector("#org_contact");
    var iti = window.intlTelInput(input, {
    separateDialCode:true,
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js",
    });
    window.iti = iti;

    document.getElementById("org_contact").addEventListener("blur", process);

    function process(event)
    { 
        var mobno = iti.getNumber(); 
        $('#validPhone').val(mobno);
        if(iti.isValidNumber()) {
            document.getElementById("submitbtn").disabled = false;
            document.getElementById("numberval").style.display="none";
        }
        else{
            alert("Invalid phone number.");
            document.getElementById("submitbtn").disabled = true;
            document.getElementById("numberval").style.display="block";
            return false;
        }
    }
</script>
<script>
    function lettersOnly() 
    {
        var charCode = event.keyCode;
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
            return true;
        else
            return false;
    }

    $('#customFile').on('change',function(){
        //get the file name
        var fileName =  $(this).val().replace('C:\\fakepath\\', " ");
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });
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



<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/organisation/org_new_invitation.blade.php ENDPATH**/ ?>