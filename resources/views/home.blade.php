@extends('layouts.app')

@section('title', 'Home - UTS Web Service')

@section('content')
    <style>
        .home-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 3rem;
            padding: 2rem;
        }

        .hero-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);
            line-height: 1.4;
        }

        .hero-subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            margin-top: 1rem;
        }

        .count-badge {
            display: inline-block;
            background: rgba(52, 152, 219, 0.9);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-size: 1.1rem;
            margin-top: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            font-weight: 600;
        }

        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .destination-card {
            position: relative;
            height: 250px;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        /* Card yang mengambil 2 kolom */
        .destination-card.wide {
            grid-column: span 2;
        }

        .destination-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
        }

        .destination-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .destination-card:hover img {
            transform: scale(1.1);
        }

        .destination-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.4) 70%, transparent 100%);
            padding: 1.5rem;
            color: white;
        }

        .destination-name {
            font-size: 1.2rem;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            margin: 0;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 1.8rem;
            }

            .destinations-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
    </style>

    <div class="home-container">
        <!-- Hero Section -->
        <div class="hero-section">
            <h1 class="hero-title">
                {{ $description }}
            </h1>
            <p class="hero-subtitle">
                Jelajahi destinasi wisata terbaik di dunia
            </p>
            <div class="count-badge">
                Total Destinasi: {{ $total }}
            </div>
        </div>

        <!-- Destinations Grid -->
        <div class="destinations-grid">
            @foreach ($destinations as $destination)
                <div class="destination-card {{ in_array($destination['id'], [2, 4, 8]) ? 'wide' : '' }}">
                    <img src="{{ asset('images/' . $destination['image']) }}" alt="{{ $destination['name'] }}">
                    <div class="destination-overlay">
                        <h3 class="destination-name">{{ $destination['name'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection