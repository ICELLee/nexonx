@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('sections.reports.hero')

    <!-- Reports Grid -->
    <div class="py-16 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Reports Cards -->
            @include('sections.reports.cards')
        </div>
    </div>

    <!-- Contact Form -->
    @include('sections.shared.contact')
@endsection

@push('styles')
    <link href="{{ asset('css/pages/reports/reports.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/pages/reports/reports.js') }}"></script>
@endpush
