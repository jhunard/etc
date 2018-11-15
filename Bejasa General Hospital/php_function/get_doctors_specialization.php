<?php
require "conn.php";

$specialization = $_POST["specialization"];

$output="";

if($specialization=="Anesthesia") {

$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/syringe_big.png" style="margin-bottom:15px;"> ANESTHESIA
     </label>
  </center>
 </div>';

} else if($specialization=="Pediatrics") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/pediatrics_big.png" style="margin-bottom:15px;"> PEDIATRICS
     </label>
  </center>
 </div>';

}  else if($specialization=="Surgery") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/surgery_big.png" style="margin-bottom:15px;"> SURGERY
     </label>
  </center>
 </div>';

}  else if($specialization=="Medicine") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/medicine_big.png" style="margin-bottom:15px;"> MEDICINE
     </label>
  </center>
 </div>';

}  else if($specialization=="Obstetrics & Gynecology") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/obgyn_big.png" style="margin-bottom:15px;"> OBSTETRICS & GYNECOLOGY
     </label>
  </center>
 </div>';


}  else if($specialization=="Orthopedics") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/orthopedics_big.png" style="margin-bottom:15px;"> ORTHOPEDICS
     </label>
  </center>
 </div>';


}  else if($specialization=="Gastroenterologist") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/gastro_big.png" style="margin-bottom:15px;"> GASTROENTEROLOGIST
     </label>
  </center>
 </div>';


}  else if($specialization=="EENT") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/eent_big.png" style="margin-bottom:15px;"> EENT
     </label>
  </center>
 </div>';


}  else if($specialization=="Radiology & Sonology") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/radiology_big.png" style="margin-bottom:15px;"> RADIOLOGY & SONOLOGY
     </label>
  </center>
 </div>';


}  else if($specialization=="Neurology") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/neurology_big.png" style="margin-bottom:15px;"> NEUROLOGY
     </label>
  </center>
 </div>';


}  else if($specialization=="Urology") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/urology_big.png" style="margin-bottom:15px;"> UROLOGY
     </label>
  </center>
 </div>';


}  else if($specialization=="Dentistry") {

	$output='<div class="display-4 container"><center>
     <label class="text-center p-1">
      <img src="icon/dentistry_big.png" style="margin-bottom:15px;"> DENTISTRY
     </label>
  </center>
 </div>';


} 


$output.="<br><br><br><br>";


$query="SELECT * FROM tbl_doctors WHERE Specialization='$specialization'";
$result= mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0 ) {
	while($var = mysqli_fetch_array($result)){

	$output.='<div class="col-md-3"><div class="card mb-4  img-size bg-loob"><img  class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $var["Photo"] ).'" alt="Card image cap" height="300"><center style="color:white">Dr. '.$var["FirstName"].' '.$var["MiddleName"].' '.$var["LastName"].'<br>'.$var["Specialization"].'<br><button class="btn btn-danger" data-id="'.$var["ID"].'" id="btn_view" data-toggle="modal" data-target="#view_modal">View</button><button class="btn btn-success" data-id="'.$var["ID"].'" id="btn_set" data-toggle="modal" data-target="#set_modal">Set Appointment</button></center></div></div>';

	}
} else {
	$output='<div class="container" style="margin-top:130px"><center><img src="image/not_found.png" height="250px"></center></div>';
}


echo $output;

?>