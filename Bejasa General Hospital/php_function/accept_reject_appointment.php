<?php
require "conn.php";

$id = $_POST["id"];
$action = $_POST["action"];



$thedate="";
$thenumber=0;


if($action=="ACCEPTED") {


  //get the highest number
  $query1 = "SELECT * FROM tbl_appointment WHERE ID='$id'";
          $result1 = mysqli_query($conn,$query1);

          if(mysqli_num_rows($result1) > 0 ) {

            while($row1=mysqli_fetch_array($result1)) {
              $thedate = $row1["Date"];
            }

          } 


          $query2 = "SELECT * FROM tbl_appointment WHERE `Date`='$thedate' ORDER BY `Number` DESC LIMIT 0,1";
          $result2 = mysqli_query($conn,$query2);

          if(mysqli_num_rows($result2) > 0 ) {

            while($row2=mysqli_fetch_array($result2)) {
              $thenumber = $row2["Number"];
            }

          } 

//add 1 to the next
$thenumber++;

}


        

$query = "UPDATE tbl_appointment SET Accepted='$action', Sms='NO',`Number`='$thenumber' WHERE ID='$id'";
mysqli_query($conn,$query);

echo $action;

?>