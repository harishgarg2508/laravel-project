<!DOCTYPE html>
<html>
<head>
    <title>Dental Clinic - Contact Us</title>
    <>
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
            height: 100vh;
            display: flex;
            align-items: center;
            background: url("https://i.pinimg.com/736x/7b/f9/db/7bf9db263b113532a35f2949f7549ee6.jpg") bottom/cover;
            position: relative;
            margin-top: 0;
            color:black;
        }
        
        .hero:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3));
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
            max-width: 600px;
            animation: fadeInUp 1s ease-out 0.5s backwards;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .cta-button {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .cta-button:hover {
            background: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
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
<!-- Contact -->
@extends('layouts.app')
@section('content')
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
                            <span class="contact-value">Gali No 7, Near Shishu Niketan School, Nayagaon, Chandigarh, Punjab 160103</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-text">
                            <span class="contact-label">Phone</span>
                            <span class="contact-value">+91 7508574656</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-text">
                            <span class="contact-label">Email</span>
                            <span class="contact-value">sunrisedental817@gmail.com</span>
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
    @endsection
</body>
</html>
