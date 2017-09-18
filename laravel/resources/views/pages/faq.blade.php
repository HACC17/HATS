

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
        background-color: rgba(248,248,248,0.8);
        }
        .qabox{
        text-align:left;
        margin-bottom: 15px;
        padding: 10px;
        border: 5px solid rgba(248,248,248,0.5);
        background-color: rgba(248,248,248,0.8);
        }
    </style>
    <body>
        <div class="textcontainer">
            <!-- Start of FAQ page -->
            <h3>FREQUENTLY ASKED QUESTIONS</h3>
            <!-- Questions -->
            <br><a href="#0A1">What do I need to make a request?</a></br>
            <br><a href="#0A2">How do I process a request?</a></br>
            <br><a href="#0A3">Who do I contact?</a></br>
            <br><a href="#0A4">Where are we located</a></br>
            <br><a href="#0A5">How long do I have to wait to process?</a></br>
            <br><a href="#0A6">What is TMK</a></br>
            <br><a href="#0A7">How do I obtain the TMK for a property?</a></br>
            <br><a href="#0A8">What is a docket?</a></br>
            <br><a href="#0A9">How do I obtain a docket number?</a></br>
            <br><a href="#0B1">Can I edit active dockets?</a></br>
            <br></br>
            <!-- Answers -->
            <!-- 0A1 -->
            <div class="qabox">
                <a name="0A1">
                    <h3>What do I need to make a request?</h3>
                </a>
                <p>You will need to have the following:</p>
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
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0A2 -->
            <div class="qabox">
                <a name="0A2">
                    <h3>How do I process a request?</h3>
                </a>
                <p>You can fill out this form here</p>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0A3 -->
            <div class="qabox">
                <a name="0A3">
                    <h3>Who do I contact?</h3>
                </a>
                <p>You can contact us by email or phone number.</p>
                <p>Telephone:(808)587-3827</p>
                <p>Email:dbedt.luc.web@hawaii.gov</p>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0A4 -->
            <div class="qabox">
                <a name="0A4">
                    <h3>Where are we located</h3>
                </a>
                <p>State Office Towe
                    Leiopapa A Kamehameha Building
                    235 South Beretania Street, Room 406
                    Honolulu, Hawai`i 96804-2359.
                </p>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0A5 -->
            <div class="qabox">
                <a name="0A5">
                    <h3>How long do I have to wait to process a request?</h3>
                </a>
                <p>Your process will be handled within 5-7 business days.</p>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0A6 -->
            <div class="qabox">
                <a name="0A6">
                    <h3>What is TMK?</h3>
                </a>
                <p>A Tax Map Key (TMK) is a unique property identifier number.</p>
                <ul>
                    <li>It is used by staff to assist you.</li>
                    <li>Every legal piece of property is linked to a Tax Map Key.</li>
                    <li>Allows you to search files on the Land Use Commission website. </li>
                    <li>Allows you to search ArcGIS online mapping applications. </li>
                    <li>Used to find information about a property. </li>
                    <li>Used to request a service. </li>
                </ul>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0A7 -->
            <div class="qabox">
                <a name="0A7">
                    <h3>How do I obtain the TMK for a property?</h3>
                </a>
                <p>You can use the ArcGIS map application to find your address.</p>
                <p>To access the ArcGIS map application click here</p>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0A8 -->
            <div class="qabox">
                <a name="0A8">
                    <h3>What is a docket?</h3>
                </a>
                <p>A dockets is a set of documents that contain information related to a specific property, project, or case. </p>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0A9  -->
            <div class="qabox">
                <a name="0A9">
                    <h3>How  do I obtain a docket number?</h3>
                </a>
                <p> </p>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
            <!-- 0B1 -->
            <div class="qabox">
                <a name="0B1">
                    <h3>Can I edit active dockets?</h3>
                </a>
                <p>Yes, active dockets can be editted. </p>
                <br></br>
                <a href="#top">Back to top of page</a>
            </div>
        </div>
    </body>
</html>
@stop


