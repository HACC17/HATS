<?php



$docketType = NULL;
$docketYear = NULL;
$docketName = NULL;
$project = NULL;
$island = NULL;
$docketNumber = NULL; //Number





$docketNumber = 2;


	

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

	echo $docket;



?>
