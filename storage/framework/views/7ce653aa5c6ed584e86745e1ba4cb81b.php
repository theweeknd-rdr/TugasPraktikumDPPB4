<div class="card mb-4">
    <div class="card-body">
        <p><strong>Nama:</strong> <?php echo e($booking['nama']); ?></p>
        <p><strong>Jurusan:</strong> <?php echo e($booking['jurusan']); ?></p>
        <p><strong>Umur:</strong> <?php echo e($booking['umur']); ?> tahun</p>
        <p><strong>Kode Booking:</strong> <?php echo e($booking['kode']); ?></p>
        <p><strong>Jam Booking:</strong> <?php echo e($booking['jam']); ?></p>
        <p><strong>Status:</strong> <a href="#" class="text-decoration-none text-primary"><?php echo e($booking['status']); ?></a></p>
        <p><strong>Makanan:</strong> <?php echo e($booking['makanan']); ?></p>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\PABW\TA4\TemuMakanan\resources\views/partials/booking-card.blade.php ENDPATH**/ ?>