
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
            <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> Candidate Details </div>
                    <div class="float-right"> 
                      <?php if(isset($data['noServicesAdded']) &&  $data['noServicesAdded'] == 0): ?> 
                        <a class="btn btn-sm btn-primary" href="<?php echo e(url('background_service_checks/'.$data['candidate_id'])); ?>"><i class="fa fa-plus"></i> Add Sevices </a>
                      <?php endif; ?>
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

            <div class="card-body">
                <div class="invoice p-3 mb-3">
                  <?php if(isset($data['noServicesAdded']) &&  $data['noServicesAdded'] == 0): ?>
                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">                            
                        <address>
                          Name: <strong><?php echo e($data['candidateName']); ?></strong><br>                             
                          Phone: <?php echo e($data['candidatePhone']); ?><br>
                          Email: <?php echo e($data['candidateEmail']); ?>

                        </address>
                      </div>
                      <div class="row text-center">                        
                          <p><b>No Services Added for background check</b></p>
                      </div>
                    </div>
                  <?php else: ?>
                    <!-- title row -->
                    <div class="row">
                      <div class="col-12">                                                       
                        <h6 class="float-right">Date: <?php echo e($data['date']); ?></h6>                            
                      </div>
                      <!-- /.col -->
                    </div>
                    <div class="row invoice-info">
                      
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">                            
                        <address>
                          Name: <strong><?php echo e($data['candidateName']); ?></strong><br>                             
                          Phone: <?php echo e($data['candidatePhone']); ?><br>
                          Email: <?php echo e($data['candidateEmail']); ?>

                        </address>
                      </div>
                      <!-- /.col -->
                      
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
      
                    <!-- Table row -->
                    <div class="row">
                        
                      <div class="col-12 table-responsive">                            
                        <table class="table table-striped">
                            <thead>
                                <tr>                                
                                    <th>Service Name</th>
                                    <!-- <th>Price (Canadian Dollar)</th> -->
                                    <!-- <th>Unit</th> -->
                                    <!-- <th>Subtotal</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($data['services']) && $data['services'] != "" ): ?>
                                    
                                    <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($service->service_name); ?></td>
                                            <!-- <td>$<?php echo e($service->price); ?></td> -->
                                            <!-- <td><?php echo e($service->unit); ?></td>  -->
                                        </tr>   
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                <?php endif; ?>                              
                            </tbody>
                        </table>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
      
                    <!-- <div class="row">
                      <div class="col-8">
                        
                      </div>
                      <div class="col-4"> 
                        <div class="table-responsive">
                          <table class="table">                                
                            <tr>
                              <th>Total:</th>
                              <td><b>$<?php echo e($data['total']); ?></b></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div> -->
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
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/organisation/candidate_details.blade.php ENDPATH**/ ?>