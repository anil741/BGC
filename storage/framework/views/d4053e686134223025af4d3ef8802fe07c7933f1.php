

<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row"> 
        <div class="col-md-2"></div>          
        <div class="col-md-8">
        	<div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> Service List </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="card-body col-md-8">   
                        <table id="services" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>                                
                                            <th>A La Carte</th>
                                                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($data['services']) && $data['services'] != "" ): ?>                                
                                            <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($service->service_name); ?></td>
                                                    
                                                </tr>   
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                        <?php endif; ?>                              
                                    </tbody>
                        </table>   

                        <center>
                            <div class="col-sm-4"> 
                                <a class="btn btn-primary" href="<?php echo e(Route('personalDetailsForm',['candidate_id'=>Session::get('candidate_id')])); ?>">Proceed</a>
                            </div> 
                        </center>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
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
        $('#services').DataTable({
        "paging": false,
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
<?php echo $__env->make('backend.layout.candidate_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/candidate/candidate_services.blade.php ENDPATH**/ ?>