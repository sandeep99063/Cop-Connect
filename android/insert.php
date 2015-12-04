<?php
$key        = "fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD";
$db         = "accident_info";
$collection =  "case_info";


$img=base64_decode($_POST['rohit']);
$id=mt_rand(1,1000);
$file=$id.".jpg";
$fp=fopen($file,'w');
fwrite($fp,$img);

$document = array( "id"=> "".$id,
            "case_id"=>"0",
            "Investigator"=> "0",
         
            "case_date"=> date("Y-M-D"),
            "title"=> $_POST["title"],
            "case_location"=> $_POST['location'],
            "Reported_Person_Id"=> $_POST['user_id'],
            "longitude"=> $_POST['longi'],
            "latitute"=> $_POST['lati'],
            "time"=> date("h:i"),
            "description"=> $_POST['desc'],
            "case_details"=> "0",
            "dov"=>"0",
            "closed"=>"0",
            "police_station"=> "0",
            "case_verified"=> "0",
            "progress_scale"=> "1");
            
           
            
    


$document1 = array("case_data"=> array($document));

$opts = array(
    "http" => array(
        "method"  => "POST",
        "header"  => "Content-type: application/json",
        "content" => json_encode($document1),
    ),
);

$context = stream_context_create($opts);

$result = file_get_contents("https://api.mongolab.com/api/1/databases/$db/collections/$collection?apiKey=$key", false, $context);

if($result)
echo "yup";
else
echo "sorry";
?>