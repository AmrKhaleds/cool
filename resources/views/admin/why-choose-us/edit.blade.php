@extends('admin.layouts.app')
@php
    $title = 'Why Choose Us Settings';
    $subTitle = 'Why Choose Us';
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
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.why-choose-us.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Title --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Title [EN]</label>
                        <input type="text" name="title[en]" class="form-control"
                            value="{{ old('title.en', $whyChooseUs->getTranslation('title', 'en')) }}">
                    </div>
                    <div class="col-md-6">
                        <label>Title [AR]</label>
                        <input type="text" name="title[ar]" class="form-control"
                            value="{{ old('title.ar', $whyChooseUs->getTranslation('title', 'ar')) }}">
                    </div>
                </div>

                {{-- Description --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Description [EN]</label>
                        <textarea name="description[en]" class="form-control">{{ old('description.en', $whyChooseUs->getTranslation('description', 'en')) }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label>Description [AR]</label>
                        <textarea name="description[ar]" class="form-control">{{ old('description.ar', $whyChooseUs->getTranslation('description', 'ar')) }}</textarea>
                    </div>
                </div>

                {{-- Cards --}}
                @for ($i = 1; $i <= 4; $i++)
                    <h5 class="mt-4">Card {{ $i }}</h5>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Card Title [EN]</label>
                            <input type="text" name="card_title_{{ $i }}[en]" class="form-control"
                                value="{{ old("card_title_$i.en", $whyChooseUs->getTranslation("card_title_$i", 'en')) }}">
                        </div>
                        <div class="col-md-6">
                            <label>Card Title [AR]</label>
                            <input type="text" name="card_title_{{ $i }}[ar]" class="form-control"
                                value="{{ old("card_title_$i.ar", $whyChooseUs->getTranslation("card_title_$i", 'ar')) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Card Description [EN]</label>
                            <textarea name="card_description_{{ $i }}[en]" class="form-control">{{ old("card_description_$i.en", $whyChooseUs->getTranslation("card_description_$i", 'en')) }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label>Card Description [AR]</label>
                            <textarea name="card_description_{{ $i }}[ar]" class="form-control">{{ old("card_description_$i.ar", $whyChooseUs->getTranslation("card_description_$i", 'ar')) }}</textarea>
                        </div>
                    </div>
                @endfor

                <div class="col-md-6">
                    <div class="card h-100 p-0">
                        <div class="card-header border-bottom bg-base py-16 px-24">
                            <h6 class="text-lg fw-semibold mb-0">Image Upload *</h6>
                        </div>
                        <div class="card-body p-24">
                            <div class="upload-image-wrapper d-flex align-items-center gap-3">

                                {{-- Preview box --}}
                                <div
                                    class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 {{ $whyChooseUs->hasMedia('why_choose_us') ? '' : 'd-none' }}">

                                    {{-- Remove button (optional functionality) --}}
                                    <button type="button"
                                        class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                        <iconify-icon icon="radix-icons:cross-2"
                                            class="text-xl text-danger-600"></iconify-icon>
                                    </button>

                                    {{-- Preview image --}}
                                    <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                        src="{{ $whyChooseUs->getFirstMediaUrl('why_choose_us') ?: asset('assets/images/user.png') }}"
                                        alt="uploaded image">
                                </div>

                                {{-- Upload input --}}
                                <label
                                    class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                    for="why-choose-upload">

                                    <iconify-icon icon="solar:camera-outline"
                                        class="text-xl text-secondary-light"></iconify-icon>
                                    <span class="fw-semibold text-secondary-light">Upload</span>
                                    <input id="why-choose-upload" type="file" hidden name="image">
                                </label>

                            </div>
                        </div>
                    </div>
                </div>


                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
