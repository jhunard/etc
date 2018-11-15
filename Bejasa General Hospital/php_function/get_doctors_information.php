<?php
require "conn.php";

$id = $_POST["id"];

$response = array();
$schedule="";



$query1="SELECT * FROM tbl_doctors WHERE ID='$id'";
$result1= mysqli_query($conn,$query1);

if(mysqli_num_rows($result1) > 0 ) {
	while($var = mysqli_fetch_array($result1)){

		array_push($response,array("name"=>'Dr. '.$var["FirstName"].' '.$var["MiddleName"].' '.$var["LastName"],"email"=>$var["EmailAddress"],"mobile"=>$var["ContactNo"],"specialization"=>$var["Specialization"],"schedule"=>getMonday($id).getTuesday($id).getWednesday($id).getThursday($id).getFriday($id).getSaturday($id).getSunday($id)));
		
	}
}



echo json_encode($response);





function getMonday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Mon1!='' AND Mon2!='' ORDER BY Mon1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ='<img src="icon/monday.png"> Monday<br>';

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Mon1"].' - '.$var["Mon2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None<br>';
	}

}


function getTuesday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Tue1!='' AND Tue2!='' ORDER BY Tue1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ='<br><img src="icon/tuesday.png"> Tuesday<br>';

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Tue1"].' - '.$var["Tue2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None<br>';
	}

}



function getWednesday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Wed1!='' AND Wed2!='' ORDER BY Wed1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ='<br><img src="icon/wednesday.png"> Wednesday<br>';

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Wed1"].' - '.$var["Wed2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None<br>';
	}

}


function getThursday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Thu1!='' AND Thu2!='' ORDER BY Thu1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ='<br><img src="icon/thursday.png"> Thursday<br>';

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Thu1"].' - '.$var["Thu2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None<br>';
	}

}



function getFriday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Fri1!='' AND Fri2!='' ORDER BY Fri1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ='<br><img src="icon/friday.png"> Friday<br>';

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Fri1"].' - '.$var["Fri2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None<br>';
	}

}



function getSaturday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Sat1!='' AND Sat2!='' ORDER BY Sat1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ='<br><img src="icon/saturday.png"> Saturday<br>';

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Sat1"].' - '.$var["Sat2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None<br>';
	}

}



function getSunday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Sun1!='' AND Sun2!='' ORDER BY Sun1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ='<br><img src="icon/sunday.png"> Sunday<br>';

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Sun1"].' - '.$var["Sun2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None<br>';
	}

}




?>



