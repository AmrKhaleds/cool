@extends('admin.layouts.app')
@php
    $title = 'Banner Settings';
    $subTitle = 'Banner Settings';
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
                            <form action="{{ route('admin.banners.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    {{-- title --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="title"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Title [En] <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control radius-8 @error('title.en') is-invalid @enderror"
                                            id="title" placeholder="Enter Full Title" name="title[en]"
                                            value="{{ old('title.en', $banner->getTranslation('title', 'en')) }}">
                                        @error('title.en')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- title --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="title_ar"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Title [Ar] <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control radius-8 @error('title.ar') is-invalid @enderror"
                                            id="title_ar" placeholder="Enter Full Title" name="title[ar]"
                                            value="{{ old('title.ar', $banner->getTranslation('title', 'ar')) }}">
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Description --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="description"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Description [En] <span class="text-danger-600">*</span>
                                        </label>
                                        <textarea class="form-control radius-8 @error('description.en') is-invalid @enderror" id="description"
                                            placeholder="Enter Description" name="description[en]">{{ old('description.en', $banner->getTranslation('description', 'en')) }}</textarea>
                                        @error('description.en')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Description --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="description_ar"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Description [Ar] <span class="text-danger-600">*</span>
                                        </label>
                                        <textarea class="form-control radius-8 @error('description.ar') is-invalid @enderror" id="description_ar"
                                            placeholder="Enter Description" name="description[ar]">{{ old('description.ar', $banner->getTranslation('description', 'ar')) }}</textarea>
                                        @error('description.ar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>


                                    {{-- link title --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="link"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Link Title [En] <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control radius-8 @error('link_title.en') is-invalid @enderror"
                                            id="link" placeholder="Enter Link Title" name="link_title[en]"
                                            value="{{ old('link_title.en', $banner->getTranslation('link_title', 'en')) }}">
                                        @error('link_title.en')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- link title --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="link_ar"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Link Title [Ar] <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control radius-8 @error('link_title.ar') is-invalid @enderror"
                                            id="link_ar" placeholder="Enter Link Title" name="link_title[ar]"
                                            value="{{ old('link_title.ar', $banner->getTranslation('link_title', 'ar')) }}">
                                        @error('link_title.ar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- link url --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="link_url"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Link Url <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control radius-8 @error('link') is-invalid @enderror"
                                            id="link_url" placeholder="Enter Link Url" name="link"
                                            value="{{ old('link', $banner->link) }}">
                                        @error('link')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card h-100 p-0">
                                            <div class="card-header border-bottom bg-base py-16 px-24">
                                                <h6 class="text-lg fw-semibold mb-0">Image Upload *</h6>
                                            </div>
                                            <div class="card-body p-24">
                                                <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                                    <div
                                                        class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 {{ $banner->hasMedia('banners') ? '' : 'd-none' }}">
                                                        <button type="button"
                                                            class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                            <iconify-icon icon="radix-icons:cross-2"
                                                                class="text-xl text-danger-600"></iconify-icon>
                                                        </button>

                                                            <img id="uploaded-img__preview"
                                                                class="w-100 h-100 object-fit-cover"
                                                                src="{{ $banner->getFirstMediaUrl('banners') ?: asset('assets/images/user.png') }}"
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
                                        <a href="{{ route('admin.banners.edit') }}"
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
