
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>{{config('app.name')}}</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('backend/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        {{-- <link rel="stylesheet" href="{{url('backend/assets/css/font-awesome.min.css')}}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{url('backend/assets/css/line-awesome.min.css')}}">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{url('backend/assets/plugins/morris/morris.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{url('backend/assets/css/style.css')}}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		@notifyCss
		<style type="text/css"> .notify{ z-index: 1000000; margin-top: 3%; } </style>
    </head>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->


     @include('Backend.fixed.header')


          
			<!-- /Header -->
			
			<!-- Sidebar -->



     @include('Backend.fixed.sidebar')


	       <x:notify-messages />
          
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
				

        @yield('backend_content')
        
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('backend/assets/js/jquery-3.5.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{url('backend/assets/js/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Chart JS -->
		<script src="{{url('backend/assets/plugins/morris/morris.min.js')}}"></script>
		<script src="{{url('backend/assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{url('backend/assets/js/chart.js')}}"></script>
		
    {{-- Font Awesome --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
		<!-- Custom JS -->
		<script src="{{url('backend/assets/js/app.js')}}"></script>
		@notifyJs
    </body>
</html>