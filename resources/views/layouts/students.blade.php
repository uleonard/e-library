<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>MUBAS e-library</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
		
		<link rel="stylesheet" href="{{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('assets/css/fonts.googleapis.com.css')}}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{asset('assets/css/ace-rtl.min.css')}}") />
		
		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('assets/css/ace-skins.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" />
		
		<link rel="stylesheet" href="{{asset('assets/js/ace-extra.min.js')}}" />
		
		<!-- JS Libraries -->
		<!-- Latest compiled JavaScript
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
 		-->

		@yield('css-library')
	</head>

	<body  class="no-skin">
		@include('layouts.partials.nav')		
		
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div class="main-content">
				<div class="main-content-inner">
					
					<div class="col-xs-12">
						<!--========================SIDE MENU=================================-->
						
								
								
						<!--=======================END MENU==============================-->

						<div class="col-xs-12">
									
							<!---=================================PAGES TO BE HERE ===================================-->
								
							@yield('content')
							
							<!-----===============================End PAGES======== ===============================----->
												
						</div>
					</div>
				</div>
			</div>
<!---=====================================FOOTER========================================-->
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							
							&copy {{date('Y')}} Malawi University of Busines and Applied Sciences
						</span>

					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		
		
		@include('layouts.partials.scripts')
		
	</body>
</html>
