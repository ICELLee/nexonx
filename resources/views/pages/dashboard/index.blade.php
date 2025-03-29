@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('sections.dashboard.hero')

    <!-- Dashboard Content -->
    <div class="py-12 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Stats -->
            @include('sections.dashboard.stats')

            <!-- Main Content -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar -->
                @include('sections.dashboard.sidebar')

                <!-- Main Panel -->
                @include('sections.dashboard.main')
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('css/pages/dashboard/dashboard.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/pages/dashboard/dashboard.js') }}"></script>
@endpush
