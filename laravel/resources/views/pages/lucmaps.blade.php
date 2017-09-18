@extends('layouts.default-head')
@section('content')
<style>
html{
height: 50%; 
}
body { 
    background-image: url('/imgs/luc_maps_imgs/land1.jpg');
    height: 50%; 
    background-position: center;
    background-attachment: fixed;
    background-size: cover; 
}
.embed-container {
	position: relative; 
	padding-bottom: 80%; 
	height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}
</style>	

<div class="textcontainermap">
<div class="embed-container"><iframe width="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="State of Hawaii Land Use District Boundaries Map" src="//www.arcgis.com/apps/presentation/index.html?webmap=9cc952d0ea284afdbdf3b3f823d4986b"></iframe></div>
</div> 
@stop
