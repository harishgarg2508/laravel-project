<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Services Section</title>
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #2d4059;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 70%;
            height: 3px;
            background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%);
            bottom: 0;
            left: 15%;
            transform: scaleX(0);
            transform-origin: center;
            animation: underlineAnimation 1.5s ease-in-out forwards;
        }

        @keyframes underlineAnimation {
            0% {
                transform: scaleX(0);
            }
            100% {
                transform: scaleX(1);
            }
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            perspective: 1000px;
        }

        .service-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.4s ease;
            transform-style: preserve-3d;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
            animation-delay: calc(var(--delay) * 0.2s);
        }

        .service-card:nth-child(1) { --delay: 1; }
        .service-card:nth-child(2) { --delay: 2; }
        .service-card:nth-child(3) { --delay: 3; }
        .service-card:nth-child(4) { --delay: 4; }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .service-card:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .service-img {
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3.5rem;
            background: linear-gradient(45deg, #f3f4f6 0%, #e5e7eb 100%);
            position: relative;
            overflow: hidden;
        }

        .service-img::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            transform: translateX(-100%);
        }

        .service-card:hover .service-img::before {
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .service-content {
            padding: 25px;
        }

        .service-title {
            color: #2d4059;
            margin-bottom: 15px;
            font-size: 1.4rem;
            position: relative;
            padding-bottom: 10px;
        }

        .service-title::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .service-card:hover .service-title::after {
            width: 80px;
        }

        .service-desc {
            color: #64748b;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .service-link {
            display: inline-block;
            text-decoration: none;
            color: #4facfe;
            font-weight: 600;
            position: relative;
            padding-bottom: 3px;
            transition: color 0.3s ease;
        }

        .service-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #00f2fe;
            transition: width 0.3s ease;
        }

        .service-link:hover {
            color: #00f2fe;
        }

        .service-link:hover::after {
            width: 100%;
        }

        /* Card-specific colors */
        .service-card:nth-child(1) .service-img {
            background: linear-gradient(45deg, #E3F2FD 0%, #BBDEFB 100%);
        }

        .service-card:nth-child(2) .service-img {
            background: linear-gradient(45deg, #E8F5E9 0%, #C8E6C9 100%);
        }

        .service-card:nth-child(3) .service-img {
            background: linear-gradient(45deg, #FFF3E0 0%, #FFE0B2 100%);
        }

        .service-card:nth-child(4) .service-img {
            background: linear-gradient(45deg, #F3E5F5 0%, #E1BEE7 100%);
        }

        /* Floating animation for icons */
        .service-card:nth-child(1) .service-img {
            animation: float 3s ease-in-out infinite;
        }

        .service-card:nth-child(2) .service-img {
            animation: float 3.5s ease-in-out infinite;
        }

        .service-card:nth-child(3) .service-img {
            animation: float 4s ease-in-out infinite;
        }

        .service-card:nth-child(4) .service-img {
            animation: float 4.5s ease-in-out infinite;
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

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }
            .services {
                padding: 60px 0;
            }
            .services-grid {
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .section-title h2 {
                font-size: 1.75rem;
            }
            .service-card {
                border-radius: 10px;
            }
            .service-img {
                height: 100px;
                font-size: 3rem;
            }
            .service-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Services Section -->
    @extends('layouts.app')
    @section('content')
    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="services-grid">
                <div class="service-card" data-service="general">
                    <div class="service-img">🦷</div>
                    <div class="service-content">
                        <h3 class="service-title">General Dentistry</h3>
                        <p class="service-desc">Comprehensive dental check-ups, cleanings, fillings, and preventive care to maintain your oral health.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" data-service="cosmetic">
                    <div class="service-img">✨</div>
                    <div class="service-content">
                        <h3 class="service-title">Cosmetic Dentistry</h3>
                        <p class="service-desc">Transform your smile with teeth whitening, veneers, bonding, and other aesthetic treatments.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" data-service="restorative">
                    <div class="service-img">👑</div>
                    <div class="service-content">
                        <h3 class="service-title">Restorative Dentistry</h3>
                        <p class="service-desc">Restore damaged teeth with crowns, bridges, implants, and other specialized procedures.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" data-service="orthodontic">
                    <div class="service-img">😁</div>
                    <div class="service-content">
                        <h3 class="service-title">Orthodontics</h3>
                        <p class="service-desc">Straighten your teeth with traditional braces or clear aligners for a perfect smile.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" data-service="pediatric">
                    <div class="service-img">👶</div>
                    <div class="service-content">
                        <h3 class="service-title">Pediatric Dentistry</h3>
                        <p class="service-desc">Specialized dental care for children in a friendly, comfortable environment.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" data-service="periodontal">
                    <div class="service-img">🔍</div>
                    <div class="service-content">
                        <h3 class="service-title">Periodontal Care</h3>
                        <p class="service-desc">Specialized treatment for gum disease and maintaining healthy gum tissue.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" data-service="emergency">
                    <div class="service-img">🚑</div>
                    <div class="service-content">
                        <h3 class="service-title">Emergency Dental Care</h3>
                        <p class="service-desc">Immediate attention for dental emergencies such as toothaches, broken teeth, or injuries.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" data-service="sedation">
                    <div class="service-img">😴</div>
                    <div class="service-content">
                        <h3 class="service-title">Sedation Dentistry</h3>
                        <p class="service-desc">Comfortable dental care for anxious patients with various sedation options.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
                <div class="service-card" data-service="tech">
                    <div class="service-img">🔬</div>
                    <div class="service-content">
                        <h3 class="service-title">Digital Dentistry</h3>
                        <p class="service-desc">Advanced technologies like digital X-rays, 3D imaging, and CAD/CAM for precision treatment.</p>
                        <a href="#" class="service-link">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Detail Modal -->
    <div class="service-modal" id="serviceModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-body">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>

    <style>
        /* Services Grid Styling */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transform: translateY(50px);
            opacity: 0;
        }

        .service-card.animate {
            transform: translateY(0);
            opacity: 1;
            transition-delay: calc(0.1s * var(--delay));
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .service-img {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .service-title {
            font-size: 22px;
            margin-bottom: 15px;
            color: #333;
        }

        .service-desc {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .service-link {
            display: inline-block;
            color: #4a90e2;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .service-link:hover {
            color: #2e6fc1;
            transform: translateX(5px);
        }

        /* Modal Styling */
        .service-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s ease;
            overflow-y: auto;
        }

        .service-modal.show {
            display: block;
            opacity: 1;
        }

        .modal-content {
            position: relative;
            background-color: #fff;
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: scale(0.7);
            transition: all 0.3s ease;
        }

        .service-modal.show .modal-content {
            transform: scale(1);
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 25px;
            font-size: 30px;
            color: #888;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .close-modal:hover {
            color: #333;
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 20px 0;
        }

        /* Modal Content Styling */
        .service-detail {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .service-hero {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 20px;
        }

        .service-icon {
            font-size: 60px;
            padding: 20px;
            background-color: #f5f8ff;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-header h2 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #333;
        }

        .service-header p {
            font-size: 18px;
            color: #666;
        }

        .service-features {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .feature-item {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease;
        }

        .feature-item.animate {
            opacity: 1;
            transform: translateY(0);
            transition-delay: calc(0.1s * var(--index));
        }

        .feature-item h4 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #4a90e2;
        }

        .feature-item p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        .cta-button {
            display: inline-block;
            background: #4a90e2;
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 20px;
            align-self: center;
            box-shadow: 0 5px 15px rgba(74, 144, 226, 0.3);
        }

        .cta-button:hover {
            background: #2e6fc1;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(74, 144, 226, 0.4);
        }

        /* Animation for service cards */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <script>
        // Intersection Observer to trigger animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const serviceCards = entry.target.querySelectorAll('.service-card');
                    serviceCards.forEach((card, index) => {
                        card.style.setProperty('--delay', index);
                        card.classList.add('animate');
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        observer.observe(document.querySelector('.services-grid'));

        // Glow hover effect
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%), #fff`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.background = '#fff';
            });
        });

        // Modal functionality
        const modal = document.getElementById('serviceModal');
        const modalBody = modal.querySelector('.modal-body');
        const closeBtn = modal.querySelector('.close-modal');

        // Service details content
        const serviceDetails = {
            general: {
                title: "General Dentistry",
                subtitle: "Comprehensive care for all your dental needs",
                icon: "🦷",
                description: "Our general dentistry services form the foundation of good oral health. We provide thorough examinations, professional cleanings, and preventive treatments to maintain your smile.",
                features: [
                    {
                        title: "Dental Check-ups",
                        description: "Comprehensive examination of your teeth, gums, and mouth to detect any issues early."
                    },
                    {
                        title: "Professional Cleanings",
                        description: "Removal of plaque and tartar buildup that regular brushing can't remove."
                    },
                    {
                        title: "Dental Fillings",
                        description: "Repair of cavities with tooth-colored composite materials for natural-looking results."
                    },
                    {
                        title: "Preventive Care",
                        description: "Fluoride treatments, sealants, and personalized oral hygiene instructions."
                    }
                ]
            },
            cosmetic: {
                title: "Cosmetic Dentistry",
                subtitle: "Transform your smile and boost your confidence",
                icon: "✨",
                description: "Our cosmetic dentistry services are designed to enhance the appearance of your smile. From minor adjustments to complete smile makeovers, we can help you achieve the look you desire.",
                features: [
                    {
                        title: "Teeth Whitening",
                        description: "Professional-grade whitening treatments that provide dramatic results in a single visit."
                    },
                    {
                        title: "Porcelain Veneers",
                        description: "Custom-made thin shells that cover the front surface of teeth to improve appearance."
                    },
                    {
                        title: "Dental Bonding",
                        description: "Application of tooth-colored resin to repair chips, cracks, or gaps in teeth."
                    },
                    {
                        title: "Smile Makeover",
                        description: "Comprehensive treatment plan combining multiple procedures for a complete transformation."
                    }
                ]
            },
            restorative: {
                title: "Restorative Dentistry",
                subtitle: "Rebuild your smile with advanced techniques",
                icon: "👑",
                description: "Our restorative dentistry services focus on repairing damaged teeth and replacing missing ones to restore both function and aesthetics.",
                features: [
                    {
                        title: "Dental Crowns",
                        description: "Custom-made caps that cover damaged teeth to restore shape, size, and strength."
                    },
                    {
                        title: "Dental Bridges",
                        description: "Fixed prosthetic devices that replace one or more missing teeth by anchoring to adjacent teeth."
                    },
                    {
                        title: "Dental Implants",
                        description: "Permanent tooth replacement option that mimics natural teeth in both look and function."
                    },
                    {
                        title: "Full & Partial Dentures",
                        description: "Removable appliances that replace multiple missing teeth for improved function and appearance."
                    }
                ]
            },
            orthodontic: {
                title: "Orthodontics",
                subtitle: "Achieve a straight, perfectly aligned smile",
                icon: "😁",
                description: "Our orthodontic treatments help align your teeth and jaw for a beautiful smile and improved oral function.",
                features: [
                    {
                        title: "Traditional Braces",
                        description: "Metal brackets and wires that gradually move teeth into optimal positions."
                    },
                    {
                        title: "Clear Aligners",
                        description: "Transparent, removable trays that straighten teeth discreetly and comfortably."
                    },
                    {
                        title: "Early Intervention",
                        description: "Treatments for children to guide proper jaw and teeth development."
                    },
                    {
                        title: "Retainers",
                        description: "Custom-made devices to maintain teeth alignment after orthodontic treatment."
                    }
                ]
            },
            pediatric: {
                title: "Pediatric Dentistry",
                subtitle: "Specialized dental care for children of all ages",
                icon: "👶",
                description: "Our pediatric dental services are designed specifically for children, providing gentle care in a kid-friendly environment.",
                features: [
                    {
                        title: "Child-Friendly Exams",
                        description: "Gentle, thorough examinations tailored to make children comfortable and at ease."
                    },
                    {
                        title: "Preventive Treatments",
                        description: "Fluoride applications, sealants, and education to prevent cavities and promote good habits."
                    },
                    {
                        title: "Early Dental Care",
                        description: "Monitoring and guidance of dental development from the first tooth onwards."
                    },
                    {
                        title: "Behavior Management",
                        description: "Specialized techniques to help anxious children feel safe and comfortable."
                    }
                ]
            },
            periodontal: {
                title: "Periodontal Care",
                subtitle: "Specialized treatment for gum health",
                icon: "🔍",
                description: "Our periodontal services focus on the prevention, diagnosis, and treatment of gum disease and conditions affecting the supporting structures of teeth.",
                features: [
                    {
                        title: "Deep Cleaning",
                        description: "Scaling and root planing to remove bacteria and tartar below the gumline."
                    },
                    {
                        title: "Gum Disease Treatment",
                        description: "Targeted therapy for gingivitis and periodontitis to restore gum health."
                    },
                    {
                        title: "Periodontal Maintenance",
                        description: "Ongoing care to prevent recurrence of gum disease after treatment."
                    },
                    {
                        title: "Gum Grafting",
                        description: "Procedure to cover exposed tooth roots and restore receded gum tissue."
                    }
                ]
            },
            emergency: {
                title: "Emergency Dental Care",
                subtitle: "Immediate relief when you need it most",
                icon: "🚑",
                description: "Our emergency dental services provide prompt care for unexpected dental issues, relieving pain and addressing injuries quickly.",
                features: [
                    {
                        title: "Same-Day Appointments",
                        description: "Priority scheduling for patients experiencing dental emergencies."
                    },
                    {
                        title: "Toothache Relief",
                        description: "Diagnosis and treatment of severe tooth pain from infections or damage."
                    },
                    {
                        title: "Dental Trauma",
                        description: "Immediate care for broken, chipped, or knocked-out teeth from accidents."
                    },
                    {
                        title: "After-Hours Support",
                        description: "Guidance and care options for emergencies outside regular office hours."
                    }
                ]
            },
            sedation: {
                title: "Sedation Dentistry",
                subtitle: "Comfortable care for anxious patients",
                icon: "😴",
                description: "Our sedation dentistry options help anxious patients receive needed dental care in a relaxed, stress-free manner.",
                features: [
                    {
                        title: "Nitrous Oxide",
                        description: "Mild sedation that helps patients relax while remaining fully conscious."
                    },
                    {
                        title: "Oral Sedation",
                        description: "Prescription medication taken before treatment to induce deeper relaxation."
                    },
                    {
                        title: "IV Sedation",
                        description: "Controlled sedation delivered intravenously for moderate to deep relaxation."
                    },
                    {
                        title: "Pain Management",
                        description: "Comprehensive approach to ensuring comfort during all procedures."
                    }
                ]
            },
            tech: {
                title: "Digital Dentistry",
                subtitle: "Advanced technology for precise, efficient care",
                icon: "🔬",
                description: "Our digital dentistry technologies enhance diagnosis, treatment planning, and outcomes for a wide range of dental procedures.",
                features: [
                    {
                        title: "Digital X-Rays",
                        description: "Low-radiation imaging that provides immediate, detailed views of dental structures."
                    },
                    {
                        title: "3D Imaging",
                        description: "Advanced scanning that creates detailed three-dimensional models of your teeth and jaw."
                    },
                    {
                        title: "CAD/CAM Restorations",
                        description: "Computer-aided design and manufacturing for same-day crowns and restorations."
                    },
                    {
                        title: "Laser Dentistry",
                        description: "Precise, minimally invasive procedures for soft and hard tissue treatments."
                    }
                ]
            }
        };

        // Open modal with service details
        document.querySelectorAll('.service-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const serviceCard = this.closest('.service-card');
                const serviceType = serviceCard.dataset.service;
                const serviceData = serviceDetails[serviceType];
                
                // Build modal content
                const modalContent = `
                    <div class="service-detail">
                        <div class="service-hero">
                            <div class="service-icon">${serviceData.icon}</div>
                            <div class="service-header">
                                <h2>${serviceData.title}</h2>
                                <p>${serviceData.subtitle}</p>
                            </div>
                        </div>
                        <div class="service-description">
                            <p>${serviceData.description}</p>
                        </div>
                        <div class="service-features">
                            ${serviceData.features.map((feature, index) => `
                                <div class="feature-item" style="--index: ${index}">
                                    <h4>${feature.title}</h4>
                                    <p>${feature.description}</p>
                                </div>
                            `).join('')}
                        </div>
                        <a href="{{ route('appointment.form') }}" class="cta-button">Schedule Appointment</a>
                    </div>
                `;
                
                modalBody.innerHTML = modalContent;
                modal.classList.add('show');
                
                // Animate feature items
                setTimeout(() => {
                    document.querySelectorAll('.feature-item').forEach(item => {
                        item.classList.add('animate');
                    });
                }, 300);
                
                // Prevent scrolling on the body
                document.body.style.overflow = 'hidden';
            });
        });

        // Close modal
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        });

        // Close modal when clicking outside of content
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('show');
                document.body.style.overflow = 'auto';
            }
        });
    </script>
@endsection
</body>
</html>