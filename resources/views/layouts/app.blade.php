<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bright Smile Dental</title>
    <style>
        :root {
            --primary: #4cc9f0;
            --secondary: #4361ee;
            --accent: #3a0ca3;
            --light: #f8f9fa;
            --dark: #212529;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }
        .appointment-btn {
            background-color: white;
            color: var(--secondary);
            padding: 0.6rem 1.2rem;
            border-radius: 30px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: pulse 2s infinite;
        }
        
        .appointment-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background-color: var(--accent);
            color: white;
        }
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            animation: fadeInDown 1s ease-out;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .logo-icon {
            margin-right: 10px;
            font-size: 2rem;
        }

        .logo-text {
            animation: pulse 3s infinite;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.5rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        nav ul li a:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease;
        }

        nav ul li a:hover:before {
            width: 100%;
        }
    </style>
</head>
<body>
    {{-- Navbar/Header --}}
    <header>
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="logo">
                <span class="logo-icon">🦷</span>
                <span class="logo-text">Sunrise Dental</span>
            </a>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    {{-- <li><a href="#testimonials">Testimonials</a></li> --}}
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('appointment.form') }}" class="appointment-btn">Book Appointment</a></li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>
</body>
</html>
