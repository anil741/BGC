
<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##


<div class="content">
	<div class="row">           
        <div class="col-md-12">               
            <div class="card card-primary card-outline shadow mt-3">
              <div class="car-header p-3">
                  <div class="card-title font-weight-bold text-center"> Upload Documents </div>
              </div>
              <div class="card-body">
                <form method="post" action="<?php echo e(Route('saveDocuments')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>  
                  <input type="hidden" name="candidate_id" value="<?php echo e($data['candidate_id']); ?>" />                    
                    <div id="main" class="row form-group mt-3">
                      <div class="col-md-12"> 
                        <div class="float-right">
                          <a id="btAdd" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add More Documents</a><br>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row mt-3">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                        <div class="row mt-3"> 
                          <div class="col-md-6">
                            <input type="text" maxlength="30" id="firstfilenm"  name="firstfilenm"  class="form-control" placeholder="Enter file name" style="background: transparent !important; border: 1px solid #ced4da;"/ required>
                          </div> 
                          <div class="col-md-5">
                            <input type="file" name="firstfile" class="custom-file-input" id="customFile" onchange="ValidateSize(this)" required> 
                            <label class="custom-file-label" for="customFile" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Choose file</label>
                          </div> 
                        </div>
<?php //dd($data); ?>
                        <?php if(isset($data['is_driving_form'])): ?>
                    <div class="row mt-3"> 
                        <div class="col-md-6">
                          <input type="text" maxlength="30" id="driving_form"  name="driving_form"  class="form-control" value="Driving Licence" readonly="" style="background: transparent !important; border: 1px solid #ced4da;"/ required>
                        </div> 
                        <div class="col-md-5">
                        <input type="file" name="drivingfile" class="custom-file-input" id="customFile" onchange="ValidateSize1(this)" <?php if (isset($data['is_driving_form'])) echo 'required'; ?>>
                          <label class="custom-file-label" for="customFile" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Choose file</label>
                        </div> 
                      </div>
                      <?php endif; ?>
                      <?php if(isset($data['is_candidate_form'])): ?>
                      <div class="row mt-3"> 
                        <div class="col-md-6">
                          <input type="text" maxlength="30" id="candidate_form"  name="candidate_form"  class="form-control" value="Candidate Photo ID" readonly="" style="background: transparent !important; border: 1px solid #ced4da;"/ required>
                        </div> 
                        <div class="col-md-5">
                          <input type="file" name="candidatefile" class="custom-file-input" id="customFile" onchange="ValidateSize1(this)" <?php if (isset($data['is_candidate_form'])) echo 'required'; ?>> 
                          <label class="custom-file-label" for="customFile" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Choose file</label>
                        </div> 
                      </div>
                      <?php endif; ?>
                        <?php if(!empty($data['is_criminal_form']) && $data['is_criminal_form'] != ""): ?>
                          <div class="row mt-3"> 
                            <div class="col-md-6">
                              <input type="text" maxlength="30" id="criminal_form"  name="criminal_form"  class="form-control" value="Criminal Record check Form" readonly="" style="background: transparent !important; border: 1px solid #ced4da;"/ required>
                              <!-- <label for="">Criminal Record check Form</label> -->
                            </div> 
                            <div class="col-md-5">
                              <input type="file" name="criminalfile" class="custom-file-input" id="customFile" onchange="ValidateSize1(this)" required> 
                              <label class="custom-file-label" for="customFile" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Choose file</label>
                            </div> 
                          </div>
                        <?php endif; ?>

                        <div id="AddDoc"></div>

                      </div>
                      <div class="col-md-2"></div>
                    </div>                  
                    
                    <?php if(!empty($data['is_criminal_form']) && $data['is_criminal_form'] != ""): ?>
                      <div class="col-md-12 form-group row mt-3 mb-3"> 
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10" style="border: 1px solid #dee2e6; padding:15px; margin-top:30px;">
                          <div class="car-header p-3 text-center">
                            <div class="col-md-12 form-group row mt-3 mb-3"> 
                              <div class="col-md-1">
                              </div>
                              <div class="col-md-10">
                                <div>Please fill all information in criminal record verification form and download filled form and attach in upload document section  </div>
                              </div>
                              <div class="col-md-1">
                              </div>
                            </div>                      
                          </div>

                          <div class="col-md-12 form-group row mt-3 mb-3">
                            
                            
                                <div id="pspdfkit" style="width: 100%; height: 100vh;"></div>
                            
                            
                          </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                      </div> 
                    <?php endif; ?>  

                    <center> 
                      <button type="submit" id="submitbtn" class="btn btn-primary mb-3 col-md-2 mt-5 btn-block">Next</button>
                    </center>                        
                </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script src="<?php echo e(asset('Home/assets/dist/pspdfkit.js')); ?>"></script>
<script>
  $(document).ready(function() {
    function disableBack() { window.history.forward() }
    window.onload = disableBack();
    window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
  });
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  function ValidateSize(file) {
    var re = /(\.jpg|\.jpeg|\.pdf|\.docx|\.png)$/i;
    if (!re.exec(file.files[0].name)) {
      alert("File must be in PDF, JPG, PNG, DOCX format.");
      $(file).val('');
    }
    if (file.files[0].size > 2097152) // 2 MiB for bytes.
    {     
      alert("File size cannot exceed 2 MB.");
      $(file).val(''); //for clearing with Jquery
    } 
  }

   function ValidateSize1(file) {
    var re = /(\.pdf)$/i;
    if (!re.exec(file.files[0].name)) {
      alert("File must be in PDF format.");
      $(file).val('');
    }
    if (file.files[0].size > 2097152) // 2 MiB for bytes.
    {     
      alert("File size cannot exceed 2 MB.");
      $(file).val(''); //for clearing with Jquery
    } 
  }

  var i=0; 
   $('#btAdd').click(function() 
   {
   	// document.getElementById("submitbtn").disabled = false;
      i++;
      var foo = document.getElementById("AddDoc");
      $('#AddDoc').append('<div class="row mt-3"> <div class="col-md-6"><input type="text" maxlength="30" id="extrafilenm['+i+']"  name="extrafilenm['+i+']"  class="form-control" placeholder="Enter file name" style="background: transparent !important; border: 1px solid #ced4da;"/></div> <div class="col-md-5"><input type="file" name="extrafile['+i+']" class="custom-file-input" id="customFile" onchange="ValidateSize(this)">  <label class="custom-file-label" for="customFile" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Choose file</label></div><div class="col-md-1" style="align-self: center;text-align: center;text-align: center;"><i class="fa fa-trash text-danger" style="cursor: pointer;" onclick="removeDocument(\'documents-'+i+'\')"></i></div></div>');

      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });

   });

</script>
<script>
  // local machine
  // document: "http://localhost:8888/backgroundcheck/public/TP_Consent.pdf"
  var currentLocation = window.location;
  let path = currentLocation.origin + '/TP_Consent.pdf';
  console.log(path); 
  PSPDFKit.load({
    container: "#pspdfkit",
    document: path
  })
  .then(function(instance) {
    console.log("PSPDFKit loaded", instance);
  })
  .catch(function(error) {
    console.error(error.message);
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.org_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/forms/uploadDocuments.blade.php ENDPATH**/ ?>