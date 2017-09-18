@extends('layouts.default-head')

@section('content')
<!-- Start of Body -->
<style>
html{
height: 100%; 
}

body { 
    background-image: url('/imgs/home_imgs/lands3.jpg');
    height: 50%; 
    background-position: center;
    background-attachment: fixed;
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
  background-color: rgba(248,248,248,0.8);
}
.boxed:hover {
  background-color: rgba(255,255,255);
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

<div class="boxed" onclick="location.href = 'selfservice';">
  <h2 class="center">Where to Start?</h2>
   <p class="center">Not sure where to begin? We are here to help you find your way.</p>

</div> 
<!--</a>-->


<!-- Who we are box -->


<div class="boxed" onclick="location.href = 'about';">
  <h2 class="center">Who we are</h2>
   <p class="center">The Commissioners are non-paid volunteers who represent a cross-section of the community and to administer the Land Use Law. Want to know more?</p>

</div>

<!-- Request Assistance boxes -->

<div class="boxed" onclick="location.href = 'contact';">
  <h2 class="center">Request Assistance</h2>
   <p class="center">Click here to contact us and to see where we are located. </p>

</div>


</div>

@stop
