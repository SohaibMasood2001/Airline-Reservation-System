@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Flights') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Flight Name</th>
                                    <th scope="col">Number of Seats</th>
                                    <th scope="col">Departure</th>
                                    <th scope="col">Destination</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($flights as $flight)
                                    <tr>
                                        <th scope="row">{{ $flight->id }}</th>
                                        <td>{{ $flight->name }}</td>
                                        <td>{{ $flight->seats }}</td>
                                        <td>{{ $flight->departure }}</td>
                                        <td>{{ $flight->destination }}</td>
                                        <td>{{ $flight->class }}</td>
                                        <td>
                                            <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('flights.destroy', $flight->id) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this flight?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
