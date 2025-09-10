@extends('admin.layouts.app')
@php
    $title = 'Edit Review';
    $subTitle = 'Edit Review';
    $script = '<script>
        // =============================== Upload Single Image js start here ================================================
        const fileInput = document.getElementById("upload-file");
        const imagePreview = document.getElementById("uploaded-img__preview");
        const uploadedImgContainer = document.querySelector(".uploaded-img");
        const removeButton = document.querySelector(".uploaded-img__remove");

        fileInput.addEventListener("change", (e) => {
            if (e.target.files.length) {
                const src = URL.createObjectURL(e.target.files[0]);
                imagePreview.src = src;
                uploadedImgContainer.classList.remove("d-none");
            }
        });
        removeButton.addEventListener("click", () => {
            imagePreview.src = "";
            uploadedImgContainer.classList.add("d-none");
            fileInput.value = "";
        });
        // =============================== Upload Single Image js End here ================================================
    </script>';
@endphp

@section('content')
    <div class="card h-100 p-0 radius-12">
        <div class="card-body p-24">
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-xl-8 col-lg-10">
                    <div class="card border">
                        <div class="card-body">
                            <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    {{-- Review --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="review"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Review [En] <span class="text-danger-600">*</span>
                                        </label>
                                        <textarea class="form-control radius-8 @error('review.en') is-invalid @enderror" id="review"
                                            placeholder="Enter Review" name="review[en]">{{ old('review.en', $review->getTranslation('review', 'en')) }}</textarea>
                                        @error('review.en')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Description --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="review_ar"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Review [Ar] <span class="text-danger-600">*</span>
                                        </label>
                                        <textarea class="form-control radius-8 @error('review.ar') is-invalid @enderror" id="review_ar"
                                            placeholder="Enter Review" name="review[ar]">{{ old('review.ar', $review->getTranslation('review', 'ar')) }}</textarea>
                                        @error('review.ar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- client --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="client"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Client Name [En] <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control radius-8 @error('client') is-invalid @enderror"
                                            id="client" placeholder="Enter Client Name" name="client[en]"
                                            value="{{ old('client.en', $review->getTranslation('client', 'en')) }}">
                                        @error('client.en')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- client --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="client_ar"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Client Name [Ar] <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control radius-8 @error('client.ar') is-invalid @enderror"
                                            id="client_ar" placeholder="Enter Full Client" name="client[ar]"
                                            value="{{ old('client.ar', $review->getTranslation('client', 'ar')) }}">
                                        @error('client')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- stars --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="stars"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Stars <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="number" min="0" max="5" step="1"
                                            class="form-control radius-8 @error('stars') is-invalid @enderror"
                                            id="stars" placeholder="Enter Stars" name="stars"
                                            value="{{ old('stars', $review->stars) }}">
                                        @error('stars')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card h-100 p-0">
                                            <div class="card-header border-bottom bg-base py-16 px-24">
                                                <h6 class="text-lg fw-semibold mb-0">Image Upload</h6>
                                            </div>
                                            <div class="card-body p-24">
                                                <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                                    <div
                                                        class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 {{ $review->hasMedia('reviews') ? '' : 'd-none' }}">
                                                        <button type="button"
                                                            class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                            <iconify-icon icon="radix-icons:cross-2"
                                                                class="text-xl text-danger-600"></iconify-icon>
                                                        </button>
                                                        <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                            src="{{ $review->getFirstMediaUrl('reviews') ?: asset('assets/images/user.png') }}"
                                                            alt="image">
                                                    </div>

                                                    <label
                                                        class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                        for="upload-file">
                                                        <iconify-icon icon="solar:camera-outline"
                                                            class="text-xl text-secondary-light"></iconify-icon>
                                                        <span class="fw-semibold text-secondary-light">Upload</span>
                                                        <input id="upload-file" type="file" hidden=""
                                                            name="image">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Buttons --}}
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <a href="{{ route('admin.reviews.index') }}"
                                            class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-56 py-11 radius-8 text-decoration-none">
                                            Cancel
                                        </a>
                                        <button type="submit"
                                            class="btn btn-primary border border-primary-600 text-md px-56 py-12 radius-8">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
