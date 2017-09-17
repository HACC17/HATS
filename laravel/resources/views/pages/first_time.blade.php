

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
        .pagecontainer {
        }
        .center {
        text-align: center;
        }
        .left {
        text-align: left;
        }
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
        width: 400px;
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
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
        }
        .close:hover { background: #00d9ff; }

.modalCon{
vertical-align: top;
height: 100px;
width: 200px;
margin-left: 50px;
margin-bottom: 50px;
display: inline-block;
background-color: rgba(248,248,248);
}

.modalBox{
border: 1px solid red;
}
    </style>
    <body>
        <div class="pagecontainer">
            <div class="textcontainer">
                <h2> If you see a question below you want to know the answer to, click it for information.</h2>
            </div>
<div class="modalBox">
<!-- Modal:01 -->
            <a class="modalCon" href="#openModal1"><p>What does LUC mean?</p></a>
            <div id="openModal1" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>
<!-- Modal:02 -->
            <a class="modalCon" href="#openModal2">What services does LUC provide?</a>
            <div id="openModal2" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What services does LUC provide?</h2>
                    <p>LUC provides assistance with land property information, processing this request, and compiling resources for the public.</p>
                </div>
            </div>
<!-- Modal:03 -->
            <a class="modalCon" href="#openModal3">Where can I learn more about LUC?</a>
            <div id="openModal3" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>
<!-- Modal:04 -->
            <a class="modalCon" href="#openModal4">What are dockets?</a>
            <div id="openModal4" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>
<!-- Modal:05 -->
            <a class="modalCon" href="#openModal5">What do I need to process a request?</a>
            <div id="openModal5" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>

<!-- Modal:06 -->
            <a class="modalCon" href="#openModal6">Where can I get additional assistance?</a>
            <div id="openModal6" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>

<!-- Modal:07 -->
            <a class="modalCon" href="#openModal7">What is a Tax map key?</a>
            <div id="openModal7" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>

<!-- Modal:08 -->
            <a class="modalCon" href="#openModal8">Where is LUC located?</a>
            <div id="openModal8" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>

<!-- Modal:09 -->
            <a class="modalCon" href="#openModal9">How do I obtain a Tax map key?</a>
            <div id="openModal9" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>

<!-- Modal:10 -->
            <a class="modalCon" href="#openModal10">What are LUC maps?</a>
            <div id="openModal10" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>What does LUC mean?</h2>
                    <p>LUC is the abbreviation for Land Use Commission</p>
                </div>
            </div>

</div>
        </div>
    </body>
</html>
@stop


