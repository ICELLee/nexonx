@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('sections.friendfinder.hero')

    <!-- Friendfinder Main -->
    <div class="py-16 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Login Prompt -->
            @include('sections.friendfinder.login')

            <!-- User Grid -->
            @include('sections.friendfinder.grid')
        </div>
    </div>

    <!-- Contact Form -->
    @include('sections.shared.contact')
@endsection

@push('styles')
    <link href="{{ asset('css/pages/friendfinder/friendfinder.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/pages/friendfinder/friendfinder.js') }}"></script>
@endpush
