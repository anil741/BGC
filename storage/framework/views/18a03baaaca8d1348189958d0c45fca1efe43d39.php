



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> Roles </div>
                    <div class="float-right">  
                        <a class="btn btn-sm btn-primary" href="<?php echo e(Route('orgAddNewRoleAndPermissionView')); ?>"><i class="fa fa-plus"></i> Add </a>
                    </div>  
                </div>
                              
                <div class="card-body">
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo e(Session::get('error')); ?>                               
                        </div>
                    <?php endif; ?>           
                    
                    <div class="alert alert-success alert-block" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            
                    </div>
                        
                    <form id='roleForm'> 
                        
                        <?php if(isset($data['Action']) && $data['Action'] == "Edit_Role" ): ?>
                            
                            <?php if(isset($data['roles']) && $data['roles']->count() == 0 ): ?>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">                                                               
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Please create first Role and Set Permission, then update permission !!                                
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>  
                                </div>                              
                            <?php endif; ?>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                <label for="role"> Select Role </label><br>
                                <select id="role" name="role" class=" form-control col-md-12"> 
                                    <option value="" disabled selected>Please Select Role</option>
                                    <?php if(isset($data['roles']) && $data['roles'] != "" ): ?>
                                        <?php $__currentLoopData = $data['roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                            <option value="<?php echo e($role->id); ?>" data-categoryId="<?php echo e($role->role_category_id); ?>"> 
                                                <?php echo e($role->name); ?> 
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                    <?php endif; ?>                                    
                                </select>
                                <span class="text-danger error-text role_err"></span>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>  
                       

                       
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                <label for="role_category_id"> Selected Role Category </label><br>
                                <select id="role_category_id_selected" name="role_category_id" class="form-control col-md-12 categoty_selected" disabled required> 
                                    <option value="" disabled selected>Please Select Category</option>
                                                            
                                </select>
                                <span class="text-danger error-text role_category_id_err"></span>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>  
                            <input type="hidden" id='roleId'/>
                            
                            <div class="form-group row">   
                                <div class="col-sm-2"></div>     
                                <div class="col-sm-8">                          
                                    <div class="permission_check">
                                        <label for="permission">Applied Permissions</label><br>                                        
                                        <ul class="checkbox p-0"> 

                                        </ul>
                                        <span class="text-danger error-text permissions_err"></span>

                                    </div> 
                                </div>
                                <div class="col-sm-2"></div>                                                                
                            </div>
                            <?php if($data['roles']->count() == 0): ?>
                            <?php $is_disable = 'disabled';   ?>
                            <?php else: ?>
                                <?php $is_disable = '';   ?>
                            <?php endif; ?>

                            <center>   
                                <!-- <div class="col-sm-4"></div>   -->
                                <div class="col-sm-3">
                                    <div class="">
                                        <button type="submit" id="update" class="btn btn-block btn-primary" <?php echo $is_disable;?>> Update </button>
                                    </div> 
                                </div>
                                <!-- <div class="col-sm-4"></div> -->  
                            </center>
                        <?php else: ?>                               
                        <div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">   
                                    <label for="role_category_id"> Select Role Category </label><br>
                                    <select id="role_category_id" name="role_category_id" class=" form-control col-md-12"> 
                                        <option value="" disabled selected>Please Select Category</option>
                                        <?php if(isset($data['categories']) && $data['categories'] != "" ): ?>
                                            <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                                <option value="<?php echo e($category->id); ?>"> 
                                                    <?php echo e($category->category); ?> 
                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                        <?php endif; ?>                                    
                                    </select>
                                    <span class="text-danger error-text role_category_id_err"></span>
                                </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>  

                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                <label for="role_name"> Fill New Role Name </label>
                                <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="name" id="role_name" class="form-control" placeholder="Enter New Role Name" value=""/>
                                <span class="text-danger error-text name_err"></span>
                                </div>                            
                                <div class="col-sm-2"></div>
                            </div> 
                            
                            <div class="form-group row">  
                                <div class="col-sm-2"></div>   
                                <div class="col-sm-8">
                                    <div class="permission_check">
                                        <label for="permission">Permissions</label><br>
                                        <span class="text-danger error-text permissions_err d-block"></span>
    
                                        <?php if(isset($data['Permissions']) && $data['Permissions'] != "" ): ?>
                                        <ul class="checkbox p-0 float-left"> 
                                            <?php $__currentLoopData = $data['Permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            
                                            <?php if($permission->id != 3): ?>
                                                <li><input class="permissionCheck" type="checkbox" name ="permissions[]" value="<?php echo e($permission->id); ?> "/><span class="m-2"><?php echo e($permission->permission_console); ?></span></li> 
                                            <?php endif; ?> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul> 
                                        <?php endif; ?>
                                    </div>   
                                </div>
                                <div class="col-sm-2"></div>                                                            
                            </div>
                            <center>
                                <div class="col-sm-3">
                                    <div class="">
                                        <button type="submit" id="submit" class="btn btn-block btn-primary"> Add  </button>
                                    </div>  
                                </div>   
                            </center>
                        </div>    
                        <?php endif; ?>    
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
<script>
    function lettersOnly() 
    {
        var charCode = event.keyCode;
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
            return true;
        else
            return false;
    }
    $(document).ready(function() {

        // save new permission set to role
        $("#submit").click(function(e){  
            e.preventDefault();      
            var name = $("input[name=name]").val();
            var role_category_id = $('#role_category_id :selected').val();
            var permissionArray = new Array();
            $("input[name='permissions[]']:checked").each(function(i) {
                permissionArray.push($(this).val());
            }); 
            $.ajax({
                type:'POST',
                url:"<?php echo e(Route('saveOrgRole')); ?>",
                data:{ _token: "<?php echo e(csrf_token()); ?>",name:name, role_category_id:role_category_id,permissions:permissionArray},
                success:function(data){
                    // alert(data.success);
                    printMsg(data);
                }
            });
        });

        // for getting selected role category while updating
        $('#role').change(function(){    
            $('#role_category_id_selected').html('');      
            $('.checkbox').html(''); 
           
            $.ajax({
                type:'GET',
                url:"<?php echo e(Route('getOrgRoleCategotyAndPermissions')); ?>",
                data:{ _token: "<?php echo e(csrf_token()); ?>",role_id:this.value},
                success:function(data){  

                    $('#roleId').val(data['role_Id']);
                    // role category select                   
                    var option = '';
                    data['allCategory'].forEach(function (allCategory) {
                        var selected = '';
                        if(allCategory['id'] == data['selectedCategory']){                            
                            selected = 'selected';
                        }
                       option += '<option value="'+allCategory['id']+'" '+selected+'>'+allCategory['category']+'</option>';
                    });
                    $('#role_category_id_selected').append(option);

                    // for permission checkbox selected
                    var li = "";
                    data['allPermission'].forEach(function (allPermission) {
                        if(allPermission['id'] !=3){
                            // console.log(allPermission['id']);
                        var checked = "";
                        data['selectedPermission'].forEach(function (selectedPermission) { 
                            if(allPermission['id'] == selectedPermission){
                                // console.log(selectedPermission);
                                checked = "checked";
                            }
                        });
                        li += '<li><input class="permissionCheck" type="checkbox" name ="permissions[]" value="'+allPermission['id']+'"'+checked+'/><span class="m-2">'+allPermission['permission_console']+'</span></li>'
                        }
                        
                    });                    
                    $('.checkbox').append(li);
                }
            });
        });

        $("#update").click(function(e){          
            e.preventDefault();      
            var role = $("#role :selected").val();
            var role_category = $('#role_category_id_selected :selected').val();
            var permissionArraySelected = new Array();
            var roleId = $('#roleId').val();
            $("input[name='permissions[]']:checked").each(function(i) {
                permissionArraySelected.push($(this).val());
            });
            $.ajax({
                type:'PUT',
                url:"<?php echo e(Route('updateOrgRole')); ?>",
                data:{ _token: "<?php echo e(csrf_token()); ?>",role:role, role_category_id:role_category,permissions:permissionArraySelected,role_id:roleId},
                success:function(data){
                    // alert(data.success);
                    printUpdateMsg(data);
                }
            });
        });        

        function printMsg (msg) {
            if($.isEmptyObject(msg.error)){
                console.log(msg.success);
                $('.name_err').text('');
                $('.role_category_id_err').text('');              
                $('.permissions_err').text('');
                $("#roleForm")[0].reset();
                $('.alert-block').css('display','block').append('<strong class="msgRemove">'+msg.success+'</strong>');
                setTimeout(function(){
                    $('.msgRemove').remove();
                    $('.alert-block').css('display','none');
                }, 3000);

            }else{
                $('.name_err').text('');
                $('.role_category_id_err').text('');              
                $('.permissions_err').text('');
                $.each( msg.error, function( key, value ) {               
                    $('.'+key+'_err').text(value);
                });
            }
        }
        function printUpdateMsg (msg) {
            if($.isEmptyObject(msg.error)){
                console.log(msg.success);
                $('.role_err').text('');
                $('.role_category_id_err').text('');              
                $('.permissions_err').text('');
                $("#roleForm")[0].reset();
                $('.checkbox').html('');
                $('#role_category_id_selected').html('');
                $('#role_category_id_selected').html('<option value="" disabled selected>Please Select Category</option>');
                $('.alert-block').css('display','block').append('<strong class="msgRemove">'+msg.success+'</strong>');
                setTimeout(function(){
                    $('.msgRemove').remove();
                    $('.alert-block').css('display','none');
                }, 3000);

            }else{
                $('.role_err').text('');
                $('.role_category_id_err').text('');              
                $('.permissions_err').text('');
                $.each( msg.error, function( key, value ) {               
                    $('.'+key+'_err').text(value);
                });
            }
        }

       
    }); 
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/organisation/roles_and_permission.blade.php ENDPATH**/ ?>