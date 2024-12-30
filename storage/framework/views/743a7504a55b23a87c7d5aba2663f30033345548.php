<?php use Illuminate\Support\Facades\Redis; ?>


<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> Organisation List </div>
                    <?php if(Session::get('role_category') == 2 || Session::get('role_category') == 3): ?>
                    <?php $result = DB::select('SELECT a.id FROM permission_console a, roles_permission b WHERE a.id = b.permission_console_id and b.role_id = ? and b.is_allow = 1', [Session::get('user_role')]); 
                        $result = array_column($result, "id");
                    ?>
                    <?php if(!empty($result) && in_array(2, $result) ): ?>
                        <div class="float-right">                           
                            <a class="btn btn-sm btn-primary" href="<?php echo e(Route('addOrganisationView')); ?>"><i class="fa fa-plus"></i> Add Organisation</a>
                        </div> 
                    <?php endif; ?>
                    <?php else: ?>
                        <div class="float-right">                           
                            <a class="btn btn-sm btn-primary" href="<?php echo e(Route('addOrganisationView')); ?>"><i class="fa fa-plus"></i> Add Organisation</a>
                        </div> 
                    <?php endif; ?>
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

                    
                    <form id='orgForm'> 
                        
                        <?php if(isset($data['Action']) && $data['Action'] == "Edit_Role" ): ?>
                        <?php else: ?>     
                            <table id="orglist" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Organisation Name</th>
                                        <th>Email</th> 
                                        <th>Contact</th> 
                                        <!-- <th>Address</th> -->
                                        <!-- <th>Country</th> -->
                                        <th>Verification Status</th>
                                        <th>Status</th>                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($data['organisationList']) && $data['organisationList'] != "" ): ?>
                                        <?php $__currentLoopData = $data['organisationList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($details['organisation_name']); ?></td>
                                                <td><?php echo e($details['email_address']); ?></td>
                                                <td><?php echo e($details['contact']); ?></td>  
                                                <!-- <td><?php echo e($details['address']); ?></td>  
                                                <td><?php echo e($details['country']); ?></td> -->                                                 
                                                <?php if($details['is_verified'] == 0){
                                                    $bg = '<small class = "label text-warning"> <b>PENDING</b> </small>';
                                                    }else{
                                                        $bg = '<small class = "label text-green"> <b>VERIFIED</b> </small>';          
                                                    }
                                                ?>
                                                <td> <?php echo $bg; ?> </td>   
                                                <?php if($details['is_active'] == 0){
                                                    $buttonIcon = "fa fa-user";
                                                    $titleTip = "Activate Organisation";
                                                    $bgA = '<small class = "label text-danger"> <b>DEACTIVE</b> </small>';
                                                    }else{
                                                        $bgA = '<small class = "label text-green"> <b>ACTIVE</b> </small>'; 
                                                        $buttonIcon = "fa fa-user-slash";  
                                                        $titleTip = "Deactivate Organisation";   
                                                    }
                                                ?>
                                                <td> <?php echo $bgA; ?> </td>   
                                                <td>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-">
                                                        <div class="row">
                                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                                <a class="btn btn-primary btn-xs" title="View" href="<?php echo e(Route('organisationDetailsView',['id'=> $details['id'] ])); ?>"><i class="fa fa-eye"></i> </a>
                                                            </div>

                                                            <?php if(Session::get('role_category') == 1): ?> 
                                                                <?php if($details['is_active'] != 0): ?>        
                                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                                        <a class="btn btn-primary btn-xs " title="<?php echo 'Update' ?>" href="<?php echo e(Route('editOrganisationView',['id'=>$details['id'],'type' => 'edit'])); ?>"><i class="fa fa-edit"></i></a>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                                    <a class="btn btn-primary btn-xs " title="<?php echo 'User List' ?>" href="<?php echo e(Route('organisationUserlistView',['id'=>$details['id']])); ?>"><i class="fa fa-list"></i></a>
                                                                </div>      
                                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                                    <?php if($details['is_verified'] == 1): ?>
                                                                        <button type="button" class="btn btn-danger btn-xs scrap" data-isActive = "<?php echo ($details['is_active']); ?>"  data-id="<?php echo ($details['id']); ?>" data-toggle="modal" data-target="#myModal" title="<?php echo $titleTip; ?>" style=""><i class="<?php echo $buttonIcon;?>"></i> </button>
                                                                    <?php endif; ?>      
                                                                </div>  
                                                                           
                                                            <?php elseif(Session::get('role_category') == 2 || Session::get('role_category') == 3): ?>
                                                                <?php $result = DB::select('SELECT a.id FROM permission_console a, roles_permission b WHERE a.id = b.permission_console_id and b.role_id = ? and b.is_allow = 1', [Session::get('user_role')]); 
                                                                    $result = array_column($result, "id");
                                                                ?>
                                                                <?php if($details['is_active'] != 0): ?>
                                                                    <?php if(!empty($result) && in_array(2, $result) ): ?>                                                                        
                                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                                            <a class="btn btn-primary btn-xs " title="<?php echo 'Update' ?>" href="<?php echo e(Route('editOrganisationView',['id'=>$details['id'],'type' => 'edit'])); ?>"><i class="fa fa-edit"></i></a>
                                                                        </div>                                                                         
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                                <?php if(!empty($result) && in_array(5, $result) ): ?>
                                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                                        <?php if($details['is_verified'] == 1): ?>
                                                                            <button type="button" class="btn btn-danger btn-xs scrap" data-isActive = "<?php echo ($details['is_active']); ?>"  data-id="<?php echo ($details['id']); ?>" data-toggle="modal" data-target="#myModal" title="<?php echo $titleTip; ?>" style=""><i class="<?php echo $buttonIcon;?>"></i> </button>
                                                                        <?php endif; ?>      
                                                                    </div>      
                                                                <?php endif; ?>
                                                            <?php endif; ?>              
                                                                                     
                                                        </div>
                                                    </div>   
                                                </td>
                                            </tr>
                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>           
                                </tbody>
                                    
                            </table>                                
                        <?php endif; ?>    
                    </form>
                </div>                 
            </div>            
        </div>
    </div>
</div>
<!-- Active pop up box -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
       
        <form role="form" method='post' action='<?php echo e(Route('updateOrganisationStatus')); ?>' class="col-sm-12 col-md-12">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' id="orgId" name='orgId' value="">
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
        $('#orgId').val(scrapId);   
        if(isActive == 0){
            $('.modal-title').text('Activate');
            $('.modal-header').removeClass('bg-danger');
            $('.modal-header').addClass('bg-success');
            $('.buttonTitle').text('Activate');
            $('.warningText').text('Are you sure you want to Activate this Organisation?');
            $('.buttonTitle').removeClass('btn-danger');
            $('.buttonTitle').addClass('btn-success');
        }else{
            $('.modal-header').removeClass('bg-success');
            $('.modal-header').addClass('bg-danger');
            $('.buttonTitle').text('Deactivate');
            $('.modal-title').text('Deactivate');
            $('.warningText').text('Are you sure you want to deactivate this Organisation?');
            $('.buttonTitle').removeClass('btn-success');
            $('.buttonTitle').addClass('btn-danger');
        }  
        console.log(scrapId);
        console.log(isActive);
    }); 
    $(document).ready(function() {

        $(function () {    
        $('#orglist').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
        
    }); 
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/organisation_list.blade.php ENDPATH**/ ?>