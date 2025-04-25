<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Suraj Sharma - Dental Surgeon</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            overflow-x: hidden;
        }

        .hero {
            height: 100vh;
            width: 100%;
            background: linear-gradient(135deg, #00a8ff, #0077b6);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            opacity: 0;
            transform: translateY(30px);
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0;
            transform: translateY(30px);
        }

        .tooth-icon {
            position: absolute;
            color: rgba(255, 255, 255, 0.1);
            z-index: 1;
        }

        .about-section {
            padding: 100px 20px;
            max-width: 1200px;
            margin: 0 auto;
            opacity: 0;
        }

        .about-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #0077b6;
        }

        .profile-container {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            align-items: center;
            justify-content: center;
        }

        .profile-image {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .profile-image-frame {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            background-color: #ddd;
            overflow: hidden;
            position: relative;
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            flex: 1.5;
            min-width: 300px;
        }

        .qualification-item {
            margin-bottom: 30px;
            opacity: 0;
            transform: translateX(30px);
        }

        .qualification-item h3 {
            font-size: 1.5rem;
            color: #0077b6;
            margin-bottom: 0.5rem;
        }

        .qualification-item p {
            font-size: 1.1rem;
            color: #555;
        }

        .services-section {
            padding: 100px 20px;
            background-color: #0077b6;
            color: white;
            opacity: 0;
        }

        .services-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-card {
            background-color: white;
            color: #333;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(50px);
            opacity: 0;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .service-card:hover {
            transform: translateY(0) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .service-icon {
            font-size: 3rem;
            color: #0077b6;
            margin-bottom: 20px;
        }

        .service-card h3 {
            margin-bottom: 15px;
        }

        .schedule-section {
            padding: 100px 20px;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
        }

        .schedule-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #0077b6;
        }

        .schedule-container {
            background-color: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .schedule-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
            opacity: 0;
            transform: translateX(-30px);
        }

        .schedule-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .schedule-label {
            font-weight: bold;
            color: #0077b6;
            font-size: 1.2rem;
        }

        .schedule-time {
            font-size: 1.2rem;
        }

        .contact-section {
            padding: 100px 20px;
            background-color: #0077b6;
            color: white;
            text-align: center;
            opacity: 0;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-item {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            flex: 1;
            min-width: 250px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(30px);
            opacity: 0;
        }

        .contact-icon {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .contact-item h3 {
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        .contact-item p {
            font-size: 1.1rem;
        }

        .floating-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        .call-to-action {
            margin-top: 40px;
            padding: 15px 40px;
            background-color: white;
            color: #0077b6;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: translateY(20px);
        }

        .call-to-action:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .footer {
            padding: 20px;
            text-align: center;
            background-color: #333;
            color: white;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .about-section h2, .services-section h2, .schedule-section h2, .contact-section h2 {
                font-size: 2rem;
            }

            .profile-image-frame {
                height: 300px;
            }
        }
    </style>
</head>
<body>
@extends('layouts.app')
@section('content')
    <section class="hero">
        <div class="floating-particles" id="particles"></div>
        <div class="hero-content">
            <h1>Dr. Suraj Sharma</h1>
            <p>Expert Dental Surgeon</p>
            <a href="{{ route('appointment.form') }}" class="call-to-action">Book an Appointment</a></li>
        </div>
    </section>

    <section class="about-section" id="about">
        <h2>About Dr. Sharma</h2>
        <div class="profile-container">
            <div class="profile-image">
                <div class="profile-image-frame">
                    <img src="https://github.com/harishgarg2508/dental-clinic-website/blob/main/public/assets/suraj.png?raw=true" alt="Dr. Suraj Sharma" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="profile-info">
                <div class="qualification-item">
                    <h3>Qualification</h3>
                    <p>BDS, MIDA</p>
                </div>
                <div class="qualification-item">
                    <h3>Specialization</h3>
                    <p>Dental Surgeon with extensive experience in providing expert dental care.</p>
                </div>
                <div class="qualification-item">
                    <h3>Professional Background</h3>
                    <p>Dr. Suraj Sharma has dedicated his career to providing exceptional dental care with a focus on patient comfort and advanced treatment techniques. With years of experience in dental surgery, Dr. Sharma combines clinical excellence with a gentle approach to ensure the best outcomes for his patients.</p>
                </div>
                <div class="qualification-item">
                    <h3>Philosophy of Care</h3>
                    <p>"My goal is to create a comfortable environment where patients feel informed and confident about their dental treatment. I believe in providing personalized care that addresses not just immediate concerns but long-term dental health."</p>
                </div>
            </div>
        </div>
    </section>

  

    <section class="schedule-section" id="schedule">
        <h2>Clinic Hours</h2>
        <div class="schedule-container">
            <div class="schedule-item">
                <span class="schedule-label">Morning Session</span>
                <span class="schedule-time">9:00 AM – 2:00 PM</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-label">Evening Session</span>
                <span class="schedule-time">3:00 PM – 8:00 PM</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-label">Appointment Booking</span>
                <span class="schedule-time">Available All Week</span>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <h2>Get in Touch</h2>
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">📱</div>
                <h3>Phone</h3>
                <p>75085 74656</p>
            </div>
            <div class="contact-item">
                <div class="contact-icon">🏥</div>
                <h3>Visit Us</h3>
                <p>Dr. Sharma's Dental Clinic</p>
                <p>Gali No 7, Near Shishu Niketan School, Nayagaon, Chandigarh, Punjab 160103</p>
            </div>
            <div class="contact-item">
                <div class="contact-icon">📧</div>
                <h3>Email</h3>
                <p>sunrisedental817@gmail.com</p>
            </div>
        </div>
        <button class="call-to-action">Schedule Your Visit Today</button>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Dr. Suraj Sharma Dental Clinic. All Rights Reserved.</p>
    </footer>

    <script>
        // Initialize GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Hero animations
        const heroTl = gsap.timeline({ defaults: { ease: "power3.out" } });
        heroTl.to(".hero h1", { opacity: 1, y: 0, duration: 1 })
            .to(".hero p", { opacity: 1, y: 0, duration: 1 }, "-=0.5")
            .to(".hero .call-to-action", { opacity: 1, y: 0, duration: 1 }, "-=0.5");

        // About section animation
        gsap.to(".about-section", {
            scrollTrigger: {
                trigger: ".about-section",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            duration: 1
        });

        // Qualification items staggered animation
        gsap.to(".qualification-item", {
            scrollTrigger: {
                trigger: ".profile-info",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            x: 0,
            duration: 0.8,
            stagger: 0.2
        });

        // Services section animation
        gsap.to(".services-section", {
            scrollTrigger: {
                trigger: ".services-section",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            duration: 1
        });

        // Service cards staggered animation
        gsap.to(".service-card", {
            scrollTrigger: {
                trigger: ".services-grid",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.2
        });

        // Schedule section animation
        gsap.to(".schedule-section", {
            scrollTrigger: {
                trigger: ".schedule-section",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            duration: 1
        });

        // Schedule items staggered animation
        gsap.to(".schedule-item", {
            scrollTrigger: {
                trigger: ".schedule-container",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            x: 0,
            duration: 0.8,
            stagger: 0.2
        });

        // Contact section animation
        gsap.to(".contact-section", {
            scrollTrigger: {
                trigger: ".contact-section",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            duration: 1
        });

        // Contact items staggered animation
        gsap.to(".contact-item", {
            scrollTrigger: {
                trigger: ".contact-info",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.2
        });

        // Contact CTA animation
        gsap.to(".contact-section .call-to-action", {
            scrollTrigger: {
                trigger: ".contact-section .call-to-action",
                start: "top 90%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            y: 0,
            duration: 0.8
        });

        // Floating particles animation
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const numberOfParticles = 30;

            for (let i = 0; i < numberOfParticles; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 5px and 15px
                const size = Math.random() * 10 + 5;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                
                particlesContainer.appendChild(particle);
                
                // Animate each particle
                gsap.to(particle, {
                    x: `random(-100, 100)`,
                    y: `random(-100, 100)`,
                    opacity: `random(0.1, 0.7)`,
                    duration: `random(15, 30)`,
                    ease: "sine.inOut",
                    repeat: -1,
                    yoyo: true
                });
            }
        }

        createParticles();

        // Add floating tooth icons to hero
        function createToothIcons() {
            const hero = document.querySelector('.hero');
            const numberOfIcons = 15;
            
            for (let i = 0; i < numberOfIcons; i++) {
                const toothIcon = document.createElement('div');
                toothIcon.classList.add('tooth-icon');
                toothIcon.innerHTML = '🦷';
                
                // Random size between 20px and 60px
                const size = Math.random() * 40 + 20;
                toothIcon.style.fontSize = `${size}px`;
                
                // Random position
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                toothIcon.style.left = `${posX}%`;
                toothIcon.style.top = `${posY}%`;
                
                hero.appendChild(toothIcon);
                
                // Animate each tooth icon
                gsap.to(toothIcon, {
                    x: `random(-50, 50)`,
                    y: `random(-50, 50)`,
                    rotate: `random(-45, 45)`,
                    opacity: `random(0.05, 0.2)`,
                    duration: `random(20, 40)`,
                    ease: "sine.inOut",
                    repeat: -1,
                    yoyo: true
                });
            }
        }

        createToothIcons();
    </script>
    @endsection
</body>
</html>