@extends('layouts.app')

@section('content') 
	
<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.html"><img src="images/logo-2.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-two">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>lebari@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
								<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
								<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
								<li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->
	
	<!-- Contact Banner Section -->
    <section class="contact-banner-section">
		<div class="pattern-layer-one" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/icons/icon-4.png)"></div>
		<div class="auto-container">
			<!-- Page Breadcrumb -->
			<ul class="page-breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>Contact us</li>
			</ul>
			
			<div class="content-box">
				<h2>Connect With Us</h2>
				<div class="text">Reach out to us and let's start a conversation. We're here to assist you with any inquiries, provide information, and ensure your experience with Let's Learn is exceptional. Your journey to knowledge begins with a simple connection.</div>
			</div>
		</div>
	</section>
	<!-- End Contact Banner Section -->
	
	<!-- Contact Page Section -->
    <section class="contact-page-section">
		<div class="pattern-layer-three" style="background-image: url(images/icons/icon-8.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
					<div class="title">GET IN TOUCH</div>
						<h2>Contact Us</h2>
						<div class="text">Have questions or need assistance? We're here to help! Feel free to reach out to us for any inquiries or information you may need.</div>
						<ul>
							<li><span>Address</span>first floor, Bilt mansions, suite 114, 4-16 Deptford Bridge, London SE8 4HH, United Kingdom</li>
							<li><span>Our Phone</span>Phone : 44 20 8133 9423</li>
							<li><span>Our Email</span>Email : info@letslearnedu.com<br>Email : support@letslearnedu.com</li>
							<li><span>Opening Hours</span>Monday to Saturday: 9.00am to 6.00pm</li>
							<!-- <li><span>Opening Hours</span>We're here for you 24/7, every day of the week</li> -->
						</ul>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="circle-layer"></div>
						<div class="pattern-layer-one" style="background-image: url(images/icons/icon-7.png)"></div>
						<div class="pattern-layer-two" style="background-image: url(images/icons/icon-9.png)"></div>
						<h2>Leave a message</h2>
						<div class="text"></div>
						
						<!-- Contact Form -->
						<div class="contact-form">
							@if(Session::has('message_sent'))
								<div class="alert alert-success" role="alert" id="messageAlert">
									{{ Session::get('message_sent') }}
								</div>
								<script>
									// Function to hide the alert after 10 seconds
									document.addEventListener('DOMContentLoaded', function() {
										setTimeout(function(){
											var messageAlert = document.getElementById('messageAlert');
											messageAlert.style.display = 'none';
										}, 10000); // 10 seconds
									});
								</script>
							@endif

							<form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
								@csrf

								<div class="form-group">
									<input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
									@error('name')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>

								<div class="form-group">
									<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
									@error('email')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>

								<div class="form-group">
									<input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" required>
									@error('phone')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>

								<div class="form-group">
									<textarea class="" name="message" placeholder="Comment" required>{{ old('message') }}</textarea>
									@error('message')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>

								<div class="form-group">
									<button class="theme-btn btn-style-five" type="submit" name="submit-form">Send Message</button>
								</div>
							</form>
							
						</div>
							
					</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	
	

@endsection