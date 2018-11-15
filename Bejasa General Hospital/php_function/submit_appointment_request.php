<?php
require "conn.php";

$doc_id = $_POST["doc_id"];
$pat_id = $_POST["pat_id"];
$app_day = $_POST["app_day"];
$app_date = $_POST["app_date"];

$result="";


if($app_day=="0") {

	$result = getSunday($doc_id);

} else if($app_day=="1") {

	$result = getMonday($doc_id);

} else if($app_day=="2") {

	$result = getTuesday($doc_id);
	
} else if($app_day=="3") {

	$result = getWednesday($doc_id);
	
} else if($app_day=="4") {

	$result = getThursday($doc_id);
	
} else if($app_day=="5") {

	$result = getFriday($doc_id);
	
} else if($app_day=="6") {

	$result = getSaturday($doc_id);
	
}



if($result=="" || $result=="None") {

	echo $result;

} else {

	$query="SELECT * FROM tbl_appointment WHERE Patient='$pat_id' AND `Date`='$app_date' AND Doctor='$doc_id'";
	$result= mysqli_query($conn,$query);

	if(mysqli_num_rows($result) > 0 ) {

		$result="exisitng";

	} else {
		
		$result="ok";

		$query="INSERT INTO tbl_appointment (Patient,`Date`,Doctor,Day) values ('$pat_id','$app_date','$doc_id','$app_day')";
		mysqli_query($conn,$query);

	}

	echo $result;

}


	



function getMonday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Mon1!='' AND Mon2!='' ORDER BY Mon1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ="";

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Mon1"].' - '.$var["Mon2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None';
	}

}


function getTuesday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Tue1!='' AND Tue2!='' ORDER BY Tue1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ="";

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Tue1"].' - '.$var["Tue2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None';
	}

}



function getWednesday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Wed1!='' AND Wed2!='' ORDER BY Wed1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ="";

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Wed1"].' - '.$var["Wed2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None';
	}

}


function getThursday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Thu1!='' AND Thu2!='' ORDER BY Thu1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ="";

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Thu1"].' - '.$var["Thu2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None';
	}

}



function getFriday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Fri1!='' AND Fri2!='' ORDER BY Fri1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ="";

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Fri1"].' - '.$var["Fri2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None';
	}

}



function getSaturday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Sat1!='' AND Sat2!='' ORDER BY Sat1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ="";

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Sat1"].' - '.$var["Sat2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None';
	}

}



function getSunday($id) {
	require "conn.php";
	$query="SELECT * FROM tbl_schedule WHERE Doctor='$id' AND Sun1!='' AND Sun2!='' ORDER BY Sun1 DESC";
	$result= mysqli_query($conn,$query);
	$mySchedule ="";

	if(mysqli_num_rows($result) > 0 ) {

		while($var = mysqli_fetch_array($result)){

			$mySchedule .= $var["Sun1"].' - '.$var["Sun2"].'<br>';
			
		}

		return $mySchedule;

	} else {
		return $mySchedule.'None';
	}

}




?>



