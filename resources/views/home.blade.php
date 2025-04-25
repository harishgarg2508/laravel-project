<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Smile Dental Clinic</title>
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
        
        /* Header & Navigation */
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
        
        /* Hero Section */
      
        .hero {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: url("https://i.pinimg.com/736x/7b/f9/db/7bf9db263b113532a35f2949f7549ee6.jpg") bottom/cover;            background-size: cover;
            clip-path: polygon(15% 0, 100% 0%, 100% 100%, 0% 100%);
            box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.3;
            background: #3498db;
            animation: float 6s infinite ease-in-out;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .hero-content {
            width: 50%;
            padding: 50px 0;
        }
        
        h1 {
            font-size: 3.5rem;
            color: #2c3e50;
            margin-bottom: 20px;
            line-height: 1.2;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease forwards;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            color: #34495e;
            margin-bottom: 40px;
            line-height: 1.6;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease forwards 0.3s;
        }
        .cta-group {
            display: flex;
            gap: 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease forwards 0.6s;
        }
        
        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 10px 20px rgba(52, 152, 219, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #2980b9 0%, #3498db 100%);
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .cta-button:hover::before {
            left: 0;
        }
        
        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(52, 152, 219, 0.4);
        }
        
        .secondary-button {
            display: inline-block;
            padding: 15px 30px;
            background: transparent;
            color: #3498db;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            border: 2px solid #3498db;
            transition: all 0.3s ease;
        }
        
        .secondary-button:hover {
            background: rgba(52, 152, 219, 0.1);
            transform: translateY(-5px);
        }
        
        .highlight {
            display: inline-block;
            color: #3498db;
            position: relative;
        }
        
        .highlight::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(52, 152, 219, 0.2);
            z-index: -1;
            transform: scaleX(0);
            transform-origin: right;
            animation: highlightAnim 1s ease forwards 1s;
        }
        
        @keyframes highlightAnim {
            to {
                transform: scaleX(1);
                transform-origin: left;
            }
        }
        
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 50px;
            border: 2px solid #3498db;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            padding-top: 10px;
            opacity: 0;
            animation: fadeIn 1s ease forwards 1.2s;
        }
        
        .scroll-dot {
            width: 6px;
            height: 6px;
            background: #3498db;
            border-radius: 50%;
            animation: scrollAnim 1.5s infinite;
        }
        
        @keyframes scrollAnim {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(15px); opacity: 0; }
        }
        
        @keyframes fadeIn {
            to { opacity: 1; }
        }
        
        .waviy {
            position: relative;
            display: inline-block;
        }
        
        .waviy span {
            position: relative;
            display: inline-block;
            font-size: 3.5rem;
            color: #2c3e50;
            animation: flip 2s infinite;
            animation-delay: calc(.1s * var(--i));
            opacity: 0;
        }
        
        @keyframes flip {
            0%, 80% { transform: rotateY(360deg); opacity: 1; }
            40% { transform: rotateY(0); opacity: 1; }
        }
        
        @media (max-width: 992px) {
            .hero-content {
                width: 70%;
            }
            
            .hero::before {
                width: 100%;
                opacity: 0.2;
                clip-path: none;
            }
        }
        
        @media (max-width: 768px) {
            .hero-content {
                width: 100%;
                text-align: center;
            }
            
            h1 {
                font-size: 2.5rem;
            }
            
            .cta-group {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Services Section */
        .services {
            padding: 5rem 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            margin: 1rem auto;
            border-radius: 2px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-img {
            height: 200px;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--primary);
        }
        
        .service-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .service-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--accent);
        }
        
        .service-desc {
            margin-bottom: 1.5rem;
            line-height: 1.6;
            flex-grow: 1;
        }
        
        .service-link {
            display: inline-block;
            color: var(--secondary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            align-self: flex-start;
            margin-top: auto;
        }
        
        .service-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }
        
        /* About Section */
        .about {
            padding: 5rem 0;
            background-color: #f8f9fa;
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 3rem;
        }
        
        .about-img {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            animation: float 5s ease-in-out infinite;
        }
        
        .about-img img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .about-text {
            flex: 1;
            animation: fadeInRight 1s ease-out;
        }
        
        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        .about-text p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
            color: #555;
        }
        
        .stats {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .stat {
            text-align: center;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--secondary);
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .stat-text {
            color: #666;
            font-size: 0.9rem;
        }
        
        /* Testimonials */
        .testimonials {
            padding: 5rem 0;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        }
        
        .testimonial-slider {
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }
        
        .testimonial {
            text-align: center;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            margin: 1rem;
            animation: slideIn 15s linear infinite;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            line-height: 1.8;
            color: #555;
        }
        
        .testimonial-author {
            font-weight: bold;
            color: var(--dark);
        }
        
        .testimonial-role {
            color: #777;
            font-size: 0.9rem;
        }
        
        /* Contact */
        .contact {
            padding: 5rem 0;
            background-color: white;
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }
        
        .contact-info {
            animation: fadeInLeft 1s ease-out;
        }
        
        .contact-form {
            animation: fadeInRight 1s ease-out;
        }
        
        .contact-info h3, .contact-form h3 {
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            color: var(--accent);
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        
        .contact-text {
            flex: 1;
        }
        
        .contact-label {
            font-weight: bold;
            margin-bottom: 0.3rem;
            display: block;
            color: var(--dark);
        }
        
        .contact-value {
            color: #555;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(76, 201, 240, 0.3);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .submit-btn:hover {
            background: linear-gradient(to right, var(--secondary), var(--accent));
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 0 1rem;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .footer-links a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #333;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }
        
        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 1.5rem;
            text-align: center;
            color: #999;
            font-size: 0.9rem;
        }
        
        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
        
        @keyframes slideIn {
            0%, 20% {
                transform: translateX(0);
                opacity: 1;
            }
            25%, 45% {
                transform: translateX(-100%);
                opacity: 0;
            }
            50%, 70% {
                transform: translateX(100%);
                opacity: 0;
            }
            75%, 95% {
                transform: translateX(0);
                opacity: 1;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            nav ul {
                display: none;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .service-card {
                max-width: 400px;
                margin: 0 auto;
            }
        }
       
    </style>
</head>
<body>
@extends('layouts.app')
@section('content')
    <!-- Header & Navigation -->
    <!-- <header>
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
    </header> -->


    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="particles" id="particles"></div>
        <div class="container">
            <div class="hero-content">
                <div class="waviy">
                    <span style="--i:1">Y</span>
                    <span style="--i:2">o</span>
                    <span style="--i:3">u</span>
                    <span style="--i:4">r</span>
                    <span style="--i:5">&nbsp;</span>
                    <span style="--i:6">P</span>
                    <span style="--i:7">e</span>
                    <span style="--i:8">r</span>
                    <span style="--i:9">f</span>
                    <span style="--i:10">e</span>
                    <span style="--i:11">c</span>
                    <span style="--i:12">t</span>
                </div>
                <h1><span class="highlight">Smile</span> Starts Here</h1>
                <p>Experience exceptional dental care with our team of skilled professionals using 
                   <span class="typing-text"></span> technology for a comfortable and stress-free visit.</p>
                <div class="cta-group">
                    <a href="#appointment" class="cta-button">
                        <i class="fas fa-calendar-alt"></i> Schedule Appointment
                    </a>
                    <a href="#services" class="secondary-button">
                        <i class="fas fa-tooth"></i> Our Services
                    </a>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-dot"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">🦷</div>
                    <div class="service-content">
                        <h3 class="service-title">General Dentistry</h3>
                        <p class="service-desc">Comprehensive dental check-ups, cleanings, fillings, and preventive care to maintain your oral health.</p>
                        <a href="{{ route('services') }}" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">✨</div>
                    <div class="service-content">
                        <h3 class="service-title">Cosmetic Dentistry</h3>
                        <p class="service-desc">Transform your smile with teeth whitening, veneers, bonding, and other aesthetic treatments.</p>
                        <a href="{{ route('services') }}"" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">👑</div>
                    <div class="service-content">
                        <h3 class="service-title">Restorative Dentistry</h3>
                        <p class="service-desc">Restore damaged teeth with crowns, bridges, implants, and other specialized procedures.</p>
                        <a href="{{ route('services') }}" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">😁</div>
                    <div class="service-content">
                        <h3 class="service-title">Orthodontics</h3>
                        <p class="service-desc">Straighten your teeth with traditional braces or clear aligners for a perfect smile.</p>
                        <a href="{{ route('services') }}" class="service-link">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-img">
                    <img src="https://github.com/harishgarg2508/dental-clinic-website/blob/main/public/assets/john.jpg?raw=true" alt="Dental Team">
                </div>
                <div class="about-text">
                    <h2>Expert Care For Your Smile</h2>
                    <p>At Bright Smile Dental, we believe everyone deserves access to high-quality dental care. Our team of experienced dentists and hygienists use the latest techniques and technology to provide personalized treatment in a comfortable environment.</p>
                    <p>With over 20 years of experience, we've helped thousands of patients achieve and maintain optimal oral health and beautiful smiles. Our patient-centered approach means we take the time to understand your unique needs and concerns.</p>
                    <div class="stats">
                        <div class="stat">
                            <span class="stat-number">15+</span>
                            <span class="stat-text">Years Experience</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">10k+</span>
                            <span class="stat-text">Happy Patients</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">25+</span>
                            <span class="stat-text">Dental Awards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Patients Say</h2>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <p class="testimonial-text">"The team at Bright Smile Dental made me feel comfortable from the moment I walked in. My dental anxiety is now a thing of the past thanks to their gentle approach and state-of-the-art facilities."</p>
                    <div class="testimonial-author">Sarah Johnson</div>
                    <div class="testimonial-role">Patient for 3 years</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-text">
                            <span class="contact-label">Address</span>
                            <span class="contact-value">123 Dental Street, Medical Center, City</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-text">
                            <span class="contact-label">Phone</span>
                            <span class="contact-value">+1 (555) 123-4567</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-text">
                            <span class="contact-label">Email</span>
                            <span class="contact-value">info@brightsmile.com</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div class="contact-text">
                            <span class="contact-label">Working Hours</span>
                            <span class="contact-value">Mon-Fri: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 3:00 PM</span>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Your Phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Bright Smile Dental</h3>
                    <p>Providing exceptional dental care with a gentle touch. Your comfort and satisfaction are our top priorities.</p>
                    <div class="social-links">
                        <a href="#" class="social-icon">f</a>
                        <a href="#" class="social-icon">t</a>
                        <a href="#" class="social-icon">in</a>
                        <a href="#" class="social-icon">ig</a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">General Dentistry</a></li>
                        <li><a href="#">Cosmetic Dentistry</a></li>
                        <li><a href="#">Restorative Dentistry</a></li>
                        <li><a href="#">Orthodontics</a></li>
                        <li><a href="#">Pediatric Dentistry</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Subscribe to receive dental tips, news and special offers.</p>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <button type="submit" class="submit-btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Bright Smile Dental. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    @endsection
</body>
</html>