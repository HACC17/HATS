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
table {
    border-collapse: collapse;
    width: 98%;
    margin-left: auto;
    margin-right: auto;
}

.textcontainer a {
    text-decoration: underline;
}

th, td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
}


th {
    background-color: #bce8ff;
}

tr:hover{background-color:#f5f5f5}

</style>

<body>
<div class="textcontainer">
<h2>Search Results:</h2>
<p>Click on the docket number to view information about the docket.</p>
<hr>
<?php
	function issetor(&$var, $default = "")
	{
		return isset($var) ? $var : $default;
	}
	$docketType = NULL;
	$docketYear = NULL;
	$docketNumber = NULL;
	$docketName = NULL;
	$project = NULL;

	if(isset($_GET["docketType"]))
	{
		switch ($_GET["docketType"])
		{
			case "A":
				$docketType = 1;
				break;
			case "SP":
				$docketType = 2;
				break;
			case "DR":
				$docketType = 3;
				break;
		}
	}
	if(isset($_GET["docketYear"]) && !empty($_GET["docketYear"]))
	{
		$docketYear = $_GET["docketYear"];
	}
	if(isset($_GET["docketNumber"])&& !empty($_GET["docketNumber"]))
	{
		$docketNumber = $_GET["docketNumber"];
	}
	if(isset($_GET["docketName"]))
	{
		$docketName = $_GET["docketName"];
	}
	if(isset($_GET["project"]))
	{
		$project = $_GET["project"];
	}
	$page = 1;
	if(isset($_GET["page"]))
	{
		$page = $_GET["page"];
	}

	$docket = DB::table('docket')
	->where(function($query) use ($docketType, $docketYear, $docketName, $docketNumber, $project)
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
	})
	->orderBy('docketType', 'asc')
	->orderBy('docketNumber', 'desc')
	->get();
	$linePerPage = 20;
	$pages = count($docket) / $linePerPage;
	$line = 1;
?>
<table>
	<tr>
		<th>Docket</th>
		<th>Docket Name</th>
		<th>Project Name</th>
		<th>Island</th>
		<th>Status</th>
	</tr>
<?php
	foreach($docket as $item)
	{
		switch ($item->docketType)
		{
			case 1:
				$docketType = "A";
				break;
			case 2:
				$docketType = "SP";
				break;
			case 3:
				$docketType = "DR";
		}
		
		if($item->docketYear < 10)
		{
			$docketYear = "0" . $item->docketYear;
		}
		else
		{
			$docketYear = $item->docketYear;
		}
		$docket = $docketType.$docketYear."-".$item->docketNumber;

		switch ($item->island)
		{
			case 1:
				$island = "Hawaiʻi";
				break;
			case 2:
				$island = "Maui";
				break;
			case 3:
				$island = "Kahoʻolawe"; //Is this needed?
				break;
			case 4:
				$island = "Lanaʻi";
				break;
			case 5:
				$island = "Molokaʻi";
				break;
			case 6:
				$island = "Oʻahu";
				break;
			case 7:
				$island = "Kauaʻi";
				break;
			case 8:
				$island = "Niʻihau";
				break;
		}
		switch ($item->status)
		{
			case 0:
				$status = "Pending";
				break;
			case 1:
				$status = "Approved";
				break;
			case 2:
				$status = "Defective";
				break;
			case 3:
				$status = "Denied";
				break;
			case 4:
				$status = "Withdrawn";
				break;
			case 5:
				$status = "Dissmissed";
				break;
			case 6:
				$status = "Incremental";
				break;
			default:
				$status = "Unknown";
		}
?>
	<tr>
		<td><a href="docket/<?php echo $docket; ?>/"><?php echo $docket; ?></a></td>
		<td><?php print($item->docketName); ?></td>
		<td><?php print($item->project); ?></td>
		<td><?php print($island); ?></td>
		<td><?php print($status); ?></td>
	</tr>
<?php
		if($line === $linePerPage)
			break;
		else
			$line += 1;
	}
?>
</table>
<br>
<center><?php for ($pageNum = 0; $pageNum <= $pages; $pageNum++) { ?>
	<a href="results?docketType=<?php echo issetor($_GET['docketType']) ?>&docketYear=<?php echo issetor($_GET['docketYear']) ?>&docketNumber=<?php echo issetor($_GET['docketNumber']) ?>&docketName=<?php echo issetor($_GET['docketName']) ?>&project=<?php echo issetor($_GET['project']) ?>&page=<?php echo $pageNum + 1?>"><?php echo $pageNum + 1 ?></a>
<?php } ?>
<br>
<form method="get" action="search">
	<button type="submit">Search again</button>
</form>
</center>

</div>
@stop
