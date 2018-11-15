<?php
require "conn.php";

$username = $_POST["username"];
$password = $_POST["password"];
$type = $_POST["type"];


$query="";
if($type=="Doctor") {
$query="SELECT * FROM tbl_doctors where ID='$username' and Password='$password'";
} else if($type=="Patient"){
$query="SELECT * FROM tbl_patients where ID='$username' and Password='$password'";
}


$result= mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0 ) {
	while($var = mysqli_fetch_array($result)){
	$myType = $type;
	$myId = $var["ID"];


	//start session upon login
	session_start();
	$_SESSION["account_type"]=$myType;	
	$_SESSION["account_id"]=$myId;

	}
}

else {
echo "invalid";
}



?>