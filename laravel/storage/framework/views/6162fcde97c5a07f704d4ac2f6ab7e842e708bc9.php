<?php $__env->startSection('content'); ?>
<html> 
<style>
html{
height: 50%; 
}

body { 
    background-image: url('/imgs/dockets_imgs/land1.jpg');
    height: 50%; 
    background-position: center;

    background-size: cover; 
}
</style>
<!-- Background Image found in laravel/public -->  
<body> 


</body>

</html> 
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>