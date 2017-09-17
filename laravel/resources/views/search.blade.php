<?php

	$docketType = NULL;
	$docketYear = NULL;
	$docketNumber = NULL;
	$docketName = NULL;
	$project = NULL;

	if(isset($_POST["docketType"]))
	{
		$docketType = $_POST["docketType"];
	}
	if(isset($_POST["docketYear"]))
	{
		$docketYear = $_POST["docketYear"];
	}
	if(isset($_POST["docketNumber"]))
	{
		$docketNumber = $_POST["docketNumber"];
	}
	if(isset($_POST["docketName"]))
	{
		$docketName = $_POST["docketName"];
	}
	if(isset($_POST["project"]))
	{
		$project = $_POST["project"];
	}




	$docket = DB::table('docket')
	->where(function($query) use ($docketType, $docketYear, $docketName, $docketNumber, $project, $island)
	{
		if(isset($docketType))
		{
			$query->where('docketType', $docketType);
		}
		if(isset($docketYear))
		{
			$query->where('docketYear', $docketYear);
		}
		if(isset($docketName))
		{
			$query->where('docketName', 'LIKE', '%'.$docketName.'%');
		}
		if(isset($docketNumber))
		{
			$query->where('docketNumber', $docketNumber);
		}
		if(isset($project))
		{
			$query->where('projectName', 'LIKE', '%'.$project.'%');
		}
		if(isset($island))
		{
			$query->where('island', $island);
		}
	})
	->get();
	print_r($docket);

?>
