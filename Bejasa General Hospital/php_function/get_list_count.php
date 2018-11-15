<?php
require "conn.php";

$id = $_POST["id"];

$response = array();


array_push($response,array("mon"=>getMonday($id),"tue"=>getTuesday($id),"wed"=>getWednesday($id),"thu"=>getThursday($id),"fri"=>getFriday($id),"sat"=>getSaturday($id),"sun"=>getSunday($id)));


echo json_encode($response);


function getMonday($id) {
  require "conn.php";
  date_default_timezone_set("Asia/Singapore");
  $date_today = date("Y-m-d", strtotime('today'));
  $query="SELECT * FROM tbl_appointment WHERE Doctor='$id' AND Day='1' AND Accepted='ACCEPTED' AND `Date` >= '$date_today'";
  $result= mysqli_query($conn,$query);

  $counter=0;

  if(mysqli_num_rows($result) > 0 ) {

    while($var = mysqli_fetch_array($result)){
        $counter++;
    }

    return "( ".$counter." )";

  } else {
    return "";
  }

}


function getTuesday($id) {
  require "conn.php";
  date_default_timezone_set("Asia/Singapore");
  $date_today = date("Y-m-d", strtotime('today'));
  $query="SELECT * FROM tbl_appointment WHERE Doctor='$id' AND Day='2' AND Accepted='ACCEPTED' AND `Date` >= '$date_today'";
  $result= mysqli_query($conn,$query);

  $counter=0;

  if(mysqli_num_rows($result) > 0 ) {

    while($var = mysqli_fetch_array($result)){
        $counter++;
    }

    return "( ".$counter." )";

  } else {
    return "";
  }


}



function getWednesday($id) {
  require "conn.php";
  date_default_timezone_set("Asia/Singapore");
  $date_today = date("Y-m-d", strtotime('today'));
  $query="SELECT * FROM tbl_appointment WHERE Doctor='$id' AND Day='3' AND Accepted='ACCEPTED' AND `Date` >= '$date_today'";
  $result= mysqli_query($conn,$query);

  $counter=0;

  if(mysqli_num_rows($result) > 0 ) {

    while($var = mysqli_fetch_array($result)){
        $counter++;
    }

    return "( ".$counter." )";

  } else {
    return "";
  }


}


function getThursday($id) {
   require "conn.php";
   date_default_timezone_set("Asia/Singapore");
  $date_today = date("Y-m-d", strtotime('today'));
  $query="SELECT * FROM tbl_appointment WHERE Doctor='$id' AND Day='4' AND Accepted='ACCEPTED' AND `Date` >= '$date_today'";
  $result= mysqli_query($conn,$query);

  $counter=0;

  if(mysqli_num_rows($result) > 0 ) {

    while($var = mysqli_fetch_array($result)){
        $counter++;
    }

    return "( ".$counter." )";

  } else {
    return "";
  }


}



function getFriday($id) {
   require "conn.php";
   date_default_timezone_set("Asia/Singapore");
  $date_today = date("Y-m-d", strtotime('today'));
  $query="SELECT * FROM tbl_appointment WHERE Doctor='$id' AND Day='5' AND Accepted='ACCEPTED' AND `Date` >= '$date_today'";
  $result= mysqli_query($conn,$query);

  $counter=0;

  if(mysqli_num_rows($result) > 0 ) {

    while($var = mysqli_fetch_array($result)){
        $counter++;
    }

    return "( ".$counter." )";

  } else {
    return "";
  }


}



function getSaturday($id) {
   require "conn.php";
   date_default_timezone_set("Asia/Singapore");
  $date_today = date("Y-m-d", strtotime('today'));
  $query="SELECT * FROM tbl_appointment WHERE Doctor='$id' AND Day='6' AND Accepted='ACCEPTED' AND `Date` >= '$date_today'";
  $result= mysqli_query($conn,$query);

  $counter=0;

  if(mysqli_num_rows($result) > 0 ) {

    while($var = mysqli_fetch_array($result)){
        $counter++;
    }

    return "( ".$counter." )";

  } else {
    return "";
  }

}



function getSunday($id) {
   require "conn.php";
   date_default_timezone_set("Asia/Singapore");
  $date_today = date("Y-m-d", strtotime('today'));
  $query="SELECT * FROM tbl_appointment WHERE Doctor='$id' AND Day='0' AND Accepted='ACCEPTED' AND `Date` >= '$date_today'";
  $result= mysqli_query($conn,$query);

  $counter=0;

  if(mysqli_num_rows($result) > 0 ) {

    while($var = mysqli_fetch_array($result)){
        $counter++;
    }

    return "( ".$counter." )";

  } else {
    return "";
  }


}




?>



