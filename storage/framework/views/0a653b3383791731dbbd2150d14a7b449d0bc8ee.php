
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                        <div class="card-title font-weight-bold text-center"> Summary </div>
                        <div class="float-right">  
                            
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
                <div class="card-body">
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                          <div class="col-12">                                                       
                            <h6 class="float-right">Date: <?php echo e($data['date']); ?></h6>                            
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                          
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">                            
                            <address>
                              <strong><?php echo e($data['candidateName']); ?></strong><br>                             
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
                                                <!-- <td><?php echo e($service->unit); ?></td>      -->
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
                        <!-- /.row -->
          
                        <!-- this row will not appear when printing -->
                        <form method="post" action="<?php echo e(Route('sendLinkToCandidate')); ?>" enctype="multipart/form-data">   
                            <?php echo csrf_field(); ?>     
                            <div class="row no-print mt-3">
                                <div class="col-12">        
                                    <input type="hidden" name="candidate_id"  value="<?php echo e($data['candidate_id']); ?>">                     
                                    <button type="submit" class="btn btn-primary float-right"> Submit </button>                            
                                </div>
                            </div>
                        </form>
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
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app1/html/BGC/resources/views/backend/organisation/candidate_service_summary.blade.php ENDPATH**/ ?>