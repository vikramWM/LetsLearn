<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>Login to Your Account: Secure Access to Your Account</title>
		<meta charset="utf-8" />
		<meta name="description" content="Access your account securely and conveniently. Log into your account securely | Letslearn" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/avatars/logo.png.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="bg-body">
	
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!-- <a href="#" class="mb-5">
						<img alt="Logo" src="assets/media/avatars/assignment_logo.png" class="h-150px" />
					</a> -->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        @if (Route::has('login'))
						<form class="form w-100" novalidate="novalidate" id="" action="{{ route('login') }}" method="post">
                        @csrf
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">Sign In</h1>
								<div class="text-gray-400 fw-bold fs-4">New Here?
								<a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a></div>
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" value="{{ old('email') }}" type="text" name="email" autocomplete="off" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
							<div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                    @endif
                                </div>
								<input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" name="password" autocomplete="off" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
							<div class="text-center">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
								<a href="" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								Continue with OTP</a> -->
								
							</div>
						</form>
                        @endif
					</div>
				</div>
				<div class="d-flex flex-center flex-column-auto p-10">
					<div class="d-flex align-items-center fw-bold fs-6">
					<a href="/" class="text-muted text-hover-primary px-2">Home</a>
						<a href="/about" class="text-muted text-hover-primary px-2">About</a>
						<a href="/contact" class="text-muted text-hover-primary px-2">Contact</a>
					</div>
				</div>
			</div>
		</div>
		<script>var hostUrl = "assets/";</script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/js/custom/authentication/sign-in/general.js"></script>
	</body>
</html>
       


