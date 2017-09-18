<?php
	$count=0;
	$docketNumber = $_POST['docketNumber'];

	if(isset($_POST['docketType']))
	{
		switch ($_POST['docketType'])
		{
			case "A":
				$docketType = "1";
				break;
			case "SP":
				$docketType = "2";
				break;
			case "DR":
				$docketType = "3";
		}
	}
	
	$serial = rand(0,5000);
	
	$timestamp = time();
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	
	foreach ($_FILES['file']['tmp_name'] as $tmpName) 
	{
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
		
		$origFileName = $_FILES['file']['name'][$count];

		$count=$count + 1;
		DB::table('file')->insert(
		[
			'docketNumber' => $docketNumber,
			'docketType' => $docketType,
			'serial' => $serial,
			'part' => $count,
			'file' => $content,
			'timestamp' => $timestamp,
			'origFileName' => $origFileName,
			'fname' => $fname,
			'lname' => $lname
		]);

	}
?>
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
	<hr>
	<h3>Upload Successful!!!</h3>
<form>
<input type="submit" value="Upload another file?">
</form>
</div>
@stop
