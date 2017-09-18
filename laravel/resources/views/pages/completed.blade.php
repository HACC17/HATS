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
    width: 70%;
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
<h2>Completed Dockets</h2>

<p>This link connects you to a growing collection of Decision and Orders approved by the LUC for past projects.  These are segregated by county and each of the individual links are by LUC docket number and docket name.</p>
<hr>
<?php
	$docket = DB::table('docket')
	->where('status', '!=', '0')
	->get();
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
	}
?>
</table>

</div>
</body>

@stop

