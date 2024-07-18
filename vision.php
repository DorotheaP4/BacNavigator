<?php

$postText='';
$postText = trim(file_get_contents('php://input'));
if($postText=="")
{
    echo "img?";die();
}

$request = curl_init('https://vision.googleapis.com/v1p4beta1/images:annotate?key=cheiesecreta');
curl_setopt($request, CURLOPT_POST, 1);
curl_setopt($request, CURLOPT_HTTPHEADER, array(
	'Content-type: text/json', 
	'Content-length: ' . strlen($postText)
));
curl_setopt($request, CURLOPT_POSTFIELDS, $postText);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($request, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);

$response=curl_exec($request);
curl_close($request);	



header('Content-type: text/json'); 
echo $response;
?>
