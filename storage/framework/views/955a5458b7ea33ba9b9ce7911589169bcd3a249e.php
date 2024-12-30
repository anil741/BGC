



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<div class="content">
    <div class="content">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card card-primary card-outline shadow mt-3">
                    <div class="car-header p-3">
                        <div class="card-title font-weight-bold text-center">Organisation Details </div>
                    </div>

                    <div class="card-body">
                        <?php if(Session::has('error')): ?>
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

                        <?php if(isset($data['orgDetails']) && $data['orgDetails'] != ''): ?>

                        <div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <label for="organisation_name">Organisation Name</label>
                                    <input type="text" class="form-control mb-2" id="org_name" name="organisation_name"
                                        value="<?php echo e($data['orgDetails'][0]->organisation_name); ?>"
                                        placeholder="Enter Organisation Name *" readonly>

                                </div>

                                <div class="col-sm-4">
                                    <label for="email_address">Business Email</label>
                                    <input type="email" class="form-control" id="org_email" name="email_address"
                                        value="<?php echo e($data['orgDetails'][0]->email_address); ?>" placeholder="Enter Email *"
                                        readonly>

                                </div>
                                <div class="col-sm-2"></div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2 "></div>
                                <div class="col-sm-4">
                                    <label for="city">Number of Employees</label>
                                    <input type="text" class="form-control mb-2" id="org_city" name="city"
                                        value="<?php echo e($data['orgDetails'][0]->no_of_employees); ?>"
                                        placeholder="Enter Number of Employees *" readonly>

                                </div>
                                <div class="col-sm-4">
                                    <label for="country">Company Industry</label>
                                    <input type="text" class="form-control mb-2" id="org_country" name="company_type"
                                        value="<?php echo e($data['orgDetails'][0]->company_type); ?>"
                                        placeholder="Enter Company Type Name *" readonly>

                                </div>

                                <div class="col-sm-2"></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <label for="contact">Phone Number</label>
                                    <input type="text" class="form-control mb-2" id="org_contact" name="contact"
                                        value="<?php echo e($data['orgDetails'][0]->contact); ?>" placeholder="Enter Phone Number *"
                                        readonly>

                                </div>

                                <div class="col-sm-4">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="org_address" name="address"
                                        value="<?php echo e($data['orgDetails'][0]->address); ?>" placeholder="Enter Address *"
                                        readonly>

                                </div>
                                <div class="col-sm-2"></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2 "></div>
                                <div class="col-sm-4">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control mb-2" id="org_city" name="city"
                                        value="<?php echo e($data['orgDetails'][0]->city); ?>" placeholder="Enter City Name *"
                                        readonly>

                                </div>
                                <div class="col-sm-4">
                                    <label for="pincode">Pincode</label>
                                    <input type="text" class="form-control mb-2" id="org_pincode" name="pincode"
                                        value="<?php echo e($data['orgDetails'][0]->pincode); ?>"
                                        placeholder="Enter Pincode Number *" readonly>
                                </div>

                                <div class="col-sm-2"></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2 "></div>
                                <div class="col-sm-4">
                                    <label for="country">State / Province</label>
                                    <input type="text" class="form-control mb-2" id="org_country" name="state"
                                        value="<?php echo e($data['orgDetails'][0]->state); ?>" placeholder="Enter State *"
                                        readonly>
                                </div>
                                <div class="col-sm-4">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control mb-2" id="org_country" name="country"
                                        value="<?php echo e($data['orgDetails'][0]->country); ?>" placeholder="Enter Country Name *"
                                        readonly>
                                </div>

                                <div class="col-sm-2"></div>
                            </div>
                            <?php if($data['orgDetails'][0]->order_type): ?>
                            <div class="form-group row">
                                <div class="col-sm-2 "></div>
                                <div class="col-sm-10">
                                    <label for="order_type">Selected order type: 
                                        <b><?php echo e($data['orgDetails'][0]->order_type == '1' ? 'Send the credential email to the candidate to fill out the BGC details' : ' Fill the checks by yourself'); ?></b></label>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group row">
                            <div class="col-sm-2 "></div>
                            <div class="col-sm-8">
                                <label for="services">Selected services</label>
                                <ul>
                                    <?php $__currentLoopData = $data['SelectedServices']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($item['service_name']); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>

            </div>

        </div>
    </div>
</div>
<?php if(isset($data['orgConsentDetails'][0]) && $data['orgConsentDetails'][0] != ''): ?>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center"> CONSENT TO DISCLOSE PERSONAL
                        INFORMATION </div>
                </div>

                <div class="card-body">
                    <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <?php echo e(Session::get('error')); ?>

                    </div>
                    <?php endif; ?>

                    

                    <div>
                        <label for="">Applicant's Information</label>
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label for="">First Name</label>
                                <input type="text" class="form-control mb-2" name="first_name"
                                    value="<?php echo e($data['orgConsentDetails'][0]->first_name); ?>"
                                    placeholder="Enter First Name *" readonly>

                            </div>

                            <div class="col-sm-4">
                                <label for="">Middle Name</label>
                                <input type="text" class="form-control mb-2" name="middle_name"
                                    value="<?php echo e($data['orgConsentDetails'][0]->middle_name); ?>"
                                    placeholder="Enter Middle Name" readonly>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control mb-2" name="last_name"
                                    value="<?php echo e($data['orgConsentDetails'][0]->last_name); ?>"
                                    placeholder="Enter Last Name *" readonly>

                            </div>

                        </div>

                        <label for="">Maiden Name: (if any)</label>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control mb-2" name="maiden_name"
                                    value="<?php echo e($data['orgConsentDetails'][0]->maiden_name); ?>"
                                    placeholder="Enter Maiden Name" readonly>

                            </div>
                            <div class="col-sm-4"> </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <label for="">Address</label>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="">Street Number</label>
                                <input type="text" class="form-control mb-2" name="street_number"
                                    value="<?php echo e($data['orgConsentDetails'][0]->street_number); ?>"
                                    placeholder="Enter Street Number *" readonly>

                            </div>

                            <div class="col-sm-4">
                                <label for="">Street Name</label>
                                <input type="text" class="form-control mb-2" name="street_name"
                                    value="<?php echo e($data['orgConsentDetails'][0]->street_name); ?>"
                                    placeholder="Enter Street Name *" readonly>

                            </div>
                            <div class="col-sm-4">
                                <label for="">Apt/Unit#</label>
                                <input type="text" class="form-control mb-2" name="apt"
                                    value="<?php echo e($data['orgConsentDetails'][0]->apt); ?>" placeholder="Enter Apt/Unit # *"
                                    readonly>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="">City</label>
                                <input type="text" class="form-control mb-2" name="city"
                                    value="<?php echo e($data['orgConsentDetails'][0]->city); ?>" placeholder="Enter City *"
                                    readonly>

                            </div>

                            <div class="col-sm-4">
                                <label for="">Postal Code</label>
                                <input type="text" class="form-control mb-2" name="postal_code"
                                    value="<?php echo e($data['orgConsentDetails'][0]->postal_code); ?>"
                                    placeholder="Enter Postal Code *" readonly>

                            </div>
                            <div class="col-sm-4">
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="">Contact Number</label>
                                <input type="text" class="form-control mb-2" pattern="\d{10}"
                                    title="10 digits are readonly." name="contact_number"
                                    value="<?php echo e($data['orgConsentDetails'][0]->contact_number); ?>"
                                    placeholder="Enter Contact_number *" readonly>

                            </div>

                            <div class="col-sm-4">
                                <label for="">Email</label>
                                <input type="email" class="form-control mb-2" name="email"
                                    value="<?php echo e($data['orgConsentDetails'][0]->email); ?>" placeholder="Enter E-mail *"
                                    readonly>

                            </div>
                            <div class="col-sm-4">
                            </div>

                        </div>

                        <label for="">Declaration</label>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <b>By signing below, I hereby authorize that my data can be used, stored and
                                    disseminated by<b> Screen 360° </b> or through its third party agents for my
                                    background verification process & I acknowledge my full understanding of the
                                    content and meaning and give my informed consent.</b>
                            </div>
                        </div>

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
                    <div class="card-title font-weight-bold text-center"> CONSENT FORM - DATA STORAGE &
                        DISSEMINATION </div>
                </div>

                <div class="card-body">
                    <div>
                        <label class="mt-3" for="">CONFIDENTIALITY: </label>
                        <div class="form-group row">

                            <ul>
                                <li><b>In consideration of receipt of this document, you agree (i) to make this
                                        information available only to those of your employees who need access to
                                        such information for the purpose of evaluating its contents, and (ii)
                                        not to disclose this information to any third party for any purpose
                                        without the prior written consent of an authorized representative of
                                        Screen 360.</b></li>
                            </ul>
                        </div>
                        <div class="form-group row">

                            <ul>
                                <li><b>Subscriber acknowledges that all information provided to Subscriber by
                                        Screen 360 for the purpose of a Background Verification may not be
                                        utilized for any other purpose.</b></li>
                            </ul>
                        </div>
                        <div class="form-group row">

                            <ul>
                                <li><b>Subscriber shall not store, disseminate or make available any
                                        information, obtained as a result of Background Verification, to or at a
                                        location outside of Canada other than to the Applicant without the prior
                                        written consent of the Applicant, except as readonly by law.</b></li>
                            </ul>
                        </div>
                        <div class="form-group row">

                            <ul>
                                <li><b>Subscriber will ensure that it, its members, employees and all other
                                        persons who may order or use the Background Verification Report on its
                                        behalf are aware of, and fully comply with, the provisions and
                                        conditions of this Certification.</b></li>
                            </ul>
                        </div>

                        <div class="form-group row m-2">

                            <b>Accordingly, by your signature below, you agree to indemnify, defend and hold
                                harmless Screen 360 and its affiliates from and against any and all third party
                                claims, actions, demands, costs, expenses and liabilities (including, without
                                limitation, reasonable attorneys’ fees and any costs of consumer notifications
                                readonly under any applicable data protection statutes) which may be incurred by
                                you and/or Screen 360 in connection with or arising out of any unauthorized
                                access to or disclosures of your unmasked Applicant Sensitive Personal
                                Information.</b>

                        </div>

                        <div class="icheck-primary ml-2 mb-3">
                            <input type="checkbox" id="agreeTerms" name="is_agreed" value="1" checked disabled>
                            <label for="agreeTerms">
                                I agree to the terms
                            </label>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control mb-2" name="company_name"
                                    value="<?php echo e($data['orgConsentDetails'][0]->company_name); ?>"
                                    placeholder="Enter Company Name *" readonly>

                            </div>

                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4">
                            </div>

                        </div>
                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label for="">Title</label>
                                <input type="text" class="form-control mb-2" name="title"
                                    value="<?php echo e($data['orgConsentDetails'][0]->title); ?>" placeholder="Enter Title *"
                                    readonly>

                            </div>

                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-4">
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-sm-4">
                                <label for="">Date: </label> <?php echo $data['orgConsentDetails'][0]->date; ?>
                            </div>

                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-4">
                            </div>

                        </div>

                        
                        <?php if($data['orgDetails'][0]->is_verified == 0): ?>
                        <div class="form-group row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <form method="post" id='verify' action="<?php echo e(Route('verifyOrganisation')); ?>"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="org_id" value="<?php echo e($data['orgDetails'][0]->id); ?>">
                                    <input type="hidden" name="org_name"
                                        value="<?php echo e($data['orgDetails'][0]->organisation_name); ?>">
                                    <input type="hidden" name="email"
                                        value="<?php echo e($data['orgDetails'][0]->email_address); ?>">

                                    <button type="submit" id="submitbtn"
                                        class="btn btn-primary mb-3 btn-block">Approve</button>
                                </form>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <?php else: ?>
                        <div class="form-group row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <div class="alert alert-success text-center">
                                    This Organisation is verified.
                                </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script>
$(document).ready(function() {

});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/organisation_details.blade.php ENDPATH**/ ?>