<?php
require "conn.php";

$output="";

$query="SELECT * FROM tbl_doctors ORDER BY Specialization,LastName	 ASC";
$result= mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0 ) {
	while($var = mysqli_fetch_array($result)){

	$output.='<div class="col-md-3"><div class="card mb-4  img-size bg-loob"><img  class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $var["Photo"] ).'" alt="Card image cap" height="300"><center style="color:white">Dr. '.$var["FirstName"].' '.$var["MiddleName"].' '.$var["LastName"].'<br>'.$var["Specialization"].'</center></div></div>';

	}
}


echo $output;

?>
