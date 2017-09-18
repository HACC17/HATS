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
  padding-top: 70px;
  text-align: center;
  height: 160px;
    opacity: 0.8;
} 

/* Inner Boxes */
.boxed {
  vertical-align: middle;
  display: inline-block;
  width: 275px;
  height: 200px;
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
<div class="boxed" onclick="location.href = 'pending';"><br></br>
  <h2 class="center">Pending Dockets</h2>
   <p class="left">View all pending dockets.</p>
   
</div> 
<!--</a>-->


<!-- Who we are box -->


<div class="boxed" onclick="location.href = 'completed';"><br></br>
  <h2 class="center">Completed Dockets</h2>
   <p class="left">View all completed dockets.</p>
   
</div>
</div>
<!-- Request Assistance boxes -->
<div class="in-boxed">
<div class="boxed" onclick="location.href = 'search';"><br></br>
  <h2 class="center">Search Dockets</h2>
   <p class="left">Looking for a docket?</p>
   
</div>

<div class="boxed" onclick="location.href = 'upload';"><br></br>
  <h2 class="center">Upload Dockets</h2>
   <p class="left">Uploading a document?</p>
   
</div>
</div>
</div>
@stop
