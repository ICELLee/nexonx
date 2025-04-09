@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 p-4 animate-fade-in">
        @include('sections.dashboard.stats')
        @include('sections.dashboard.hero')
    </div>

    <div class="mt-8 p-4">
        <h2 class="text-xl font-semibold text-white mb-4">Letzte Meldungen</h2>
        <livewire:reports.latest-reports />
    </div>
@endsection
