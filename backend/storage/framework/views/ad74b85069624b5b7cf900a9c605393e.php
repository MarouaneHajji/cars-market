<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Tomobil - Car Rental Service'); ?></title>
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

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff !important;
        }

        /* Footer styles */
        .footer {
            background-color: #212529;
            color: white;
            padding: 3rem 0;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #dc3545;
        }
    </style>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span class="text-danger">Tomo</span>bil
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('special-offers') ? 'active' : ''); ?>" href="#">Special Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('cars') ? 'active' : ''); ?>" href="<?php echo e(route('cars')); ?>">Rent a Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('auth') ? 'active' : ''); ?>" href="<?php echo e(route('auth')); ?>">Login / Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="min-height: calc(100vh - 300px)">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="text-danger mb-3">About Tomobil</h5>
                    <p class="text-light-50">Premium car rental service providing luxury and comfort for all your transportation needs.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="text-danger mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="footer-link">Home</a></li>
                        <li class="mb-2"><a href="<?php echo e(route('cars')); ?>" class="footer-link">Our Cars</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Special Offers</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-danger mb-3">Contact Info</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt text-danger me-2"></i> 123 Car Street, City</li>
                        <li class="mb-2"><i class="bi bi-telephone text-danger me-2"></i> +1 234 567 8900</li>
                        <li class="mb-2"><i class="bi bi-envelope text-danger me-2"></i> info@tomobil.com</li>
                    </ul>
                </div>
            </div>
            <hr class="border-danger my-4">
            <div class="text-center">
                <p class="mb-0">&copy; <?php echo e(date('Y')); ?> Tomobil. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html> <?php /**PATH C:\Users\lenovo\cars-marketplace\backend\resources\views/layouts/app.blade.php ENDPATH**/ ?>