@extends('layouts.default')

@section('content')
<!-- Start of Body -->
<html>
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
  position: relative;
  padding-top: 120px;
  text-align: center;
  height: 300px;
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
  opacity: 0.8;
} 

.center {
 text-align: center;
}

.left {
 text-align: left;
}

</style>


<!-- Start of clickable boxes -->
<!-- Where to Start box -->
<div class="in-boxed">
<a href="/selfservice">
<div class="boxed">
  <h2 class="center">Where to Start?</h2>
   <p class="left">Not sure where to begin? We are here to help you find your way.</p>
   <p class="center">Click here</p>
</div> 
</a>
<!-- Who we are box -->
<a href="/about">
<div class="boxed">
  <h2 class="center">Who we are</h2>
   <p class="left">The Commissioners are non-paid volunteers who represent a cross-section of the community and to administer the Land Use Law. Want to know more?</p>
   <p class="center">Click here</p>
</div>
</a>
<!-- Request Assistance boxes -->
<a href="/contact">
<div class="boxed">
  <h2 class="center">Request Assistance</h2>
   <p class="left">Click here to finds way to contact people. </p>
   <p class="center">Click here</p>
</div>
</a>

</div>


<!-- Background Image found in laravel/public -->  
<body> 


</body>

</html> 
@stop
