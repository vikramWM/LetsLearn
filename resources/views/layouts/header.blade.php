<!-- <style>
	.main-menu .navigation > li.dropdown:hover > ul {
		text-wrap: nowrap;
		height: max-content;
		width: max-content;
		min-width: 300px;
		position: fixed;
		top: auto;
		left: 10%;
	}
	.main-menu .navigation > li > ul > li > a {
		padding: 0px 18px;
	}
	.main-menu .navigation > li > ul > li > a:before {
		content: '//';
		top: 0px;
		
	}
	.main-menu .navigation > li > ul > li.dropdown > a:after {
		font-family: 'FontAwesome';
		content: "\f105";
		position: absolute;
		right: 5px;
		top: 2px;
		width: 10px;
		height: 20px;
		display: block;
		color: #253d4a;
		line-height: 20px;
		font-size: 16px;
		font-weight: normal;
		text-align: center;
		z-index: 5;
	}
	.main-menu .navigation li > ul > li.dropdown:hover > ul {
		width: max-content;
		max-width: 300px;
		min-height: 100%;
		text-wrap: balance;
		position: fixed;
	}
	.main-menu .navigation > li > ul > li > ul > li > a {
		position: relative;
		display: block;
		padding: 5px 10px;
		line-height: 15px;
		font-weight: 600;
		font-size: 15px;
		color: #7c7b7b;
		padding-left: 10px;
	}
	main-menu .navigation > li > ul > li > ul > li > a:before {
		position: absolute;
		content: '//';
		left: 10px;
		top: 0px;
	}
</style> -->
<header class="main-header">
			<div class="header-upper">
				<div class="auto-container clearfix">
					<div class="pull-left logo-box">
						<div class="logo"><a href="/"><img style="width:100px" src="images/letslearnlogo.png" alt="" title=""></a></div>
					</div>

					<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->
								<button class="navbar-toggler" type="button" data-toggle="collapse"
									data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
									aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<!-- <li class="dropdown has-mega-menu"><a><span>Courses <i
													class="fa fa-arrow-down"></i></span></a>
										<div class="mega-menu">
											<div class="upper-box">
												<div class="page-links-box">
												@foreach($courses as $course)
												<a href="course.{{$course->slug}}" class="link"><span
															class="icon flaticon-webpage"></span>{{$course->category}}</a>
												@endforeach
												</div>
											</div>
											<div class="lower-box">
												<h3>Become an Educator</h3>
												<div class="text p-2">Join our team of top-notch educators from around the world. <br> If you're passionate about sharing knowledge, guiding students, and making a positive impact on their learning journey, Let's Learn is the perfect platform for you. <br> Connect with students, foster learning, and be a part of our educational community dedicated to excellence.
												</div>
												<div class="btn-box">
													<a  class="theme-btn btn-style-five">Start teaching
														today</a>
												</div>
												<div class="side-icon">
													<img src="images/resource/mega-menu-icon.png" alt="" />
												</div>
											</div>
										</div>
									</li> -->
									<li class=""><a href="/">Home</a></li>
									<li class=""><a href="about">About</a></li>
									<!-- <li class=""><a href="course">Courses</a></li> -->
									<li class="dropdown"><a >Services</a>
										<ul>
											<li><a href="assignment">Assignment</a></li>
											<li><a href="sample">Resources</a></li>
											<li><a href="course">Tutorial</a></li>
											
										</ul>
										<!-- <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div> -->
									</li>
									<li class="dropdown"><a href="#">Subjects</a>
										<ul>
											<li class="dropdown"><a href="">Computer Science Assignment Help</a>
												<ul>
													<li><a href="/computer-science-assignment-help">Computer Science Assignment Writing Help</a></li>
													<li><a href="">Database Management Systems Assignment Help</a></li>
													<li><a href="">Human-Computer Interaction Assignment Writing Help</a></li>
													
												</ul>
											</li>
											<li class="dropdown"><a href="">Information Technology Assignment Help</a>
												<ul>
													<li><a href="">Information Technology Assignment Help</a></li>
													<li><a href="">Artificial Intelligence Assignment Writing Help</a></li>
													<li><a href="">Machine Learning Assignment Writing Help</a></li>
													<li><a href="">Software Engineering Assignment Writing Help</a></li>
													
												</ul>
											</li>
											<li class="dropdown"><a href="">Nursing Assignment Help</a>
												<ul>
													<li><a href="">Nursing Assignment Writing Help</a></li>
													<li><a href="">Pharmacology Assignment Writing Help</a></li>
													<li><a href="">Medical Assignment Writing Help</a></li>
													<li><a href="">Mental Health Assignment Writing Help</a></li>
													<li><a href="">Nutrition and Dietetics Assignment Writing Help</a></li>
													<li><a href="">Critical Care Assignment Writing Help</a></li>
													<li><a href="">Health Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Law Assignment Help</a>
												<ul>
													<li><a href="">Law Assignment Writing Help</a></li>
													<li><a href="">Business Law Assignment Writing Help</a></li>
													<li><a href="">Taxation Law Assignment Writing Help</a></li>
													<li><a href="">Civil Law Assignment Writing Help</a></li>
													<li><a href="">Criminal Law Assignment Writing Help</a></li>
													<li><a href="">Employment Law Assignment Writing Help</a></li>
													<li><a href="">Australian Law Assignment Writing Help</a></li>
													<li><a href="">Canada Law Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Management Assignment Help</a>
												<ul>
													<li><a href="">Management Assignment Writing Help</a></li>
													<li><a href="">Project Management Assignment Writing Help</a></li>
													<li><a href="">Operations Management Assignment Writing Help</a></li>
													<li><a href="">Human Resource Assignment Writing Help</a></li>
													<li><a href="">Supply Chain Management Assignment Writing Help</a></li>
													<li><a href="">Risk Management Assignment Writing Help</a></li>
													<li><a href="">Business Management Assignment Writing Help</a></li>
													<li><a href="">Strategic Management Assignment Writing Help</a></li>
													<li><a href="">Cost Management Assignment Writing Help</a></li>
													<li><a href="">MBA Assignment Writing Help</a></li>
													<li><a href="">Leadership Assignment Writing Help</a></li>
													<li><a href="">Consumer Behaviour Assignment Writing Help</a></li>
													<li><a href="">Entrepreneurship Assignment Writing Help</a></li>
													<li><a href="">Customer Relationship Management Assignment Writing Help</a></li>
													<li><a href="">IT Management Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Economics Assignment Help</a>
												<ul>
													<li><a href="">Economics Assignment Writing Help</a></li>
													<li><a href="">Managerial Economics Assignment Writing Help</a></li>
													<li><a href="">Microeconomics Assignment Writing Help</a></li>
													<li><a href="">Macroeconomics Assignment Writing Help</a></li>
													<li><a href="">Demand Supply Assignment Writing Help</a></li>
													<li><a href="">Advanced Econometrics Assignment Writing Help</a></li>
													<li><a href="">Business Economics Assignment Writing Help</a></li>
													<li><a href="">Political Economics Assignment Writing Help</a></li>
													<li><a href="">International Economics Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Engineering Assignment Help</a>
												<ul>
													<li><a href="">Engineering Assignment Writing Help</a></li>
													<li><a href="">Industrial Engineering Assignment Writing Help</a></li>
													<li><a href="">Chemical Engineering Assignment Writing Help</a></li>
													<li><a href="">Electronic Engineering Assignment Writing Help</a></li>
													<li><a href="">Computer Engineering Assignment Writing Help</a></li>
													<li><a href="">Civil Engineering Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Marketing Assignment Help</a>
												<ul>
													<li><a href="">Marketing Assignment Writing Help</a></li>
													<li><a href="">4Ps Marketing Assignment Writing Help</a></li>
													<li><a href="">5C's Marketing Assignment Writing Help</a></li>
													<li><a href="">Business Marketing Assignment Writing Help</a></li>
													<li><a href="">Sales and Promotion Assignment Writing Help</a></li>
													<li><a href="">Pricing Strategy Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Accounting Assignment Help</a>
												<ul>
													<li><a href="">Account Assignment Writing Help</a></li>
													<li><a href="">Managerial Accounting Assignment Writing Help</a></li>
													<li><a href="">Cost Accounting Assignment Writing Help</a></li>
													<li><a href="">Auditing Assignment Writing Help</a></li>
													<li><a href="">Tax Accounting Assignment Writing Help</a></li>
													<li><a href="">Governmental Accounting Assignment Writing Help</a></li>
													<li><a href="">Nonprofit Accounting Assignment Writing Help</a></li>
													<li><a href="">International Accounting Assignment Writing Help</a></li>
													<li><a href="">Advanced Taxation Assignment Writing Help</a></li>
													<li><a href="">Australian Accounting Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Statistics Assignment Help</a>
												<ul>
													<li><a href="">Statistics Assignment Writing Help</a></li>
													<li><a href="">Descriptive Statistics Assignment Writing Help</a></li>
													<li><a href="">Machine Learning in Statistics Assignment Writing Help</a></li>
													<li><a href="">Robust Statistics Assignment Writing Help</a></li>
													<li><a href="">Data Visualization Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Finance Assignment Help</a>
												<ul>
													<li><a href="">Finance Assignment Writing Help</a></li>
													<li><a href="">Financial Management Assignment Writing Help</a></li>
													<li><a href="">International Finance Assignment Writing Help</a></li>
													<li><a href="">Personal Finance Planning Assignment Writing Help</a></li>
													<li><a href="">Business Finance Assignment Writing Help</a></li>
													<li><a href="">Corporate Finance Assignment Writing Help</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="">Programming languages Assignment Help</a>
												<ul>
													<li><a href="">Programming languages Assignment Help</a></li>
													<li><a href="">Data Manipulation Assignment Writing Help</a></li>
													<li><a href="">Natural Language Processing Assignment Writing Help</a></li>
													<li><a href="">Coding Assignment Writing Help</a></li>
													<li><a href="">C Programming Assignment Writing Help</a></li>
													<li><a href="">C++ Programming Assignment Writing Help</a></li>
													<li><a href="">Matlab Programming Assignment Writing Help</a></li>
													<li><a href="">C# Assignment Writing Help</a></li>
													<li><a href="">Java Assignment Writing Help</a></li>
													<li><a href="">HTML Assignment Writing Help</a></li>
													<li><a href="">PHP Assignment Writing Help</a></li>
													<li><a href="">Python Assignment Writing Help</a></li>
													<li><a href="">Ruby Assignment Writing Help</a></li>
													<li><a href="">SQL Assignment Writing Help</a></li>
												</ul>
											</li>
											
										</ul>
									</li>
									<li class=""><a href="order">Order Now</a></li>
									<li class=""><a href="blog">Blog</a></li>
									<li><a href="contact">Contact</a></li>
								
									
								</ul>
								
							</div>
						</nav>

						<!-- Main Menu End-->
						<div class="outer-box clearfix">

							<!-- Search -->
							<!-- <div class="search-box">
								<form method="post"
									action="https://themazine.com/html/Lebari_new/lebari/lebari/contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value=""
											placeholder="What do we want learn" required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div> -->

							<!-- Social Box -->
							<!-- <ul class="social-box">
								<li class="instagram"><a  
										class="fa fa-instagram"></a></li>
								<li class="facebook"><a  
										class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a  
										class="fa fa-twitter"></a></li>
								<li class="pinterest"><a  
										class="fa fa-pinterest-p"></a></li>
							</ul> -->

							<div class="cart-box">
								<div class="dropdown">
									<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									
									<span class="fa fa-user" style="font-size:24px"></span> 
									@if(Auth::user())
										<span class="total-cart fa fa-check-circle"></span>
									@else
										<span class="total-cart fa fa-close"></span>
									@endif

									

									</button>
									@if(Auth::user())
									<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu1">
										<?php if (Auth::user()) { // Check if the user is logged in ?>
											<div class="cart-product">
												<div class="inner">
													<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
													<?php if (Auth::user()->photo) { ?>
														<div  class="image"><img style="border-radius: 20px;" src="<?php echo asset(Auth::user()->photo); ?> " alt="" /></div>
													<?php } else {?>
														<div  class="image"><img style="border-radius: 20px;" src="assets/media/avatars/blank.png" alt="" /></div>
													<?php } ?>
													<h3><a href="shop-single.html"><?php echo Auth::user()->name; ?></a></h3>
													<div class="quantity-text"><?php echo Auth::user()->email; ?></div>
													<div class="quantity-text"><?php echo Auth::user()->mobile; ?></div>
													<!-- <div class="price">$99.00</div> -->
												</div>
											</div>
											<ul class="btns-boxed">
												<li><a href="/myProfile">View Profile</a></li>
												<li>
												<a href="{{ route('logout') }}" 
													onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
													>Sign Out</a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
													</form>
												</li>

												<li class="mt-2"><a href="/orders">My Orders</a></li>

											</ul>
										<?php } else { // Display placeholder text when user is not logged in ?>
											<p>Please log in to view your cart.</p>
										<?php } ?>
									</div>
									@else
									<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu1">
											<ul class="btns-boxed">
												<li><a href="/login">SignIn</a></li>
												<li><a href="/register">SignUp</a></li>
											</ul>
									</div>
									@endif
								
								</div>
							</div>

						
							
						</div>
						
					</div>

				</div>
			</div>
			<!--End Header Upper-->

			<!-- Sticky Header  -->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="/" title=""><img style="width:100px" src="images/letslearnlogo.png" alt="" title=""></a>
					</div>
					<!--Right Col-->
					<div class="pull-left">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->

						<!-- Main Menu End-->
						<div class="outer-box clearfix">
						<div class="cart-box">
								<div class="dropdown">
									<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									
									<span class="fa fa-user" style="font-size:24px"></span> 
									@if(Auth::user())
										<span class="total-cart fa fa-check-circle"></span>
									@else
										<span class="total-cart fa fa-close"></span>
									@endif

									

									</button>
									@if(Auth::user())
									<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu1">
										<?php if (Auth::user()) { // Check if the user is logged in ?>
											<div class="cart-product">
												<div class="inner">
													<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
													<?php if (Auth::user()->photo) { ?>
														<div  class="image"><img style="border-radius: 20px;" src="<?php echo asset(Auth::user()->photo); ?> " alt="" /></div>
													<?php } else {?>
														<div  class="image"><img style="border-radius: 20px;" src="assets/media/avatars/blank.png" alt="" /></div>
													<?php } ?>
													<h3><a href="shop-single.html"><?php echo Auth::user()->name; ?></a></h3>
													<div class="quantity-text"><?php echo Auth::user()->email; ?></div>
													<div class="quantity-text"><?php echo Auth::user()->mobile; ?></div>
													<!-- <div class="price">$99.00</div> -->
												</div>
											</div>
											<ul class="btns-boxed">
												<li><a href="/myProfile">View Profile</a></li>
												<li>
												<a href="{{ route('logout') }}" 
													onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
													>Sign Out</a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
													</form>
												</li>

												<li class="mt-2"><a href="/orders">My Orders</a></li>

											</ul>
										<?php } else { // Display placeholder text when user is not logged in ?>
											<p>Please log in to view your cart.</p>
										<?php } ?>
									</div>
									@else
									<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu1">
											<ul class="btns-boxed">
												<li><a href="/login">SignIn</a></li>
												<li><a href="/register">SignUp</a></li>
											</ul>
									</div>
									@endif
								
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- End Sticky Menu -->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-multiply"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="/"><img src="images/letslearnlogo.png" style="width:100px" alt="" title=""></a></div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				</nav>
			</div><!-- End Mobile Menu -->

		</header>