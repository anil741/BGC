
<?php $__env->startSection('title', 'Signup'); ?>
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <section class="hold-transition register-page">
      <div class="register_margin">      
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            
            <a href="" class="logo"><img width="150" height="80" src="<?php echo e(asset('Home/assets/img/logo.png')); ?>" alt="" class="img-fluid"></a>

          </div>
          <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>
            
            <?php if($message = Session::get('success')): ?>
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong><?php echo e($message); ?></strong>
              </div>
            <?php endif; ?>

            
            <?php if($messageError = Session::get('error')): ?>
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong><?php echo e($messageError); ?></strong>
            </div>
            <?php endif; ?>

            
            <?php if($messageInfo = Session::get('info')): ?>
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong><?php echo e($messageInfo); ?></strong>
            </div>
            <?php endif; ?>



            
            <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>    
            <?php endif; ?>

            <?php if(Session::has('formerror')): ?>
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>                
                  <div><?php echo e(Session::get('formerror')); ?></div>
              </div>    
            <?php endif; ?>
            <form action="<?php echo e(url('signup/save')); ?>" method="post">
              <?php echo csrf_field(); ?>
              
              <div class="mb-3">  
                <div class="form-group row text-center">                              
                    
                    <div class="col-sm-8">
                        
                    </div>                                            
                    
                </div>

                <div class="form-group row"> 
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4">   
                      <label for=""> First Name</label>                                    
                      <input type="text" class="form-control mb-2" onkeypress="return lettersOnly(event)" id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="Enter First Name *" required>
                      <?php if($errors->has('first_name')): ?>
                          <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                      <?php endif; ?>
                  </div>

                  <div class="col-sm-4">    
                      <label for=""> Last Name</label>                              
                      <input type="text" class="form-control" id="last_name" onkeypress="return lettersOnly(event)" name="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="Enter Last Name *" required>
                      <?php if($errors->has('last_name')): ?>
                          <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                      <?php endif; ?>
                  </div> 
                  <div class="col-sm-2"></div>
                </div> 

                <div class="form-group row"> 
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4">   
                      <label for=""> Password</label>                                    
                      <input type="password" class="form-control" placeholder="Enter Password *" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"  title="password should have 1 uppercase, 1 lowercase, 1 number, 1 special character and minimum 6 characters" value="<?php echo e(old('password')); ?>" name="password" id="password" placeholder="Password" required>
                
                      <?php if($errors->has('password')): ?>
                          <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                      <?php endif; ?>
                  </div>

                  <div class="col-sm-4">    
                      <label for=""> Confirm Password</label>                              
                      <input type="password" class="form-control" value="<?php echo e(old('confirm_password')); ?>" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password *" required onfocusout="myFunction()">                     
                      <?php if($errors->has('confirm_password')): ?>
                          <span class="text-danger"><?php echo e($errors->first('confirm_password')); ?></span>
                      <?php endif; ?>
                  </div> 
                  <div class="col-sm-2"></div>
                  <center class="col-md-12 mt-3">
                    <div class="alert alert-info alert-block col-md-6" id="callout" style="display:none;">
                      <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong id="passwordspan"><?php echo e($messageInfo); ?></strong>
                    </div>
                  </center>
                </div> 

                <div class="form-group row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4">  
                      <label for="organisation_name">Organisation Name</label>                                      
                      <input type="text" class="form-control mb-2" id="org_name" title="Only alphanumeric and space are allowed." pattern="[a-zA-Z0-9 ]+" name="organisation_name" value="<?php echo e(old('organisation_name')); ?>" placeholder="Enter Organisation Name *" required>
                      <?php if($errors->has('organisation_name')): ?>
                          <span class="text-danger"><?php echo e($errors->first('organisation_name')); ?></span>
                      <?php endif; ?>
                  </div>

                  <div class="col-sm-4">   
                      <label for="email_address">Business Email</label>                                
                      <input type="email" class="form-control" title="Contact's email (format: xxx@xxx.xxx)" 
                      pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" id="org_email" name="email_address" value="<?php echo e(old('email_address')); ?>" placeholder="Enter Business Email *" required>
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
                      <select class="form-control prospectInput" id="employee_range" name="employee_range" required>
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
                      
                      <input type="tel" maxlength="10" tabindex="4" minlength="10" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" class="form-control" placeholder="Enter Phone *"  value="<?php echo e(old('contact')); ?>" id="org_contact" name="contact" required style="left:9%"/>
                      <?php if($errors->has('contact')): ?>
                          <span class="text-danger"><?php echo e($errors->first('contact')); ?></span>
                      <?php endif; ?>
                      <?php if(Session::has('formerror_phone')): ?>
                          <span class="text-danger"> <?php echo e(Session::get('formerror_phone')); ?></span>
                      <?php endif; ?> 
                  </div>

                  <div class="col-sm-4"> 
                    <label for="">Street Number</label>                                    
                    <input type="number" class="form-control mb-2"  name="street_number" value="<?php echo e(old('street_number')); ?>" placeholder="Enter Street Number *" required>
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
                      <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="street_name" value="<?php echo e(old('street_name')); ?>" placeholder="Enter Street Name *" required>
                      <?php if($errors->has('street_name')): ?>
                          <span class="text-danger"><?php echo e($errors->first('street_name')); ?></span>
                      <?php endif; ?>
                  </div>  
                  <div class="col-sm-4">   
                    <label for="">Apt/Unit#</label>                                 
                      <input type="text" class="form-control mb-2" name="apt" value="<?php echo e(old('apt')); ?>" placeholder="Enter Apt/Unit # *" required>
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
                    <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" id="org_city" name="city" value="<?php echo e(old('city')); ?>" placeholder="Enter City Name *" required>
                    <?php if($errors->has('city')): ?>
                        <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                    <?php endif; ?>
                  </div>  
                  <div class="col-sm-4">    
                    <label for="pincode">Pincode</label>                             
                    <input type="text" class="form-control mb-2" title="Only alphanumeric and space are allowed." pattern="[a-zA-Z0-9 ]+" id="org_pincode" name="pincode" value="<?php echo e(old('pincode')); ?>" placeholder="Enter Pincode Number *" required>
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
                    
                    <select id="country2" class="form-control" name ="country"></select>
                    <?php if($errors->has('country')): ?>
                        <span class="text-danger"><?php echo e($errors->first('country')); ?></span>
                    <?php endif; ?>
                  </div>     

                  <div class="col-sm-4"> 
                    <label for="State">State / Province</label>                         
                    <input type="text" class="form-control mb-2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" id="org_State" name="state" value="<?php echo e(old('state')); ?>" placeholder="Enter State / Province *" required>
                    <?php if($errors->has('state')): ?>
                        <span class="text-danger"><?php echo e($errors->first('state')); ?></span>
                    <?php endif; ?>
                  </div>                  
                     
                  <div class="col-sm-2"></div>            
                </div> 

                <div class="form-group row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8">                   
                   <textarea name="assist" id="assist" class="form-control" rows="5" placeholder="How do we assist you?" required></textarea>
                      
                  </div>        
                  <div class="col-sm-2"></div>            
                </div> 


                <div class="row mb-2">
                  <div class="col-sm-2"></div>        
                  <div class="col-sm-8"> 
                    <label class="mt-2" > <span class="fa fa-info-circle"></span> Password Should be of minimum 6 characters which should contain at least  1 uppercase, 1 lowercase, 1 number, 1 special character</label>
                  </div>
                  <div class="col-sm-2"></div>        
                </div>

                <div class="row mb-2">
                  <div class="col-sm-2"></div>        
                  <div class="col-sm-8"> 
                    <label class="mt-2" > <span class="fa fa-info-circle"></span> Please ensure you use your first and last name, legal name as it appears on your ID and legal documents</label>
                  </div>
                  <div class="col-sm-2"></div>        
                </div>
                        
                <div class="row">
                  <div class="col-sm-2"></div>        
                  <div class="col-sm-4 mb-3">
                    <div class="icheck-primary">
                      <input type="checkbox" id="agreeTerms" name="terms" value="1" required>
                      <label for="agreeTerms">
                      I agree to the <a class="text_color" href="#">terms</a>
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-2"></div>        
                </div>
                <div class="row">
                  <div class="col-sm-4"></div>        
                  <div class="col-sm-4 mb-3">                 
                    <button type="submit" class="btn btn-sm btn-primary btn-block">Register</button>
                  </div>                 
                  <div class="col-sm-4"></div>        
                </div>
              </div>  


            </form> 

            <div class="row text-center">
              <div class="col-sm-4"></div>        
              <div class="col-sm-4 mb-3">
                <a href="<?php echo e(url('login')); ?>" class="text-center text_color mt-3">I already have a membership</a>
              </div>              
              <div class="col-sm-4"></div>            
                 
            </div>
           
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      
      </div>
      <!-- /.register-box -->
  </section>
  <!-- jQuery -->
  <script src="<?php echo e(asset('AdminLTE/plugins/jquery/jquery.min.js')); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo e(asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo e(asset('AdminLTE/dist/js/adminlte.min.js')); ?>"></script>
<script>

  $(document).ready(function() {
    populateCountries("country2");
  });
  
  function lettersOnly() 
  {
    var charCode = event.keyCode;

    if((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
      return true;
    else
      return false;
  }

  function myFunction()
  {
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");
    if(password === confirm_password){
      return true;
    }else{
      document.getElementById("callout").style.display="block";
      $('#passwordspan').html("The confirm password and password must match.");
    }
  }
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/BGC/resources/views/frontend/signup.blade.php ENDPATH**/ ?>