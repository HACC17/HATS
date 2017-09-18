

@extends('layouts.default')
@section('content')
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
        .center {
        text-align: center;
        }
        .left {
        text-align: left;
        }
        /* Modal */
        .modalDialog {
        position: fixed;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        opacity:0;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
        }
        .modalDialog:target {
        opacity:1;
        pointer-events: auto;
        }
        .modalDialog > div {
        width: 500px;
        height: 500;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);
        }
        .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: 25px;
        text-align: center;
        top: -45px;
        width: 0px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 50px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
        }

        .close:hover { background: #00d9ff;
		}
		
        .modalCon{
        text-align: center;
        vertical-align: top;
        height: 140px;
        width: 260px;
        margin-left: 20px;
        margin-bottom: 20px;
        display: inline-block;
        background-color: rgba(248,248,248,0.8);
        box-shadow: 0px 0px 20px 1px #888888;
        }
        .modalCon:hover {
        background-color: rgba(248,248,248);
        }
        .modalBox{
        width: 80%;
        margin-left: auto;
        margin-right: auto;
		}
        .modalBox a{
        color: black;
        font-size: 150%;
        text-align: center;
        padding-top: 10%;
        }
    </style>
            <div class="textcontainer">
                <h2><center>If you see a question below you want to know the answer to, click it for information.</center></h2>
            </div>
            <div class="textcontainerbutton">
            <div class="modalBox">
                <!-- Start of Table -->
                <!-- Table row one -->
                <tr>
                    <!-- Modal:01: What does LUC mean?-->
                    <td>
                        <a class="modalCon" href="#openModal1">What does LUC mean?</a>
                        <div id="openModal1" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>What does LUC mean?</h2>
                                <p>LUC is the abbreviation for Land Use Commission</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Modal:02: What services does LUC provide? -->
                        <a class="modalCon" href="#openModal2">What services does LUC provide?</a>
                        <div id="openModal2" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>What services does LUC provide?</h2>
                                <p>LUC provides assistance with land property information, processing this request, and compiling resources for the public.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Modal:03: Where can I learn more about LUC? -->
                        <a class="modalCon" href="#openModal3">Where can I learn more about LUC?</a>
                        <div id="openModal3" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>Where can I learn more about LUC?</h2>
                                <a href="/about">
                                    <p>You can learn more about the LUC in the about section. Click here to go directly there.</p>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Second Row -->
                <tr>
                    <td>
                        <!-- Modal:04 -->
                        <a class="modalCon" href="#openModal4">What are dockets?</a>
                        <div id="openModal4" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>What are dockets?</h2>
                                <p>Dockets are a set of documents that contain a summary of information related to a specific property or case. </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Modal:05 -->
                        <a class="modalCon" href="#openModal5">What do I need to process a request?</a>
                        <div id="openModal5" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>What do I need to process a request?</h2>
                                <p>You will need to have the following:
                                <ul>
                                    <li>Full Name</li>
                                    <li>Phone Number</li>
                                    <li>Email</li>
                                    <li>Organization</li>
                                    <li>Type of information you are requesting or submitting</li>
                                    <li>Tax Map Key</li>
                                    <li>Docket ID</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Modal:06 -->
                        <a class="modalCon" href="#openModal6">Where can I get additional assistance?</a>
                        <div id="openModal6" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>Where can I get additional assistance?</h2>
                                <p>LUC offers assistance by email, phone or in person. You can visit the contact tab for this information or<a href="/contact">click here to go directly there.</a></p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Third Row -->
                <tr>
                    <td>
                        <!-- Modal:07 -->
                        <a class="modalCon" href="#openModal7">What is a Tax Map Key?</a>
                        <div id="openModal7" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>What is a Tax Map Key?</h2>
                                <p>
                                <ul>
                                    A Tax Map Key is a unique property identifier number. It is used by staff to assist you. Every legal piece of property is linked to a Tax Map Key. The Tax Map Key (TMK):<br>
                                    <li>Allows you to search files on the Land Use Commission website. </li>
                                    <li>Allows you to search ArcGIS online mapping applications. </li>
                                    <li>Used to find information about a property. </li>
                                    <li>Used to request a service. </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Modal:08 -->
                        <a class="modalCon" href="#openModal8">Where is LUC located?</a>
                        <div id="openModal8" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>Where is LUC located?</h2>
                                <p>LUC is located the following location:<br>
                                    State Office Towe Leiopapa A Kamehameha Building 235 South Beretania Street, Room 406<br> 
                                    Honolulu,Hawai`i 96804-2359. 
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Modal:09 -->
                        <a class="modalCon" href="#openModal9">How do I obtain a Tax Map Key?</a>
                        <div id="openModal9" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h2>How do I obtain a Tax Map Key?</h2>
                                <p>LUC utilizes ArcGIS to select and retrieve the coordinates of a prpoerty and determine the location's Tax Map Key.</p>
                            </div>
                        </div>
                        </th>
                </tr>
            </div>
            </div>
@stop


