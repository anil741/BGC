



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> <?php echo e((isset($data['Action']) && $data['Action'] != "") ? "Update User in Organisation": "Add New User in Organisation"); ?> </div>
                </div>                
                   
                <div class="card-body">
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
                       
                    <?php if(isset($data['Action']) && $data['Action'] == "Edit_Org" ): ?>
                        <?php if(isset($data['orgData']) && $data['orgData'] != "" ): ?>
                            <form method="post" id='saveOrg' autocomplete="off" action="<?php echo e(Route('updateOrganisation')); ?>" enctype="multipart/form-data"> 
                                <?php echo csrf_field(); ?>                                 
                                <div>  
                                    <label for="">Update Organisation Admin Details</label>                           
                                    <div class="form-group row">                              
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">                                       
                                            <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" id="first_name" name="first_name" value="<?php echo e(($data['orgData'][0]->first_name != "") ? $data['orgData'][0]->first_name : old('first_name')); ?>" placeholder="Enter First Name *" required>
                                            <?php if($errors->has('first_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-sm-4">                                  
                                            <input type="text" class="form-control" id="last_name" onkeypress="return lettersOnly(event)" name="last_name" value="<?php echo e(($data['orgData'][0]->last_name != "") ? $data['orgData'][0]->last_name : old('last_name')); ?>" placeholder="Enter Last Name *" required>
                                            <?php if($errors->has('last_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                            <?php endif; ?>
                                        </div> 
                                        <div class="col-sm-2"></div>
                                    </div> 

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">                             
                                            <input type="email" class="form-control mb-2" id="" name="email" title="Contact's email (format: xxx@xxx.xxx)" 
                                            pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" value="<?php echo e(($data['orgData'][0]->email != "") ? $data['orgData'][0]->email : old('email')); ?>" placeholder="Enter Email *" readonly required>
                                            <?php if($errors->has('email')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-sm-4">                                  
                                            <input type="password" class="form-control" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$" id="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="Enter New Password">
                                            <?php if($errors->has('password')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                            <?php endif; ?>
                                        </div> 
                                        <div class="col-sm-2"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 "></div>
                                        <div class="col-sm-4">                             
                                            <input type="text" class="form-control mb-2" id="phone" name="phone" value="<?php echo e((Session::get('formerror_user') == "") ? $data['orgData'][0]->mobno : old('phone')); ?>" placeholder="Enter Phone Number *" readonly>
                                            <?php if($errors->has('phone')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                            <?php endif; ?>
                                            <?php if(Session::has('formerror_user')): ?>
                                                <span class="text-danger float-left"><?php echo e(Session::get('formerror_user')); ?></span>
                                            <?php endif; ?>
                                        </div>                                
                                        <div class="col-sm-2"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 "></div>
                                        <div class="col-sm-8">                             
                                            <label class="mt-2" > <span class="fa fa-info-circle"></span> Password Should be of minimum 6 characters which should contain atleast  1 uppercase, 1 lowercase, 1 number, 1 special character</label>
                                        </div>                                
                                        <div class="col-sm-2"></div>
                                    </div>

                                    
                                    <input type="hidden" name="user_id" value=<?php echo e($data['orgData'][0]->user_id); ?>>
                                    
                                    <input type="hidden" name="org_id" value="<?php echo e($data['orgData'][0]->org_id); ?>">
                                    <div class="form-group row">
                                        <div class="col-sm-2 "></div>
                                        <div class="col-sm-8">  
                                            <button type="submit" id="submitbtn" class="btn btn-success mb-3 btn-block">Update Organisation</button>
                                        </div>
                                        <div class="col-sm-2 "></div>
                                    </div>
                                </div> 
                            </form>  
                        <?php endif; ?>     
                    <?php else: ?>                               
                        
                        <form method="post" id='saveOrg' autocomplete="off" action="<?php echo e(Route('saveOrgUser')); ?>" enctype="multipart/form-data"> 
                            <?php echo csrf_field(); ?>                            
                            <div>  

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">   
                                        <label class="float-left" for="organisation"> Select Organisation </label><br>
                                        <select id="organisation" name="organisation" class=" form-control col-md-12" required> 
                                            <option value="" disabled selected>Please Select Organisation</option>
                                            <?php if(isset($data['organisation']) && $data['organisation'] != "" ): ?>
                                                <?php $__currentLoopData = $data['organisation']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                                    <option value="<?php echo e($org->id); ?>"> 
                                                        <?php echo e($org->organisation_name); ?> 
                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?> 
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                Please add First Organisation then assign to new User !!                                
                                            </div>
                                        <?php endif; ?>                                   
                                        </select>
                                        <?php if($errors->has('organisation_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('organisation_name')); ?></span>
                                        <?php endif; ?>
                                    </div>                                    
                                    <div class="col-sm-2"></div>
                                </div>  

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">    
                                        <label class="float-left" for="role"> Select Role </label><br>                                    
                                        <?php if(isset($data['roles']) && $data['roles'] != "" && $data['roles']->count() != 0 ): ?>
                                            <?php $__currentLoopData = $data['roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                <?php if($key == 0): ?>
                                                    <input type="radio" id="<?php echo e($role->name); ?>" name="role" value="<?php echo e($role->id); ?>" required/>
                                                    <label class="mr-1" for="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></label>     
                                                <?php else: ?>
                                                    <input type="radio" id="<?php echo e($role->name); ?>" name="role" value="<?php echo e($role->id); ?>"/>
                                                    <label class="mr-1" for="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></label>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?> 
                                        <?php if($errors->has('role')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('role')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-2"></div>                                                              
                                </div>

                                                       
                                <div class="form-group row">                              
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">   
                                        <label for=""> First Name</label>                                    
                                        <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="Enter First Name *" required>
                                        <?php if($errors->has('first_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-sm-4">    
                                        <label for=""> Last Name</label>                              
                                        <input type="text" class="form-control" id="last_name" onkeypress="return lettersOnly(event)" name="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="Enter Last Name *" required>
                                        <?php if($errors->has('last_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                        <?php endif; ?>
                                    </div> 
                                    <div class="col-sm-2"></div>
                                </div> 

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">        
                                        <label for=""> Email</label>                     
                                        <input type="email" class="form-control mb-2" id="" name="email" title="Contact's email (format: xxx@xxx.xxx)" 
                                        pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" value="<?php echo e(old('email')); ?>" placeholder="Enter Email *" required>
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-sm-4">   
                                        <label for=""> Phone Number</label>       
                                        <input type="hidden" id='validPhone' name="phone">  
                                        <input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" class="form-control mb-2" id="contact" name="contact" value="<?php echo e(old('phone')); ?>" placeholder="Enter Phone Number *" required>

                                        <span class="text-danger" id="numberval" style="display:none;">Enter valid number</span>

                                        <?php if($errors->has('phone')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                        <?php endif; ?>
                                        
                                    </div> 
                                    <div class="col-sm-2"></div>
                                </div>

                                

                                

                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>        
                                    <div class="col-sm-8"> 
                                      <label class="mt-2" > <span class="fa fa-info-circle"></span> Please ensure you use your first and last name, legal name as it appears on your ID and legal documents</label>
                                    </div>
                                    <div class="col-sm-2"></div>        
                                </div>



                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">  
                                        <button type="submit" id="submitbtn" class="btn btn-primary mb-3 btn-block">Add</button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div> 
                        </form>    
                    <?php endif; ?>    
                    
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
        var input = document.querySelector("#contact");
        var iti = window.intlTelInput(input, {
        separateDialCode:true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js",
      });
        window.iti = iti;

        document.getElementById("contact").addEventListener("blur", process);

        function process(event)
        { 
            var mobno = iti.getNumber(); 
            $('#validPhone').val(mobno);
            if(iti.isValidNumber()) {
                document.getElementById("submitbtn").disabled = false;
                document.getElementById("numberval").style.display="none";
             }else{
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



<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/organisation_add_user.blade.php ENDPATH**/ ?>