
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                        <div class="card-title font-weight-bold text-center"> <center>All Packages</center> </div>
                        <div class="float-right">                           
                            <a class="btn btn-sm btn-primary" href="addPackages"><i class="fa fa-plus"></i> Add Packages</a>
                        </div> 
                </div>
                <?php if(Session::has('error')): ?>
                    <?php $errors = Session::get('error');?>
                        <!-- <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo e(Session::get('error')); ?>                               
                        </div> -->
                <?php endif; ?>  

                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo e(Session::get('success')); ?>                               
                    </div>
                <?php endif; ?>  

                <div class="alert alert-success alert-block" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        
                </div>
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="card-body col-md-8">
                    	<table id="packages" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                   <!--  <th>ID</th> -->
                                    <th>Package Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($data['packages']) && $data['packages'] != "" ): ?>
                                    <?php $__currentLoopData = $data['packages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <!-- <td><?php echo e($details['id']); ?></td> -->
                                            <td><?php echo e($details['package_name']); ?></td>                   
                                            <td>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-">
                                                    <div class="row">
                                                       
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                            <a class="btn btn-primary btn-xs" title="View" href="viewPackage/<?php echo e($details['id']); ?>"><i class="fa fa-eye"></i></a>
                                                        </div>                                                     
                                                      
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                            <a class="btn btn-primary btn-xs" title="Edit" href="editPackage/<?php echo e($details['id']); ?>"><i class="fa fa-edit"></i></a>
                                                        </div>                                                    
                
                                                        <!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-">
                                                            <button type="button" class="btn btn-danger  btn-xs scrap" data-id="<?php //echo ($details['id']); ?>" data-toggle="modal" data-target="#myModal" s title="<?php //echo 'Delete' ?>" style=""><i class="fa fa-trash"></i> </button>
                                                        </div>  -->                                       
                                                    </div>
                                                </div>   
                                            </td>
                                        </tr>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>           
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- delete pop up box -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form role="form" method='post' action='<?php echo e(Route('deletePackage')); ?>' class="col-sm-12 col-md-12">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-danger">
                    <label class="modal-title" style="font-size: 25px;">Attention</label> 
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <input type='hidden' id="packageid" name='packageid' value="">
                    Are you sure you want to delete this record?
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger buttonTitle">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>        
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>

    $(document).on('click', '.scrap', function(e) {   
        packageId = $(this).attr('data-id');
        $('#packageid').val(packageId);
    });
   
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
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/addPackages.blade.php ENDPATH**/ ?>