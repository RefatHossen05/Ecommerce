<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{url('frontend/assets/img/icons/icon-48x48.png')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
	<link href="{{url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="{{url('frontend/assets/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

<!-- sidever -->
    @include('backend.fixed.sidevar')
<!-- end sidever -->

<!-- header -->
	@include('backend.fixed.header')

<!-- main content -->
<main class="content">
<div class="container-fluid p-0">
<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>


<div class=container>
	@if($errors->any())
		<div class="alert alert-danger"> 
			<ul>
				@foreach ($errors->all() as $error )
					<li>
						{{$error}}
					</li>
				@endforeach
			</ul>
		</div>
	@endif
</div>
@yield('content')


</main>

<!-- footer -->
@include('backend.fixed.footer')


		</div>
	</div>



	




<script src="{{('frontend/assets/js/app.js')}}"></script>
</body>

</html>