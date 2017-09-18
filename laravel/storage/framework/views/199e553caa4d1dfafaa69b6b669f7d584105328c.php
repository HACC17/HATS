<?php $__env->startSection('content'); ?>
<!-- Start of Body -->
<style>
html{
height: 100%; 
}

body { 
    background-image: url('/imgs/home_imgs/lands3.jpg');
    height: 50%; 
    background-position: center;

    background-size: cover; 
}

/* Outer Boxes */
.in-boxed {
  padding-top: 120px;
  text-align: center;
  height: 300px;
    opacity: 0.8;
} 

/* Inner Boxes */
.boxed {
  vertical-align: middle;
  display: inline-block;
  width: 300px;
  height: 200px;
  padding: 20px;
  margin: 10px;
  background-color: #f8f8f8 ;
} 
/* Buttons */
.button {
    background-color: #f8f8f8;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.center {
 text-align: center;
}

.left {
 text-align: left;
}

</style>


<!------- Start of Body ---------
---------------------------------
---------------------------------
---------------------------------
---------------------------------
---------------------------------
---------------------------------
--------------------------------->
<!-- Start of clickable boxes -->
<!-- Where to Start box -->
<div class="in-boxed">
<button class="button" onclick="location.href = 'selfservice';">
<div class="boxed">
  <h2 class="center">Where to Start?</h2>
   <p class="left">Not sure where to begin? We are here to help you find your way.</p>
   <p class="center">Click here</p>
</div> 
<!--</a>-->
</button>

<!-- Who we are box -->
<button class="button" onclick="location.href = 'about';">

<div class="boxed">
  <h2 class="center">Who we are</h2>
   <p class="left">The Commissioners are non-paid volunteers who represent a cross-section of the community and to administer the Land Use Law. Want to know more?</p>
   <p class="center">Click here</p>
</div>
</button>
<!-- Request Assistance boxes -->
<button class="button" onclick="location.href = 'contact';">
<div class="boxed">
  <h2 class="center">Request Assistance</h2>
   <p class="left">Click here to finds way to contact people. </p>
   <p class="center">Click here</p>
</div>
</button>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>