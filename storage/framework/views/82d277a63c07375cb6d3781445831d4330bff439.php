



<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<?php if(isset($data['Action']) && $data['Action'] == "Edit_Org" ): ?>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline shadow mt-3">
                <div class="car-header p-3">
                    <div class="card-title font-weight-bold text-center">
                        <?php echo e((isset($data['Action']) && $data['Action'] != "") ? "Update Organisation": "New Organisation"); ?>

                    </div>
                </div>

                <div class="card-body">
                    <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <?php echo e(Session::get('error')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="alert alert-success alert-block" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        
                    </div>
                    <?php if(isset($data['orgData']) && $data['orgData'] != "" ): ?>
                    <form method="post" id='saveOrg' autocomplete="off" action="<?php echo e(Route('updateOrganisation')); ?>"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <label for="organisation_name">Organisation Name</label>
                                    <input type="text" class="form-control mb-2"
                                        title="Only alphanumeric and space are allowed." pattern="[a-zA-Z0-9 ]+"
                                        id="org_name" name="organisation_name"
                                        value="<?php echo e(($data['orgData'][0]->organisation_name != "") ? $data['orgData'][0]->organisation_name :  old('organisation_name')); ?>"
                                        placeholder="Enter Organisation Name *" required>
                                    <?php if($errors->has('organisation_name')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('organisation_name')); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-sm-4">
                                    <label for="email_address">Business Email</label>
                                    <input type="email" class="form-control"
                                        title="Contact's email (format: xxx@xxx.xxx)"
                                        pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"
                                        id="org_email" name="email_address"
                                        value="<?php echo e(($data['orgData'][0]->email_address != "") ? $data['orgData'][0]->email_address : old('email_address')); ?>"
                                        placeholder="Enter Business Email *" readonly required>
                                    <?php if($errors->has('email_address')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email_address')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-2"></div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <label for="contact">Phone Number</label><br>
                                    <input type="text" class="form-control mb-2" id="org_phone" name="contact"
                                        value="<?php echo e((Session::get('formerror_org') == "") ? $data['orgData'][0]->contact : old('contact')); ?>"
                                        placeholder="Enter Phone Number *" readonly>

                                    

                                    <?php if($errors->has('contact')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('contact')); ?></span>
                                    <?php endif; ?>
                                    <?php if(Session::has('formerror_org')): ?>
                                    <span class="text-danger float-left"><?php echo e(Session::get('formerror_org')); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-sm-4">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="org_address" name="address"
                                        value="<?php echo e(($data['orgData'][0]->address != "") ? $data['orgData'][0]->address : old('address')); ?>"
                                        placeholder="Enter Address *" required>
                                    <?php if($errors->has('address')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2 "></div>
                                <div class="col-sm-4">
                                    <label for="city">City</label>
                                    <input type="text"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                        class="form-control mb-2" id="org_city" name="city"
                                        value="<?php echo e(($data['orgData'][0]->city != "") ? $data['orgData'][0]->city : old('city')); ?>"
                                        placeholder="Enter City Name *" required>
                                    <?php if($errors->has('city')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-4">
                                    <label for="pincode">Pincode</label>
                                    <input type="text" class="form-control mb-2" id="org_pincode"
                                        title="Only alphanumeric and space are allowed." pattern="[a-zA-Z0-9 ]+"
                                        name="pincode"
                                        value="<?php echo e(($data['orgData'][0]->pincode != "") ? $data['orgData'][0]->pincode : old('pincode')); ?>"
                                        placeholder="Enter Pincode Number *" required>
                                    <?php if($errors->has('pincode')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('pincode')); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-sm-2"></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2 "></div>
                                <div class="col-sm-4">
                                    <label for="State">State / Province</label>
                                    <input type="text" class="form-control mb-2"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                        id="org_State" name="state"
                                        value="<?php echo e(($data['orgData'][0]->state != "") ? $data['orgData'][0]->state : old('state')); ?>"
                                        placeholder="Enter State / Province *" required>
                                    <?php if($errors->has('state')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('state')); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-sm-4">
                                    <label for="country">Country</label>
                                    <input type="text"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                        class="form-control mb-2" id="org_country" name="country"
                                        value="<?php echo e(($data['orgData'][0]->country != "") ? $data['orgData'][0]->country : old('country')); ?>"
                                        placeholder="Enter Country Name *" required>
                                    <?php if($errors->has('country')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('country')); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-sm-2"></div>
                            </div>

                            
                            
                            
                            <div class="row form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <label>Select order type</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="order_type"
                                            id="self_candidate" value="1" required <?php echo e(($data['orgData'][0]->order_type == "1") ? "checked" : ""); ?>>
                                        <label class="form-check-label" for="self_candidate">
                                            Send the credential email to the candidate to fill out the BGC details
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="order_type"
                                            id="behalf_candidate" value="2" required <?php echo e(($data['orgData'][0]->order_type == "2") ? "checked" : ""); ?>>
                                        <label class="form-check-label" for="behalf_candidate">
                                            Fill the checks by yourself
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <label>Select services</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                        <label class="form-check-label" for="select-all">
                                            Select All
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <?php $__currentLoopData = $data['SubServices']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-check">
                                            <input class="form-check-input item-checkbox" type="checkbox"
                                                name="services[]" id="item-<?php echo e($d->id); ?>" value="<?php echo e($d->id); ?>"
                                                <?php if(in_array($d->id, $data['SelectedServices'])): ?> checked <?php endif; ?>
                                            >
                                            <label class="form-check-label" for="item-<?php echo e($d->id); ?>">
                                                <?php echo e($d->service_name); ?>

                                            </label>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2"></div>
                                <div class="col">
                                    <span id="error-message" class="text-danger d-none">Please select at least one
                                        service.</span>
                                </div>
                            </div>
                            
                            <input type="hidden" name="org_id" value="<?php echo e($data['orgData'][0]->org_id); ?>">
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <button type="submit" id="submitbtn"
                                        class="btn update_btn btn-primary mb-3 btn-block">Update</button>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="content">
    <form method="post" id='saveOrg' autocomplete="off" action="<?php echo e(Route('saveOrganisation')); ?>"
        enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline shadow mt-3">
                        <div class="car-header p-3">
                            <div class="card-title font-weight-bold text-center"> New Organisation </div>
                        </div>

                        <div class="card-body">
                            <?php if(Session::has('error')): ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo e(Session::get('error')); ?>

                            </div>
                            <?php endif; ?>

                            

                            <div class="mb-3">
                                <div class="form-group row text-center">

                                    <div class="col-sm-8">
                                        
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <label for=""> First Name</label>
                                        <input type="text" class="form-control mb-2"
                                            onkeypress="return lettersOnly(event)" id="first_name" name="first_name"
                                            value="<?php echo e(old('first_name')); ?>" placeholder="Enter First Name *" required>
                                        <?php if($errors->has('first_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for=""> Last Name</label>
                                        <input type="text" class="form-control" id="last_name"
                                            onkeypress="return lettersOnly(event)" name="last_name"
                                            value="<?php echo e(old('last_name')); ?>" placeholder="Enter Last Name *" required>
                                        <?php if($errors->has('last_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <label for="organisation_name">Organisation Name</label>
                                        <input type="text" class="form-control mb-2" id="org_name"
                                            title="Only alphanumeric and space are allowed." pattern="[a-zA-Z0-9 ]+"
                                            name="organisation_name" value="<?php echo e(old('organisation_name')); ?>"
                                            placeholder="Enter Organisation Name *" required>
                                        <?php if($errors->has('organisation_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('organisation_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="email_address">Business Email</label>
                                        <input type="email" class="form-control"
                                            title="Contact's email (format: xxx@xxx.xxx)"
                                            pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"
                                            id="org_email" name="email_address" value="<?php echo e(old('email_address')); ?>"
                                            placeholder="Enter Business Email *" required>
                                        <?php if($errors->has('email_address')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email_address')); ?></span>
                                        <?php endif; ?>
                                        <?php if(Session::has('formerror_email')): ?>
                                        <span class="text-danger"> <?php echo e(Session::get('formerror_email')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <label for="organisation_name">Number of Employees</label>
                                        <select class="form-control prospectInput" id="employee_range"
                                            name="employee_range" required>
                                            <option value="" disabled selected>
                                                Select Number of Employees *
                                            </option>
                                            <option value="1 to 49">
                                                1 to 49
                                            </option>
                                            <option value="50 to 99">
                                                50 to 99
                                            </option>
                                            <option value="100 to 249">
                                                100 to 249
                                            </option>
                                            <option value="250 to 499">
                                                250 to 499
                                            </option>
                                            <option value="500 to 999">
                                                500 to 999
                                            </option>
                                            <option value="1,000 to 1,499">
                                                1,000 to 1,499
                                            </option>
                                            <option value="1,500 to 2,499">
                                                1,500 to 2,499
                                            </option>
                                            <option value="2,500 to 4,999">
                                                2,500 to 4,999
                                            </option>
                                            <option value="5,000 to 9,999">
                                                5,000 to 9,999
                                            </option>
                                            <option value="10,000 to 24,999">
                                                10,000 to 24,999
                                            </option>
                                            <option value="25,000+">
                                                25,000+
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="email_address">Company Industry</label>
                                        <select class="form-control" id="industry" name="company_type" required>
                                            <option value="" disabled selected>
                                                Select Company Industry Type *
                                            </option>
                                            <option value="Agriculture">
                                                Agriculture
                                            </option>
                                            <option value="Business Services">
                                                Business Services
                                            </option>
                                            <option value="Construction">
                                                Construction
                                            </option>
                                            <option value="Education">
                                                Education
                                            </option>
                                            <option value="Energy & Utilities">
                                                Energy &amp; Utilities
                                            </option>
                                            <option value="Finance and insurance">
                                                Finance and insurance
                                            </option>
                                            <option value="Government">
                                                Government
                                            </option>
                                            <option value="Healthcare / Pharmaceuticals">
                                                Healthcare / Pharmaceuticals
                                            </option>
                                            <option value="Internet & Software Services">
                                                Internet &amp; Software Services
                                            </option>
                                            <option value="Logistics">
                                                Logistics
                                            </option>
                                            <option value="Manufacturing">
                                                Manufacturing
                                            </option>
                                            <option value="Media & Entertainment">
                                                Media &amp; Entertainment
                                            </option>
                                            <option value="Mining, Oil & Gas">
                                                Mining, Oil &amp; Gas
                                            </option>
                                            <option value="Non-Profit">
                                                Non-Profit
                                            </option>
                                            <option value="Real Estate">
                                                Real Estate
                                            </option>
                                            <option value="Retail">
                                                Retail
                                            </option>
                                            <option value="Staffing services">
                                                Staffing services
                                            </option>
                                            <option value="Storage">
                                                Storage
                                            </option>
                                            <option value="Telecommunications">
                                                Telecommunications
                                            </option>
                                            <option value="Transportation">
                                                Transportation
                                            </option>
                                            <option value="Wholesale & Distribution">
                                                Wholesale &amp; Distribution
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-sm-2"></div>

                                    <div class="col-sm-4">
                                        <label for="contact">Phone Number</label><br>
                                        

                                        <input type="tel" tabindex="4" class="form-control" placeholder="Enter Phone *"
                                            onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57"
                                            value="<?php echo e(old('contact')); ?>" id="org_contact" name="contact" required />
                                        <span class="text-danger" id="numberval" style="display:none;">Enter valid
                                            number</span>

                                        <?php if($errors->has('contact')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('contact')); ?></span>
                                        <?php endif; ?>
                                        <?php if(Session::has('formerror_phone')): ?>
                                        <span class="text-danger"> <?php echo e(Session::get('formerror_phone')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="">Street Number</label>
                                        <input type="number" class="form-control mb-2" name="street_number"
                                            value="<?php echo e(old('street_number')); ?>" placeholder="Enter Street Number *"
                                            required>
                                        <?php if($errors->has('street_number')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('street_number')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <label for="">Street Name</label>
                                        <input type="text" class="form-control mb-2"
                                            onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                            name="street_name" value="<?php echo e(old('street_name')); ?>"
                                            placeholder="Enter Street Name *" required>
                                        <?php if($errors->has('street_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('street_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Apt/Unit#</label>
                                        <input type="text" class="form-control mb-2" name="apt" value="<?php echo e(old('apt')); ?>"
                                            placeholder="Enter Apt/Unit # *" required>
                                        <?php if($errors->has('apt')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('apt')); ?></span>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control mb-2"
                                            onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                            id="org_city" name="city" value="<?php echo e(old('city')); ?>"
                                            placeholder="Enter City Name *" required>
                                        <?php if($errors->has('city')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="pincode">Pincode</label>
                                        <input type="text" class="form-control mb-2"
                                            title="Only alphanumeric and space are allowed." pattern="[a-zA-Z0-9 ]+"
                                            id="org_pincode" name="pincode" value="<?php echo e(old('pincode')); ?>"
                                            placeholder="Enter Pincode Number *" required>
                                        <?php if($errors->has('pincode')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('pincode')); ?></span>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>

                                    <div class="col-sm-4">
                                        <label for="country">Country Name</label>
                                        
                                        <select id="country2" class="form-control" name="country"></select>
                                        <?php if($errors->has('country')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('country')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="State">State / Province</label>
                                        <input type="text" class="form-control mb-2"
                                            onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                            id="org_State" name="state" value="<?php echo e(old('state')); ?>"
                                            placeholder="Enter State / Province *" required>
                                        <?php if($errors->has('state')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('state')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>

                                
                                <div class="row form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <label>Select order type</label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="order_type"
                                                id="self_candidate" value="1" required>
                                            <label class="form-check-label" for="self_candidate">
                                                Send the credential email to the candidate to fill out the BGC details
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="order_type"
                                                id="behalf_candidate" value="2" required>
                                            <label class="form-check-label" for="behalf_candidate">
                                                Fill the checks by yourself
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <label>Select services</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="select-all">
                                            <label class="form-check-label" for="select-all">
                                                Select All
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <?php $__currentLoopData = $data['SubServices']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-check">
                                                <input class="form-check-input item-checkbox" type="checkbox"
                                                    name="services[]" id="item-<?php echo e($d->id); ?>" value="<?php echo e($d->id); ?>">
                                                <label class="form-check-label" for="item-<?php echo e($d->id); ?>">
                                                    <?php echo e($d->service_name); ?>

                                                </label>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col">
                                        <span id="error-message" class="text-danger d-none">Please select at least one
                                            service.</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <label class="mt-2"> <span class="fa fa-info-circle"></span> Please ensure you
                                            use your first and last name, legal name as it appears on your ID and legal
                                            documents</label>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 mb-3">
                                        <button type="submit" id="submitbtn"
                                            class="btn btn-primary btn-block">Register</button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script src="<?php echo e(asset('AdminLTE')); ?>/dist/js/intlTelInput.js"></script>
<script type="text/javascript">
var input = document.querySelector("#org_contact");
var iti = window.intlTelInput(input, {
    separateDialCode: true,
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js",
});
window.iti = iti;

document.getElementById("org_contact").addEventListener("blur", process);

function process(event) {
    var mobno = iti.getNumber();
    if (iti.isValidNumber()) {
        document.getElementById("submitbtn").disabled = false;
        document.getElementById("numberval").style.display = "none";
    } else {
        alert("Invalid phone number.");
        document.getElementById("submitbtn").disabled = true;
        document.getElementById("numberval").style.display = "block";
        return false;
    }
}
</script>
<script>
$(document).ready(function() {
    checkAllServicesChecked();
    $('#saveOrg').on('submit', function(e) {
        if ($('.item-checkbox:checked').length === 0) {
            e.preventDefault(); // Prevent form submission
            $('#error-message').removeClass('d-none'); // Show error message
        } else {
            $('#error-message').addClass('d-none'); // Hide error message
        }
    });

    $('#select-all').on('change', function() {
        $('.item-checkbox').prop('checked', $(this).prop('checked'));
    });

    // Update "Select All" checkbox based on individual checkboxes
    $('.item-checkbox').on('change', function() {
        checkAllServicesChecked();
    });

    function checkAllServicesChecked() {
        const allChecked = $('.item-checkbox').length === $('.item-checkbox:checked').length;
        $('#select-all').prop('checked', allChecked);
    }

    populateCountries("country2");

    // set common value of input 
    $('#org_name').keyup(function() {
        var org_name = $(this).val();
        $('#company_name').val(org_name);
    });

    $('#org_contact').keyup(function() {
        var org_contact = $(this).val();
        $('#contact_number').val(org_contact);
    });

    $('#org_email').keyup(function() {
        var org_email = $(this).val();
        $('#email').val(org_email);
    });

    $('#org_city').keyup(function() {
        var org_city = $(this).val();
        $('#city_user').val(org_city);
    });

    $('#org_pincode').keyup(function() {
        var org_pincode = $(this).val();
        $('#postal_code').val(org_pincode);
    });


    $('#first_name').keyup(function() {
        var first_name = $(this).val();
        $('#first_name_admin').val(first_name);
    });

    $('#last_name').keyup(function() {
        var last_name = $(this).val();
        $('#last_name_admin').val(last_name);
    });

});




var input = document.querySelector("input");
let button = document.querySelector(".update_btn");

button.disabled = true; //setting button state to disabled
$("input").change(function() {
    button.disabled = false;
});

function stateHandle() {
    if (document.querySelector("input").value === "") {
        button.disabled = true; //button remains disabled
    } else {
        button.disabled = false; //button is enabled
    }
}

function lettersOnly() {
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/organisation_add.blade.php ENDPATH**/ ?>