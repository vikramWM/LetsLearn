@extends('layouts.app')
@section('content')
	<section class="banner-section">
		<div class="auto-container">
            <div class="pattern-layer-six" style="background-image: url(images/main-slider/pattern-4.png)"></div>
			<div class="pattern-layer-seven" style="background-image: url(images/main-slider/pattern-5.png)"></div>
			<div class="pattern-layer-eight" style="background-image: url(images/main-slider/icon-2.png)"></div>
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="pattern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
						<div class="pattern-layer-three" style="background-image: url(images/main-slider/icon-1.png)"></div>
						<div class="pattern-layer-four" style="background-image: url(images/main-slider/pattern-3.png)"></div>
						<div class="pattern-layer-five" style="background-image: url(images/main-slider/icon-2.png)"></div>
						<div class="image">
							<img src="images/main-slider/image-1.png" alt="" />
						</div>
						<div class="image-two">
							<img src="images/main-slider/image-4.png" alt="" />
						</div>
						<div class="image-content" style="background-image: url(images/main-slider/pattern-6.png)">
							<p>87% of people <br> learning</p>
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title">Bridging the Educational Divide</div>
						<h1>Introducing Let's Learn for Enhanced Academic Proficiencys</h1>
						@if(!Auth::user())
						<div class="btns-box">
							<a href="{{ route('login') }}" class="theme-btn btn-style-one"><span class="txt">SignIn/SignUp</span></a>
						</div>
						@endif
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Banner Section -->
	
	<!-- Instructor Section -->
	<section class="instructor-section">
		<div class="background-layer" style="background-image:url(images/background/1.png)"></div>
		<div class="background-layer-one" style="background-image:url(images/background/pattern-1.png)"></div>
		<div class="background-layer-two" style="background-image:url(images/background/pattern-2.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
							
							<!-- Service Block -->
							<div class="service-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="border-layer"></div>
									<div class="icon-box">
										<div class="icon flaticon-verify"></div>
									</div>
									<h4><a href="/course">Trusted content</a></h4>
									<div class="text">
										<div class="content-preview">
											Our content is meticulously curated through extensive and thorough research, drawing exclusively from the most reputable and authentic sources available.
										</div>
										<div class="content-full" style="display: none;">
											<!-- Additional content goes here -->
											Our content is meticulously curated through extensive and thorough research, drawing exclusively from the most reputable and authentic sources available. We prioritize the delivery of information that is not only accurate but also rooted in a foundation of credibility, ensuring that our users receive content of the highest quality.
										</div>
										<a href="#" class="read-more">Read More</a>
									</div>
								</div>
							</div>

							<script>
								document.addEventListener("DOMContentLoaded", function () {
									var contentPreview = document.querySelector('.content-preview');
									var contentFull = document.querySelector('.content-full');
									var readMoreButton = document.querySelector('.read-more');

									readMoreButton.addEventListener('click', function (e) {
										e.preventDefault();
										contentPreview.style.display = 'none';
										contentFull.style.display = 'block';
									});
								});
							</script>

							
							<!-- Service Block -->
							<div class="service-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
									<div class="border-layer"></div>
									<div class="icon-box">
										<div class="icon flaticon-heart-box"></div>
									</div>
									<h4><a href="/course">Flexible courses</a></h4>
									<div class="text">
										<p class="initial-content-2">
											We offer a diverse range of courses, with a particular emphasis on technical subjects.Individuals have the flexibility to select courses tailored to their preferences,
										</p>
										<p class="remaining-content-2" style="display: none;">
											We offer a diverse range of courses, with a particular emphasis on technical subjects. 
											Individuals have the flexibility to select courses tailored to their preferences, ensuring a personalized and targeted learning experience.
										</p>
										<a href="#" class="read-more-2">Read More</a>
									</div>
								</div>
								<script>
									document.addEventListener("DOMContentLoaded", function () {
										var initialContent2 = document.querySelector('.initial-content-2');
										var remainingContent2 = document.querySelector('.remaining-content-2');
										var readMoreButton2 = document.querySelector('.read-more-2');

										readMoreButton2.addEventListener('click', function (e) {
											e.preventDefault();
											initialContent2.style.display = 'none';
											remainingContent2.style.display = 'block';
										});
									});
								</script>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Instructor Column -->
				<div class="instructor-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h4>Become an Educator</h4>
						<p>We are a dynamic educational institution seeking a passionate and experienced individual to inspire and guide students.</p>
						<div id="additionalContent" style="display: none;">
						If you have expertise in any specific field, a track record of successful teaching, and strong communication skills, we want to hear from you! Join our collaborative and innovative environment where you can make a lasting impact on students' lives. Submit your resume and cover letter to info@letslearnedu.com and be part of our journey in shaping a brighter future together!
		
						</div>
						<a class="click-here" href="javascript:void(0);" onclick="toggleContent1()">Read More</a>
						<br><a class="click-here" href="#">Click here for apply</a>
						
						<div class="image titlt" data-tilt data-tilt-max="4">
							<img src="images/resource/instructor.png" alt="" />
						</div>
					</div>
				</div>

				<script>
					function toggleContent1() {
						var additionalContent = document.getElementById('additionalContent');
						var readMoreButton = document.querySelector('.click-here');

						if (additionalContent.style.display === 'none') {
							additionalContent.style.display = 'block';
							readMoreButton.innerHTML = 'Read Less';
						} else {
							additionalContent.style.display = 'none';
							readMoreButton.innerHTML = 'Read More';
						}
					}
				</script>
				
			</div>
		</div>
	</section>
	<!-- End Instructor Section -->
	
	
	
	<!-- Courses Section -->
	<section class="feature-section courses-section">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-2.png)"></div>
		<div class="circle-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
		<div class="circle-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
		<div class="auto-container">
			<div class="sec-title centered">
				<h2>You can learn anything, Explore <br> featured courses</h2>
				<div class="text"></div>
				<div class="image-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="color-layer"></div>
						
						<div class="feature-icon wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/letslearnlogo (1).png" alt="" style="height: 100px; width:auto; padding-right:80px;" />
						</div>
					</div>
				</div>
			</div>
			
				
			<div class="row clearfix">
				
			@foreach($data['latestCourses'] as $course)
			<div class="course-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="image">
						<a href="course.{{$course->slug}}"><img src="{{$course->images}}" alt="" /></a>
					</div>
					<div class="lower-content">
						<h4><a href="course.{{$course->slug}}">{{$course->category}}</a></h4>
						<div class="uni-name">Let'S Learn Together</div>
						<div class="rating">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star-o"></span>
							<strong>4.9</strong>
							<i>(70 Review)</i>
						</div>
						<div class="price">
						<!-- <?php 
							$priceofDisccount =   ($course->price *$course->disscount)/100;
							$finalPrice       =   $course->price -  $priceofDisccount;
						?> 
						{{$finalPrice}}
							<span>
								@if($course->disscount != 0)
									{{$course->price}}
								@endif
							</span> -->
						</div>
						<div class="clearfix">
							<div class="pull-left">
								<div class="hovers">11.5 total hours . All Levels  </div>
							</div>
							<div class="pull-right">
								<a href="course.{{$course->slug}}" class="enroll-now">ENROL NOW</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			</div>
		</div>
	</section>
	<!-- End Courses Section -->
	
	<!-- Professional Section -->
	<section class="career-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="text-center sec-title">
				<h2>Welcome to Let's Learn: <br> Your Path to Better Education</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image titlt" data-tilt data-tilt-max="4">
							<img src="images/resource/career.png" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<h5>Discover Academic Solutions:</h5>
						<div class="text">
							<p>Our survey of 10,000 students found a gap in their learning. Let's Learn is here to fix that! We help you with 1:1 expert meetings and provide resources for your projects.</p>
						</div>

						<h5>Navigate Subjects Easily:</h5>
						<div class="text">
							<p>No more confusion! We're your crew guiding you through writing and practical projects. Let's Learn makes your academic journey smoother.</p>
						</div>

						<div class="hidden-content" style="display:none">
							<h5>Aim for Success:</h5>
							<div class="text">
								<p>We want to help you build a strong academic foundation. Let's Learn opens doors to endless opportunities!</p>
							</div>

							<h5>Uncover Academic Brilliance:</h5>
							<div class="text">
								<p>Embark on a journey with Let's Learn to bridge the gap between where you are and where you want to be academically. Our mission is to empower you through personalized learning experiences.</p>
							</div>

							<h5>Tailored Solutions for You:</h5>
							<div class="text">
								<p>At Let's Learn, we understand the challenges students face. Our platform offers 1:1 sessions with experts, ensuring your questions are answered and your projects are guided with precision. Dive into a sea of resources that enrich your understanding and propel your academic success.</p>
							</div>

							<h5>Smooth Sailing through Studies:</h5>
							<div class="text">
								<p>Say goodbye to confusion and hello to clarity! Let's Learn is your trustworthy companion, navigating you effortlessly through the complexities of writing projects and practical assignments. We simplify the learning process, turning every challenge into a triumph.</p>
							</div>
						</div>

						
						<a href="javascript:void(0);" onclick="toggleContent()" class="theme-btn btn-style-three">Read More<span class="fa fa-caret-right"></span></a>

					</div>
				</div>
				<script>
					function toggleContent() {
						var hiddenContent = document.querySelector('.hidden-content');
						hiddenContent.style.display = (hiddenContent.style.display === 'none' || hiddenContent.style.display === '') ? 'block' : 'none';
					}
				</script>
				
			</div>
		</div>
	</section>
	<!-- End Professional Section -->
	
	<!-- Skill Section -->
	<section class="skill-section">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-8.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Skill Column -->
				<div class="skill-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Our Status valu</div>
							<h2>Differentiate your classroom <br> What makes us special?</h2>
						</div>
						
						<!-- Skills -->
						<div class="skills">

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Resources</div>
									<div class="skill-percentage">
										<div class="count-box">
											<span class="count-text" data-speed="2000" data-stop="90">0</span>%
										</div>
									</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Tutorial</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Assignments</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="75">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="75"></div></div>
								</div>
							</div>

						</div>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="circle-one"></div>
						<div class="circle-two"></div>
						<div class="image titlt" data-tilt data-tilt-max="4">
							<img src="images/resource/skill.png" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Skill Section -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="circle-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
		<div class="circle-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-10.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<div class="pattern-layer" style="background-image:url(images/background/pattern-9.png)"></div>
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="title">Testimonial</div>
					<h2>Student Stories</h2>
					<div class="text">Discover what students like you think about Let's Learn</div>
				</div>
				<div class="testimonial-carousel owl-carousel owl-theme">
					
					<!-- Testimonial Block -->
					@foreach($data['ratings'] as $rating)
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="text">{{$rating['message']}}</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										@if($rating['user']['photo'])
										<img src="{{$rating['user']['photo']}}" alt="" />
										@else
										<img src="assets/media/avatars/blank.png" alt="" />
										@endif
									</div>
									<h6>{{$rating['user']['name']}}</h6>
									<div class="designation">User</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					@endforeach
					
					<!-- end Testimonial Block -->
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-11.png)"></div>
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="title">Our Blogs</div>
				<h2>Latest articles & news</h2>
				<div class="text"></div>
			</div>
			<div class="inner-container">
				<div class="icon-layer-one" style="background-image:url(images/icons/icon-1.png)"></div>
				<div class="icon-layer-two" style="background-image:url(images/icons/icon-2.png)"></div>
				<div class="icon-layer-three" style="background-image:url(images/icons/icon-2.png)"></div>
				<div class="row clearfix">
					@foreach($data['blog'] as $blog)
					<div class="news-block col-lg-6 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a style=" width: 382px; height: 411px; overflow: hidden;  position: relative;" ><img src="{{$blog['Images']}}" alt="" /></a>
							</div>
							<div class="lower-content">
								<div class="border-layer"></div>
								<ul class="post-info">
									<li>Technology</li>
									<li>Last Updated: {{ \Carbon\Carbon::parse($blog['updated_at'])->format('M d, Y') }}</li>

								</ul>
								<h4><a href="blog.{{$blog['slug']}}" >{{ Illuminate\Support\Str::limit($blog['tittle'], 50) }}</h4>
								<a  class="more">More <span class="fa fa-angle-double-right"></span></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Clients Section
	<section class="clients-section">
		<div class="auto-container">
			
			<div class="sec-title centered">
				<h2>Key supporters</h2>
				<div class="text">These leading universities are currently offering online degree <br> courses on FutureLearn:</div>
			</div>
			
			<div class="sponsors-outer">
				
				<ul class="sponsors-carousel owl-carousel owl-theme">
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
				</ul>
			</div>
			
		</div>
	</section> -->




@endsection