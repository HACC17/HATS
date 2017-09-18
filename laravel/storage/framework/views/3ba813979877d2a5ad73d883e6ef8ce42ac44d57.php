<?php

	$docketType = NULL;
	$docketYear = NULL;
	$docketNumber = NULL;
	$docketName = NULL;
	$project = NULL;

	if(isset($_POST["docketType"]))
	{
		switch ($_POST["docketType"])
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
	if(isset($_POST["docketYear"]) && !empty($_POST["docketYear"]))
	{
		$docketYear = $_POST["docketYear"];
	}
	if(isset($_POST["docketNumber"])&& !empty($_POST["docketNumber"]))
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
		$docket = $docketType.$item->docketYear."-".$item->docketNumber;

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
