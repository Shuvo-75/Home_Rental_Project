<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Rental - Properties</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Link to the CSS file -->
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            @if(Auth::check())
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        </ul>
    </nav>

    <h1>Available Properties for Rent</h1>

    @if($properties->count())
        <ul class="property-list">
            @foreach($properties as $property)
                <li class="property-item">
                    <h2>{{ $property->title }}</h2>
                    <p>{{ $property->description }}</p>
                    <p><strong>Location:</strong> {{ $property->location }}</p>
                    <p><strong>Price:</strong> {{ $property->price }} Tk/month</p>
                    <p><strong>Rooms:</strong> {{ $property->rooms }}</p>
                    @if($property->image)
                        <img src="/images/{{ $property->image }}" alt="{{ $property->title }}">
                    @endif
                    <a href="{{ route('booking.create', $property->id) }}" class="book-button">Book Now</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No properties available right now.</p>
    @endif
</body>

</html>
