<?php
require "conn.php";

$id = $_POST["id"];
$day = $_POST["day"];

$output="";

if($day=="1") {

$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/monday_big.png" style="margin-bottom:15px;"> MONDAY
     </label>
  </center>
 </div>';

} else if($day=="2") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/tuesday_big.png" style="margin-bottom:15px;"> TUESDAY
     </label>
  </center>
 </div>';

}  else if($day=="3") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/wednesday_big.png" style="margin-bottom:15px;"> WEDNESDAY
     </label>
  </center>
 </div>';

}  else if($day=="4") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/thursday_big.png" style="margin-bottom:15px;"> THURSDAY
     </label>
  </center>
 </div>';

}  else if($day=="5") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/friday_big.png" style="margin-bottom:15px;"> FRIDAY
     </label>
  </center>
 </div>';


}  else if($day=="6") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/saturday_big.png" style="margin-bottom:15px;"> SATURDAY
     </label>
  </center>
 </div>';


}  else if($day=="0") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/sunday_big.png" style="margin-bottom:15px;"> SUNDAY
     </label>
  </center>
 </div>';

}  


$output.="<br><br><br><br>";


date_default_timezone_set("Asia/Singapore");
$date_today = date("Y-m-d", strtotime('today'));

$query="SELECT * FROM tbl_appointment WHERE Day='$day' AND Doctor='$id' AND Accepted='NO' AND `Date` >= '$date_today'";
$result= mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0 ) {
	while($var = mysqli_fetch_array($result)){

        $patient_id = $var["Patient"];

                    $query1="SELECT * FROM tbl_patients WHERE ID='$patient_id'";
                    $result1= mysqli_query($conn,$query1);

                    if(mysqli_num_rows($result1) > 0 ) {

                      while($var1 = mysqli_fetch_array($result1)){

                      $output.='<div class="col-md-3"><div class="card mb-4  img-size bg-loob"><img  class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $var1["Photo"] ).'" alt="Card image cap" height="300"><center style="color:white">'.$var1["FirstName"].' '.$var1["MiddleName"].' '.$var1["LastName"].'<br>'.$var["Date"].'<br><button class="btn btn-danger" data-id="'.$var["ID"].'" id="btn_reject">Reject</button><button class="btn btn-success" data-id="'.$var["ID"].'" id="btn_accept">Accept</button></center></div></div>';

                      }
                    }

	}
} else {
	$output='<div class="container" style="margin-top:130px"><center><img src="image/not_found.png" height="250px"></center></div>';
}


echo $output;

?>