@extends('admin.layouts.app')
@php
    $title = 'Company';
    $subTitle = 'Settings - Company';
@endphp

@section('content')
    <div class="card h-100 p-0 radius-12 overflow-hidden">
        <div class="card-body p-40">
            <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    {{-- Full Name (ar) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_name_ar" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Full Name (ar) <span class="text-danger-600">*</span>
                            </label>
                            <input type="text" class="form-control radius-8" id="site_name_ar" name="site_name_ar"
                                placeholder="Enter Full Name"
                                value="{{ old('site_name_ar', $settings->site_name_ar ?? '') }}">
                        </div>
                    </div>

                    {{-- Full Name (en) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_name_en" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Full Name (en) <span class="text-danger-600">*</span>
                            </label>
                            <input type="text" class="form-control radius-8" id="site_name_en" name="site_name_en"
                                placeholder="Enter Full Name"
                                value="{{ old('site_name_en', $settings->site_name_en ?? '') }}">
                        </div>
                    </div>

                    {{-- Meta Description (ar) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_meta_description_ar"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Meta Description (ar)
                            </label>
                            <textarea class="form-control radius-8" id="site_meta_description_ar" name="site_meta_description_ar"
                                placeholder="Enter meta description">{{ old('site_meta_description_ar', $settings->site_meta_description_ar ?? '') }}</textarea>
                        </div>
                    </div>

                    {{-- Meta Description (en) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_meta_description_en"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Meta Description (en)
                            </label>
                            <textarea class="form-control radius-8" id="site_meta_description_en" name="site_meta_description_en"
                                placeholder="Enter meta description">{{ old('site_meta_description_en', $settings->site_meta_description_en ?? '') }}</textarea>
                        </div>
                    </div>

                    {{-- Meta Keywords (ar) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_meta_keywords_ar"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Meta Keywords (ar)
                            </label>
                            <input type="text" class="form-control radius-8" id="site_meta_keywords_ar"
                                name="site_meta_keywords_ar" placeholder="keyword1, keyword2"
                                value="{{ old('site_meta_keywords_ar', $settings->site_meta_keywords_ar ?? '') }}">
                        </div>
                    </div>

                    {{-- Meta Keywords (en) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_meta_keywords_en"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Meta Keywords (en)
                            </label>
                            <input type="text" class="form-control radius-8" id="site_meta_keywords_en"
                                name="site_meta_keywords_en" placeholder="keyword1, keyword2"
                                value="{{ old('site_meta_keywords_en', $settings->site_meta_keywords_en ?? '') }}">
                        </div>
                    </div>

                    {{-- Meta Author (ar) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_meta_author_ar" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Meta Author (ar)
                            </label>
                            <input type="text" class="form-control radius-8" id="site_meta_author_ar"
                                name="site_meta_author_ar" placeholder="Enter author name"
                                value="{{ old('site_meta_author_ar', $settings->site_meta_author_ar ?? '') }}">
                        </div>
                    </div>

                    {{-- Meta Author (en) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_meta_author_en" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Meta Author (en)
                            </label>
                            <input type="text" class="form-control radius-8" id="site_meta_author_en"
                                name="site_meta_author_en" placeholder="Enter author name"
                                value="{{ old('site_meta_author_en', $settings->site_meta_author_en ?? '') }}">
                        </div>
                    </div>

                    {{-- First Address Title (ar) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="first_address_title_ar"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                First Address Title (ar)
                            </label>
                            <input type="text" class="form-control radius-8" id="first_address_title_ar"
                                name="first_address_title_ar" placeholder="e.g. Headquarters"
                                value="{{ old('first_address_title_ar', $settings->first_address_title_ar ?? '') }}">
                        </div>
                    </div>

                    {{-- First Address Title (en) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="first_address_title_en"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                First Address Title (en)
                            </label>
                            <input type="text" class="form-control radius-8" id="first_address_title_en"
                                name="first_address_title_en" placeholder="e.g. Headquarters"
                                value="{{ old('first_address_title_en', $settings->first_address_title_en ?? '') }}">
                        </div>
                    </div>

                    {{-- Address (ar) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="first_address_ar" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Address (ar)
                            </label>
                            <input type="text" class="form-control radius-8" id="first_address_ar"
                                name="first_address_ar" placeholder="Enter Your Address in Arabic"
                                value="{{ old('first_address_ar', $settings->first_address_ar ?? '') }}">
                        </div>
                    </div>

                    {{-- Address (en) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="first_address_en" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Address (en)
                            </label>
                            <input type="text" class="form-control radius-8" id="first_address_en"
                                name="first_address_en" placeholder="Enter Your Address in English"
                                value="{{ old('first_address_en', $settings->first_address_en ?? '') }}">
                        </div>
                    </div>

                    {{-- Second Address Title (ar) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="second_address_title_ar"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Second Address Title (ar)
                            </label>
                            <input type="text" class="form-control radius-8" id="second_address_title_ar"
                                name="second_address_title_ar" placeholder="Branch"
                                value="{{ old('second_address_title_ar', $settings->second_address_title_ar ?? '') }}">
                        </div>
                    </div>

                    {{-- Second Address Title (en) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="second_address_title_en"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Second Address Title (en)
                            </label>
                            <input type="text" class="form-control radius-8" id="second_address_title_en"
                                name="second_address_title_en" placeholder="Branch"
                                value="{{ old('second_address_title_en', $settings->second_address_title_en ?? '') }}">
                        </div>
                    </div>

                    {{-- Second Address (ar) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="second_address_ar" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Second Address (ar)
                            </label>
                            <input type="text" class="form-control radius-8" id="second_address_ar"
                                name="second_address_ar" placeholder="Enter Address in Arabic"
                                value="{{ old('second_address_ar', $settings->second_address_ar ?? '') }}">
                        </div>
                    </div>

                    {{-- Second Address (en) --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="second_address_en" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Second Address (en)
                            </label>
                            <input type="text" class="form-control radius-8" id="second_address_en"
                                name="second_address_en" placeholder="Enter Address in English"
                                value="{{ old('second_address_en', $settings->second_address_en ?? '') }}">
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="first_address_phone"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Phone Number
                            </label>
                            <input type="text" class="form-control radius-8" id="first_address_phone"
                                name="first_address_phone" placeholder="Enter phone number"
                                value="{{ old('first_address_phone', $settings->first_address_phone ?? '') }}">
                        </div>
                    </div>

                    {{-- Second Phone --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="second_address_phone"
                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Second Phone
                            </label>
                            <input type="text" class="form-control radius-8" id="second_address_phone"
                                name="second_address_phone" placeholder="Enter phone number"
                                value="{{ old('second_address_phone', $settings->second_address_phone ?? '') }}">
                        </div>
                    </div>


                    {{-- Logo --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_logo" class="form-label fw-semibold text-primary-light text-sm mb-8">Site
                                Logo</label>
                            <input type="file" class="form-control radius-8" id="site_logo" name="site_logo">
                            @if (!empty($settings->site_logo))
                                <img src="{{ asset('storage/' . $settings->site_logo) }}" alt="Logo" class="mt-2"
                                    style="height:50px;">
                            @endif
                        </div>
                    </div>

                    {{-- Favicon --}}
                    <div class="col-sm-6">
                        <div class="mb-20">
                            <label for="site_favicon" class="form-label fw-semibold text-primary-light text-sm mb-8">Site
                                Favicon</label>
                            <input type="file" class="form-control radius-8" id="site_favicon" name="site_favicon">
                            @if (!empty($settings->site_favicon))
                                <img src="{{ asset('storage/' . $settings->site_favicon) }}" alt="Favicon"
                                    class="mt-2" style="height:30px;">
                            @endif
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                        <button type="reset"
                            class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8">
                            Reset
                        </button>
                        <button type="submit"
                            class="btn btn-primary border border-primary-600 text-md px-24 py-12 radius-8">
                            Save Change
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
