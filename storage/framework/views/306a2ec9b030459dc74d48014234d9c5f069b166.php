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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/dist/css/intlTelInput.css">
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
                  <option value="Organisations">Organisations</option>
                  <option value="Packages">Packages</option>
                  <option value="SubServices">Sub-Services</option>
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
	    <a href="<?php echo e(url('/admin/dashboard')); ?>" class="brand-link">			
	      
		  
		  <br>
		  <?php if(Session::get('user_role') == 1): ?>      
		  	
		  <?php elseif(Session::get('user_role') == 2): ?>  
		  	
		  <?php endif; ?> 
	    </a>

	    <!-- Sidebar -->
	    <div class="sidebar">
	      <!-- Sidebar Menu -->
		  	<?php if(Session::get('user_role') == 1): ?>
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<li class="nav-item">
								<a href="<?php echo e(url('/admin/dashboard')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "dashboard") ? 'active' : ""); ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
								</a>
							</li>
					
							<li class="nav-item has-treeview <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "add" && Request::segment(3) == "role") || (Request::segment(1) == "admin" && Request::segment(2) == "edit" && Request::segment(3) == "role") || (Request::segment(1) == "admin" && Request::segment(2) == "register" && Request::segment(3) == "user" && Request::segment(4) == "list") ||(Request::segment(1) == "admin" && Request::segment(2) == "register" && Request::segment(3) == "user" && Request::segment(4) == "role")|| (Request::segment(1) == "admin" && Request::segment(2) == "register_user_details") ||(Request::segment(1) == "admin" && Request::segment(2) == "register_user_edit") || (Request::segment(1) == "admin" && Request::segment(2) == "archive_user_list") ? 'menu-open' : ""); ?>">
								<a href="#" class="nav-link">
								<i class="nav-icon fas fa-chart-pie"></i>
								<p>
								User Management
									<i class="right fas fa-angle-right"></i>
								</p>
								</a>
								<ul class="nav nav-treeview">
								<!-- <li class="nav-item">
									<a href="<?php echo e(Route('addRoleView')); ?>" class="nav-link <?php echo e((Request::segment(2) == "add" && Request::segment(3) == "role") ? 'active' : ""); ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Add new role</p>
									</a>
								</li> -->
								<li class="nav-item">
									<a href="<?php echo e(Route('editRoleView')); ?>" class="nav-link <?php echo e(((Request::segment(2) == "edit" || Request::segment(2) == "add") && Request::segment(3) == "role") ? 'active' : ""); ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Roles</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo e(Route('registerUsersListView')); ?>" class="nav-link <?php echo e((Request::segment(2) == "register" && Request::segment(3) == "user" && Request::segment(4) == "list" )||(Request::segment(1) == "admin" && Request::segment(2) == "register" && Request::segment(3) == "user" && Request::segment(4) == "role")||(Request::segment(1) == "admin" && Request::segment(2) == "register_user_details") ||(Request::segment(1) == "admin" && Request::segment(2) == "register_user_edit") ? 'active' : ""); ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Register user for roles</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?php echo e(Route('archiveUsersListView')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "archive_user_list") ? 'active' : ""); ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Archive</p>
									</a>
								</li>
								</ul>
							</li>

							<li class="nav-item has-treeview <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "candidate_pending_list") || (Request::segment(1) == "admin" && Request::segment(2) == "application_details") || (Request::segment(1) == "admin" && Request::segment(2) == "candidate_inprogress_list") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details") || (Request::segment(1) == "admin" && Request::segment(2) == "candidate_completed_list") || (Request::segment(1) == "admin" && Request::segment(2) == "candidate_rejected_list") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details_rejected") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details_completed") ? 'menu-open' : ""); ?>">
								<a href="#" class="nav-link">
								<i class="nav-icon far fa-envelope"></i>
								<p>
									Orders
									<i class="fas fa-angle-right right"></i>
								</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="<?php echo e(Route('applicationPendingList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "candidate_pending_list") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Pending Orders</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('applicationInprocessListView')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "candidate_inprogress_list") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>In-progress Orders</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('applicationCompletedListView')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "candidate_completed_list") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details_completed") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Completed Orders</p>
										</a>
									</li>									
									<li class="nav-item">
										<a href="<?php echo e(Route('applicationRejectedListView')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "candidate_rejected_list") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details_rejected") ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Cancelled Orders</p>
										</a>
									</li>										
								</ul>
							</li>

							<li class="nav-item <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "organisation_list") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_add") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_details") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_edit") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_add_user") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_role") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_users_list") ? 'menu-open' : ""); ?>">
								<a href="#" class="nav-link">
								  <i class="nav-icon fas fa-copy"></i>
								  <p>
									Organisation
									<i class="fas fa-angle-right right"></i>
									<span class="badge badge-info right"></span>
								  </p>
								</a>
								 <ul class="nav nav-treeview">
								  <li class="nav-item">
									<a href="<?php echo e(Route('organisationView')); ?>" class="nav-link <?php echo e((Request::segment(2) == "organisation_list") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_add") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_details") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_edit") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_users_list") ? 'active' : ""); ?>">
									  <i class="far fa-circle nav-icon"></i>
									  <p>All Organisation</p>
									</a>
								  </li>
								  <!-- <li class="nav-item">
									<a href="<?php echo e(Route('organisationRolesAndPermissionView')); ?>" class="nav-link <?php echo e((Request::segment(1) == 'admin' && Request::segment(2) == 'organisation_role') ? 'active' : ""); ?>">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Orgnisation Roles and Permissions</p>
									</a>
								  </li>  -->
								  <li class="nav-item">
									<a href="<?php echo e(Route('addOrgUser')); ?>" class="nav-link <?php echo e((Request::segment(1) == 'admin' && Request::segment(2) == 'organisation_add_user') ? 'active' : ""); ?>">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Users</p>
									</a>
								  </li>								  
								</ul> 
							</li>
							<li class="nav-item <?php echo e((Request::segment(1) == "allPackages" ) || (Request::segment(1) == "editPackage" ) || (Request::segment(1) == "viewPackage" )  || (Request::segment(1) == "addPackages" ) || (Request::segment(1) == "allServices" ) || (Request::segment(1) == "addServices" ) || (Request::segment(1) == "editService" ) || (Request::segment(1) == "updateService" ) || (Request::segment(1) == "deleteService" ) ? 'menu-open' : ""); ?>">
								<a href="#" class="nav-link">
								<i class="nav-icon fas fa-tree"></i>
								<p>
									Packages and Services
									<i class="fas fa-angle-right right"></i>
								</p>
								</a>
								<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo e(Route('allPackages')); ?>" class="nav-link <?php echo e((Request::segment(1) == "allPackages" ) || (Request::segment(1) == "editPackage" ) || (Request::segment(1) == "viewPackage" ) || (Request::segment(1) == "addPackages" ) ? 'active' : ""); ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>All Packages</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo e(Route('allServices')); ?>" class="nav-link <?php echo e((Request::segment(1) == "addServices" ) || (Request::segment(1) == "editService" ) || (Request::segment(1) == "updateService" ) || (Request::segment(1) == "deleteService" ) || (Request::segment(1) == "allServices" )? 'active' : ""); ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>All Services</p>
									</a>
								</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
								<i class="nav-icon fas fa-edit"></i>
								<p>
									Billing
									<i class="fas fa-angle-right right"></i>
								</p>
								</a>
								
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Reports
									<i class="fas fa-angle-right right"></i>
								</p>
								</a>
								<ul class="nav nav-treeview">
								
								</ul>
							</li>
							<li class="nav-item has-treeview <?php echo e((Request::segment(1) == "searchRequest") ? 'menu-open' : ""); ?>">
								<a href="<?php echo e(Route('searchRequest')); ?>" class="nav-link">
									<i class="nav-icon far fa-envelope"></i>
									<p>
										Search Orders
										<!-- <i class="right fas fa-angle-right"></i> -->
									</p>
								</a>
							</li>
							
						</ul>
					</nav>
				<?php elseif(Session::get('role_category') == 2 || Session::get('role_category') == 3): ?>
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<li class="nav-item">
								<a href="<?php echo e(url('/admin/dashboard')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "dashboard") ? 'active' : ""); ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
								</a>
							</li>

							<?php $role_id = Session::get('user_role');
                $result = DB::select('SELECT a.id FROM permission_console a, roles_permission b
                  WHERE a.id = b.permission_console_id and b.role_id = ? and b.is_allow = 1', [$role_id]); 
                $result = array_column($result, "id");
              ?>

              <?php if(!empty($result) && in_array(1, $result) ): ?>
                <li class="nav-item has-treeview <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "op_pending_application_list") || (Request::segment(1) == "admin" && Request::segment(2) == "op_inprocess_application_list") || (Request::segment(1) == "admin" && Request::segment(2) == "op_completed_application_list") || (Request::segment(1) == "admin" && Request::segment(2) == "op_rejected_application_list") || (Request::segment(1) == "admin" && Request::segment(2) == "op_application_details") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details_completed") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details_rejected") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details")  ? 'menu-open' : ""); ?>">
									<a href="#" class="nav-link">
									<i class="nav-icon far fa-envelope"></i>
									<p>
									Orders
										<i class="fas fa-angle-right right"></i>
									</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="<?php echo e(Route('opPendingApplicationList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "op_pending_application_list")   ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Pending Orders</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo e(Route('opInprocessApplicationList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "op_inprocess_application_list") || (Request::segment(1) == "admin" && Request::segment(2) == "op_application_details") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>In-progress Orders</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo e(Route('opCompletedApplicationList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "op_completed_application_list") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details_completed") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>Completed Orders</p>
											</a>
										</li>									
										<li class="nav-item">
											<a href="<?php echo e(Route('opRejectedApplicationList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "op_rejected_application_list") || (Request::segment(1) == "admin" && Request::segment(2) == "all_form_details_rejected") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i> 
											<p>Cancelled Orders</p>
											</a>
										</li>										
									</ul>
								</li>            
              <?php endif; ?>
							
							<li class="nav-item <?php echo e((Request::segment(1) == "admin" && Request::segment(2) == "organisation_list") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_add") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_details") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_edit") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_add_user") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_role") ? 'menu-open' : ""); ?>">
								<a href="#" class="nav-link">
								  <i class="nav-icon fas fa-copy"></i>
								  <p>
									Organisation
									<i class="fas fa-angle-right right"></i>
									<span class="badge badge-info right"></span>
								  </p>
								</a>
								 <ul class="nav nav-treeview">
								  <li class="nav-item">
									<a href="<?php echo e(Route('organisationView')); ?>" class="nav-link <?php echo e((Request::segment(2) == "organisation_list") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_add") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_details") || (Request::segment(1) == "admin" && Request::segment(2) == "organisation_edit")? 'active' : ""); ?>">
									  <i class="far fa-circle nav-icon"></i>
									  <p>All Organisation</p>
									</a>
								  </li>
								  <?php if(!empty($result) && in_array(2, $result) ): ?>
									  <li class="nav-item">
										<a href="<?php echo e(Route('addOrgUser')); ?>" class="nav-link <?php echo e((Request::segment(1) == 'admin' && Request::segment(2) == 'organisation_add_user') ? 'active' : ""); ?>">
										  <i class="far fa-circle nav-icon"></i>
										  <p>Add Users</p>
										</a>
									  </li>
									<?php endif; ?>
								</ul> 
							</li>

							<?php if(!empty($result) && in_array(6, $result) ): ?>
								<li class="nav-item <?php echo e((Request::segment(1) == "allPackages" ) || (Request::segment(1) == "editPackage" ) || (Request::segment(1) == "viewPackage" )  || (Request::segment(1) == "addPackages" ) || (Request::segment(1) == "allServices" ) || (Request::segment(1) == "addServices" ) || (Request::segment(1) == "editService" ) || (Request::segment(1) == "updateService" ) || (Request::segment(1) == "deleteService" ) ? 'menu-open' : ""); ?>">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-tree"></i>
									<p>
										Packages and Services
										<i class="fas fa-angle-right right"></i>
									</p>
									</a>
									<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="<?php echo e(Route('allPackages')); ?>" class="nav-link <?php echo e((Request::segment(1) == "allPackages" ) || (Request::segment(1) == "editPackage" ) || (Request::segment(1) == "viewPackage" ) || (Request::segment(1) == "addPackages" ) ? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>All Package</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(Route('allServices')); ?>" class="nav-link <?php echo e((Request::segment(1) == "addServices" ) || (Request::segment(1) == "editService" ) || (Request::segment(1) == "updateService" ) || (Request::segment(1) == "deleteService" ) || (Request::segment(1) == "allServices" )? 'active' : ""); ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>All Services</p>
										</a>
									</li>
									</ul>
								</li>
							<?php endif; ?>
							
							<?php if(!empty($result) && in_array(7, $result) ): ?>
								<li class="nav-item">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-edit"></i>
									<p>
										Billing
										<i class="fas fa-angle-right right"></i>
									</p>
									</a>
								</li>
							<?php endif; ?>

							<?php if(!empty($result) && in_array(4, $result) ): ?>
								<li class="nav-item">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>
										Reports
										<i class="fas fa-angle-right right"></i>
									</p>
									</a>
								</li>
							<?php endif; ?>

							<li class="nav-item has-treeview <?php echo e((Request::segment(1) == "searchRequest") ? 'menu-open' : ""); ?>">
								<a href="<?php echo e(Route('searchRequest')); ?>" class="nav-link">
									<i class="nav-icon far fa-envelope"></i>
									<p>
										Search Orders
										<!-- <i class="right fas fa-angle-right"></i> -->
									</p>
								</a>
							</li>
						</ul>
					</nav>
				<?php elseif(Session::get('user_role') == 2): ?>
					<?php if(Session::get('org_verified') == 1): ?>
						<nav class="mt-2">
							<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
								<li class="nav-item">
									<a href="<?php echo e(Route('organisation')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation") ? 'active' : ""); ?>">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
									</a>
								</li>
								
								<li class="nav-item <?php echo e((Request::segment(1) == "organisation_user_role") || (Request::segment(1) == "organisation_add_role") ? 'menu-open' : ""); ?>">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-chart-pie"></i>
									<p>
									User Management
										<i class="right fas fa-angle-right"></i>
									</p>
									</a>
									<ul class="nav nav-treeview">						
										<li class="nav-item">
											<a href="<?php echo e(Route('userRoleView')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_user_role") || (Request::segment(1) == "organisation_add_role") ? 'active' : ""); ?>">
											<i class="far fa-circle nav-icon"></i>
											<p>View Roles</p>
											</a>
										</li>					
										
									</ul>
								</li>

								<!-- <li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-envelope"></i>
										<p>
											Applications
										<i class="fas fa-angle-right right"></i>
										</p>
									</a> 
									<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="pages/mailbox/mailbox.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Pending application</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="pages/mailbox/compose.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>In-progress application</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="pages/mailbox/read-mail.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>complete application</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="pages/mailbox/read-mail.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Rejected application</p>
												</a>
											</li>
									</ul>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-copy"></i>
									<p>
										Organisation
										<i class="fas fa-angle-right right"></i>
										<span class="badge badge-info right">6</span>
									</p>
									</a> 
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="pages/layout/top-nav.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Top Navigation</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/layout/top-nav-sidebar.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Top Navigation + Sidebar</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/layout/boxed.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Boxed</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/layout/fixed-sidebar.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Fixed Sidebar</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Fixed Sidebar <small>+ Custom Area</small></p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/layout/fixed-topnav.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Fixed Navbar</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/layout/fixed-footer.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Fixed Footer</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/layout/collapsed-sidebar.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Collapsed Sidebar</p>
											</a>
										</li>
									</ul> 
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
									<i class="nav-icon fas fa-edit"></i>
									<p>
										Billing
										<i class="fas fa-angle-right right"></i>
									</p>
									</a> 
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="pages/forms/general.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>General Elements</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/forms/advanced.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Advanced Elements</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/forms/editors.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Editors</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/forms/validation.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Validation</p>
											</a>
										</li>
									</ul> 
								</li>

								<li class="nav-item">
									<a href="pages/layout/fixed-topnav.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Fixed Navbar</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="pages/layout/fixed-footer.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Fixed Footer</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="pages/layout/collapsed-sidebar.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Collapsed Sidebar</p>
									</a>
								</li> -->
								<!-- </ul>
								</li> -->
						
								<li class="nav-item <?php echo e((Request::segment(1) == "organisation_pacakge_list") || (Request::segment(1) == "organisation_pacakge_details") || (Request::segment(1) == "organisation_pacakge_edit") || (Request::segment(1) == "organisation_pacakge_add") ? 'menu-open' : ""); ?>">
									<a href="<?php echo e(Route('orgPackageList')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation_pacakge_list") || (Request::segment(1) == "organisation_pacakge_details") || (Request::segment(1) == "organisation_pacakge_edit") || (Request::segment(1) == "organisation_pacakge_add") ? 'active' : ""); ?>">
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
							</ul>
						</nav>
					<?php endif; ?>
				<?php elseif(Session::get('role_category') == 5 || Session::get('role_category') == 6): ?>
					<nav class="mt-2">
							<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
								<li class="nav-item">
									<a href="<?php echo e(Route('organisation')); ?>" class="nav-link <?php echo e((Request::segment(1) == "organisation") ? 'active' : ""); ?>">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
									</a>
								</li>
							</ul>
						</nav>
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
	          url: '/global_search',
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
</html>

<?php /**PATH C:\wamp64\www\BGC\resources\views/backend/layout/header.blade.php ENDPATH**/ ?>