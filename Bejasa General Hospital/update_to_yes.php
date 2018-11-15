<?php

require "conn.php";

$id = $_POST["id"];

$query = "UPDATE tbl_appointment SET Sms='YES' WHERE ID='$id'";
mysqli_query($conn,$query);


?>