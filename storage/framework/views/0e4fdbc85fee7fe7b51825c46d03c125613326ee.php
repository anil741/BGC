



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<div class="content" id="elementToCapture">
<form method="post" autocomplete="off" action="<?php echo e(Route('selectedServicesView')); ?>" enctype="multipart/form-data"> 
    <?php echo csrf_field(); ?>
    <div class="content">
        <div class="row">           
            <div class="col-md-12">               
                <div class="card card-primary card-outline shadow mt-3">
                    <div class="car-header p-3">
                        
                        <div class="card-title font-weight-bold text-center"> Authorization and Consent </div>

                    </div>                
                    
                    <div class="card-body">
                        <?php if(Session::has('error')): ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo e(Session::get('error')); ?>                               
                            </div>
                        <?php endif; ?> 
                        
                        
                                                    
                        
                        
                        <div>  

                            <div class="form-group row">
                                <div class="col-sm-12"> 
                                    I, the undersigned, hereby authorize <b>Screen 360°</b> or its third party agents to verify &amp; procure an investigative report or consumer report and to store the data and information provided above for that purpose.                                
                                </div>
                            </div>
                            I hereby grant authority for the bearer of this letter to access or be provided with full details
                            <div class="form-group row">
                                <div class="col-sm-12 mt-2"> 
                                    <ul>
                                        <li class="mb-2 text-justify">
                                            Of my previous employment record held by any company or business for whom I previously worked. This information should include the dates of employment; the nature of the position held, [details of my salary upon departure] and an appraisal of my performance, capabilities and character. In addition, please provide any other pertinent information requested by the individual presenting this authority. I hereby release from liability all persons or entities requesting or supplying such information.
                                        </li>
                                        <li class="mb-2">
                                            Of my qualification/degree obtained
                                        </li>
                                        <li class="mb-2">
                                            Information in respect to my character from the records maintained by local authorities
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            I acknowledge that I have read and understand the scope of this authorization, certify that the information above is true
                            and complete to the best of my knowledge.<br>

                            <?php if(isset($data['candidate']) && $data['candidate'] != "" ): ?>
                                <div class="form-group row">                              
                                
                                    <div class="col-sm-4"> 
                                        <label class="mt-3" for="">First Name</label>                                      
                                        <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="first_name" value="<?php echo e($data['candidate']->first_name); ?>" placeholder="First Name *" readonly>
                                        <?php if($errors->has('first_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-sm-4">  
                                        <label class="mt-3" for="">Middle Name</label>                                   
                                        <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="middle_name" value="" placeholder="Middle Name" readonly>
                                        <?php if($errors->has('middle_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('middle_name')); ?></span>
                                        <?php endif; ?>
                                    </div> 
                                    <div class="col-sm-4">  
                                        <label class="mt-3" for="">Last Name</label>                                   
                                        <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" name="last_name" value="<?php echo e($data['candidate']->last_name); ?>" placeholder="Last Name *" readonly>
                                        <?php if($errors->has('last_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                        <?php endif; ?>
                                    </div>                     
                                
                                </div> 
                            <?php endif; ?>    

                            <div class="form-group row mt-3">   
                                <div class="col-sm-4"> 
                                    <div class="icheck-primary ml-2 mb-3">
                                        <input type="checkbox" id="agreeTerms" name="is_agreed" value="1" required>
                                        <label for="agreeTerms">
                                            I agree to the terms
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-4">                                  
                                  
                                </div> 
                                <div class="col-sm-4">  
                                    <label for="">Date </label><br>
                                    <input type="text" placeholder="Date (yyyy/mm/dd) *" class="form-control" name="date" value="<?php echo e(date('Y/m/d')); ?>" readonly/>                                
                                    
                                </div>                     
                            
                            </div> 

                            <div class="form-group row mb-3">                              
                            
                                <div class="col-sm-4">                                       
                                                                
                                </div>

                                <div class="col-sm-4">                                  
                                  
                                </div> 
                                <div class="col-sm-4">                                 
                                  
                                </div>                     
                            
                            </div> 
                            <div class="form-group row m-3">                              
                            
                                <div class="col-sm-4">  
                                    <?php if($data['candidate']->digital_sign != NULL): ?>
                                        <div>
                                            <img class="" src="<?php echo e(asset('nfs/'.$data['candidate']->digital_sign)); ?>" alt="digital_signature" height="93" width="185">
                                        </div>                              
                                        <label for="">Signature</label>     
                                    <?php else: ?>                                     
                                        <button type="button" class="btn btn-sm btn-primary mb-3 mt-5" data-id="" data-toggle="modal" data-target="#myModal" data-toggle="modal" data-target="#myModal"> Add Signature </button>
                                    <?php endif; ?>                              
                                </div>

                                <div class="col-sm-4">                                  
                                  
                                </div> 
                                <div class="col-sm-4">                                 
                                  
                                </div>                     
                            
                            </div> 
                           
                            <div class="form-group row">
                                <div class="col-sm-3"> </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            
                                        </div>
                                        <div class="col-sm-3 float-right">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">  
                                    <?php if($data['candidate']->digital_sign != NULL): ?>
                                        <button type="submit" id="submitbtn" onclick="storeAggrement()" class="btn btn-primary mb-3 float-right">Next</button>
                                    <?php endif; ?>
                                </div>                                
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>   
</form>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">       
        <form role="form" method='post' action='<?php echo e(Route('uploadDigitalSignature')); ?>' class="col-sm-12 col-md-12">
            <?php echo csrf_field(); ?> 
            <div class="modal-content">
                <div class="modal-header bg_model_light_orange">
                    <h5 class="modal-title">Create Signature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">

                    <div id="signaturePad"></div>
                    <br/>
                    
                    <textarea id="signature64" name="signed" style="display: none"></textarea>
                   
                </div>
                <div class="modal-footer text-center">         
                    <button id="clear" class="btn btn-danger btn-sm float-left">Clear Signature</button>           
                    <button type="submit" class="btn btn-sm btn-success">Upload Signature</button>                    
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
    $('#date').datetimepicker({
        format: 'YYYY/MM/DD',
        maxDate: new Date()
    });
    function lettersOnly() 
    {
        var charCode = event.keyCode;
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
            return true;
        else
            return false;
    }

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
        function storeAggrement() {
            const elementToCapture = document.getElementById('elementToCapture');
            html2canvas(elementToCapture, {
                onrendered: function(canvas) {
                    var screenshot = canvas.toDataURL();

                // Send the image data to the server
                fetch('<?php echo e(route("saveAgreementSoftCopy")); ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    },
                    body: JSON.stringify({ imageData: screenshot })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Screenshot saved as: ' + data.filename);
                })
                .catch(error => console.error('Error saving screenshot:', error));
                }
            });
        }
</script>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript">
var signaturePad = $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
$('#clear').click(function(e) {
e.preventDefault();
signaturePad.signature('clear');
$("#signature64").val('');
});
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layout.candidate_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/frontend/forms/authorization_and_consent_form.blade.php ENDPATH**/ ?>