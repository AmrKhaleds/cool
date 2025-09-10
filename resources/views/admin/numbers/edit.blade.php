@extends('admin.layouts.app')
@php
    $title = 'Edit Number';
    $subTitle = 'Edit Number';
@endphp

@section('content')
    <div class="card h-100 p-0 radius-12">
        <div class="card-body p-24">
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-xl-8 col-lg-10">
                    <div class="card border">
                        <div class="card-body">
                            <form action="{{ route('admin.numbers.update', $number->id) }}" method="POST"
                                enctype="multipart/form-data">
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
                                            class="form-control radius-8 @error('title') is-invalid @enderror"
                                            id="title" placeholder="Enter Full Title" name="title[en]"
                                            value="{{ old('title.en', $number->getTranslation('title', 'en')) }}">
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
                                            value="{{ old('title.ar', $number->getTranslation('title', 'ar')) }}">
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
                                            placeholder="Enter Description" name="description[en]">{{ old('description.en', $number->getTranslation('description', 'en')) }}</textarea>
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
                                            placeholder="Enter Description" name="description[ar]">{{ old('description.ar', $number->getTranslation('description', 'ar')) }}</textarea>
                                        @error('description.ar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Number --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="number"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Number <span class="text-danger-600">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control radius-8 @error('number') is-invalid @enderror"
                                            id="text" placeholder="Enter Number" name="number"
                                            value="{{ old('number', $number->number) }}">
                                        @error('number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Buttons --}}
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <a href="{{ route('admin.numbers.index') }}"
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
