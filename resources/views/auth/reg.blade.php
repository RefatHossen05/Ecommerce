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

<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Registation Form</h1>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="{{route('regform.submit')}}" method="POST">
										@csrf
										<div class="mb-3">
											<label class="form-label" for="name">Name</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" id="name"/>
										</div>
										<div class="mb-3">
											<label for="email" class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Enter your email"/>
										</div>
									
										<div class="mb-3">
											<label for="password" class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" id="password"/>
										</div>
										<div class="text-center mt-3">
											
										<button type="submit" class="btn btn-lg btn-primary">Create Account</button> 
										</div>
										<div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                                    </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>





<script src="{{('frontend/assets/js/app.js')}}"></script>
</body>
	

</html>