@extends('layouts.default')
@section('content')
<style>
body { 
    background-image: url('imgs/dockets_imgs/land1.jpg');
    height: 50%; 
    background-position: center;
    background-attachment: fixed;
    background-size: cover; 
}
</style>
<div class='textcontainer'>
<h2>Looking for a docket?</h2>
<p>In order to search for your docket, please enter your docket number, project name, <b><u>or</b></u> docket name and press the Search button.</p>
<hr>
<form action="" method="post">
	{{ csrf_field() }}
	<p>
		Docket Number:
		<select name="docketType">
			<option value=""></option>
			<option value="A">A</option>
			<option value="SP">SP</option>
			<option value="DR">DR</option>
		</select>
		<input type="text" name="docketYear" maxlength="2" size="2" placeholder="##">
		-
		<input type="text" name="docketNumber" maxlength="4" size="4" placeholder="####">
	</p>
	<p>
		Docket Name: 
		<input type="text" name="docketName" placeholder="Docket Name">
	</p>
	<p>
		Project Name: 
		<input type="text" name="project" placeholder ="Project Name">
	</p>
	<button>Search</button>
</form>
</div>
@stop
