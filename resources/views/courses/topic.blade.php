@extends('layouts-backend.app')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			<div class="toolbar" id="kt_toolbar">
				<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
					<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
						<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">New User</h1>
						<span class="h-20px border-gray-200 border-start mx-4"></span>
						<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
							<li class="breadcrumb-item text-muted">
								<a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Let's Learn Together</a>
							</li>
							<li class="breadcrumb-item">
								<span class="bullet bg-gray-200 w-5px h-2px"></span>
							</li>
							<li class="breadcrumb-item text-muted"></li>
							<li class="breadcrumb-item">
								<span class="bullet bg-gray-200 w-5px h-2px"></span>
							</li>
							<li class="breadcrumb-item text-dark"></li>
						</ul>
					</div>
				</div>
			</div>

			
			<div id="kt_content_container" class="container-xxl">
				<div class="row g-5 g-xl-8">
					<div class="card mb-5 mb-xl-10">
						<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
							<div class="card-title m-0">
								<h3 class="fw-bolder m-0">Upload </h3>
							</div>
						</div>
						<div id="kt_account_profile_details" class="collapse show">
                                    <form id="topicform" class="" method="post" enctype="multipart/form-data" action="{{ route('topic') }}">
                                    @csrf
                                    
                                    <div class="card-body border-top p-9">
                                        <!-- ... (other form fields) -->
                                        <div class="row mb-6">
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">thumbnail</label>
                                            <div class="col-lg-8">
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                                    <div class="image-input-wrapper w-125px h-125px"style="width: 200px !important; height:150px; background-image:  url(assets/media/avatars/blank.png)"></div>
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input  type="file" name="photo" accept=".png, .jpg, .jpeg">
                                                    </label>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            </div>
                                        </div>

                                        <div class="row mb-6">
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">Video</label>
                                            <div class="col-lg-8">
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                                    <div class="image-input-wrapper w-125px h-125px" style="width: 200px !important; height: 150px; background-image: url(assets/media/avatars/blank.png)"></div>
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input  type="file" name="video" accept=".mp4, .avi, .mkv" id="video-upload-input" onchange="displayVideo()">
                                                    </label>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                                <div class="form-text">Allowed file types: .mp4, .avi, .mkv</div>
                                                <div id="video-container" style="display: none;">
                                                    <video controls id="video-player" style="width: 100%;">
                                                        <source src="" id="video-source" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        
                                    <div class="row mb-6">
                                        <div class="progress-container">
                                            <div class="progress-bar" id="progress-bar"></div>
                                        </div>
                                    </div>


                                        <div class="row mb-12">
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Topic</label>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                        <input required type="text" name="topic" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Topic"  value="">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row mb-6">
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <select required name="category" aria-label="Select a Language" data-control="select2" data-placeholder="Category   " class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-13-mh4q" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="select2-data-15-jtqd"></option>
                                                @foreach($data['category'] as $course)
                                                <option value="{{$course->id}}" >{{$course->category}}</option>
                                                @endforeach
                                               
                                            </select>
                                            <div class="fv-plugins-message-container invalid-feedback">

                                            </div>
                                        </div>

                                        <!-- <div class="row mb-12">
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Description </label>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <textarea name="description" class="form-control form-control-lg form-control-solid mb-3 mt-5 mb-lg-0"  placeholder="Description" rows="5" style="height: 100px;"></textarea>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div> -->
                                        <div class="row mb-12">
                                            <label for="description" class="col-lg-4 col-form-label required fw-bold fs-6">Description </label>
                                            <!-- Quill editor container -->
                                            <div class="row">
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <div id="kt_docs_quill_editor" style="height: 400px;"></div>
                                                    <!-- Hidden input field to store Quill editor content -->
                                                    <input type="hidden" id="description" name="description" required>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <!-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> -->
                                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                    </div>
                                <input type="hidden">
                                <div>

                                </div>
                            </form>
						</div>
					</div>
					
				</div>

			</div>
</div>

<script>
    // Function to check the file format
    function isValidFileFormat(inputElement, allowedFormats) {
        const file = inputElement.files[0];
        if (file) {
            const fileName = file.name;
            const fileExtension = fileName.split('.').pop().toLowerCase();
            return allowedFormats.includes(fileExtension);
        }
        return false;
    }

    // Function to display a SweetAlert message
    function showAlert(title, text, icon) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }

    // Validate the thumbnail file format
    const thumbnailInput = document.querySelector('input[name="photo"]');
    const thumbnailAllowedFormats = ['png', 'jpg', 'jpeg'];
    thumbnailInput.addEventListener('change', () => {
        if (!isValidFileFormat(thumbnailInput, thumbnailAllowedFormats)) {
            showAlert('Invalid Thumbnail Format', 'Allowed file formats: PNG, JPG, JPEG', 'error');
            thumbnailInput.value = ''; // Clear the input field
        }
    });

    // Validate the video file format
    const videoInput = document.querySelector('input[name="video"]');
    const videoAllowedFormats = ['mp4', 'avi', 'mkv'];
    videoInput.addEventListener('change', () => {
        if (!isValidFileFormat(videoInput, videoAllowedFormats)) {
            showAlert('Invalid Video Format', 'Allowed file formats: MP4, AVI, MKV', 'error');
            videoInput.value = ''; // Clear the input field
        }
    });

    // Handle form submission
    // const form = document.getElementById('your-form-id'); // Replace 'your-form-id' with your actual form ID
    // form.addEventListener('submit', (event) => {
    //     if (!isValidFileFormat(thumbnailInput, thumbnailAllowedFormats) || !isValidFileFormat(videoInput, videoAllowedFormats)) {
    //         showAlert('Invalid File Formats', 'Please upload files with allowed formats.', 'error');
    //         event.preventDefault(); // Prevent form submission
    //     }
    // });
    // Handle form submission
    const form = document.getElementById('topicform'); // Replace 'your-form-id' with your actual form ID
    form.addEventListener('submit', (event) => {
        
        const quill = new Quill('#kt_docs_quill_editor');

        // Extract content from Quill editor
        const descriptionContent = quill.root.innerHTML;

        // Set the description content to the hidden input field
        document.getElementById('description').value = descriptionContent;

        
    });
</script>


@endsection