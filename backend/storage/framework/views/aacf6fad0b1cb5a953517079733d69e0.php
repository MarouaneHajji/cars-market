<?php $__env->startSection('styles'); ?>
<style>
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
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center text-light">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Premium Car Rental Service</h1>
            <p class="lead mb-4">Experience luxury and comfort with our premium fleet of vehicles</p>
            <a href="<?php echo e(route('cars')); ?>" class="btn btn-danger btn-lg px-5 py-3 rounded-pill">
                Book Now <i class="bi bi-arrow-right ms-2"></i>
            </a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\cars-marketplace\backend\resources\views/welcome.blade.php ENDPATH**/ ?>