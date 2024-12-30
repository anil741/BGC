<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Screen360</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/summernote/summernote-bs4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/dist/css/style.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/dist/css/intlTelInput.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<?php $__env->startSection('header'); ?>
<meta name="csrf-token_test" content="<?php echo e(csrf_token()); ?>" />
<div class="wrapper">

  	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
	    
		<img class="animation__shake" src="<?php echo e(asset('Home/assets/img/logo.png')); ?>" alt="Screen360Logo" height="93" width="200">
	</div>

  	<!-- Navbar -->
  	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	    <!-- Left navbar links -->
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
	      </li>
	      <!-- <li class="nav-item d-none d-sm-inline-block">
	        <a href="index3.html" class="nav-link">Home</a>
	      </li>
	      <li class="nav-item d-none d-sm-inline-block">
	        <a href="#" class="nav-link">Contact</a>
	      </li> -->
	    </ul>

	    <!-- Right navbar links -->
	    <ul class="navbar-nav ml-auto">
	      <!-- Navbar Search -->
	      <li class="nav-item">
	        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
	          <i class="fas fa-search"></i>
	        </a>
	        <div class="navbar-search-block">
	          <form>
	          	<?php echo csrf_field(); ?>
	            <div class="input-group input-group-sm">
	            	<select id="search_type" class="col-md-3 mr-1 form-control" style="border-radius: 10px; height: calc(2.8125rem + 2px)!important;">
                  <option value="application">Applications</option>
                  <option value="Candidate">Candidate</option>
                  <option value="Packages">Packages</option>
                </select>  
	              <input id="search_text" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" style="height: calc(2.8125rem + 2px)!important;">
	              <div class="input-group-append">
	                <button type="button" class="btn btn-navbar" onclick="search()"><i class="fas fa-search"></i></button>  

	                <button class="btn btn-navbar" type="button" data-widget="navbar-search" onclick="search1()">
	                  <i class="fas fa-times"></i>
	                </button>
	              </div>
	            </div>
	          </form>
	          
	        </div>

	        <!-- <form>
	          	<?php echo csrf_field(); ?>
	            <div class="input-group input-group-sm">
	            	<select id="search_type" class="col-md-3 mr-1 form-control" style="border-radius: 10px; height: calc(2.8125rem + 2px)!important;">
                  <option value="application">Applications</option>
                  <option value="Organisations">Organisations</option>
                  <option value="Packages">Packages</option>
                  <option value="SubServices">Sub-Services</option>
                </select>  
	              <input id="search_text" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" style="height: calc(2.8125rem + 2px)!important;">
	              <button type="button" class="btn btn-default" onclick="search()" style="border-radius: 10px;"><i class="fas fa-search"></i></button> 
	            </div>
	          </form> -->
	      </li>

	      <!-- Notifications Dropdown Menu -->
	      <li class="nav-item dropdown">
	        <a class="nav-link" data-toggle="dropdown" href="#">
	          <i class="far fa-bell"></i>
	          <span class="badge badge-warning navbar-badge"></span>
	        </a>
	        
	      </li>

	      <li class="nav-item dropdown">
	        <div class="user-panel d-flex" data-toggle="dropdown" href="#">
		        <div class="image">
		        	<span class="img-circle elevation-2" style=" font-size: .875rem; width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;">
                <img alt="Image placeholder" src="<?php echo e(asset('AdminLTE')); ?>/dist/img/user.png" style="width: 50%;">
              </span>
		          <!-- <img src="<?php echo e(asset('AdminLTE')); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
		        </div>
		        <div class="info">
							
							<a href="#" class="d-block"><?php if(Session::has('username')): ?>                        
								<?php echo e(Session::get('username')); ?> <?php endif; ?></a>
		        </div>
	      	</div>
	      	<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">	         
	          <div class="dropdown-divider"></div>
	          <a href="<?php echo e(Route('userProfile')); ?>" class="dropdown-item">
	            <img class="mr-2" alt="Image placeholder" src="<?php echo e(asset('AdminLTE')); ?>/dist/img/user.png" style="width: 6%;"> My Profile
	          </a>
	          <a href="<?php echo e(Route('logout')); ?>" class="dropdown-item">
	            <i class="fas fa-sign-out-alt mr-2"></i> Log out
	          </a>
	          <div class="dropdown-divider"></div>	          
	        </div>
	      </li> 
	      
	    </ul>
	    
  	</nav>
 	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
	    <!-- Brand Logo -->
	    <a href="#" class="brand-link">			
	      
		  
		  <br>
		  <?php if(Session::get('user_role') == 1): ?>      
		  	<span class="brand-text font-weight-light text-center"><b></b></span>
		  <?php elseif(Session::get('user_role') == 2): ?>  
		  	<span class="brand-text font-weight-light"></span>
		  <?php endif; ?> 
	    </a>

	    <!-- Sidebar -->
	    <div class="sidebar">
	      <!-- Sidebar Menu -->
		  	<?php if(Session::get('user_role') == 2): ?>
				<?php if(Session::get('org_verified') == 1): ?>
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<li class="nav-item">
								<a href="<?php echo e(Route('organisation')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation") ? 'active' : ""); ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
								</a>
							</li>
							
							<li class="nav-item <?php echo e((Request::segment(1) == "organisation_user_role") || (Request::segment(1) == "organisation_add_role" ) || (Request::segment(1) == "organisation_users_list") || (Request::segment(1) == "organisation_roles_and_permission") || (Request::segment(1) == "organisation_edit_role") || (Request::segment(1) == "organisation_add_user") || (Request::segment(1) == "organisation_update_user")  ? 'menu-open' : ""); ?>">
								<a href="#" class="nav-link">
								<i class="nav-icon fas fa-chart-pie"></i>
								<p>
									<!-- Roles and permission console -->
									User Management
									<i class="right fas fa-angle-right"></i>
								</p>
								</a>
								<ul class="nav nav-treeview">	
									<!-- <li class="nav-item">
										<a href="<?php echo e(Route('orgAddNewRoleAndPermissionView')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_roles_and_permission") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Add Roles</p>
										</a>
									</li>						 -->
									<li class="nav-item">
										<a href="<?php echo e(Route('editOrgRoleView')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_edit_role" || Request::segment(1) == "organisation_roles_and_permission" ) ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Roles</p>
										</a>
									</li>	

									<li class="nav-item">
										<a href="<?php echo e(Route('orgUserlistView')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_users_list") || (Request::segment(1) == "organisation_add_user") || (Request::segment(1) == "organisation_update_user") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Users</p>
										</a>
									</li>	

									
								</ul>
							</li>						
							
							<li class="nav-item <?php echo e((Request::segment(1) == "organisation_pacakge_list") || (Request::segment(1) == "organisation_pacakge_details") || (Request::segment(1) == "organisation_pacakge_edit") || (Request::segment(1) == "organisation_pacakge_add") || (Request::segment(1) == "background_service_checks") || (Request::segment(1) == "summaryView") ? 'menu-open' : ""); ?>">
								<a href="<?php echo e(Route('orgPackageList')); ?>" class="nav-link <?php echo e((Request::segment(1) == 'organisation_pacakge_list') || (Request::segment(1) == 'organisation_pacakge_details') || (Request::segment(1) == 'organisation_pacakge_edit') || (Request::segment(1) == 'organisation_pacakge_add') ? 'active' : ''); ?>">
								<i class="nav-icon fas fa-tree"></i>
								<p>
								Custom Packages
									<!-- <i class="fas fa-angle-right right"></i> -->
								</p>
								</a>
								<!-- <ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="<?php echo e(Route('orgPackageList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_pacakge_list") || (Request::segment(1) == "organisation_pacakge_details") || (Request::segment(1) == "organisation_pacakge_edit") || (Request::segment(1) == "organisation_pacakge_add") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Package List</p>
										</a>
									</li>
								</ul> -->
							</li>

							<!-- <li class="nav-item <?php echo e((Request::segment(1) == "candidateDetailsForm") || (Request::segment(1) == "new_candidate_details") || (Request::segment(1) == "new_candidate_details") || (Request::segment(1) == "getPackage") || (Request::segment(1) == "partialRequest") ? 'menu-open' : ""); ?>">
								<a href="<?php echo e(Route('orderTypes')); ?>" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									New Order
									<i class="fas fa-angle-right right"></i>
								</p>
								</a> -->
								<!-- <ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="<?php echo e(Route('candidateDetailsForm')); ?>" class="nav-link <?php echo e((Request::segment(1) == "new_candidate_details") || (Request::segment(1) == "background_service_checks") || (Request::segment(1) == "summaryView") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Create Invitation</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('getPackage')); ?>" class="nav-link <?php echo e((Request::segment(1) == "getPackage")  ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Submit Request</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('partialRequest')); ?>" class="nav-link <?php echo e((Request::segment(1) == "partialRequest")  ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Partial Request</p>
										</a>
									</li>
								</ul> -->
							<!-- </li> -->

							<!-- <li class="nav-item <?php echo e((Request::segment(1) == "organisation_candidate_list") || (Request::segment(1) == "organisation_candidate_details") ? 'menu-open' : ""); ?>">
								<a href="#" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>
									All Candidates 
									<i class="fas fa-angle-right right"></i>
								</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="" class="nav-link <?php echo e((Request::segment(1) == "organisation_candidate_list") || (Request::segment(1) == "organisation_candidate_details") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Candidate List</p>
										</a>
									</li>										
								</ul>
							</li> -->
							<li class="nav-item <?php echo e((Request::segment(1) == "organisation_completed_application_list") || (Request::segment(1) == "organisation_inprogress_application_list") || (Request::segment(1) == "organisation_rejected_application_list") || (Request::segment(1) == "organisation_pending_application_list") || (Request::segment(1) == "all_form_details")  ? 'menu-open' : ""); ?>">
								<a href="#" class="nav-link">
								<i class="nav-icon fas fa-list"></i>
								<p>
								Orders
									<i class="fas fa-angle-right right"></i>
								</p>
								</a>
								<ul class="nav nav-treeview">
									<!-- <li class="nav-item">
										<a href="<?php echo e(Route('applicationOrgPendingList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_pending_application_list") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Pending Orders</p>
										</a>
									</li> -->
									<li class="nav-item">
										<a href="<?php echo e(Route('orderTypes')); ?>" class="nav-link <?php echo e((Request::segment(1) == "org_order_type") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>New Orders</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('partialRequest')); ?>" class="nav-link <?php echo e((Request::segment(1) == "partialRequest") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Partial Orders</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('showOrgPendingOrderList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_candidate_list") || (Request::segment(1) == "organisation_candidate_details") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Pending Orders</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('applicationInprogressList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_inprogress_application_list") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>In-progress Orders</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('applicationCompletedList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_completed_application_list") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Completed Orders</p>
										</a>
									</li>									
									<li class="nav-item">
										<a href="<?php echo e(Route('applicationRejectedList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_rejected_application_list") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Cancelled Orders</p>
										</a>
									</li>										
								</ul>
							</li>

							<li class="nav-item has-treeview <?php echo e((Request::segment(1) == "OrgSearchRequest") ? 'menu-open' : ""); ?>">
								<a href="<?php echo e(Route('OrgSearchRequest')); ?>" class="nav-link">
									<i class="nav-icon far fa-envelope"></i>
									<p>
										Search Orders
										<!-- <i class="right fas fa-angle-right"></i> -->
									</p>
								</a>
							</li>

						</ul>
					</nav>
				<?php endif; ?>
			<?php elseif(Session::get('role_category') == 5 || Session::get('role_category') == 6): ?>
				<?php if(Session::get('org_verified') == 1): ?>

				
				<?php $role_id = Session::get('user_role');
					$org_id = Session::get('org_id');
                	$result = DB::select('SELECT a.id FROM permission_console a, roles_permission b
                  	WHERE a.id = b.permission_console_id and b.role_id = ? and b.org_id = ? and b.is_allow = 1', [$role_id,$org_id]); 
                	$result = array_column($result, "id");
              	?>
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<li class="nav-item">
								<a href="<?php echo e(Route('organisation')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation") ? 'active' : ""); ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
								</a>
							</li>
							
					
							<?php if(!empty($result) && in_array(12, $result) ): ?>
								<li class="nav-item <?php echo e((Request::segment(1) == "organisation_pacakge_list") || (Request::segment(1) == "organisation_pacakge_details") || (Request::segment(1) == "organisation_pacakge_edit") || (Request::segment(1) == "organisation_pacakge_add") || (Request::segment(1) == "background_service_checks") || (Request::segment(1) == "summaryView") ? 'menu-open' : ""); ?>">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-tree"></i>
									<p>
										Packages
										<i class="fas fa-angle-right right"></i>
									</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="<?php echo e(Route('orgPackageList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_pacakge_list") || (Request::segment(1) == "organisation_pacakge_details") || (Request::segment(1) == "organisation_pacakge_edit") || (Request::segment(1) == "organisation_pacakge_add") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Package List</p>
											</a>
										</li>
									</ul>
								</li>
							<?php endif; ?>		
							<?php if(!empty($result) && in_array(11, $result) ): ?>
								<li class="nav-item <?php echo e((Request::segment(1) == "candidateDetailsForm") || (Request::segment(1) == "new_candidate_details") || (Request::segment(1) == "new_candidate_details") || (Request::segment(1) == "getPackage") || (Request::segment(1) == "partialRequest") ? 'menu-open' : ""); ?>">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-user"></i>
									<p>
										New Order
										<i class="fas fa-angle-right right"></i>
									</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="<?php echo e(Route('candidateDetailsForm')); ?>" class="nav-link <?php echo e((Request::segment(1) == "new_candidate_details") || (Request::segment(1) == "background_service_checks") || (Request::segment(1) == "summaryView") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Create Invitation</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo e(Route('getPackage')); ?>" class="nav-link <?php echo e((Request::segment(1) == "getPackage")  ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Submit Request</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo e(Route('partialRequest')); ?>" class="nav-link <?php echo e((Request::segment(1) == "partialRequest")  ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Partial Request</p>
											</a>
										</li>
									</ul>
								</li>
								

								<!-- <li class="nav-item <?php echo e((Request::segment(1) == "organisation_candidate_list") || (Request::segment(1) == "organisation_candidate_details") ? 'menu-open' : ""); ?>">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-users"></i>
									<p>
										All Candidates 
										<i class="fas fa-angle-right right"></i>
									</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="" class="nav-link <?php echo e((Request::segment(1) == "organisation_candidate_list") || (Request::segment(1) == "organisation_candidate_details") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Candidate List</p>
											</a>
										</li>										
									</ul>
								</li> -->

								<li class="nav-item <?php echo e((Request::segment(1) == "OrgSearchRequest") ? 'menu-open' : ""); ?>">
									<a href="<?php echo e(Route('OrgSearchRequest')); ?>" class="nav-link">
										<i class="nav-icon far fa-envelope"></i>
										<p>
											Search Orders
											<!-- <i class="right fas fa-angle-right"></i> -->
										</p>
									</a>
								</li>
							<?php endif; ?>
							<?php if(!empty($result) && in_array(10, $result) ): ?>
								<li class="nav-item <?php echo e((Request::segment(1) == "organisation_completed_application_list") || (Request::segment(1) == "organisation_inprogress_application_list") || (Request::segment(1) == "organisation_rejected_application_list") || (Request::segment(1) == "all_form_details") ? 'menu-open' : ""); ?>">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-list"></i>
									<p>
									Orders
										<i class="fas fa-angle-right right"></i>
									</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="<?php echo e(Route('applicationOrgPendingList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_pending_application_list") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Pending Orders</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo e(Route('applicationInprogressList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_inprogress_application_list") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>In-progress Orders</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo e(Route('applicationCompletedList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_completed_application_list") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Completed Orders</p>
											</a>
										</li>										
										<li class="nav-item">
											<a href="<?php echo e(Route('applicationRejectedList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_rejected_application_list") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Cancelled Orders</p>
											</a>
										</li>											
									</ul>
								</li>
							<?php endif; ?>	
						</ul>
					</nav>
				<?php endif; ?>
			<?php endif; ?>
	      <!-- /.sidebar-menu -->
	    </div>
	    <!-- /.sidebar -->
	</aside>

	<?php echo $__env->yieldSection(); ?>

	<div class="content-wrapper">
		<div id="resultData" class="mt-2"></div>
	    <?php echo $__env->yieldContent('content'); ?>
	</div> 

	<?php $__env->startSection('footer'); ?>

	<footer class="main-footer">
	    <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
	    All rights reserved.
	    <div class="float-right d-none d-sm-inline-block">
	      <b>Version</b> 3.1.0
	    </div> -->
	    <div class="row">
		    <div class="col-xl-6">
	        <div class="copyright text-center text-xl-left text-muted">
	            &copy; <?php echo e(now()->year); ?> <a href="#" class="font-weight-bold ml-1 text_color" target="_blank">Screen360</a> All rights reserved.
	           
	        </div>
	    	</div>
	    	<div class="col-xl-6">
	        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
	            <li class="nav-item">
	                <a href="#" class="nav-link text_color" target="_blank">Screen360</a>
	            </li>
	           
	            <li class="nav-item">
	                <a href="#" class="nav-link text_color" target="_blank">About Us</a>
	            </li>
	        </ul>
	    	</div>
  		</div>
  </footer>
</div>

  	<?php echo $__env->yieldPushContent('scripts'); ?>
  	<!-- jQuery -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/moment/moment.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/dist/js/pages/dashboard.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jszip/jszip.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<script src="<?php echo e(asset('Home/assets')); ?>/js/countries.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

	<script type="text/javascript">
		function search(){
			// alert("yes"); return false;
			var search_text = $('#search_text').val();
      var user_text = $('#search_type').val();
			$.ajax({
	           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token_test"]').attr('content')
          },
	          url: '/org_global_search',
	          type: 'post',
	          dataType: 'json',
	          data: {'search_text' : search_text, 'user_text' : user_text},
	          success: function(data) {
	          	// alert("yes");
	          	$('#resultData').show();
				     $('#resultData').html(data);
	             $('#example1').DataTable({
				        "paging": true,
				        "lengthChange": false,
				        "searching": true,
				        "ordering": true,
				        "info": true,
				        "autoWidth": false,
				        "responsive": true,
				        });

	             $('#example2').DataTable({
				        "paging": true,
				        "lengthChange": false,
				        "searching": true,
				        "ordering": true,
				        "info": true,
				        "autoWidth": false,
				        "responsive": true,
				       
				        });

	             $('#example3').DataTable({
				        "paging": true,
				        "lengthChange": false,
				        "searching": true,
				        "ordering": true,
				        "info": true,
				        "autoWidth": false,
				        "responsive": true,
				       
				        });

	             $('#example4').DataTable({
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
	          // $("#ftco-loader").hide();
	        },
	        error: function(data){ }
	         
	    });
		}

		function search1(){
			$('#resultData').hide();
		}
</script>

	
	<?php echo $__env->yieldContent('script'); ?>

</body>
</html><?php /**PATH C:\wamp64\www\BGC\resources\views/backend/layout/org_header.blade.php ENDPATH**/ ?>