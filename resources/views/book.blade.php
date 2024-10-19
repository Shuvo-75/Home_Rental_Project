@extends('layouts.app')

@section('content')
    @if(Auth::check())
        <h1>Book Property: {{ $property->title }}</h1>

        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <input type="hidden" name="property_id" value="{{ $property->id }}"> <!-- Hidden field for property ID -->
            <label for="booking_date">Booking Date:</label>
            <input type="date" name="booking_date" required> <!-- Input for booking date -->
            <button type="submit">Book Now</button> <!-- Submit button -->
        </form>
    @else
        <h1>Please log in to book this property.</h1>
        <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
    @endif
@endsection
