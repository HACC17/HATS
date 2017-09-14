@extends('layouts.default'
)
@section('content')
<html> 
<style>
html{
height: 50%; 
}

body { 
    background-image: url('/imgs/contact_imgs/land1.jpg');
        height: 50%; 
        background-position: center;
        background-attachment: fixed;
        background-size: cover; 
        
}

.textcontainer {
border: 5px solid red;
        width: 70%;
        margin-right: auto;
        margin-left: auto;
        margin-top: 0.3in;
        margin-bottom: 1in;
        padding: 20px;
        background-color: rgba(248,248,248,0.8);
        }

.locationBox{
margin-right: 100px;
border: 5px solid red;
display: inline-block;
vertical-align: top;
}

</style>  

<body> 
<div class="textcontainer">
<h1>Contact Us</h1>
<div class="locationBox">
<h3>Our location</h3>
<p>State Office Tower<br>
Leiopapa A Kamehameha Building<br>
235 South Beretania Street, Room 406<br>
Honolulu, Hawai`i 96813<br>
</p>
</div>
<div class="locationBox">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.0409905089614!2d-157.86026068506263!3d21.309396585847058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006e759d0c0d79%3A0xabf9211f0f0d24e!2s235+S+Beretania+St%2C+Honolulu%2C+HI+96813!5e0!3m2!1sen!2sus!4v1505392296274" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<h2>Contact Information</h2>
<p>You can reach us at:<br>
Telephone: (808) 587-3822<br>
Fax: (808) 587-3827<br>
</p>
<p class="center">
<br>State of Hawai`i Land Use Commission<br>
Department of Business, Economic Development & Tourism<br>
P.O. Box 2359<br>
Honolulu, Hawai`i 96804-2359<br>
</p>


<p><br>You can also fill out the form below. Processed requests will be answered with 5 business days.</p>
<p>Fields thare required have an asterisk(*) next to them. Please include your name, phone number, email, your organization, and the nature of your request.</p>

</div>
</body>

</html> 
@stop
