<?php
$key        = "fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD";
$db         = "accident_info";
$collection =  "user_info";

$email = $_POST["email"];
$username_array = explode("@",$email);
$username=$username_array[0];


$id=mt_rand(1,1000);

$document = array( "id"=> "".$id,
            
            "name"=> $_POST["name"],
            "email"=> $email,
            
            "address"=> "AIT PUNE",
            "contact_no"=> $_POST["mobile"],
            "verified"=> "0",
            "voter_card"=> $_POST["voter"],
            "username"=> $_POST["name"],
            "password"=>$_POST["password"]);
           
            
    


$document1 = array("user_data"=> array($document));

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

?>