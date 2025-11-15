@extends('layouts.app')

@section('title', 'Home - UTS Web Service')

@section('content')
<div class="home-container">
    <div class="hero-section">
        <h1 class="hero-title">{{ $description }}</h1>
        <p class="hero-subtitle">Jelajahi destinasi wisata terbaik di dunia</p>
        <div class="count-badge">Total Destinasi: {{ $total }}</div>
    </div>

    <div class="destinations-grid">
        @foreach ($destinations as $destination)
            <div class="destination-card {{ in_array($destination['id'], [2,4,8]) ? 'wide' : '' }}">
                <img src="{{ asset('images/' . $destination['image']) }}" alt="{{ $destination['name'] }}">
                <div class="destination-overlay">
                    <h3 class="destination-name">{{ $destination['name'] }}</h3>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
