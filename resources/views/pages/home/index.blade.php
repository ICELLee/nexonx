@extends('layouts.app')

@section('content')
    <!-- Hero Slider -->
    @include('sections.home.hero')

    <!-- Main Content -->
    <div class="py-12 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            @include('sections.home.welcome')

            <!-- Tools Section -->
            @include('sections.home.tools')

            <!-- Stats Section -->
            @include('sections.home.stats')

            <!-- About Section -->
            @include('sections.home.about')
        </div>
    </div>

    <!-- Contact Form -->
    @include('sections.shared.contact')
@endsection

@push('styles')
    <link href="{{ asset('css/pages/home/home.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/pages/home/home.js') }}"></script>
@endpush
