
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
        		<div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> <center> <?php echo e($Package->package_name); ?> - Package Details</center> </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="card-body col-md-8">
                    	<table id="packages" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                   <!--  <th>ID</th>
                                    <th>Package Name</th> -->
                                    <th>Service Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php if(isset($details) && $details != "" ): ?>
                            		<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            			<tr>
                                            <!-- <td><?php echo e($data['id']); ?></td>
                                            <td><?php echo e($data['package_name']); ?></td> -->
                                            <td><?php echo e($data['service_name']); ?></td>
                                            <td><?php echo e($data['description']); ?></td>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>
   
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
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/viewPackages.blade.php ENDPATH**/ ?>