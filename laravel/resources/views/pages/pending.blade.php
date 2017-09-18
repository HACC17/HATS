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
    border-collapse: separated;
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
<div class="textcontainer">
<h2>Pending Dockets</h2>

<p>Pending Dockets represent current open dockets under consideration by the Commission.  These include district boundary amendments, special permits, and declaratory rulings.</p>

<p>As our new website develops we intend to provide all the public documents associated with each docket; which would include all documents filed by the Petitioner, the County, the State Office of Planning, and any intervening parties.</p>
<hr>
<?php
	$docket = DB::table('docket')
	->where('status', '0')
	->get();
	$page = 1;
	if(isset($_GET["page"]))
	{
		$page = $_GET["page"];
	}
	$linePerPage = 20;
	$pages = count($docket) / $linePerPage;
	$line = 0;
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
		$line += 1;
		if($line < $linePerPage * ($page -1))
			continue;
		if($line === $linePerPage * $page)
			break;
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
	}
?>
</table>
<br>
<center><?php for ($pageNum = 0; $pageNum <= $pages; $pageNum++) { ?>
	<a href="pending?page=<?php echo $pageNum + 1?>"><?php echo $pageNum + 1 ?></a>
<?php } ?>
<br>
<form method="get" action="search">
	<button type="submit">Search again</button>
</form>
</center>
</div>
@stop
