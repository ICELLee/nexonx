@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('sections.middleman.hero')

    <!-- Middleman Service -->
    <div class="py-16 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Service Info -->
            @include('sections.middleman.info')

            <!-- Trade Form -->
            @include('sections.middleman.form')
        </div>
    </div>

    <!-- Contact Form -->
    @include('sections.shared.contact')
@endsection

@push('styles')
    <link href="{{ asset('css/pages/middleman/middleman.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/pages/middleman/middleman.js') }}"></script>
@endpush
