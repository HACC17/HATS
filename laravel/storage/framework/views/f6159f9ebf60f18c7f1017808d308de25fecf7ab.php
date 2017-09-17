<?php $__env->startSection('content'); ?>
<html> 
<style>
html{
height: 100%; 
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
        width: 70%;
        margin-right: auto;
        margin-left: auto;
        margin-top: 0.3in;
        margin-bottom: 1in;
        padding: 20px;
        background-color: rgba(248,248,248,0.8);
border: 6px solid red;
        }
.pagecontainer {
border: 6px solid red;
display: inline-block
}
/* Outer Boxes */
.in-boxed {

  text-align: center;
  height: 300px;
  display: inline-block;
border: 6px solid red;
} 

/* Inner Boxes */
.boxed {
  vertical-align: middle;
  display: inline-block;
  width: 300px;
  height: 150px;
  padding: 20px;
  margin: 10px;
  background-color: #f8f8f8 ;

} 
/* Buttons */
.button {
    background-color: #f8f8f8;
    color: black;
    padding: 15px;
    text-align: center;
    text-decoration: none;
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

.display {
    visibility: hidden;
}
</style>
<body> 
<div class="pagecontainer">
<div class="textcontainer">
<h2> If you see a question below you want to know the answer to, click it for information.</h2>
</div>

<!-- Help Boxes -->
<div class="in-boxed">

<!-- QA01 -->
<button class="button" onclick="ToggleVisibility('hide1'); return false;"><h3>What does "LUC" stand for?</h3></button>
<div class="hide1 display button">LUC is the abbreviation for Land Use Commission.</div>

<!-- QA02 -->
<button class="button" onclick="ToggleVisibility('hide2'); return false;"><h3>Where can I learn more about the LUC?</h3></button>
<div class="hide2 display button">Two</div>




</div>
</div>
</body>
<script>
function ToggleVisibility(divClass)
{
    var els = document.getElementsByClassName(divClass);
    for(var i = 0; i < els.length; i++)
    {
        els[i].style.visibility = els[i].style.visibility == "hidden" ? "visible" : "hidden";
    }
}
</script>
</html> 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>