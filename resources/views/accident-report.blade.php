@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <h2 class="text-center">Accident Investigation Report</h2> --}}
    <div class="card">
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @livewire('accident-report-form')
        </div>
    </div>
</div>
@endsection
