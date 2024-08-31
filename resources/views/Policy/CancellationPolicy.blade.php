@extends('layouts.app')

@section('content')
<style>
    /* Custom CSS for increasing the font size of <p> tags */
     h4 {
        color: #20c997; /* You can adjust the font size as needed */
    }
</style>
<!--  Banner Section -->


<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container">
			<!-- Page Breadcrumb -->
			<ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
                <li>Cancellation Policy</li>
			</ul>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Cancellation Policy</h2>
                        <div class="mt-5">
                            <h5>Let's Learn is aware that orders occasionally need to be cancelled due to unanticipated events. Order cancellation is available to you if you meet the following requirements:</h5>
                        </div>
					</div>
				</div>
				
				<!-- Images Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image: url(images/icons/icon-3.png)"></div>
						<div class="icon-layer-four" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-five" style="background-image: url(images/icons/icon-4.png)"></div>
						<div class="image">
							<img src="images/resource/page-title-3.jpg" alt="" />
						</div>
						<div class="image-two">
							<img src="images/resource/page-title-4.jpg" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
<!-- End  Banner Section -->
<section class="testimonial-section-two">
		<div class="circle-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
		<div class="circle-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-10.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<div class="pattern-layer" style="background-image:url(images/background/pattern-9.png)"></div>
				
				<div class="">
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<h4>Duplicate Orders:</h4>
							<div class="text mt-2">       
                                If a student wants to cancel one of their orders after unintentionally placing the same order twice.
                            </div>
							
						</div>
					</div>
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<h4>Assignment Requirement Changes:</h4>
							<div class="text mt-2">
                                In the event that the student's tutor makes changes to the assignment requirements.
                            </div>							
						</div>
					</div>
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<h4>Irrelevant Resources:</h4>
							<div class="text mt-2">               
                                When the materials offered for the job turn out not to be relevant to it.
                            </div>							
						</div>
					</div>
					
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<h4>Unavailability of Experts:</h4>
							<div class="text mt-2">               
                                In the event that one of our experts is unable to teach the subject or must postpone a class.
                            </div>							
						</div>
					</div>
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<h4>Project Incompletion:</h4>
							<div class="text mt-2">               
                                If we are unable to finish the project or assignment because of unanticipated events.
                            </div>							
						</div>
					</div>
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<h4>Deadline Non-Compliance:</h4>
							<div class="text mt-2">
                                When we are not able to do the work in the allotted period.
                            </div>							
						</div>
					</div>
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<h4>Cancellation Timeframe:</h4>
							<div class="text mt-2">      
                                Orders must be cancelled within two days of the order placement confirmation. After this time, cancellation requests won't be accepted.
                            </div>							
						</div>
					</div>
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<h4>Exemption for Short Deadlines:</h4>
							<div class="text mt-2">    
                                If the assignment is due in less than four days, the cancellation policy will not apply. <br>
                                This policy has been created to give our users options while maintaining an impartial and open procedure. <br> If you have any questions or requests regarding cancellations, please get in touch with our customer service team within the allotted period. <br>
                                We appreciate you selecting Let's Learn for your educational requirements. 
                            </div>							
						</div>
					</div>
				
					
					
				</div>
			</div>
		</div>
        
	</section>
    <div class="text-center mb-5">
        <h4 class="text-dark">Thank you for choosing Let's Learn for your educational journey!</h4>
    </div>	

@endsection
