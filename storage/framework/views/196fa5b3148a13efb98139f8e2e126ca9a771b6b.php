
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                        <div class="card-title font-weight-bold text-center"> <center>All Services</center> </div>
                        <div class="float-right">                           
                            <a class="btn btn-sm btn-primary" href="addServices"><i class="fa fa-plus"></i> Add Services</a>
                        </div> 
                </div>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo e(Session::get('success')); ?>                               
                    </div>
                <?php endif; ?>
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="card-body col-md-8">  
                        <table id="packages" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Service Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($data['SubServices']) && $data['SubServices'] != "" ): ?>
                                    <?php $__currentLoopData = $data['SubServices']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <!-- <td><?php echo e($services['id']); ?></td> -->
                                            <td><?php echo e($services['service_name']); ?></td>
                                            <td><?php echo e($services['description']); ?></td>                         
                                            <td>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="row">
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <a class="btn btn-primary btn-xs" title="Edit" href="editService/<?php echo e($services['id']); ?>"><i class="fa fa-edit"></i></a>
                                                        </div>    
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <button type="button" class="btn btn-danger btn-xs scrap" data-id="<?php echo ($services['id']); ?>" data-toggle="modal" data-target="#myModal" s title="<?php echo 'Delete' ?>" style=""><i class="fa fa-trash"></i> </button>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                            </td>
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
        <form role="form" method='post' action='<?php echo e(Route('deleteService')); ?>' class="col-sm-12 col-md-12">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-danger">
                    <label class="modal-title" style="font-size: 25px;">Attention</label> 
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <input type='hidden' id="serviceid" name='serviceid' value="">
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
        serviceid = $(this).attr('data-id');
        $('#serviceid').val(serviceid);
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
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/services.blade.php ENDPATH**/ ?>