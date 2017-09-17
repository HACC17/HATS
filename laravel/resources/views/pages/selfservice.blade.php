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
        }
.helpcard{
border: 5px solid red
}
</style>

<body> 

<div class="textcontainer">
<h2> WE ARE HERE TO HELP </h2>
<p>We are here to help you find the information you are looking for. To begin we recommend selecting one of the buttons below to help answer any questions you may have.</p>
</div>
<!--Modal HTML-->
<div class="helpcard">
<p>Submit a request</p>
</div>


</body>

</html> 
@stop

