
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>Create Your Account | Join Our Community Today!</title>
		<meta charset="utf-8" />
		<meta name="description" content="Register for your account and unlock exclusive benefits. Join our community to access personalized offers, receive updates, and enjoy a smooth user experience. Sign up now to get started!" />
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
					
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        @if (Route::has('login'))
						<form class="form w-100" novalidate="novalidate" id=""  action="{{ route('register') }}" method="post">
						@csrf
                            <div class="mb-10 text-center">
								<h1 class="text-dark mb-3">Create an Account</h1>
								<div class="text-gray-400 fw-bold fs-4">Already have an account?
								<a href="{{route('login')}}" class="link-primary fw-bolder">Sign in here</a></div>
							</div>
                            <!-- <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
							<img alt="Logo" src="" class="h-20px me-3" />Log In With OTP</button> -->
							<div class="d-flex align-items-center mb-10">
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
							</div>

                            <div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Name</label>
								<input class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" name="name" autocomplete="off" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                            <div class="row fv-row mb-7">
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">Country Code</label>
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="country_code" autocomplete="off" id="country-code-input" />
									@error('country_code')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
                                	@enderror
								</div>
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">Mobile No</label>
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="mobile" autocomplete="off" />
									@error('phone_number')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
                                	@enderror
								</div>
							</div>

							<div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                </div>
								<input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" name="password" autocomplete="off" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

								

                            <div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Confirm Password') }}</label>
                                </div>
								<input id="password-confirm" name="password_confirmation" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" name="password" autocomplete="off" />
                               
                            </div>

							
							<div class="text-center">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
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
        <!-- <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
        <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> -->
	</body>
   
		 <script>
        // Function to fetch and set the country code based on IP address
        function setCountryCodeByIP() {
            $.getJSON("http://ip-api.com/json/?callback=?", function(data) {
                if (data && data.countryCode) {
                    // Assuming the country code input field has an ID of "country-code-input"
                    $("#country-code-input").val(data.countryCode);
                }
            });
        }

        // Call the function when the page loads
        $(document).ready(function() {
            setCountryCodeByIP();
        });
    </script>
</html>
       


