@extends('layouts.default')
@section('content')
<html> 

<style>
html{
height: 100%; 
}

body { 
    background-image: url('/imgs/self_service_imgs/land1.jpg');
    height: 50%; 
    background-position: center;
    background-attachment: fixed;
    background-size: cover; 
}

.textcontainer {
   width: 60%;
   margin-right: auto;
   margin-left: auto;
   margin-top: 0.3in;
   margin-bottom: 1in;
   padding: 20px;
   background-color: rgba(248,248,248,0.7);
}
</style>

<body> 
<div class="textcontainer">
<!-- Start of FAQ page -->
<h3>FREQUENTLY ASKED QUESTIONS</h3>

<!-- Questions -->
<ul>
<li><a href="#0A1">What do I need to make a request?</a></li>
<li><a href="#0A2">How do I process a request?</a></li>
<li><a href="#0A3">Who do I contact?</a></li>
<li><a href="#0A4">Where are we located</a></li>
<li><a href="#0A5">How long do I have to wait to process?</a></li>
<li><a href="#0A6">What is TMK</a></li>
<li><a href="#0A7">How do I obtain the TMK for a property?</a></li>
<li><a href="#0A8">What is a docket?</a></li>
<li><a href="#0A9">How do I obtain a docket number?</a></li>
<li><a href="#0B1">Can I edit active dockets?</a></li>
<li><a href="#0B2">How do I upload files to my docket?</a></li>
</ul>

<br></br>
<!-- Answers -->
<!-- 0A1 -->
<strong><p><a name="0A1">What do I need to make a request?</a></p></strong>
<strong><p>You will need to have the following:</p></strong>
    <ul>
        <li>Full Name</li>
        <li>Phone Number</li>
        <li>Email</li>
        <li>Organization</li>
        <li>Type of information you are requesting or submitting</li>
        <li>Tax Map Key</li>
        <li>Docket ID</li>
    </ul>
<br></br>
<!-- 0A2 -->
<strong><p><a name="0A2">How do I process a request?</a></p></strong>
<p>You can fill out this form here</p>

<br></br>
<!-- 0A3 -->
<strong><p><a name="0A3">Who do I contact?</a></p></strong>
<p>You can contact us by email or phone number.</p>
<p>Telephone:(808)587-3827</p>
<p>Email:dbedt.luc.web@hawaii.gov</p>

<br></br>
<!-- 0A4 -->
<strong><p><a name="0A4">Where are we located</a></p></strong>
<p>State Office Towe
Leiopapa A Kamehameha Building
235 South Beretania Street, Room 406
Honolulu, Hawai`i 96804-2359.</p>

<br></br>
<!-- 0A5 -->
<strong><p><a name="0A5">How long do I have to wait to process?</a></p></strong>
<p>Your process will take handled within 5 business days</p>

<br></br>
<!-- 0A6 -->
<strong><p><a name="0A6">What is TMK?</a></p></strong>
<p>A Tax Map Key is a unique property identifier number.</p>
<ul>
    <li>It is used by staff to assist you.</li>
    <li>Every legal piece of property is linked to a Tax Map Key.</li>
    <li>Allows you to search files on the Land Use Commission website. </li>
    <li>Allows you to search ArcGIS online mapping applications. </li>
    <li>Used to find information about a property. </li>
    <li>Used to request a service. </li>
</ul>

<br></br>
<!-- 0A7 -->
<strong><p><a name="0A7">How do I obtain the TMK for a property?</a></p></strong>
<p>You can use the ArcGIS map application to find your address.</p>
<p>To access the ArcGIS map application click here</p>

<br></br>
<!-- 0A8 -->
<strong><p><a name="0A8">What is a docket?</a></p></strong>
<p>It is a summary of information related to specific property of case. </p>

<br></br>
<!-- 0A9  -->
<strong><p><a name="0A9">How  do I obtain a docket number?</a></p></strong>
<p> </p>

<br></br>
<!-- 0B1 -->
<strong><p><a name="0B1">Can I edit active dockets?</a></p></strong>
<p>Yes, active dockets are able to be editted. </p>

<br></br>
<!-- 0B2 -->
<strong><p><a name="0B2">How do I upload files to my docket?</a></p></strong>
<p> </p>
</div>
</body>
</html> 
@stop
