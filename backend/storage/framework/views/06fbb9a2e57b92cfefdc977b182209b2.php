<?php $__env->startSection('title', 'Our Cars - Tomobil'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .car-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .car-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .car-img-top {
        height: 200px;
        object-fit: cover;
    }

    .price-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: bold;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Cars Grid Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <h2 class="text-center mb-5">Available Cars</h2>
            <div class="row g-4">
                <!-- Car 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card car-card border-0">
                        <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e" class="card-img-top car-img-top" alt="BMW M4">
                        <span class="badge bg-danger price-badge">$150/day</span>
                        <div class="card-body">
                            <h5 class="card-title">BMW M4</h5>
                            <p class="card-text text-muted">Luxury sports car with premium features</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-fuel-pump"></i> Petrol
                                    <i class="bi bi-gear ms-3"></i> Auto
                                </div>
                                <a href="#" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card car-card border-0">
                        <img src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a" class="card-img-top car-img-top" alt="Mercedes C-Class">
                        <span class="badge bg-danger price-badge">$120/day</span>
                        <div class="card-body">
                            <h5 class="card-title">Mercedes C-Class</h5>
                            <p class="card-text text-muted">Elegant sedan with comfort features</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-fuel-pump"></i> Diesel
                                    <i class="bi bi-gear ms-3"></i> Auto
                                </div>
                                <a href="#" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card car-card border-0">
                        <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537" class="card-img-top car-img-top" alt="Tesla Model 3">
                        <span class="badge bg-danger price-badge">$180/day</span>
                        <div class="card-body">
                            <h5 class="card-title">Tesla Model 3</h5>
                            <p class="card-text text-muted">Electric car with autopilot features</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-battery-charging"></i> Electric
                                    <i class="bi bi-gear ms-3"></i> Auto
                                </div>
                                <a href="#" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card car-card border-0">
                        <img src="https://images.unsplash.com/photo-1606611013016-969c19ba27bb" class="card-img-top car-img-top" alt="Audi A5">
                        <span class="badge bg-danger price-badge">$140/day</span>
                        <div class="card-body">
                            <h5 class="card-title">Audi A5</h5>
                            <p class="card-text text-muted">Sporty coupe with quattro drive</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-fuel-pump"></i> Petrol
                                    <i class="bi bi-gear ms-3"></i> Auto
                                </div>
                                <a href="#" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 ">
        <div class="container">
            <div class="row g-4">
                <!-- Car 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card car-card border-0">
                        <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e" class="card-img-top car-img-top" alt="BMW M4">
                        <span class="badge bg-danger price-badge">$150/day</span>
                        <div class="card-body">
                            <h5 class="card-title">BMW M4</h5>
                            <p class="card-text text-muted">Luxury sports car with premium features</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-fuel-pump"></i> Petrol
                                    <i class="bi bi-gear ms-3"></i> Auto
                                </div>
                                <a href="#" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card car-card border-0">
                        <img src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a" class="card-img-top car-img-top" alt="Mercedes C-Class">
                        <span class="badge bg-danger price-badge">$120/day</span>
                        <div class="card-body">
                            <h5 class="card-title">Mercedes C-Class</h5>
                            <p class="card-text text-muted">Elegant sedan with comfort features</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-fuel-pump"></i> Diesel
                                    <i class="bi bi-gear ms-3"></i> Auto
                                </div>
                                <a href="#" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card car-card border-0">
                        <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537" class="card-img-top car-img-top" alt="Tesla Model 3">
                        <span class="badge bg-danger price-badge">$180/day</span>
                        <div class="card-body">
                            <h5 class="card-title">Tesla Model 3</h5>
                            <p class="card-text text-muted">Electric car with autopilot features</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-battery-charging"></i> Electric
                                    <i class="bi bi-gear ms-3"></i> Auto
                                </div>
                                <a href="#" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card car-card border-0">
                        <img src="https://images.unsplash.com/photo-1606611013016-969c19ba27bb" class="card-img-top car-img-top" alt="Audi A5">
                        <span class="badge bg-danger price-badge">$140/day</span>
                        <div class="card-body">
                            <h5 class="card-title">Audi A5</h5>
                            <p class="card-text text-muted">Sporty coupe with quattro drive</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-fuel-pump"></i> Petrol
                                    <i class="bi bi-gear ms-3"></i> Auto
                                </div>
                                <a href="#" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\cars-marketplace\backend\resources\views/cars.blade.php ENDPATH**/ ?>