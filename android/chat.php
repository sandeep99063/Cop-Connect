<?php
$key        = "fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD";
$db         = "accident_info";
$collection =  "chat";


$mess=$_GET['mess'];
$id=$_GET['id'];

$document = array( "sender"=> $id,
            "date"=> date("Y-M-D"),
            "receiver"=> "1",
            "message"=>$mess);
            
           
            
    


$document1 = array("chat_data"=> array($document));

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