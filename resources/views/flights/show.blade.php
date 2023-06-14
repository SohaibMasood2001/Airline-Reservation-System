@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Flight Details') }}</div>

                    <div class="card-body">
                        <h5 class="card-title">Flight Name: {{ $flight->name }}</h5>
                        <p class="card-text">Number of Seats: {{ $flight->seats }}</p>
                        <p class="card-text">Departure: {{ $flight->departure }}</p>
                        <p class="card-text">Destination: {{ $flight->destination }}</p>
                        <p class="card-text">Class: {{ $flight->class }}</p>
                        <a href="{{ route('flights.index') }}" class="btn btn-primary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
