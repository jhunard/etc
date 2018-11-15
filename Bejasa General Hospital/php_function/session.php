<?php

session_start();

$response = array();

array_push($response,array("account_id"=>$_SESSION['account_id'],"account_type"=> $_SESSION['account_type']));

echo json_encode($response);

?>

