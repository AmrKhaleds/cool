@extends('admin.layouts.app')
@php
    $title = 'Services';
    $subTitle = 'Services';
@endphp

@section('content')
    <div class="card h-100 p-0 radius-12">
        <div
            class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center flex-wrap gap-3 justify-content-between">
            <a href="{{ route('admin.services.create') }}"
                class="btn btn-primary text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2">
                <iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>
                Add New Service
            </a>
        </div>
        <div class="card-body p-24">
            <div class="table-responsive scroll-sm">
                <table class="table bordered-table sm-table mb-0">
                    <thead>
                        <tr>
                            <th>S.L</th>
                            <th>Image</th>
                            <th>Title [En]</th>
                            <th>Title [Ar]</th>
                            <th>Keywords</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration + ($services->currentPage() - 1) * $services->perPage() }}</td>

                                {{-- ✅ Service image --}}
                                <td class="text-center">
                                    <img src="{{ $service->getFirstMediaUrl('services', 'thumb')   }}"
                                         alt="Service Image"
                                         width="60"
                                         height="60"
                                         class="rounded">
                                </td>

                                {{-- ✅ Title translations --}}
                                <td>{{ $service->getTranslation('title', 'en') }}</td>
                                <td>{{ $service->getTranslation('title', 'ar') }}</td>

                                {{-- ✅ Keywords (show based on current locale) --}}
                                <td>{{ $service->getTranslation('keywords', app()->getLocale()) }}</td>

                                {{-- ✅ Actions --}}
                                <td class="text-center">
                                    <div class="d-flex align-items-center gap-10 justify-content-center">
                                        <a href="{{ route('admin.services.edit', $service->id) }}"
                                            class="bg-success-focus text-success-600 bg-hover-success-200 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle">
                                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                        </a>
                                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this service?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle border-0">
                                                <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">No services found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mt-24">
                <span>
                    Showing {{ $services->firstItem() ?? 0 }} to {{ $services->lastItem() ?? 0 }} of {{ $services->total() ?? 0 }} entries
                </span>
                {{ $services->links() }}
            </div>
        </div>
    </div>
@endsection
