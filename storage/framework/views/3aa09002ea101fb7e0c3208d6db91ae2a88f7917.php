
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<meta name="csrf_token_assignment" content="<?php echo e(csrf_token()); ?>" />
<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
            <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> Order Details </div>
                    <div class="float-right">  
                        
                    </div> 
            </div>
            <?php if(Session::has('error')): ?>
              <?php $errors = Session::get('error');?>
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
                      <div class="col-sm-8 invoice-col">                            
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
                    <?php if(isset($data['attachment']) &&  $data['attachment'] && $data['attachment'] !== ""): ?>
                    <div class="row">
                      <div class="col-8" >
                      </div>
                      <div class="col-4 float-right">                                                       
                      <label class="form-label" for="customFile"><b>Reports</b></label>   
                      <a href="<?php echo e(route('application_document_download', ['file_id' => $data['attachment'] ?? 'default_file_id'])); ?>">Download File</a>
                      <!-- <input type="button" class="form-control" id="download" name="download" value="download" onclick="download(<?php echo $data['attachment']; ?>)" />                -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <?php endif; ?>
      
                    <!-- Table row -->
                    <div class="row">
                        
                      <div class="col-12 table-responsive">                            
                        <table class="table table-striped">
                            <thead>
                                <tr>                                
                                    <th>Service Name</th>
                                    <!-- <th>Price (Canadian Dollar)</th> -->
                                    <!-- <th>Unit</th> -->
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <!-- <th>Subtotal</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($data['services']) && $data['services'] != "" ): ?>
                                    
                                    <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($service->service_name); ?></td>
                                            <!-- <td>$<?php echo e($service->price); ?></td> -->
                                            <!-- <td><?php echo e($service->unit); ?></td>   -->
                                            <td><?php echo e($service->notes); ?>

                                              <!-- <i class="fa fa-pen" data-toggle="modal" data-target="#notes-edit-<?php echo e($service->id); ?>" style="cursor: pointer;float: right;"></i> -->
                                            </td>  
                                            <td>
                                            <?php if($service->status === 7): ?>
                                                Cancelled
                                              <?php elseif($service->status === 6): ?>
                                                Discrepancy
                                              <?php elseif($service->status === 5): ?>
                                                Not Applicable
                                              <?php elseif($service->status === 4): ?>
                                                Missing Information
                                              <?php elseif($service->status === 3): ?>
                                                Incomplete
                                              <?php elseif($service->status === 2): ?>
                                                Completed
                                              <?php else: ?>
                                                In Progress
                                              <?php endif; ?>
                                              <!-- <i class="fa fa-pen" data-toggle="modal" data-target="#status-edit-<?php echo e($service->id); ?>" style="cursor: pointer;float: right;"></i> -->
                                            </td>    
                                            <!-- <?php
                                                $subTotal = intval($service->unit) * intval($service->price)
                                            ?>                           -->
                                            <!-- <td>$<?php echo e($subTotal); ?></td> -->
                                        </tr>   
                                        <div id="notes-edit-<?php echo e($service->id); ?>" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-body">
                                                <h3>Notes</h3>
                                                <textarea id="notes-<?php echo e($service->id); ?>" name="notes" rows="4" cols="60"></textarea>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" onclick="saveNotes(<?php echo $service->id; ?>)">Save</button>
                                              </div>
                                            </div>

                                          </div>
                                        </div>

                                        <div id="status-edit-<?php echo e($service->id); ?>" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-body">
                                                <h3>Status</h3>
                                                <select class="form-control" id="status-<?php echo e($service->id); ?>" name="status">
                                                    <option value="1">In Progress</option>
                                                    <option value="2">Completed</option>
                                                    <option value="3">Rejected</option>
                                                </select>

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" onclick="saveStatus(<?php echo $service->id; ?>)">Save</button>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
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

<div class="content">
  <div class="row">           
    <div class="col-md-12">               
      <div class="card card-primary card-outline shadow mt-3">
        <div class="car-header p-3">
          <div class="card-title font-weight-bold text-center"> Assign Application </div>
        </div> 
        <div class="card-body">                                               
          
          <form method="post" id='saveOrg' autocomplete="off" action="<?php echo e(Route('assignApplication')); ?>" enctype="multipart/form-data"> 
              <?php echo csrf_field(); ?>                            
              <div>
                  <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">                       
                     
                      <?php if(isset($data['assignee']) && $data['assignee'] != ""): ?>
                      <label class="float-left" for="assignee"> Select Assignee </label><br>
                        <select id="assignee" name="assignee" class=" form-control col-md-12" required> 
                          <option value="" disabled selected>Please Select Assignee</option>
                            <?php $__currentLoopData = $data['assignee']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                              <option value="<?php echo e($user->id); ?>"> 
                                <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> (<?php echo e($user->email); ?>)
                              </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                        </select> 
                        <?php else: ?>
                          <label class="text-danger text-center" for="">Please Create operational user with application processing permission.</label>
                        <?php endif; ?> 
                    </div>                                    
                    <div class="col-sm-2"></div>
                  </div> 
                  <input type="hidden" name="candidate_id" value="<?php echo e($data['candidate_id']); ?>"/>
                  <div class="form-group row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-4">  
                        <?php if($data['assignee'] != ""): ?>
                          <button type="submit" id="submitbtn" class="btn btn-primary mb-3 btn-block">Assign</button>
                        <?php endif; ?>
                      </div>
                      <div class="col-sm-4"></div>
                  </div>
              </div> 
          </form>
        </div> 
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<!-- <?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?> -->

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>
  function confirmUpload() {
        // Display a confirmation dialog
        var confirmation = confirm("Are you sure you want to upload the file?");
        
        // If user clicks "OK" (true), continue with the upload process
        if (confirmation) {
            // Call a function to handle the file upload process
            uploadFile();
        }
        // If user clicks "Cancel" (false), do nothing or handle as needed
    }
    function uploadFile() {
      var fileInput = document.getElementById('service-file');
            var file = fileInput.files[0];
            
            if (!file) {
                alert('Please select a file.');
                return;
            }

            var formData = new FormData();
            formData.append('file', file);

            $.ajax({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf_token_assignment"]').attr('content')
                },
                url: "<?php echo e(route('upload_service_document')); ?>", // URL to your server-side script
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    alert('File uploaded successfully!');
                    // Handle response from server if needed
                },
                error: function(xhr, status, error) {
                    alert('Error occurred while uploading the file.');
                    console.error(error);
                }
            });
    }
   function saveNotes (id) {
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token_assignment"]').attr('content')
          },
          url: "<?php echo e(route('save_service_notes')); ?>",
          type: 'POST', // 'post' changed to 'POST' for consistency
          dataType: 'json',
          data: {
            'service_id': id,
            'notes': $('#notes-' + id).val() // Using jQuery to get input value
          },
          success: function(data) { 
            // Handle success response
            location.reload(true);
          },
          error: function(xhr, textStatus, errorThrown) { // Added parameters to error function for better error handling
            // Handle error response
          }
        });

        }
   function saveStatus (id) {
    console.log('test')
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token_assignment"]').attr('content')
          },
          url: "<?php echo e(route('save_service_notes')); ?>",
          type: 'POST', // 'post' changed to 'POST' for consistency
          dataType: 'json',
          data: {
            'service_id': id,
            'status': $('#status-' + id).val() // Using jQuery to get input value
          },
          success: function(data) { 
            // Handle success response
            location.reload(true);
          },
          error: function(xhr, textStatus, errorThrown) { // Added parameters to error function for better error handling
            // Handle error response
          }
        });

        }
   
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
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/application_details_view.blade.php ENDPATH**/ ?>