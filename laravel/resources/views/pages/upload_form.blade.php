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
<div class="textcontainer">
	<h2>Documents Upload:</h2>
	<p>In order to upload files to your docket, please enter the following information:</p>
	<hr>
	<form method="post" enctype="multipart/form-data">
{{ csrf_field() }}
Docket Number:
<select name="docketType" required>
	<option value=""></option>
	<option value="A">A</option>
	<option value="SP">SP</option>
	<option value="DR">DR</option>
</select>
<input type="text" name="docketYear" maxlength="2" size="2" placeholder="##" required>
-
<input type="text" name="docketNumber" maxlength="4" size="4" placeholder="####" required><br />
First Name: <input type="text" name="fname" required><br />
Last Name: <input type="text" name="lname" required><br />
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
File: <input name="file" type="file" id="userfile"  multiple required>
<input type="submit" value="Upload">
</form>
</div>
@stop
