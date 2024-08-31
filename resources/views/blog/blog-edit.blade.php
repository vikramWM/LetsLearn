@extends('layouts-backend.app')
    @section('content')
    <style>
  /* Set the height of the Quill editor for desktop view */
 
    #kt_docs_quill_autosave {
      height: 400px; /* Adjust the height as needed */
    
  }
</style>

<div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
    <div class="container" id="kt_docs_content_container">
        <div class="card card-docs mb-2">
            <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                <div class="pt-10">
                    <form id="blogForm" action="{{ route('submit_blog') }}" method="post" enctype="multipart/form-data" onsubmit="return validateImage()">
                        @csrf
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Thumbnail</label>
                            <div class="col-lg-8">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                    <div class="image-input-wrapper w-125px h-125px" style="width: 200px !important; height:150px; background-image:  url(assets/media/avatars/blank.png)"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="photo" accept=".png, .jpg, .jpeg" onchange="showImageDimensionsAlert(this)">
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
                        <div class="mb-3">
                            <label for="blogTitle" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" id="blogTitle" name="blogTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="blogContent" class="form-label">Blog Content</label>
                            <!-- Quill editor container -->
                            <div id="kt_docs_quill_editor" style="height: 400px;"></div>
                            <!-- Hidden input field to store Quill editor content -->
                            <input type="hidden" id="blogContent" name="blogContent" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <!-- End of Blog submission form -->
                </div>
            </div>
        </div>
    </div>
</div>

        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <!-- Include SweetAlert2 library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		
<script>
    function showImageDimensionsAlert(input) {
        var file = input.files[0];

        // Check if a file is selected
        if (!file) {
            return true; // No file selected, allow form submission
        }

        // Check image dimensions
        var image = new Image();
        image.src = URL.createObjectURL(file);

        image.onload = function () {
            var minHeight = 300;
            var maxHeight = 450;
            var minWidth = 300;
            var maxWidth = 540;

            if (
                image.height < minHeight ||
                image.height > maxHeight ||
                image.width < minWidth ||
                image.width > maxWidth
            ) {
                // Show SweetAlert popup for invalid dimensions
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Image Dimensions',
                    text: 'Image dimensions must be between height and widht 300 to 450.',
                });

                // Clear the file input
                input.value = '';

                return false; // Prevent form submission
            }

            return true; // Valid dimensions, allow form submission
        };
    }
</script>
    @endsection