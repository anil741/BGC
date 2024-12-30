



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center">User Details </div>
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

                    <?php if(isset($data['userDetails']) && $data['userDetails'] != "" ): ?>

                       
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <label for="name">User Name</label>                                                      
                            <input type="text" class="form-control mb-2" id="name" name="name" value="<?php echo e($data['userDetails'][0]->first_name); ?> <?php echo e($data['userDetails'][0]->last_name); ?>" readonly>
                            </div>
                            <div class="col-sm-2"></div>
                        </div> 

                          
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <label for="role">Role</label>                   
                            <input type="text" class="form-control mb-2" id="role" name="role" value="<?php echo e($data['userDetails'][0]->roleName); ?>" readonly>
                            </div>
                            <div class="col-sm-2"></div>
                        </div> 

                             
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <label for="category">Role Category</label>                         
                                <input type="text" class="form-control mb-2" id="category" name="category" value="<?php echo e($data['userDetails'][0]->category); ?>" readonly>
                            </div>
                            <div class="col-sm-2"></div>
                        </div> 

                              
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <label for="permission">Applied Permissions</label>
                            <div class="permission_check">    
                                <?php if(isset($data['UsesPermission']) && $data['UsesPermission'] != "" ): ?>      
                                    <ul class="checkbox p-0"> 
                                        <?php $__currentLoopData = $data['UsesPermission']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                            <li><input class="permissionCheck" type="checkbox" name ="permissions[]" value="<?php echo e($permission->permission_console); ?> " checked disabled/><label class="m-2"><?php echo e($permission->permission_console); ?></label></li> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    </ul> 
                                <?php endif; ?>
                            </div> 
                            </div>
                            <div class="col-sm-2"></div>
                            
                        </div> 
                        
                    <?php endif; ?>    
                    
                </div>                   
               
            </div>            
        </div>
    </div>
</div>
<!-- delete pop up box -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
       
        <form role="form" method='post' action='<?php echo e(Route('updateUserStatus')); ?>' class="col-sm-12 col-md-12">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' id="userId" name='userId' value="">
                    <input type='hidden' id="isActivate" name='isActivate' value="">

                    <p class="warningText"></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger buttonTitle"></button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
                <?php echo csrf_field(); ?>
            </div>
        </form>        
    </div>
</div>
<!-- /.modal --> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>
    $(document).on('click', '.scrap', function(e) {       
        scrapId = $(this).attr('data-id');
        isActive = $(this).attr('data-isActive');
        $('#isActivate').val(isActive);
        $('#userId').val(scrapId);   
        if(isActive == 0){
            $('.modal-title').text('Activate');
            $('.modal-header').removeClass('bg-danger');
            $('.modal-header').addClass('bg-success');
            $('.buttonTitle').text('Activate');
            $('.warningText').text('Are you sure you want to Activate this User?');
            $('.buttonTitle').removeClass('btn-danger');
            $('.buttonTitle').addClass('btn-success');
        }else{
            $('.modal-header').removeClass('bg-success');
            $('.modal-header').addClass('bg-danger');
            $('.buttonTitle').text('Deactivate');
            $('.modal-title').text('Deactivate');
            $('.warningText').text('Are you sure you want to deactivate this User?');
            $('.buttonTitle').removeClass('btn-success');
            $('.buttonTitle').addClass('btn-danger');
        }  
        console.log(scrapId);
        console.log(isActive);
    }); 
   
    $(function () {    
        $('#userlist').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
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



<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/register_user_details.blade.php ENDPATH**/ ?>