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
 text-align: center;
}
</style>
<div class="in-boxed">
<button class="button" onclick="location.href = 'pending';">
<div class="boxed">
  <h2 class="center">Pending Dockets</h2>
   <p class="left">View all pending dockets.</p>
   <p class="center">Click here</p>
</div> 
<!--</a>-->
</button>

<!-- Who we are box -->
<button class="button" onclick="location.href = 'completed';">

<div class="boxed">
  <h2 class="center">Completed Dockets</h2>
   <p class="left">View all completed dockets.</p>
   <p class="center">Click here</p>
</div>
</button>
<!-- Request Assistance boxes -->
<button class="button" onclick="location.href = 'search';">
<div class="boxed">
  <h2 class="center">Search Dockets</h2>
   <p class="left">Looking for a docket?</p>
   <p class="center">Click here</p>
</div>
</button>

</div>
@stop
