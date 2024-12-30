



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <?php if(isset($data['Action']) && $data['Action'] == "Edit"): ?>
                    <div class="card-title font-weight-bold text-center"> Update User for Role </div>
                    <?php else: ?>
                    <div class="card-title font-weight-bold text-center"> Register User for Role </div>
                    <?php endif; ?>
                </div>
               
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo e(Session::get('error')); ?>                               
                        </div>
                    <?php endif; ?>                
                    <div class="card-body">                        
                            <?php if(isset($data['Action']) && $data['Action'] == "Edit"): ?>     
                                <form method="post" id='userUpdate' action="<?php echo e(Route('updateRegisterUser')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>                       
                                    <?php if(isset($data['UserDetails']) && $data['UserDetails'] != ""): ?>

                                        <input type="hidden" value="<?php echo e($data['UserDetails'][0]->id); ?>" name="user_id">
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8">
                                            <?php if(isset($data['roles']) && $data['roles'] != "" && $data['roles']->count() != 0): ?>
                                                <select name="role" class="form-control" required>
                                                    <?php $__currentLoopData = $data['roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($role->id == $data['UserDetails'][0]->role_id): ?>
                                                            <option value="<?php echo e($role->id); ?>" selected><?php echo e($role->name); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            <?php endif; ?>
   
                                            </div>   
                                            <div class="col-sm-2"></div>                    
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-4">
                                                <label for="first-name">First Name</label>                              
                                                <input type="text" onkeypress="return lettersOnly(event)" class="form-control mb-2" id="fName" name="first-name" value="<?php echo e($data['UserDetails'][0]->first_name); ?>" placeholder="Enter First Name *" required>
                                                <?php if($errors->has('first-name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('first-name')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-sm-4"> 
                                                <label for="last-name">Last Name</label>                                  
                                                <input type="text" class="form-control" onkeypress="return lettersOnly(event)" id="lName" name="last-name" value="<?php echo e($data['UserDetails'][0]->last_name); ?>" placeholder="Enter Last Name *" required>
                                                <?php if($errors->has('last-name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('last-name')); ?></span>
                                                <?php endif; ?>
                                            </div> 
                                            <div class="col-sm-2"></div>
                                        
                                        </div> 
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-4">    
                                                <label for="email">Email</label>                               
                                                <input type="email" class="form-control mb-2" id="Email" name="email" value="<?php echo e($data['UserDetails'][0]->email); ?>" placeholder="Enter Email *" readonly>
                                                <?php if($errors->has('email')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-sm-4">
                                                
                                                <label for="Phone">Phone Number</label>                                 
                                                <input type="text" class="form-control" id="Phone" name="Phone" value="<?php echo e(( !empty(old('Phone')) && old('Phone') != "") ? old('Phone') : $data['UserDetails'][0]->mobno); ?>" placeholder="Enter Phone *" readonly>

                                                
                                                
                                                <?php if($errors->has('Phone')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('Phone')); ?></span>
                                                <?php endif; ?>
                                                <?php if(Session::has('formerror')): ?>
                                                    <span class="text-danger"> <?php echo e(Session::get('formerror')); ?></span>
                                                <?php endif; ?> 
                                            </div>  
                                            <div class="col-sm-2"></div>                         
                                        </div> 
                                        
                                       
                                    <?php endif; ?>

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-8">
                                        <label class="mt-2" > <span class="fa fa-info-circle"></span> Please ensure you use your first and last name, legal name as it appears on your ID and legal documents.</label>
                                        <label class="mt-2" > <span class="fa fa-info-circle"></span> Password Should be of minimum 6 characters which should contain atleast  1 uppercase, 1 lowercase, 1 number, 1 special character</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>  
                                    <center>                                 
                                        <div class="col-sm-3">
                                            <button type="submit" id="submitbtn" class="btn btn-block btn-primary mb-3">Update</button>
                                        </div>
                                    </center>
                                </form>    
                            <?php else: ?>    
                                <form method="post" id='assignUserRole' action="<?php echo e(Route('registerUserSave')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>                        
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-8">   
                                        <label for="role">Role</label>                                       
                                        <?php if(isset($data['roles']) && $data['roles'] != "" && $data['roles']->count() != 0 ): ?>
                                        <select name="role" class="form-control" required>
                                        <option value="" disabled>Please Select Role*</option>
                                            <?php $__currentLoopData = $data['roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                        <?php else: ?> 
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                Please add first Role and Set Permission then assign to new User !!                                
                                            </div>
                                        <?php endif; ?>    
                                    </div>
                                        <div class="col-sm-2"></div>                                                              
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>

                                        <div class="col-sm-4">    
                                            <label for="first-name">First Name</label>                         
                                            <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" id="fName" name="first-name" value="<?php echo e(old('first-name')); ?>" placeholder="Enter First Name *" required>
                                            <?php if($errors->has('first-name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('first-name')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-4">  
                                            <label for="last-name">Last Name</label>                                    
                                            <input type="text" class="form-control" id="lName" onkeypress="return lettersOnly(event)" name="last-name" value="<?php echo e(old('last-name')); ?>" placeholder="Enter Last Name *" required>
                                            <?php if($errors->has('last-name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('last-name')); ?></span>
                                            <?php endif; ?>
                                        </div> 
                                        <div class="col-sm-2"></div>
                                    
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>

                                        <div class="col-sm-4"> 
                                            <label for="email">Email</label>                                 
                                            <input type="email" title="Contact's email (format: xxx@xxx.xxx)" 
                                            pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" class="form-control mb-2" id="Email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Email *" required>
                                            <?php if($errors->has('email')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-4"> 
                                            <label for="Phone">Phone Number</label><br>    
                                            <input type="hidden" id='validPhone' name="Phone">                           
                                            <input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" class="form-control" id="phone" name="contact" value="<?php echo e(old('Phone')); ?>" onfocusout="myFunction()" placeholder="Enter Phone *" required>

                                            <span class="text-danger" id="numberval" style="display:none;">Enter valid number</span>

                                            <?php if($errors->has('Phone')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('Phone')); ?></span>
                                            <?php endif; ?>
                                            <?php if(Session::has('formerror')): ?>
                                                <span class="text-danger"> <?php echo e(Session::get('formerror')); ?></span>
                                            <?php endif; ?>  
                                            
                                                
                                            
                                        </div>   

                                        <div class="col-sm-2"></div>                        
                                    </div> 
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-8">
                                        <label class="mt-2" > <span class="fa fa-info-circle"></span> Please ensure you use your first and last name, legal name as it appears on your ID and legal documents.</label>
                                        
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>   
                                    <?php
                                        $is_disable = "";                           
                                    ?>
                                    <?php if($data['roles']->count() == 0): ?>
                                        <?php $is_disable = 'disabled';   ?>
                                    <?php else: ?>
                                        <?php $is_disable = '';   ?>
                                    <?php endif; ?>
                                    <center>
                                        <div class="col-sm-3">
                                            <button type="submit" id="submitbtn" class="btn btn-block btn-primary mb-3" <?php echo $is_disable;?> >Register</button>
                                        </div>
                                    </center>    
                                </form>
                            <?php endif; ?>
                        
                    </div> 
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
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
        separateDialCode:true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js",
      });
        window.iti = iti;

        //document.getElementById("phone").addEventListener("blur", process);

        function myFunction()
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

        function process(event)
        { 
            var mobno = iti.getNumber(); 
            $('#validPhone').val(mobno);
            if(iti.isValidNumber()) {
                document.getElementById("submitbtn").disabled = false;
             }else{
                alert("Invalid phone number.");
                document.getElementById("submitbtn").disabled = true;
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
        function visibility3() {
            console.log('clicked');
            var x = document.getElementById('login_password');
            if (x.type === 'password') {
                x.type = "text";
                $('#eyeShow').show();
                $('#eyeSlash').hide();
            }else {
                x.type = "password";
                $('#eyeShow').hide();
                $('#eyeSlash').show();
            }
        }
        $(document).ready(function() {
            
        }); 
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/register_user_for_role.blade.php ENDPATH**/ ?>