@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('sections.items.hero')

    <!-- Items Search -->
    <div class="py-12 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search & Filters -->
            @include('sections.items.search')

            <!-- Items Grid -->
            @include('sections.items.grid')

            <!-- Pagination -->
            @include('sections.items.pagination')
        </div>
    </div>

    <!-- Contact Form -->
    @include('sections.shared.contact')
@endsection

@push('styles')
    <link href="{{ asset('css/pages/items/items.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/pages/items/items.js') }}"></script>
@endpush
