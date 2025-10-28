

<?php
    $bgColor = $type === 'error' ? '#f8d7da' : '#d4edda';      
    $borderColor = $type === 'error' ? '#f5c6cb' : '#c3e6cb'; 
    $textColor = $type === 'error' ? '#721c24' : '#155724';    
?>

<div style="
    background-color: <?php echo e($bgColor); ?>;
    border: 1px solid <?php echo e($borderColor); ?>;
    color: <?php echo e($textColor); ?>;
    border-radius: 8px;
    padding: 12px 18px;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 500;
">
    <strong><?php echo e(ucfirst($type)); ?>:</strong> <?php echo e($message); ?>

</div>
<?php /**PATH C:\xampp\htdocs\PABW\TA4\TemuMakanan\resources\views/components/alert.blade.php ENDPATH**/ ?>