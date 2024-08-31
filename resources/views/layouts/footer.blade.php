<footer class="main-footer">
			<div class="circle-layer"></div>
			<div class="pattern-layer-one" style="background-image: url(images/background/pattern-12.png)"></div>
			<div class="pattern-layer-two" style="background-image: url(images/background/pattern-13.png)"></div>
			<div class="pattern-layer-three" style="background-image: url(images/background/pattern-14.png)"></div>
			<div class="pattern-layer-four" style="background-image: url(images/background/pattern-13.png)"></div>
			<div class="auto-container">
				<!--Widgets Section-->
				<div class="widgets-section">
					<div class="row clearfix">

						<!-- Footer Column -->
						<div class="footer-column col-lg-5 col-md-12 col-sm-12">
							<div class="footer-widget logo-widget">
								<div class="logo mb-5">
									<a href="/"><img style="width:100px" src="images/letslearnlogo.png" alt="" title=""></a>
								</div>
								<ul class="info-list">
									<li>Tel:<a href="tel:+0845-371-02-02"> 44 20 8133 9423</a></li>
									<li>Email:<a href="mailto:info@letslearnedu.com">info@letslearnedu.com</a></li>
									<li>Email:<a href="mailto:support@letslearnedu.com">support@letslearnedu.com</a></li>
								</ul>
								<!-- Social Box -->
								<ul class="social-box">
									<li class="twitter"><a  
											class="fa fa-twitter"></a></li>
									<li class="pinterest"><a  
											class="fa fa-pinterest-p"></a></li>
									<li class="facebook"><a  
											class="fa fa-facebook-f"></a></li>
									<li class="dribbble"><a  
											class="fa fa-dribbble"></a></li>
									
								</ul>
								
							</div>
						</div>

						<!-- Footer Column -->
						<div class="footer-column col-lg-7 col-md-12 col-sm-12">
							<div class="row clearfix">
								<!-- Column -->
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<h5>Quick Links</h5>
									<ul class="list">
										<li><a href="/">Home</a></li>
										<li><a href="/about">About</a></li>
										
										<li><a href="/course">Courses</a></li>
										<li><a href="/order">Order Now</a></li>
										<li><a href="/blog">Blog</a></li>
										<li><a href="/contact">Contact us</a></li>
										@if(Request::is('/')) <!-- Check if the current URL is the home page -->
											<li><a href="#" id="callback-btn">Call Back</a></li>
										@endif
										<li><a href="#">Reviews</a></li>
									</ul>
								</div>
								<!-- Column -->
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<h5>Policy</h5>
									<ul class="list">
										<li><a href="/RefundPolicy">Refund Policy</a></li>
										<li><a href="/CancellationPolicy">Cancellation Policy</a></li>
										<li><a href="/GuaranteedPolicy">Guaranteed Policy</a></li>
										<li><a href="/PrivacyPolicy">Privacy Policy</a></li>
										<li><a href="/Terms-Conditions">Terms & Conditions</a></li>
									</ul>
								</div>
								
								<!-- Column -->
								<!-- <div class="column col-lg-4 col-md-4 col-sm-12">
									<h5>Courses</h5>
									<ul class="list">
										@foreach($courses->take(5)->sortByDesc('id') as $course)
											<li><a href="course.{{$course->slug}}">{{$course->category}}</a></li>
										@endforeach
									</ul>
								</div> -->
								

							</div>
						</div>

					</div>
				</div>

				

				<!-- Footer Bottom -->
				<div class="footer-bottom">
					<div class="row clearfix">

						<!-- Copyright Column -->
						<div class="copyright-column col-lg-6 col-md-12 col-sm-12">
							<div class="copyright">© 2023 Let's Learn Together.“All Rights Reserved”</div>
						</div>

						<!-- Nav Column -->
						<!-- <div class="nav-column col-lg-6 col-md-12 col-sm-12">
							<ul>
								<li><a href="/t&C">Terms & Conditions</a></li>
								<li><a href="/p&p">Privacy Policy</a></li>
							</ul>
						</div> -->

					</div>
				</div>

			</div>
		</footer>
<!-- Add this script only if on the home page -->
@if(Request::is('/'))
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            // Assuming your "Call Back" button has an ID "callback-btn"
            $("#callback-btn").click(function() {
                // Scroll to the testimonial section
                $('html, body').animate({
                    scrollTop: $(".testimonial-section").offset().top
                }, 1000); // You can adjust the duration as needed
            });
        });
    </script>
@endif


