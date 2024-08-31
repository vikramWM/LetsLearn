@extends('layouts.app')
@section('content') 
    <section class="user-profile-section">
		<div class="pattern-layer-one" style="background-image: url(images/icons/icon-5.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/icons/icon-4.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/icon-8.png)"></div>
		<div class="auto-container">
			<!-- Page Breadcrumb -->
			<ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
				<li>User Profile</li>
			</ul>
            <div class="profile-box">
				<div class="box-inner">
					<div class="image">
                    @if(Auth::user()->photo)
						<img src="{{Auth::user()->photo}}" alt="">
                    @else
                        <img src="assets/media/avatars/blank.png" alt="">
                    @endif
					</div>
					<h4>{{Auth::user()->name}}</h4>
					<div class="text">{{Auth::user()->email}}</div>
					<div class="text">{{Auth::user()->mobile}}</div>
					<!-- Social Box -->
					<ul class="social-box">
                    <li class="twitter"> <a style="width: 200px" href="#" class="update-profile-link " data-toggle="modal" data-target="#profileModal">Update Profile</a> </li>
					</ul>
				</div>
			</div>

            <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">User Profile </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Display user profile details here -->
                            <div class="card mb-5 mb-xl-10">
						<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
							<div class="card-title m-0">
								<h3 class="fw-bolder m-0">Profile Details</h3>
							</div>
						</div>
						<div id="kt_account_profile_details" class="collapse show">
                            <form id="" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" enctype="multipart/form-data" action="{{ route('profile.update', ['id' =>  Auth::user()->id ]) }}">
                                 @csrf                                
                                <div class="card-body border-top p-9">
                                <div class="row mb-6">
								<label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
								<div class="col-lg-8">
                                    <div class="image-input" id="imageInput" data-bs-toggle="tooltip" title="Change avatar">
                                        @if(Auth::user()->photo)
                                            <div class="image-input-wrapper" style="background-image: url({{ asset(Auth::user()->photo) }})"></div>
                                        @else
                                            <div class="image-input-wrapper"></div>
                                        @endif
                                        <label for="photoInput" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <input type="file" id="photoInput" name="photo" accept=".png, .jpg, .jpeg" onchange="handleFileSelect(event)">
                                        </label>
                                    </div>
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                </div>
							</div>
                            <div class="row mb-12">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Name" value="{{Auth::user()->name}}">
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Youremail@gmail.com" value="{{Auth::user()->email}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Contact Phone</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i>
                                </label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{Auth::user()->mobile}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Address</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i>
                                </label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="Enter YOur Address" value="{{Auth::user()->address}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <!-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> -->
                            <button type="submit" class="btn btn-primary mr-3" id="kt_account_profile_details_submit">Save Changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    <div>
                </div>
			</form>						
        </div>
	
	</section>

    <section class="courses-section-two">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
                    <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
							<div class="icon flaticon-customer"></div>
							<h5>Total Students</h5>
							<div class="numbers">60</div>
						</div>
					</div>
					<!-- Course Block Two -->
					<div class="course-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
							<div class="icon flaticon-file-1"></div>
							<h5>Completed Courses</h5>
							<div class="numbers">15</div>
						</div>
					</div>
					
					<!-- Course Block Two -->
					<div class="course-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
							<div class="icon flaticon-calendar"></div>
							<h5>Active Courses</h5>
							<div class="numbers">03</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script>
    function handleFileSelect(event) {
        const input = event.target;
        const imageInput = document.getElementById('imageInput');
        const imageWrapper = imageInput.querySelector('.image-input-wrapper');

        const file = input.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imageWrapper.style.backgroundImage = `url(${e.target.result})`;
            };

            reader.readAsDataURL(file);
        }
    }
</script>
 <style>
        .image-input {
            position: relative;
            width: 125px;
            height: 125px;
            background-size: cover;
            background-position: center;
            background-image: url('assets/media/avatars/blank.png');
            border: 2px solid #ccc;
        }

        .image-input label {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #fff;
            cursor: pointer;
        }

        .image-input label i {
            font-size: 14px;
        }

        input[type="file"] {
            display: none;
        }
    </style>

@endsection