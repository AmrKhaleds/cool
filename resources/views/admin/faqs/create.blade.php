@extends('admin.layouts.app')
@php
    $title = 'Add Faq';
    $subTitle = 'Add Faq';
@endphp

@section('content')
    <div class="card h-100 p-0 radius-12">
        <div class="card-body p-24">
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-xl-8 col-lg-10">
                    <div class="card border">
                        <div class="card-body">
                            <form action="{{ route('admin.faqs.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    {{-- Question --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="question"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Question [En] <span class="text-danger-600">*</span>
                                        </label>
                                        <textarea class="form-control radius-8 @error('question.en') is-invalid @enderror" id="question"
                                            placeholder="Enter Question" name="question[en]">{{ old('question.en') }}</textarea>
                                        @error('question.en')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Question --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="question_ar"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Question [Ar] <span class="text-danger-600">*</span>
                                        </label>
                                        <textarea class="form-control radius-8 @error('question.ar') is-invalid @enderror" id="question_ar"
                                            placeholder="Enter Question" name="question[ar]">{{ old('question.ar') }}</textarea>
                                        @error('question.ar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Answer --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="answer"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Answer [En] <span class="text-danger-600">*</span>
                                        </label>
                                        <textarea class="form-control radius-8 @error('answer.en') is-invalid @enderror" id="answer"
                                            placeholder="Enter Answer" name="answer[en]">{{ old('answer.en') }}</textarea>
                                        @error('answer.en')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Answer --}}
                                    <div class="col-md-6 mb-20">
                                        <label for="answer_ar"
                                            class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Answer [Ar] <span class="text-danger-600">*</span>
                                        </label>
                                        <textarea class="form-control radius-8 @error('answer.ar') is-invalid @enderror" id="answer_ar"
                                            placeholder="Enter Answer" name="answer[ar]">{{ old('answer.ar') }}</textarea>
                                        @error('answer.ar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Buttons --}}
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <a href="{{ route('admin.faqs.index') }}"
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
