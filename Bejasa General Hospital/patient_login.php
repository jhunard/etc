
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


<script src="js_function/patient_login.js" type="text/javascript" language="javascript"></script>

</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-red sticky-top">
   <img src="image/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
  <a class="navbar-brand lead" href="#" style="margin-left: 10px;"><strong>M.B. General Hospital</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto nav-size lead">
     <li class="nav-item">
        <a class="nav-link" href="home.php"><strong><img src="icon/home.png" style="margin-bottom:8px;"> HOME</strong><span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item dropdown active  ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <strong><img src="icon/login.png" style="margin-bottom:8px;"> LOGIN AS</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="doctor_login.php"><img src="icon/doctor.png" style="margin-bottom:8px;"> DOCTOR</a>
          <a class="dropdown-item" href="patient_login.php"><img src="icon/patient.png" style="margin-bottom:8px;"> PATIENT</a>
        
        </div>
      </li>
      <li class="nav-item ">
         <a class="nav-link white-text"  href="#" id="item2"><strong><img src="icon/schedule_appointment.png" style="margin-bottom:8px;"> SCHEDULE APPOINTMENT</strong></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
 
      <div class="col-lg-5 col-md-12 col-sm-8 col-xs-12 mx-auto" >
      <div class="card card-body account-wall p-4">
         <h1 class="lead  mx-auto p-4"  style="font-size: 2em; padding-bottom: 20px"><img src="icon/patient_login.png" style="margin-bottom:8px;"> PATIENT'S LOGIN</h1>
          <form class="login p-4">
           

            <div class="input-group bg-loob" style="margin-bottom:10px"><img src="icon/username.png" width="35px">
             <input type="text" id="txt_username" class="form-control" placeholder="Username" required autofocus>
           </div>

              <div class="input-group bg-loob" style="margin-bottom:10px"><img src="icon/password.png" width="35px">
               <input type="password" id="txt_password" class="form-control" placeholder="Password" required>
             </div>
               
                 <button type="button" id="btn_login" class="btn btn-info btn-block">Sign In</button>
               </form>

          </div>
     
      </div>

</div>


<br>
<br>
<br>
<br>
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




