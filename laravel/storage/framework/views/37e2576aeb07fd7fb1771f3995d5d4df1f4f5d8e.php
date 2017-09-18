<?php $__env->startSection('content'); ?>
<html> 
<style>
html{
height: 50%; 
}

body { 
    /* Background Image found in laravel/public */
    background-image: url('/imgs/self_service_imgs/land1.jpg');
    height: 50%; 
    background-position: center;
    background-attachment: fixed;
    background-size: cover; 
}

.textcontainer {
   width: 50%;
   margin-right: auto;
   margin-left: auto;
   background-color: rgba(248,248,248,0.7);
}
</style>
<!-- Background Image found in laravel/public -->  
<body> 


</body>

</html> 
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>