@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('sections.cheats.hero')

    <!-- Cheats List -->
    <div class="py-16 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Cheats Grid -->
            @include('sections.cheats.grid')
        </div>
    </div>

    <!-- Features Section -->
    @include('sections.cheats.features')

    <!-- Contact Form -->
    @include('sections.shared.contact')
@endsection

@push('styles')
    <link href="{{ asset('css/pages/cheats/cheats.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/pages/cheats/cheats.js') }}"></script>
@endpush
