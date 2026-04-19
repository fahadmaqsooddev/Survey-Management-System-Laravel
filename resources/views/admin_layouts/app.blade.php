<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title>{{ $page_title ?? 'Admin Panel' }}</title>
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<!-- /global stylesheets -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
        <!-- Core JS files -->
    <script src="{{ asset('admin/global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('admin/global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/demo_pages/dashboard.js') }}"></script>
	<!-- /theme JS files -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<!-- Theme JS files -->
    <script src="{{ asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('admin/global_assets/js/plugins/forms/inputs/touchspin.min.js') }}"></script>

    <script src="{{ asset('admin/global_assets/js/demo_pages/form_input_groups.js') }}"></script>
    <!-- /theme JS files -->

	<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Caveat:wght@700&family=Dancing+Script&family=Libre+Baskerville:wght@700&family=Lobster&family=Merriweather:ital@1&family=Montserrat&family=Noto+Serif+Toto:wght@600&family=Pacifico&family=Poppins:ital,wght@0,400;0,500;0,600;0,800;1,400;1,500&family=Raleway&family=Roboto&family=Sacramento&family=Signika+Negative:wght@500&family=Teko:wght@400;500&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

	<!-- Theme JS files -->
    <script src="{{ asset('admin/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/demo_pages/datatables_basic.js') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	<!-- Toggle Files -->
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

	<style>
		@font-face 
		{
			font-family: 'Montserrat', sans-serif !important;
			src: url(assets/css/font2/trebuc.ttf);
		}
		body{
			font-family: 'Montserrat', sans-serif !important;
		}
		.myinput
		{
			border-radius: 20px;

		}

		th{
			font-size: 15px;
			text-transform: capitalize;
		}

		td{
			font-size: 16px;
			text-transform: capitalize;    
		}

		.form-control
		{
			height: 50px !important;

		}
		.btn-outline-success{
			color: #fff !important;
			background-color: #093390 !important;
			background-image: none !important;
			border-color: #093390 !important;
		}
		.btn-outline-primary {
			color: white;
			background-color: #093390;
			background-image: none;
			border-color: #093390;
		}

		.black{color: black;}
		.sidebar-dark{
			background: #093390 !important;
		}
		.navbar-dark{
			background: #093390 !important;
		}
		.navbar-light{
			background: #093390 !important;
		}
		.navbar-light .navbar-text {
			color: white !important;
		}

		.main_card{
        /*			box-shadow: 0px 0px 20px 0px #f36759 !important;*/
        border-radius: 20px;

        }
        .sidebar-dark .nav-sidebar>.nav-item-open>.nav-link:not(.disabled){
            background-color: rgba(0,0,0,.15) !important;
            color: #fff !important;
        }

</style>
@livewireStyles
@stack('styles')


</head>

<body>
	@include('admin_layouts.partials.header')
	<div class="page-content">
		@include('admin_layouts.partials.sidebar')
		<div class="content-wrapper">
			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2">  Admin Panel</i></a>
						<span class="breadcrumb-item active">{{ $title ?? '' }}</span>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">

						</div>
					</div>
				</div>
			</div>
				<!-- Content area -->
			<div class="content">
				 {{ $slot }}
			</div>
			@include('admin_layouts.partials.footer')
			</div>
    	</div>
<script>
	$(document).ready(function() {
		var maxLength = 50;
		$('textarea').keyup(function() {
			var textlen = maxLength - $(this).val().length;
			$('#rchars').text(textlen);
		});

		$('#txtDate1').change(function() {  
			if($('#txtDate').val()!=""&&$('#txtDate1').val()!="")
			{
				if($('#txtDate').val()==$('#txtDate1').val())
				{
					alert("Dates can't be same");
				}
			}
		});

	});


</script>
 @livewireScripts
@stack('scripts')
</body>
</html>