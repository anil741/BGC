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

<body class="hold-transition sidebar-mini layout-top-nav "> 
	
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
	      
	      <!-- <li class="nav-item d-none d-sm-inline-block">
	        <a href="index3.html" class="nav-link">Home</a>
	      </li>
	      <li class="nav-item d-none d-sm-inline-block">
	        <a href="#" class="nav-link">Contact</a>
	      </li> -->
	    </ul>

	    <!-- Right navbar links -->
	    <ul class="navbar-nav ml-auto">

	      <li class="nav-item dropdown">
	        <div class="user-panel d-flex" data-toggle="dropdown" href="#">
		        <div class="image">
		        <span class="img-circle elevation-2" style=" font-size: .875rem; width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;">
                	<img alt="Image placeholder" src="<?php echo e(asset('AdminLTE')); ?>/dist/img/user.png" style="width: 50%;">
              	</span>
		          <!-- <img src="<?php echo e(asset('AdminLTE')); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
		        </div>
				
		        <div class="info">							
					<a href="#" class="d-block"><?php if(Session::has('candidateName')): ?>                        
						<?php echo e(Session::get('candidateName')); ?> <?php endif; ?></a></a>
		        </div>
	      	</div>
			  
	      	<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">	         
	          <div class="dropdown-divider"></div>
	          <a href="<?php echo e(Route('userProfile')); ?>" class="dropdown-item">
	            
	          </a>
	          <a href="<?php echo e(Route('candidate_logout')); ?>" class="dropdown-item">
	            <i class="fas fa-sign-out-alt mr-2"></i> Log out
	          </a>
	          <div class="dropdown-divider"></div>	          
	        </div>
	      </li> 
	      
	    </ul>
	    
  	</nav>
 	<!-- Main Sidebar Container -->
	

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

<?php /**PATH /app/app1/html/BGC/resources/views/backend/layout/candidate_header.blade.php ENDPATH**/ ?>