<?php

require "conn.php";

$response = array();

$patient_number="";
$patient_name="";
$doctor_name="";

$query = "SELECT * FROM tbl_appointment WHERE Sms='NO' LIMIT 0,1";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0 ) {

	while($row=mysqli_fetch_array($result)) {

		$patient_id = $row["Patient"];
		$doctor_id = $row["Doctor"];

					//patient's info
					$query1 = "SELECT * FROM tbl_patients WHERE ID='$patient_id'";
					$result1 = mysqli_query($conn,$query1);

					if(mysqli_num_rows($result1) > 0 ) {

						while($row1=mysqli_fetch_array($result1)) {
							$patient_name = $row1["FirstName"]." ".$row1["MiddleName"]." ".$row1["LastName"];
							$patient_number = $row1["ContactNumber"];
						}

					} 


					//doctor's info
					$query2 = "SELECT * FROM tbl_doctors WHERE ID='$doctor_id'";
					$result2 = mysqli_query($conn,$query2);

					if(mysqli_num_rows($result2) > 0 ) {

						while($row2=mysqli_fetch_array($result2)) {
							$doctor_name = $row2["FirstName"]." ".$row2["MiddleName"]." ".$row2["LastName"];
						}

					} 


					$theday="";
					if($row["Day"]=="0") {
						$theday="Sunday";
					} else if ($row["Day"]=="1") {
						$theday="Monday";
					} else if ($row["Day"]=="2") {
						$theday="Tuesday";
					} else if ($row["Day"]=="3") {
						$theday="Wedbesday";
					} else if ($row["Day"]=="4") {
						$theday="Thursday";
					} else if ($row["Day"]=="5") {
						$theday="Friday";
					} else if ($row["Day"]=="6") {
						$theday="Saturday";
					} 


		array_push($response,array("id"=>$row["ID"],"number"=>$patient_number,"patient"=>$patient_name,"doctor"=>$doctor_name,"date"=>$row["Date"],"day"=>$theday,"status"=>$row["Accepted"],"order"=>$row["Number"]));
	}

} 


echo json_encode($response);


?>