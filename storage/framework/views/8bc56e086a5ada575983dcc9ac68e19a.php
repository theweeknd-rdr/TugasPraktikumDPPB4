

<?php $__env->startSection('content'); ?>
<div class="text-center mb-4">
    <img src="<?php echo e(asset('images/food-explorer-logo.png')); ?>" alt="Food Explorer" width="100">
</div>

<div class="alert alert-success text-center" role="alert">
    Success: Data restoran berhasil dimuat
</div>

<h5 class="text-danger mb-4 text-center">Restoran Terdekat di Sekitar Anda</h5>

<?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card p-4 mb-4 shadow-sm">
    <p><strong>Nama Restoran:</strong> <?php echo e($restaurant["nama"]); ?></p>

    <?php if($restaurant['kategori'] === 'Fine Dining'): ?>
        <p><strong>Tipe:</strong> <?php echo e($restaurant['tipe']); ?></p>
    <?php elseif($restaurant['kategori'] === 'Cafe'): ?>
        <p><strong>Spesialisasi:</strong> <?php echo e($restaurant['spesialisasi']); ?></p>
    <?php elseif($restaurant['kategori'] === 'Street Food'): ?>
        <p><strong>Lokasi:</strong> <?php echo e($restaurant['lokasi']); ?></p>
    <?php elseif($restaurant['kategori'] === 'Buffet'): ?>
        <p><strong>Fitur:</strong> All-you-can-eat dengan berbagai pilihan</p>
    <?php endif; ?>

    <p><strong>Rating:</strong> <?php echo e($restaurant['rating']); ?> ⭐</p>
    <p><strong>Kode Reservasi:</strong> <?php echo e($restaurant['kode_reservasi']); ?></p>
    <p><strong>Jam Buka:</strong> <?php echo e($restaurant['jam_buka']); ?></p>

    <?php
    $color = match($restaurant['kategori']) {
        'Cafe' => 'brown',
        'Fine Dining' => 'gold',
        'Street Food' => 'orange',
        'Buffet' => 'purple',
        default => 'gray'
    }
    ?>

    <p><strong>Kategori:</strong> <span style="color: <?php echo e($color); ?>;"><?php echo e($restaurant['kategori']); ?></span></p>
    <p><strong>Chef:</strong> <?php echo e($restaurant['chef']); ?></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="text-center mt-4">
    <h5 class="text-danger">Food Explorer App</h5>
    <p>Temukan Restoran Terbaik</p>
    <p class="text-muted">© 2025 Food Explorer - Muhammad Anantha Mahardika Ridwan</p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\PABW\TA4\TemuMakanan\resources\views/dashboard.blade.php ENDPATH**/ ?>