



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> Pending Orders </div>
                    <div class="float-right">  
                        
                    </div> 
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

                    <table id="userlist" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Candidate Name</th>
                                <th>Email</th> 
                                <!-- <th>Mobile</th>                                 -->
                                <th>Status</th>                              
                                <th>Action</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            <?php if(isset($data['candidates']) && $data['candidates'] != "" ): ?>
                                <?php $__currentLoopData = $data['candidates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                              
                                <?php if($details['role_id'] != 2 ): ?> 
                                    <tr>
                                        <td><?php echo e($details['first_name']); ?> <?php echo e($details['last_name']); ?></td>
                                        <td><?php echo e($details['email']); ?></td>                                            
                                        <!-- <td><?php echo e($details['contact']); ?></td>  -->
                                        <?php if($details['is_disabled'] == 0){
                                            $bgA = '<small class = "label text-green"> <b>ACTIVE</b> </small>';                                             
                                            $buttonIcon = "fa fa-user-slash";  
                                            $titleTip = "Deactivate Candidate";
                                        }else{                                             
                                            
                                            $buttonIcon = "fa fa-user";
                                            $titleTip = "Activate Candidate";
                                            $bgA = '<small class = "label text-danger"> <b>INACTIVE</b> </small>';
                                        }
                                        ?>
                                        <td> <?php echo $bgA; ?> </td>   
                                        <td>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-">
                                                <div class="row">  
                                                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                        <a class="btn btn-primary btn-xs" title="View Details" href="<?php echo e(Route('candidateDetailsView',['candidate_id'=> $details['id'] ])); ?>"><i class="fa fa-eye"></i> </a>
                                                    </div>                                                     
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                        <button type="button" class="btn btn-danger btn-xs scrap" data-isActive = "<?php echo ($details['is_disabled']); ?>"  data-id="<?php echo ($details['id']); ?>" data-toggle="modal" data-target="#myModal" data-toggle="modal" data-target="#myModal" title="<?php echo $titleTip; ?>" style=""><i class="<?php echo $buttonIcon;?>"></i> </button>
                                                    </div> 
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                        <button type="button" class="btn btn-danger btn-xs scrap" data-applicationId = "<?php echo ($details['application_id']); ?>"  data-id="<?php echo ($details['id']); ?>" data-toggle="modal" data-target="#cancelModal" data-toggle="modal" data-target="#cancelModal" title="Cancel Order" style=""><i class="fa fa-times"></i> </button>
                                                    </div>                                    
                                                </div>
                                            </div>   
                                        </td>
                                    </tr>
                                <?php endif; ?>   
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>           
                        </tbody>
                            
                    </table> 
                </div> 

                
               
            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>
</div>
<!-- delete pop up box -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
       
        <form role="form" method='post' action='<?php echo e(Route('updataCandidateStatus')); ?>' class="col-sm-12 col-md-12">
            <div class="modal-content">
                <div class="modal-header bg_model_light_orange">
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

<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
       
        <form role="form" method='post' action='<?php echo e(Route('updataOrderStatus')); ?>' class="col-sm-12 col-md-12">
            <div class="modal-content">
                <div class="modal-header bg_model_light_orange">
                    <h5 class="modal-title1">Cancel Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' id="user_id" name='userId' value="">
                    <input type='hidden' id="applicationId" name='applicationId' value="">

                    <p class="warninggText">Are you sure you want to Cancel this Order?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger buttonTitlee">Yes</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
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
        $('#user_id').val(scrapId);   
        if(isActive == 1){
            $('.modal-title').text('Activate');
            $('.modal-header').removeClass('bg-danger');
            $('.modal-header').addClass('bg-success');
            $('.buttonTitle').text('Activate');
            $('.warningText').text('Are you sure you want to Activate this Candidate?');
            $('.buttonTitle').removeClass('btn-danger');
            $('.buttonTitle').addClass('btn-success');
        }else{
            $('.modal-header').removeClass('bg-success');
            $('.modal-header').addClass('bg-danger');
            $('.buttonTitle').text('Deactivate');
            $('.modal-title').text('Deactivate');
            $('.warningText').text('Are you sure you want to deactivate this Candidate?');
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



<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/organisation/organisation_candidate_list.blade.php ENDPATH**/ ?>