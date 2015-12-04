<?php
$key        = "fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD";
$db         = "accident_info";
$collection =  "case_info";


$document1 = array( 
    "case_id" => $_POST['InputName'],
    "case_details" => $_POST['CaseDetail'],
    "Investigator" => $_POST['OfficerName'],
    "police_station" => $_POST['PoliceStation'],
    "progress_scale" => "2",
    "case_verified" => "1",


    
);

$document = array("case_data"=> $document1);

$opts = array(
    "http" => array(
        "method"  => "POST",
        "header"  => "Content-type: application/json",
        "content" => json_encode($document),
    ),
);

$context = stream_context_create($opts);

$result = file_get_contents("https://api.mongolab.com/api/1/databases/$db/collections/$collection?apiKey=$key", false, $context);

header('Location: /request.html');
// Dumps the response document
?>