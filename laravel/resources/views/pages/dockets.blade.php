@extends('layouts.default-head')
@section('content')
<style>
body { 
    background-image: url('imgs/dockets_imgs/land1.jpg');
    height: 50%; 
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
}
html{
height: 100%; 
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
  background-color: rgba(248,248,248,0.9);
} 

.boxed:hover {
background-color: rgba(255,255,255);
cursor: pointer;
}
.center {
 text-align: center;
}

.left {
 text-align: center;
}
</style>
<div class="in-boxed">
<div class="boxed" onclick="location.href = 'pending';">
  <h2 class="center">Pending Dockets</h2>
   <p class="left">View all pending dockets.</p>
   <p class="center">Click here</p>
</div> 
<!--</a>-->


<!-- Who we are box -->


<div class="boxed" onclick="location.href = 'completed';">
  <h2 class="center">Completed Dockets</h2>
   <p class="left">View all completed dockets.</p>
   <p class="center">Click here</p>
</div>

<!-- Request Assistance boxes -->

<div class="boxed" onclick="location.href = 'search';">
  <h2 class="center">Search Dockets</h2>
   <p class="left">Looking for a docket?</p>
   <p class="center">Click here</p>
</div>


</div>
@stop
