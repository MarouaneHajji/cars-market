<div class="container">
    <div class="row">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="<?php echo e($car->image_url); ?>" class="card-img-top" alt="<?php echo e($car->name); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($car->name); ?></h5>
                        <p class="card-text">Price to rent: $<?php echo e($car->rental_price); ?></p>
                        <a href="<?php echo e(route('cars.show', $car->id)); ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\lenovo\cars-marketplace\backend\resources\views\cars.blade.php ENDPATH**/ ?>