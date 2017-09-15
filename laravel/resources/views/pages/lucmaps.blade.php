@extends('layouts.default')
@section('content')
<html> 
<style>
html{
height: 50%; 
}

body { 
    background-image: url('/imgs/luc_maps_imgs/land1.jpg');
    background-position: center;
	background-position: fixed;
    background-size: cover; 
}
.embed-container {
	position: relative; 
	height: 0;
	padding-bottom: 50%;
	max-width: 100%;
} 
.embed-container iframe, .embed-container object, .embed-container iframe {
	position: absolute; 
	top: 0; 
	left: 0; 
	width: 100%; 
	height: 100%;
} 
small {
	position: absolute; 
	z-index: 40; 
	bottom: 0; 
	margin-bottom: -15px;
}
</style>
<!-- Background Image found in laravel/public -->  
<body> 
			<div class="embed-container">
				<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
				title="State of Hawaii Land Use District Boundaries Map" src="//www.arcgis.com/apps/Embed/index.html?webmap=9cc952d0ea284afdbdf3b3f823d4986b&amp;
				extent=-166.1353,17.1565,-149.4031,24.272&amp;home=true&amp;zoom=true&amp;previewImage=false&amp;scale=true&amp;search=true&amp;searchextent=true&amp;
				details=true&amp;legendlayers=true&amp;active_panel=legend&amp;basemap_gallery=true&amp;disable_scroll=true&amp;theme=dark">
				</iframe>
			</div>


</body>

</html> 
@stop
