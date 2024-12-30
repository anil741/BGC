
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="row">           
        <div class="col-md-12">
        	<div class="card card-primary card-outline shadow mt-3">
        		<div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> <center> Search Existing Orders</center> </div>
                </div>

                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo e(Session::get('success')); ?>                               
                    </div>
                <?php endif; ?>  

                <div class="alert alert-success alert-block" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        
                </div>
                <form>
                    <div class="row form-group" style="padding:15px;">
                    	<!-- <div class="col-md-1"></div> -->
                        <div class="card-body col-md-12" style="border: 1px solid #dee2e6; padding:15px;">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>First Name:</label> 
                                    <input type="text" class="form-control" id="firstnm" name="firstnm" value="<?php echo e(old('firstnm')); ?>" placeholder="Enter First Name">
                                    <?php if($errors->has('firstnm')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('firstnm')); ?></span>
                                    <?php endif; ?> 
                                </div>

                                <div class="col-md-3">
                                    <label>Last Name:</label> 
                                    <input type="text" class="form-control" id="lastnm" name="lastnm" value="<?php echo e(old('lastnm')); ?>" placeholder="Enter Last Name">
                                    <?php if($errors->has('lastnm')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('lastnm')); ?></span>
                                    <?php endif; ?> 
                                </div>

                                <div class="col-md-3">
                                    <label>SSN (#):</label> 
                                    <input type="text" class="form-control" name="ssnNo" id="ssnNo" value="<?php echo e(old('ssnNo')); ?>" placeholder="Enter SSN Number">
                                    <?php if($errors->has('ssnNo')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('ssnNo')); ?></span>
                                    <?php endif; ?> 
                                </div>

                                 <div class="col-md-3">
                                    <label>Status:</label> 
                                    <select id="status" name="status" class="form-control" style="border-radius: 10px;">
                                        <option value="">Please Select</option>
                                        <option value="2">Pending</option>
                                        <option value="4">In-Progress</option>
                                        <option value="6">Completed</option>
                                        <option value="5">Rejected</option>
                                    </select>  
                                    <!-- <input type="text" class="form-control" name="status" id="status" value="<?php echo e(old('status')); ?>" placeholder="Enter Last Name"> -->
                                    <?php if($errors->has('status')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
                                    <?php endif; ?> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Order Number:</label> 
                                    <input type="text" class="form-control" id="appNo" name="appNo" value="<?php echo e(old('appNo')); ?>" placeholder="Enter First Name">
                                    <?php if($errors->has('appNo')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('appNo')); ?></span>
                                    <?php endif; ?> 
                                </div>

                                <div class="col-md-3">
                                    <label>Date Of Birth:</label> 
                                    <div class="input-group date" id="birth_date" data-target-input="nearest">
                                        <input type="text" placeholder="Enter Date of birth (yyyy/mm/dd) *" class="form-control datetimepicker-input" id="birthdate" name="birth_date" value="<?php echo e(old('birth_date')); ?>" data-target="#birth_date" />
                                        <div class="input-group-append" data-target="#birth_date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                        <?php if($errors->has('birth_date')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('birth_date')); ?></span>
                                        <?php endif; ?>  
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label>Start Date:</label> 
                                    <div class="input-group date" id="start_date" data-target-input="nearest">
                                        <input type="text" placeholder="Enter start date (yyyy/mm/dd) *" class="form-control datetimepicker-input" name="start_date" value="<?php echo e(old('start_date')); ?>" data-target="#start_date" id="startDate"/>
                                        <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                        <?php if($errors->has('start_date')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('start_date')); ?></span>
                                        <?php endif; ?>  
                                    </div>
                                </div>

                                 <div class="col-md-3">
                                    <label>End Date:</label>
                                    <div class="input-group date" id="end_date" data-target-input="nearest">
                                        <input type="text" placeholder="Enter end date (yyyy/mm/dd) *" class="form-control datetimepicker-input" name="end_date" value="<?php echo e(old('end_date')); ?>" id="endDate" data-target="#end_date"/>
                                        <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                        <?php if($errors->has('end_date')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('end_date')); ?></span>
                                        <?php endif; ?>  
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <!-- <div class="float-right">
                                        <input type="checkbox" id="archived" name="archived" value="1">
                                        <label for="agreeTerms"> Archived </label>
                                    </div> -->
                                </div>
                                
                                <div class="col-md-3">
                                    <button type="button" id="submitbtn" class="btn btn-primary btn-block" onclick="search()">Search</button>
                                </div>

                                <div class="col-md-3">
                                    <button type="reset" id="resetbtn" class="btn btn-primary btn-block" >Reset</button>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group col-md-12" style="padding:15px;">
                            <div id="resultDiv" class="mt-2 col-md-12"></div>    
                        </div>
                    </div>
                </form>
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
    $('#birth_date').datetimepicker({
        format: 'YYYY/MM/DD',
        maxDate: new Date()
    });

    $('#start_date').datetimepicker({
        format: 'YYYY/MM/DD',
        maxDate: new Date()
    });

    $('#end_date').datetimepicker({
        format: 'YYYY/MM/DD',
        maxDate: new Date()
    });

    function search()
    {
        var firstnm = $('#firstnm').val();
        var lastnm = $('#lastnm').val();
        var ssnNo = $('#ssnNo').val();
        var status = $('#status').val();
        var appNo = $('#appNo').val();
        var birthdate = $('#birthdate').val();
        var startDate = $('#startDate').val();
        var endDate = $('#endDate').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token_test"]').attr('content')
            },
                url: '<?php echo e(Route('OrgSearchReset')); ?>',
                type: 'post',
                dataType: 'json',
                data: {'firstnm' : firstnm, 'lastnm' : lastnm, 'ssnNo' : ssnNo, 'status' : status, 'appNo' : appNo, 'birthdate' : birthdate, 'startDate' : startDate, 'endDate' : endDate},
            beforeSend: function(){
                //$("#ftco-loader").show();
            },
            success: function(data) {
                $('#resultDiv').html(data);
                $('#example1').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            },
            complete:function(data){
                //$("#ftco-loader").hide();
            },
            error: function(data){}
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/backend/organisation/searchRequest.blade.php ENDPATH**/ ?>