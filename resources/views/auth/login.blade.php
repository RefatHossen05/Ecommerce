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
				<div class="col-sm-10 col-md-8 col-lg-4 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Log in</h1>
						
						</div>
						<form action="{{route('login.submit')}}" class="row g-3 needs-validation" method="post">
                                            @csrf

                                            <div class="col-12">
                                                <label for="yourUsername" class="form-label">Email</label>
                                                <div class="input-group has-validation">
                                                    <input type="email" name="email" class="form-control" id="yourUsername" />
                                                    <div class="invalid-feedback">Please enter your username.</div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" id="yourPassword" required />
                                                <div class="invalid-feedback">Please enter your password!</div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary w-100" type="submit">Login</button>
                                            </div>
                                            <div class="col-12">
                                                <p class="small mb-0">Don't have account? <a href="{{ route('regform') }}">Create an account</a></p>
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