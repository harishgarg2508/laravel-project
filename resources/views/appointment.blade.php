    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dental Appointment Booking</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        
        <style>
            :root {
                --primary-color: #2196f3;
                --primary-dark: #0d6efd;
                --secondary-color: #6ec6ff;
                --accent-color: #64b5f6;
                --text-color: #333;
                --light-bg: #f8f9fa;
            }
            
            body {
                font-family: 'Roboto', sans-serif;
                background: linear-gradient(135deg, #f5f7fa 0%, #e4ebf5 100%);
                color: var(--text-color);
                min-height: 100vh;
            }
            
            .page-container {
                padding: 40px 0;
            }
            
            .card {
                border-radius: 20px;
                overflow: hidden;
                border: none;
                box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
                transform: translateY(0);
                transition: all 0.5s ease;
                margin-top: 80px;

            }
            
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 40px rgba(50, 50, 93, 0.15), 0 10px 20px rgba(0, 0, 0, 0.1);
            }
            
            .card-header {
                background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
                padding: 2rem;
                position: relative;
                overflow: hidden;
            }
            
            .card-header::before {
                content: "";
                position: absolute;
                width: 200px;
                height: 200px;
                background: var(--secondary-color);
                border-radius: 50%;
                top: -100px;
                right: -50px;
                opacity: 0.2;
            }
            
            .card-header::after {
                content: "";
                position: absolute;
                width: 150px;
                height: 150px;
                background: var(--accent-color);
                border-radius: 50%;
                bottom: -80px;
                left: -30px;
                opacity: 0.15;
            }
            
            .card-title {
                position: relative;
                z-index: 1;
                margin: 0;
                font-weight: 700;
                font-size: 2rem;
                color: white;
            }
            
            .card-body {
                padding: 2rem;
                background-color: white;
            }
            
            .form-label {
                font-weight: 600;
                margin-bottom: 0.5rem;
                color: #495057;
            }
            
            .form-control, .form-select {
                padding: 0.75rem 1rem;
                border-radius: 10px;
                border: 2px solid #e9ecef;
                transition: all 0.3s ease;
                box-shadow: none;
            }
            
            .form-control:focus, .form-select:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            }
            
            .btn-submit {
                padding: 12px 24px;
                font-weight: 600;
                font-size: 1.1rem;
                border-radius: 10px;
                background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
                border: none;
                color: white;
                position: relative;
                overflow: hidden;
                z-index: 1;
                transition: all 0.3s ease;
            }
            
            .btn-submit::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                transition: all 0.6s ease;
                z-index: -1;
            }
            
            .btn-submit:hover::before {
                left: 100%;
            }
            
            .btn-submit:hover {
                transform: translateY(-3px);
                box-shadow: 0 7px 14px rgba(13, 110, 253, 0.3);
            }
            
            .input-icon {
                position: relative;
            }
            
            .input-icon i {
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translateY(-50%);
                color: #adb5bd;
                transition: all 0.3s ease;
            }
            
            .input-icon input:focus + i,
            .input-icon select:focus + i {
                color: var(--primary-color);
            }
            
            .alert-success {
                background: linear-gradient(135deg, #4CAF50, #2E7D32);
                color: white;
                border: none;
                border-radius: 10px;
                padding: 15px;
                margin-bottom: 20px;
            }
            
            /* Floating label effect */
            .float-label {
                position: relative;
            }
            
            .float-label label {
                position: absolute;
                top: 0.75rem;
                left: 1rem;
                transition: all 0.3s ease;
                pointer-events: none;
                color: #adb5bd;
                margin: 0;
            }
            
            .float-label input:focus ~ label,
            .float-label input:not(:placeholder-shown) ~ label,
            .float-label textarea:focus ~ label,
            .float-label textarea:not(:placeholder-shown) ~ label {
                top: -0.5rem;
                left: 0.75rem;
                font-size: 0.75rem;
                padding: 0 5px;
                background-color: white;
                color: var(--primary-color);
                font-weight: 600;
            }
            
            /* Custom checkbox */
            .custom-checkbox {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 15px;
                cursor: pointer;
                font-size: 18px;
                user-select: none;
            }
            
            .custom-checkbox input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;
            }
            
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                border-radius: 5px;
                transition: all 0.3s ease;
            }
            
            .custom-checkbox:hover input ~ .checkmark {
                background-color: #ccc;
            }
            
            .custom-checkbox input:checked ~ .checkmark {
                background-color: var(--primary-color);
            }
            
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }
            
            .custom-checkbox input:checked ~ .checkmark:after {
                display: block;
            }
            
            .custom-checkbox .checkmark:after {
                left: 9px;
                top: 5px;
                width: 7px;
                height: 13px;
                border: solid white;
                border-width: 0 3px 3px 0;
                transform: rotate(45deg);
            }
            
            /* Animations */
            .slide-in-left {
                animation: slideInLeft 0.5s ease-out forwards;
            }
            
            .slide-in-right {
                animation: slideInRight 0.5s ease-out forwards;
            }
            
            .fade-in-up {
                animation: fadeInUp 0.5s ease-out forwards;
            }
            
            .pulse {
                animation: pulse 2s infinite;
            }
            
            @keyframes slideInLeft {
                from { transform: translateX(-50px); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            
            @keyframes slideInRight {
                from { transform: translateX(50px); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            
            @keyframes fadeInUp {
                from { transform: translateY(20px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }
            
            /* Steps indicator */
            .steps-container {
                display: flex;
                justify-content: space-between;
                margin-bottom: 30px;
            }
            
            .step {
                text-align: center;
                position: relative;
                flex: 1;
            }
            
            .step-number {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #e9ecef;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto;
                color: #6c757d;
                font-weight: bold;
                transition: all 0.3s ease;
            }
            
            .step.active .step-number {
                background-color: var(--primary-color);
                color: white;
            }
            
            .step-label {
                font-size: 0.85rem;
                margin-top: 8px;
                color: #6c757d;
            }
            
            .step.active .step-label {
                color: var(--primary-color);
                font-weight: 600;
            }
            
            .step-connector {
                position: absolute;
                top: 20px;
                height: 2px;
                width: 100%;
                background-color: #e9ecef;
                left: 50%;
                z-index: -1;
            }
            
            .step:last-child .step-connector {
                display: none;
            }

            .form-section {
                display: none;
                animation: fadeIn 0.5s ease-out forwards;
            }
            
            .form-section.active {
                display: block;
            }
            
            .nav-buttons {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }
            
            .btn-prev {
                background-color: #6c757d;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 10px;
                font-weight: 600;
                transition: all 0.3s ease;
            }
            
            .btn-prev:hover {
                background-color: #5a6268;
                transform: translateY(-2px);
            }
            
            .summary-item {
                margin-bottom: 15px;
                padding-bottom: 15px;
                border-bottom: 1px solid #e9ecef;
            }
            
            .summary-label {
                font-weight: 600;
                color: #495057;
            }
            
            /* Date time picker enhancement */
            .date-time-container {
                position: relative;
            }
            
            .date-time-container i {
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translateY(-50%);
                color: #adb5bd;
                pointer-events: none;
            }
            
            /* Service selection enhancement */
            .service-cards {
                display: flex;
                flex-wrap: wrap;
                gap: 15px;
                margin-top: 15px;
            }
            
            .service-card {
                flex: 1 0 calc(33.333% - 15px);
                min-width: 120px;
                border: 2px solid #e9ecef;
                border-radius: 10px;
                padding: 15px;
                text-align: center;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            
            .service-card:hover {
                border-color: var(--primary-color);
                background-color: rgba(13, 110, 253, 0.05);
            }
            
            .service-card.selected {
                border-color: var(--primary-color);
                background-color: rgba(13, 110, 253, 0.1);
            }
            
            .service-card i {
                font-size: 2rem;
                color: var(--primary-color);
                margin-bottom: 10px;
                display: block;
            }
            
            .service-card h6 {
                margin: 0;
                font-weight: 600;
            }
            
            @media (max-width: 768px) {
                .service-card {
                    flex: 1 0 calc(50% - 15px);
                }
                
                .card-title {
                    font-size: 1.5rem;
                }
            }
            
            @media (max-width: 576px) {
                .service-card {
                    flex: 1 0 100%;
                }
                
                .steps-container {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
    @extends('layouts.app')
    @section('content')
        <div class="container page-container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card animate__animated animate__fadeIn">
                        <div class="card-header">
                            <h3 class="card-title animate__animated animate__fadeInUp">Book Your Dental Appointment</h3>
                        </div>
                        <div class="card-body">
                            <!-- Success Alert -->
                            <div id="success-alert" class="alert alert-success animate__animated animate__fadeIn" style="display: none;">
                                <i class="fas fa-check-circle me-2"></i> Your appointment has been successfully scheduled!
                            </div>
                            
                            <!-- Steps indicator -->
                            <div class="steps-container">
                                <div class="step active" data-step="1">
                                    <div class="step-number">1</div>
                                    <div class="step-label">Personal Info</div>
                                    <div class="step-connector"></div>
                                </div>
                                <div class="step" data-step="2">
                                    <div class="step-number">2</div>
                                    <div class="step-label">Date & Time</div>
                                    <div class="step-connector"></div>
                                </div>
                                <div class="step" data-step="3">
                                    <div class="step-number">3</div>
                                    <div class="step-label">Service</div>
                                    <div class="step-connector"></div>
                                </div>
                                <div class="step" data-step="4">
                                    <div class="step-number">4</div>
                                    <div class="step-label">Confirmation</div>
                                </div>
                            </div>
                            
                            <form action="https://api.web3forms.com/submit" method="POST" id="appointment-form">
                                <input type="hidden" name="access_key" value="02dfdeed-b3c6-4426-8cf6-786cd95480e3">
                                <input type="hidden" name="apikey" value="02dfdeed-b3c6-4426-8cf6-786cd95480e3">
                                
                                <!-- Section 1: Personal Information -->
                                <div class="form-section active" id="section-1">
                                    <h4 class="mb-4 slide-in-left">Personal Information</h4>
                                    
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="input-icon float-label slide-in-left" style="animation-delay: 0.1s;">
                                                <input type="text" class="form-control" id="name" name="name" placeholder=" " required>
                                                <label for="name">Full Name</label>
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-icon float-label slide-in-right" style="animation-delay: 0.2s;">
                                                <input type="email" class="form-control" id="email" name="email" placeholder=" " required>
                                                <label for="email">Email Address</label>
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="input-icon float-label fade-in-up" style="animation-delay: 0.3s;">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder=" " required>
                                        <label for="phone">Phone Number</label>
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    
                                    <div class="nav-buttons mt-4">
                                        <div></div> <!-- Empty div for spacing -->
                                        <button type="button" class="btn btn-submit next-btn pulse" data-next="2">
                                            Continue <i class="fas fa-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Section 2: Date & Time -->
                                <div class="form-section" id="section-2">
                                    <h4 class="mb-4">Schedule Your Visit</h4>
                                    
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="date-time-container">
                                                <label for="date" class="form-label">Preferred Date</label>
                                                <input type="date" class="form-control" id="date" name="date" required min="">
                                                <i class="fas fa-calendar-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="time" class="form-label">Preferred Time</label>
                                                <select class="form-select" id="time" name="time" required>
                                                    <option value="" selected disabled>Select a time</option>
                                                    <option value="09:00">9:00 AM</option>
                                                    <option value="10:00">10:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="12:00">12:00 PM</option>
                                                    <option value="14:00">2:00 PM</option>
                                                    <option value="15:00">3:00 PM</option>
                                                    <option value="16:00">4:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="nav-buttons">
                                        <button type="button" class="btn btn-prev prev-btn" data-prev="1">
                                            <i class="fas fa-arrow-left me-2"></i> Back
                                        </button>
                                        <button type="button" class="btn btn-submit next-btn" data-next="3">
                                            Continue <i class="fas fa-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Section 3: Service Selection -->
                                <div class="form-section" id="section-3">
                                    <h4 class="mb-4">Select a Service</h4>
                                    
                                    <div class="form-group mb-4">
                                        <input type="hidden" id="service" name="service" required>
                                        <div class="service-cards">
                                            <div class="service-card" data-service="Regular Checkup">
                                                <i class="fas fa-teeth"></i>
                                                <h6>Regular Checkup</h6>
                                            </div>
                                            <div class="service-card" data-service="Teeth Cleaning">
                                                <i class="fas fa-tooth"></i>
                                                <h6>Teeth Cleaning</h6>
                                            </div>
                                            <div class="service-card" data-service="Tooth Extraction">
                                                <i class="fas fa-teeth-open"></i>
                                                <h6>Tooth Extraction</h6>
                                            </div>
                                            <div class="service-card" data-service="Root Canal">
                                                <i class="fas fa-syringe"></i>
                                                <h6>Root Canal</h6>
                                            </div>
                                            <div class="service-card" data-service="Teeth Whitening">
                                                <i class="fas fa-magic"></i>
                                                <h6>Teeth Whitening</h6>
                                            </div>
                                            <div class="service-card" data-service="Dental Implants">
                                                <i class="fas fa-gem"></i>
                                                <h6>Dental Implants</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label for="message" class="form-label">Additional Information</label>
                                        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                    </div>
                                    
                                    <div class="nav-buttons">
                                        <button type="button" class="btn btn-prev prev-btn" data-prev="2">
                                            <i class="fas fa-arrow-left me-2"></i> Back
                                        </button>
                                        <button type="button" class="btn btn-submit next-btn" data-next="4">
                                            Continue <i class="fas fa-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Section 4: Confirmation -->
                                <div class="form-section" id="section-4">
                                    <h4 class="mb-4">Confirm Your Appointment</h4>
                                    
                                    <!-- <div class="summary-container p-4 bg-light rounded mb-4">
                                        <div class="summary-item">
                                            <span class="summary-label">Name:</span>
                                            <span id="summary-name"></span>
                                        </div>
                                        <div class="summary-item">
                                            <span class="summary-label">Email:</span>
                                            <span id="summary-email"></span>
                                        </div>
                                        <div class="summary-item">
                                            <span class="summary-label">Phone:</span>
                                            <span id="summary-phone"></span>
                                        </div>
                                        <div class="summary-item">
                                            <span class="summary-label">Date:</span>
                                            <span id="summary-date"></span>
                                        </div>
                                        <div class="summary-item">
                                            <span class="summary-label">Time:</span>
                                            <span id="summary-time"></span>
                                        </div>
                                        <div class="summary-item">
                                            <span class="summary-label">Service:</span>
                                            <span id="summary-service"></span>
                                        </div>
                                        <div class="summary-item" id="summary-message-container" style="display: none; border-bottom: none;">
                                            <span class="summary-label">Additional Info:</span>
                                            <span id="summary-message"></span>
                                        </div> 
                                    </div> -->
                                    
                                    <div class="form-check mb-4">
                                        <label class="custom-checkbox">
                                            I confirm that the given information is correct
                                            <input type="checkbox" id="confirm-info" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="nav-buttons">
                                        <button type="button" class="btn btn-prev prev-btn" data-prev="3">
                                            <i class="fas fa-arrow-left me-2"></i> Back
                                        </button>
                                        <button type="submit" class="btn btn-submit">
                                            <i class="fas fa-calendar-check me-2"></i> Schedule Appointment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        
       <!-- Fix for the updateSummary function in the script section -->
<script>
    $(document).ready(function() {
        // Set minimum date to today
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        today = yyyy + '-' + mm + '-' + dd;
        $('#date').attr('min', today);
        
        // Form navigation
        $('.next-btn').click(function() {
            const nextSection = $(this).data('next');
            
            // Basic validation for current section
            let currentSection = $(this).closest('.form-section').attr('id').split('-')[1];
            let isValid = true;
            
            // Validate section 1
            if (currentSection === '1') {
                if (!$('#name').val()) {
                    $('#name').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#name').removeClass('is-invalid');
                }
                
                if (!$('#email').val() || !isValidEmail($('#email').val())) {
                    $('#email').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#email').removeClass('is-invalid');
                }
                
                if (!$('#phone').val()) {
                    $('#phone').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#phone').removeClass('is-invalid');
                }
            }
            
            // Validate section 2
            if (currentSection === '2') {
                if (!$('#date').val()) {
                    $('#date').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#date').removeClass('is-invalid');
                }
                
                if (!$('#time').val()) {
                    $('#time').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#time').removeClass('is-invalid');
                }
            }
            
            // Validate section 3
            if (currentSection === '3') {
                if (!$('#service').val()) {
                    $('.service-cards').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('.service-cards').removeClass('is-invalid');
                }
            }
            
            if (!isValid) return;
            
            // If moving to confirmation section, update summary
            if (nextSection === '4') {
                updateSummary();
            }
            
            // Navigate to next section
            $('.form-section').removeClass('active');
            $('#section-' + nextSection).addClass('active');
            
            // Update steps indicator
            $('.step').removeClass('active');
            $('.step[data-step="' + nextSection + '"]').addClass('active');
            
            // Scroll to top of form
            $('html, body').animate({
                scrollTop: $('.card').offset().top - 50
            }, 500);
        });
        
        $('.prev-btn').click(function() {
            const prevSection = $(this).data('prev');
            
            $('.form-section').removeClass('active');
            $('#section-' + prevSection).addClass('active');
            
            // Update steps indicator
            $('.step').removeClass('active');
            $('.step[data-step="' + prevSection + '"]').addClass('active');
        });
        
        // Service selection
        $('.service-card').click(function() {
            $('.service-card').removeClass('selected');
            $(this).addClass('selected');
            $('#service').val($(this).data('service'));
        });
        
        // Form submission
        $('#appointment-form').submit(function(e) {
            e.preventDefault();
            
            if (!$('#confirm-info').is(':checked')) {
                alert('Please confirm that the information is correct.');
                return;
            }
            
            // Submit the form to Web3Forms
            const formData = new FormData(this);
            
            $.ajax({
                url: 'https://api.web3forms.com/submit',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    // Show success message
                    $('#appointment-form').hide();
                    $('.steps-container').hide();
                    $('#success-alert').show();
                },
                error: function(err) {
                    alert('There was an error submitting your form. Please try again.');
                    console.error(err);
                }
            });
        });
        
        // Helper function to validate email
        function isValidEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }
        
        // Update summary
        function updateSummary() {
            $('#summary-name').text($('#name').val());
            $('#summary-email').text($('#email').val());
            $('#summary-phone').text($('#phone').val());
            
            // Format date
            const dateObj = new Date($('#date').val());
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            $('#summary-date').text(dateObj.toLocaleDateString('en-US', options));
            
            // Format time
            const timeValue = $('#time').val();
            if (timeValue) {
                const timeParts = timeValue.split(':');
                let hour = parseInt(timeParts[0]);
                let period = hour >= 12 ? 'PM' : 'AM';
                hour = hour % 12;
                hour = hour ? hour : 12; // Convert 0 to 12
                const formattedTime = hour + ':' + timeParts[1] + ' ' + period;
                $('#summary-time').text(formattedTime);
            }
            
            $('#summary-service').text($('#service').val());
            
            // Display additional info if provided
            if ($('#message').val().trim() !== '') {
                $('#summary-message').text($('#message').val());
                $('#summary-message-container').show();
            } else {
                $('#summary-message-container').hide();
            }
        }
    });
</script>
        @endsection

    </body>
    </html>