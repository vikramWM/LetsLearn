@extends('layouts.app')


@section('content')
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
								<a href="/"><img src="images/logo-2.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a  class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
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
								<li class="facebook"><a  class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a  class="fa fa-twitter"></a></li>
								<li class="linkedin"><a  class="fa fa-linkedin"></a></li>
								<li class="instagram"><a  class="fa fa-instagram"></a></li>
								<li class="youtube"><a  class="fa fa-youtube"></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

    <section class="blog-page-section">
		<div class="pattern-layer-one" style="background-image: url(images/icons/icon-5.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/icons/icon-4.png)"></div>
		<div class="auto-container">
			<!-- Page Breadcrumb -->
			<ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
				<li>Blog default</li>
			</ul>
			<div class="content-box">
				<h2>Latest articles & news</h2>
				<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
			</div>
		</div>
		<div class="outer-container">
			<div class="row clearfix">
				@foreach($data['blog'] as $blog)
				<!-- News Block / Style Two -->
				<div class="news-block style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a ><img src="{{$blog['Images']}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="border-layer"></div>
							<ul class="post-info">
								<li>Technology</li>
								<li>Last Updated: {{ \Carbon\Carbon::parse($blog['updated_at'])->format('M d, Y') }}</li>
							</ul>
							<h4><a href="blog.{{$blog['slug']}}">{{ Illuminate\Support\Str::limit($blog['tittle'], 50) }}</a></h4>
							<a  class="more">More <span class="fa fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				@endforeach
				
			
			</div>
			
			<!-- Button Box -->
			<div class="btn-box text-center">
				<a href="#" class="theme-btn btn-style-five">View More Artical</a>
			</div>
			
		</div>
	</section>
@endsection