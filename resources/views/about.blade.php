@extends('layouts.app') 

@section('title', 'Tentang Penulis')

@section('styles')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: white; 
        padding-top: 60px !important; /* untuk navbar */
    }

    .hero-about {
        padding: 60px 20px 40px; 
        text-align: center;
    }
    .hero-about h1 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 30px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    /* Container hanya 1 kartu dan di tengah */
    .authors-container {
        display: flex;
        justify-content: center; /* kartu di tengah */
        padding: 20px 10px 50px;
    }

    .author-card {
        background: rgba(255, 255, 255, 0.2); 
        border-radius: 20px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px); 
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 20px; 
        width: 350px; /* ukuran kartu */
        text-align: center;
        position: relative; 
        min-height: 380px;
    }

    .author-card h2 {
        font-weight: 600;
        margin-top: 10px;
    }

    .profile-pic-container {
        position: relative;
        width: 120px;
        height: 120px;
        margin: -60px auto 15px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }
    .profile-pic {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bio-section {
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        padding: 10px;
        margin-top: 15px;
        text-align: left;
        font-weight: 500;
    }
    .bio-label {
        font-weight: 600;
        color: #a0d4ff; 
        margin-bottom: 5px;
        font-size: 0.9em;
    }
    .bio-text { margin: 0; line-height: 1.4; }
</style>
@endsection


@section('content')
<div class="hero-about">
    <h1>Halaman ini dibuat oleh: {{ $authors[0]['nim'] }} - {{ $authors[0]['name'] }} (GENAP)</h1>
</div>


<div class="authors-container">
    @foreach($authors as $author)
        <div class="author-card">
            <div class="profile-pic-container">
                <img src="{{ asset('images/' . $author['image']) }}" alt="{{ $author['name'] }}" class="profile-pic">
            </div>
            <h2>{{ $author['name'] }}</h2>
            <p class="nim">{{ $author['nim'] }}</p>
            
            <div class="bio-section">
                <p class="bio-label">BIO</p>
                <p class="bio-text">{{ $author['bio'] }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
