@extends('layouts.app')

@section('content') 
<!-- <style>
	* {
    margin: 0px;
    padding: 0px;
    outline: none;
	border-radius: 20%;
} -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css">
<style>
	.iti {
    position: relative;
    display: inline-block;
    width: 100%;
}

.floating-effect {
    animation: floatUpDown 1500ms ease-in-out infinite;
	margin-bottom: -113px;
    margin-top: -103px;
    z-index: 4;

	
}

@keyframes floatUpDown {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}
</style>

<section class="banner-section" style="z-index: 2; position: relative; background-color: #fefdea; background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 60px;">
    <div class="auto-container" style="">
        <div class="pattern-layer-six" style="background-image: url(images/main-slider/pattern-4.png)"></div>
        <div class="pattern-layer-seven" style="background-image: url(images/main-slider/pattern-5.png)"></div>
        <div class="pattern-layer-eight" style="background-image: url(images/main-slider/icon-2.png)"></div>
        <div class="row clearfix">

            <div class="image-column col-lg-12 col-md-12 col-sm-12" style="position: relative; z-index: 1;">
                <div class="inner-column"  >
                    <div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="pattern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                    <div class="pattern-layer-three" style="background-image: url(images/main-slider/icon-1.png)" style="top: 147px"></div>
                    <div class="pattern-layer-four" style="background-image: url(images/main-slider/pattern-3.png)"></div>
                    <div class="pattern-layer-five" style="background-image: url(images/main-slider/icon-2.png)"></div>
                </div>
            </div>

            <div class="inner-column" style="width:100% !important">
			
				<section class="contact-page-section">
					
					<div class="pattern-layer-three" style="background-image: url(images/icons/icon-8.png)"></div>
					
					<div class="auto-container" style="border-radius:10%">
						
						<div class="row " style="justify-content: flex-end;" >
							<div class="feature-icon floating-effect">
								<img src="images/resource/feature-icon.png" alt="">
							</div>
						
							<div class="form-column col-lg-12 col-md-12 col-sm-12">
								<div class="inner-column" style="border-radius:10% ; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;" >
									<div class="circle-layer"></div>
									<div class="pattern-layer-one" style="background-image: url(images/icons/icon-7.png)"></div>
									<div class="pattern-layer-two" style="background-image: url(images/icons/icon-9.png)"></div>
									<h2>Connect Now </h2>
									<div class="text"></div>
									
										<!-- Contact Form -->
										<form action="{{ route('submit.order') }}" method="POST" enctype="multipart/form-data">
										@csrf
										@if(session('error'))
											<div id="error-message" class="alert alert-danger">
												{{ session('error') }}
											</div>
										@endif
										@if(session('success'))
											<div id="success-message" class="alert alert-success">
												{{ session('success') }}
											</div>
										@endif										
										<div class="contact-form">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="name" class="form-control" placeholder="Your Full Name*" required="">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<input type="email" name="email" class="form-control" placeholder="Your Email Address*" required="">
													</div>
												</div>
											</div>
											
											<input type="hidden" name="country_code" id="country_c">
											<div class="row">
												<div class="col-md-12" style="width:100%">
													<div class="form-group">
														<input type="tel" name="phone" class="form-control"  placeholder="Phone*" id="phone_number" />
													</div>
												</div>
												
											</div>

											
										
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Upload Your Assignment</label>
														<input id="file-upload" type="file" class="form-control" name="doc[]" multiple  /> 
													</div>
												</div>
												
												<div class="col-md-6">
													<div class="form-group">
														<label>Assignment Deadline</label>
														<input type="date" name="deadline" class="form-control" required="">
													</div>
												</div>
												
												
												<div class="col-md-12">
													<div class="form-group">
														<input type="text" name="coupon" class="form-control" placeholder="Apply Coupon Code" >
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<textarea class="form-control" name="additional" placeholder="Additional Assignment Requirments" ></textarea>
													</div>
												</div>
												
												
											</div>
											
											<div class="policy_agree">
												<input type="checkbox" name="policy_agree" id="policy_agree" required>
												<label for="policy_agree">I agree with Privacy Policy and Terms & Conditions (Recommended)</label>
											</div>
											<div class="form-group col-md-12">
												<button class="theme-btn btn-style-five" type="submit" name="submit-form">Place Order</button>
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script>
        var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
            separateDialCode: true,
            preferredCountries: ["gb"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js",
            allowLeadingZero: true
        });

        $(document).ready(function(){
            updateCountryCode(); // Call the function to update the country code initially

            // Update the country code when the selected flag changes
            $('.iti__selected-flag').on('DOMSubtreeModified', function(){
                updateCountryCode();
            });
        });

        function updateCountryCode() {
            var country_code = phone_number.getSelectedCountryData().dialCode; // Get the selected country dial code
            $("#country_c").val(country_code);
        }
    </script>

<!-- Add this script at the end of your blade file or include it in a separate JavaScript file -->
<script>
    // Function to hide an alert message
    function hideAlert(alertId) {
        var alert = document.getElementById(alertId);
        if (alert) {
            setTimeout(function() {
                alert.style.display = 'none';
            }, 10000); // 10000 milliseconds = 10 seconds
        }
    }

    // Call the hideAlert function for error and success messages
    @if(session('error'))
        hideAlert('error-message');
    @endif

    @if(session('success'))
        hideAlert('success-message');
    @endif
</script>
@endsection
	
	