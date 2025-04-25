<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bright Smile Dental</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- important for mobile -->
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
            white-space: nowrap;
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

        nav {
            display: flex;
            align-items: center;
        }

        .nav-toggle {
            display: none;
            font-size: 1.8rem;
            color: white;
            background: none;
            border: none;
            cursor: pointer;
        }

        ul.nav-links {
            display: flex;
            list-style: none;
        }

        ul.nav-links li {
            margin-left: 1.5rem;
        }

        ul.nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        ul.nav-links li a:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease;
        }

        ul.nav-links li a:hover:before {
            width: 100%;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-toggle {
                display: block;
            }

            ul.nav-links {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--secondary);
                flex-direction: column;
                align-items: center;
                gap: 1rem;
                padding: 1rem 0;
                display: none;
            }

            ul.nav-links.active {
                display: flex;
            }

            ul.nav-links li {
                margin-left: 0;
            }
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
            <button class="nav-toggle" onclick="toggleMenu()">☰</button>
            <nav>
                <ul class="nav-links" id="navLinks">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('appointment.form') }}" class="appointment-btn">Book Appointment</a></li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- Main Content --}}
    <main style="margin-top: 100px;">
        @yield('content')
    </main>

    <script>
        function toggleMenu() {
            document.getElementById('navLinks').classList.toggle('active');
        }
    </script>
</body>
</html>
