@extends('layouts.app')

@section('content')


<section class="cource-detail-banner-section">
		<div class="pattern-layer-one" style="background-image: url(images/icons/icon-5.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/icons/icon-4.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/icon-8.png)"></div>
		<div class="auto-container">
			<!-- Page Breadcrumb -->
			<ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
				<li>Courses Video</li>
			</ul>
			<div class="content-box">
				<div class="title">
                    <!-- 5 day left at this price! -->
                </div>
				<h2>{{$data['tittle']}}</h2>
				<ul class="course-info">
					<li><span class="icon fa fa-clock-o"></span>Last Update :  {{$data['last_update']}}</li>
					<li><span class="icon fa fa-language"></span>English</li>
					<li><span class="icon fa fa-user"></span>749 students</li>
				</ul>
				<div class="development">Let's Learn Together</div>
				<div class="rating">
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-o"></span>
					<strong>4.9</strong>
					<i>(70 Review)</i>
				</div>
				<div class="hovers">11.5 total hours . All Levels  </div>
				
				<!-- Social Box -->
				<ul class="social-box">
					<span class="fa fa-share-alt"></span>
					<li class="twitter"><a target="_blank" href="http://twitter.com/" class="fa fa-twitter"></a></li>
					<li class="pinterest"><a target="_blank" href="http://pinterest.com/" class="fa fa-pinterest-p"></a></li>
					<li class="facebook"><a target="_blank" href="http://facebook.com/" class="fa fa-facebook-f"></a></li>
					<li class="dribbble"><a target="_blank" href="http://dribbble.com/" class="fa fa-dribbble"></a></li>
				</ul>
				
			</div>
		</div>
	</section>

    <section class="course-detail-section">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<!-- <div class="inner-column">
						<div class="author-box">
							<div class="box-inner">
								<div class="image">
									<img src="images/resource/author-4.jpg" alt="">
								</div>
								<h6>Jonas jashiom <a href="profile.html" class="icon fa fa-plus"></a></h6>
								<div class="designation">java Developer, Designer, and Teacher</div>
								<ul class="list">
									<li><span class="icon fa fa-play-circle-o"></span>44 Course</li>
									<li><span class="icon fa fa-star-o"></span>4.6 Instructor Rating</li>
									<li><span class="icon fa fa-user"></span>6,073 Students</li>
								</ul>
								<div class="text">Hi, I'm Riad! I have been identified as one of LebariTop Instructors and all my premium courses have recently earned the best-selling status for outstanding performance and student satisfaction.</div>
							</div>
						</div>
					</div> -->
				</div>

				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
                        <!-- <?php 
							$priceofDiscount = ($data['price'] * $data['disscount']) / 100;
							$finalPrice = $data['price'] - $priceofDiscount;
						?>  -->
						<!-- <div class="price">${{$finalPrice}}@if($data['disscount'] != 0)<i>${{$data['price']}}</i> <span> {{$data['disscount']}}% of</span>@endif</div> -->
						<h5>Topic :</h5>
						<ul class="level-list-one mt-3">
							<li>{{$data['tittle']}}</li>
						</ul>
						<h5>Other includes:</h5>
						<ul class="level-list-two">
							<li>Live Classes With Expert</li>
							<li>Certificate of completion</li>
						</ul>
						
						<!-- Coupon Form -->
						<div class="coupon-form">
							<h6>Watch Video <span class="fa fa-caret-right"></span></h6>
							<form method="post" action="https://themazine.com/html/Lebari_new/lebari/lebari/contact.html">
								<!-- <div class="form-group">
									<input type="email" name="email" value="" placeholder="Enter Coupon" required="">
									<button type="submit" class="submit-btn">Enter</button>
								</div> -->
							</form>
						</div>
						<div class="btns-box">
							<a href="https://wa.me/442081339423" target="_blank" class="theme-btn enrol-btn fa fa-whatsapp"></a>
							<!-- <a href="#" class="theme-btn wishlist-btn">Buy Course</a> -->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
    <section class="courses-page-section" style="padding: 0px 0px 100px;">
		<div class="auto-container">
			<div class="filter-box">
				<div class="box-inner">
					
				</div>
				
			</div>
			
			<div class="row clearfix text-center">
				@foreach($data['video'] as $video)
					<!-- Course Column -->
					<div class="course-block col-lg-8 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
							<div class="image">
								<ahref="javascript:void(0);" class="enroll-now" onclick="playVideo('{{$video['video']}}')"><img src="{{$video['thumbnail']}}" alt=""></a>
							</div>
							<div class="lower-content">
								<h4><a href="/video">{{$video['topic']}}</a></h4>
								
							</div>
						</div>
					</div>
				@endforeach
				
				@if(isset($video['description']))
				<section class="course-detail-section mx-auto">
					<div class="auto-container">
						<div class="row clearfix">
							<div class="info-column ">
								<div class="inner-column" style="margin-top: 0; !important">
									<!-- <?php 
										$priceofDiscount = ($data['price'] * $data['disscount']) / 100;
										$finalPrice = $data['price'] - $priceofDiscount;
									?>  -->
									<!-- <div class="price">${{$finalPrice}}@if($data['disscount'] != 0)<i>${{$data['price']}}</i> <span> {{$data['disscount']}}% of</span>@endif</div> -->
									
									<h5>Other includes:</h5>
									<ul class="level-list-two">
										<li>Live Classes With Expert</li>
										<li>Certificate of completion</li>
									</ul>
									
									<!-- Coupon Form -->
									<div class="coupon-form">
										<h6>Watch Video <span class="fa fa-caret-right"></span></h6>
										<!-- <form method="post" action="https://themazine.com/html/Lebari_new/lebari/lebari/contact.html">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter Coupon" required="">
												<button type="submit" class="submit-btn">Enter</button>
											</div>
										</form> -->
									</div>
									<div class="btns-box">
										<a href="https://wa.me/442081339423" target="_blank" class="theme-btn enrol-btn fa fa-whatsapp"></a>
										<!-- <a href="#" class="theme-btn wishlist-btn">Buy Course</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				@endif
			</div>
				

			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Function to handle playing the video using SweetAlert2
    function playVideo(videoUrl) {
        Swal.fire({
            html: `<video width="100%" height="100%" controls><source src="${videoUrl}" type="video/mp4"></video>`,
            showCloseButton: true,
            showConfirmButton: false,
            focusConfirm: false,
            customClass: 'swal-video',
        });
    }
</script>
				
			<section>
								
				<div class="">
				@if(isset($video['description']))
					<div class="">{!! $video['description'] !!}</div>
				
				@endif
				</div>
								
			</section>	
			
			<!-- Post Share Options
			<div class="styled-pagination text-center">
				<ul class="clearfix">
					<li><a href="#">01</a></li>
					<li><a href="#">02</a></li>
					<li class="active"><a href="#">03</a></li>
					<li><a href="#">04</a></li>
					<li><a href="#">05</a></li>
					<li class="next"><a href="#"><span class="fa fa-angle-double-right"></span> </a></li>
				</ul>
			</div> -->
			
		</div>
	</section>


    <section class="course-detail-section">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="content-column col-lg-12 col-md-12 col-sm-12" style="margin-top: -85px">
					<div class="inner-column">
						<div class="comments-area">
							<div class="group-title">
								<h5>Course Review</h5>
							</div>
							
							<div class="comment-box">
								
								@foreach( $data['rating'] as $rating)
								<div class="comment">
									@if($rating['user']['photo'])
										<div class="author-thumb"><img src="{{$rating['user']['photo']}}" alt=""></div>
									@else
										<div class="author-thumb"><img src="assets/media/avatars/blank.png" alt=""></div>
                                     @endif
									<div class="comment-info clearfix">
										<strong>{{$rating['user']['name']}}</strong>
										<div class="rating">
											@if($rating['rating'] == 5)
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											@elseif($rating['rating'] == 4)
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star-o"></span>
											@elseif($rating['rating'] == 3)
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
											@elseif($rating['rating'] == 2)
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
											@elseif($rating['rating'] == 1)
												<span class="fa fa-star"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
											@endif
										</div>
										<div class="comment-time">{{ \Carbon\Carbon::parse($rating['created_at'])->diffForHumans() }}</div>
										<!-- <ul class="like-dislike">
											<li><a href="#" class="flaticon-like-1"></a></li>
											<li><a href="#" class="flaticon-dislike"></a></li>
										</ul> -->
									</div>
									<div class="text">{{$rating['message']}}</div>
								</div>
								@endforeach
								<!-- Comment -->
								
							</div>
						</div>
						<!-- End Comment Area -->
						
						<div class="comment-form">
									
							<div class="group-title"><h5>Leave A Comment</h5></div>
							
							<!--Comment Form-->
							<form id="ratingForm" method="post" action="{{ route('submit.rating') }}">
									@csrf
									@if(Auth::user())
									<input type="hidden" name='uid' value=" {{Auth::user()->id}}">
									@endif
										<input type="hidden" name='cid' value=" {{$data['c_id']}}">
									<div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<select name="rating" id="rating">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										@if(Auth::user())
										
										@endif
										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<textarea class="darma" name="message" placeholder="Your Message" required></textarea>
										</div>

									
										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<button class="theme-btn btn-style-five" type="button" onclick="submitForm()">Write A Review</button>
										</div>
									
									</div>
								</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>

		<!-- Include SweetAlert library -->
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

			<script>
				function submitForm() {
					var rating = document.getElementById('rating').value;

					if (rating === "") {
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'Please select a rating.',
						});
						return;
					}

					// Assuming you have Laravel route named 'login'
					@if(!Auth::user())
						Swal.fire({
							icon: 'warning',
							title: 'Oops...',
							text: 'Please log in to submit a review.',
							confirmButtonText: 'Login',
						}).then(() => {
							window.location.href = "{{ route('login') }}";
						});
					@else
						document.getElementById('ratingForm').submit();
					@endif
				}
			</script>

@endsection