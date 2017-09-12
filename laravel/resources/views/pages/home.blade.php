@extends('layouts.default')

@section('content')
<!-- Start of HTML -->
<html>
<style>


.in-boxed {
  
  border: 1px solid red ;
} 

.boxed {
  vertical-align: middle;
  display: inline-block;
  width: 300px;
  height: 200px;
  padding: 20px;
  margin: 10px;
  border: 1px solid red ;
  background-color: #f8f8f8 ;
  opacity: 0.8;
} 

.center {
 text-align: center;
}

</style>



<div class="in-boxed">
<div class="boxed">
  <h2 class="center">Where to Start?</h2>
   <p>Not sure where to begin? We are here to help you find your way. Click here</p>
</div> 

<div class="boxed">
  <h2 class="center">Who we are</h2>
   <p>The Commissioners are non-paid volunteers who represent a cross-section of the community and to administer the Land Use Law. Want to know more? Click here</p>
</div>

<div class="boxed">
  <h2 class="center">Request Assistance</h2>
   <p>Not sure where to begin? We are here to help you find your way. Click here</p>
</div>

</div>



<body background="/imgs/home_imgs/lands3.jpg"> 


</body>

</html> 
@stop
