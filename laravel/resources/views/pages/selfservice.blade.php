

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

        /* Outer Boxes */
        .in-boxed {
		  padding-top: 20px;
		  text-align: center;
		  height: 300px;
		  opacity: 0.9;
		  margin-bottom: -70px;
		} 
        /* Inner Boxes */
        .boxed {
        vertical-align: middle;
        display: inline-block;
        width: 300px;
        height: 150px;
        padding: 20px;
        margin: 10px;
        margin-bottom: 500px;
        background-color: rgba(248,248,248,0.8);
        }
        .boxed:hover {
		background-color: rgba(255,255,255);
		cursor: pointer;
		}
        .center {
        text-align: center;
        }
        .left {
        text-align: left;
        }
    </style>

            <div class="textcontainer">
                <h2> WE ARE HERE TO HELP </h2>
                <p>We are here to help you find the information you are looking for. To begin we recommend selecting one of the buttons below to help answer any questions you may have.</p>
            </div>
            <div class="in-boxed">
                <!-- First Time -->
                    <div class="boxed" onclick="location.href = 'first_time';">
                        <h2 class="center">First Time</h2>
                        <p class="left">If this is your first time visiting and using Land Use Commission services.</p>
                        
                    </div>
                <!-- Returning -->

                    <div class="boxed" onclick="location.href = 'faq';">
                        <h2 class="center">Have a question?</h2>
                        <p class="left">If you are a returning user and have a question.</p>
                        
                    </div>

                <!-- First Time -->
                    <div class="boxed" onclick="location.href = 'contact';">
                        <h2 class="center">Process Request</h2>
                        <p class="left">Need to process a request?</p>
                        
                    </div>
            </div>

@stop


