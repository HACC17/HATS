@extends('layouts.default')
@section('content')
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
}
/* Outer Boxes */
.in-boxed {

  text-align: center;
  height: 300px;
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
border: 6px solid red;
}

.center {
 text-align: center;
}

.left {
 text-align: left;
}
</style>
<body> 
<div class="pagecontainer">
<div class="textcontainer">
<h2> WE ARE HERE TO HELP </h2>
<p>We are here to help you find the information you are looking for. To begin we recommend selecting one of the buttons below to help answer any questions you may have.</p>
</div>

<div class="in-boxed">
<!-- First Time -->
<button class="button" onclick="location.href = 'selfservice';">
<div class="boxed">
  <h2 class="center">First Time</h2>
   <p class="left">If this is your first time visiting and using Land Use Commission services.</p>
   <p class="center">Click here</p>
</div> 
</button>

<!-- Returning -->
<button class="button" onclick="location.href = 'selfservice';">

<div class="boxed">
  <h2 class="center">Returning</h2>
   <p class="left">If you are a returning user and are familiar with Land Use Commission services.</p>
   <p class="center">Click here</p>
</div>

</div>
</div>
</body>

</html> 
@stop

