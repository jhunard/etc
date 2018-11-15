<!doctype html>
<html>
<body>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">

<!-- B O O T S T R A P  4 -->
<link rel="stylesheet" href="css/bootstrap4/bootstrap.min.css">
<script src="css/bootstrap4/js/jquery.min.js"></script>
<script src="css/bootstrap4/js/bootstrap.min.js"></script>
<!-- B O O T S T R A P  4 -->


<!-- B O O T S T R A P  3 -->
<script src="css/bootstrap3/js/jquery.min.js"></script>  
<!-- B O O T S T R A P  3 -->


<script src="js/sweetalert2.all.min.js"></script>


<script src="js_function/home.js" type="text/javascript" language="javascript"></script>

</head>
<style type="text/css">


   .jumb-pic{
            height: 70vh;
            width: 100%;

            background-image: 
             url(image/face.jpg);

            background-size: 100% 100%;
          background-repeat: no-repeat;
            background-attachment: cover;
              
        }



</style>
<body>



<!-- Image and text -->

<nav class="navbar navbar-expand-lg navbar-dark bg-red sticky-top">
  <img src="image/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
  <a class="navbar-brand lead" href="home.php" style="margin-left: 10px;"><strong>M.B. General Hospital</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto nav-size lead">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"><strong><img src="icon/home.png" style="margin-bottom:8px;"> HOME</strong><span class="sr-only">(current)</span></a>
      </li>

         <li id="item1">
          <!-- Session dependent -->
        </li>

        <li id="item2">
          <!-- Session dependent -->
        </li>
   
      
    </ul>
  </div>
</nav>






 <div class="jumbotron jumb-pic" >
        <div class="container">
      
        </div>
      </div>

<div class="container mb-5">
  <center>
  <div class="display-4">

     <label class="text-center p-1">
      <img src="icon/about.png" style="margin-bottom:15px;"> ABOUT US
     </label>
  
 </div>

 <label class="text-center p-1">
    <strong>Address: </strong>Dr. Mario D. Bejasa General Hospital, J.P. Rizal Street, Bauan, Batangas, Philippines
    <br>
    <strong>Hours: </strong>Open 24 Hours
    <br>
    <strong>Phone: </strong>+63(43) 727 3844
  </label>

  <div class="map-responsive" id="map" style="width:100%;height:400px;background:#e6e6e6"></div>
  

</center>

</div>
<div class="jumb">
        <div class="container">
         <div class="row">
          <div class="col-md-8">
          <h1 class="font1">Welcome to MDB General Hospital Online Scheduling System</h1>
     
          <p>The process of arranging, controlling and optimizing work and workloads of the doctors.<br>Scheduling is used to allocate the doctor's schedule to the patients.</p>
        </div>
          
          <div class=" col-md-4"> 
          <h1 class="font1">You can now schedule an appointment!</h1>
        <button type="button" class="btn btn-danger" id="btn_appointment">Schedule Appointment</button>
        </div>

          </div>
        </div>
      </div>


<div class="album  bg-light">
        <br><br>
        <div class="container">
   <center>
  <div class="display-4">

      
   <label class="text-center p-1">
      <img src="icon/heads.png" style="margin-bottom:15px;"> DEPARTMENT HEADS
     </label>
  
 </div>
  </center>
          <div class="row">


            <div class="col-md-4">
              <div class="card mb-4  img-size bg-loob">
                <img  class="card-img-top" src="image/dummy_doctor.jpg" alt="Card image cap">

                <center style="color:white">
                Dr. Oddy A. Magnaye
                <br>
                Medical Director
                </center>

              </div>
            </div>


            <div class="col-md-4">
               <div class="card mb-4  img-size bg-loob">
                <img class="card-img-top" src="image/dummy_doctor.jpg" alt="Card image cap">

                <center style="color:white">
                Julia S. De Guzman, R.N.,MAN.
                <br>
                Chief Nurse
                </center>
                
              </div>
            </div>


            <div class="col-md-4">
              <div class="card mb-4  img-size bg-loob">
                <img class="card-img-top" src="image/dummy_doctor.jpg" alt="Card image cap">

                <center style="color:white">
                Mary - Ann H. Briones, R.N.
                <br>
                Hospital Administrator
                </center>
               
              </div>
            </div>

     
            </div>
            </div>
</div>




<div class="album  bg-light">

        <div class="container">
             <br>
  <center>
  <div class="display-4">

      
     <label class="text-center p-1">
       <img src="icon/doctors.png" style="margin-bottom:15px;"> HOSPITAL DOCTORS
     </label>
 </div>
  </center>
          <div class="row" id ="doctor_list">

            <!-- doctor list -->

            </div>
</div>



<br>



 <footer class="bg-red">
     <div class="col-xs-12 col-sm-12 col-md-12 mt-4 mt-sm-2 text-center text-white p-3 ">
         <p class="h6"><img src="icon/copyright.png" style="margin-bottom:8px;"> Copyright 2018 | M.B. General Hospital</p>
            <p class="h6"><img src="icon/phone.png" style="margin-bottom:8px;"> Telephone No. : +63(43) 727 3844</p>
          <p class="h6"><img src="icon/email.png" style="margin-bottom:8px;"> Email @ : bejasa_hospital@yahoo.com</p>
        </div>  
  </footer>

</body>
</html>









<script aysnc defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyPEz15SwFdFZuKUk12wIKZlD_NCrSaIE&callback=myMap"></script>
<script>

function myMap() {

  var myLatLng = {lat: 13.791460, lng: 121.007378};

  var mapOptions = {
      center: myLatLng,
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.satellite
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Dr. Mario D. Bejasa General Hospital'
          });

}

</script>


