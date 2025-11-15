<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS Web Service')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-image: url('/images/bckground.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            padding-top: 60px;
        }


        body::before {
            content: '';
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }
        nav {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            padding: 0.8rem 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }
        .nav-left a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .nav-student {
            color: white;
            font-weight: 600;
        }
        main { min-height: calc(100vh - 140px); }
        footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
            box-shadow: 0 -4px 12px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="nav-left">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            </div>
            <div class="nav-student">2301010022  - ENDAH KOMARIYAH LESTARI</div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} REMIDI UTS Web Service</p>
    </footer>
</body>
</html>
