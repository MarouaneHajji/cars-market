<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomobil - Car Rental Service</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .nav-link {
            font-weight: 500;
            position: relative;
            padding: 8px 15px !important;
            margin: 0 5px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #dc3545;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero-section {
            background: linear-gradient(rgba(33, 37, 41, 0.6), rgba(33, 37, 41, 0.6)),
                        url('https://images.unsplash.com/photo-1485291571150-772bcfc10da5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
        }

        .feature-card {
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .nav-link.active::after {
            width: 100%;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff !important;
        }
    </style>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="text-danger">Tomo</span>bil
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Book</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('cars')); ?>">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center text-light">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Premium Car Rental Service</h1>
            <p class="lead mb-4">Experience luxury and comfort with our premium fleet of vehicles</p>
            <button class="btn btn-danger btn-lg px-5 py-3 rounded-pill">
                Book Now <i class="bi bi-arrow-right ms-2"></i>
            </button>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose Us</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-car-front text-danger display-4 mb-3"></i>
                            <h4 class="card-title">Premium Cars</h4>
                            <p class="card-text text-muted">Choose from our wide selection of luxury and premium vehicles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-shield-check text-danger display-4 mb-3"></i>
                            <h4 class="card-title">Safe & Secure</h4>
                            <p class="card-text text-muted">All our vehicles are regularly maintained and fully insured.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-clock-history text-danger display-4 mb-3"></i>
                            <h4 class="card-title">24/7 Support</h4>
                            <p class="card-text text-muted">Our customer support team is available round the clock.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\lenovo\cars-marketplace\backend\resources\views\welcome.blade.php ENDPATH**/ ?>