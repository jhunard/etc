
<!doctype html>
<html>

<body>
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- B O O T S T R A P  4 -->

 <link rel="stylesheet" href="css/bootstrap4/bootstrap.min.css">
<script src="css/bootstrap4/js/jquery.min.js"></script>
<script src="css/bootstrap4/js/bootstrap.min.js"></script>

<!-- B O O T S T R A P  4 -->

<!-- B O O T S T R A P  3 -->
<script src="css/bootstrap3/js/jquery.min.js"></script>  
<!-- B O O T S T R A P  3 -->
  
<link rel="stylesheet" href="css/style.css">


<script src="css/bootstrap4/js/dataTables.bootstrap.min.js" type="text/javascript" language="javascript"></script>
<script src="css/bootstrap4/js/jquery.dataTables.min.js" type="text/javascript" language="javascript"></script>
<script src="css/bootstrap4/js/jquery.js" type="text/javascript" language="javascript"></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap4/datatables.min.css"/>

<script type="text/javascript" src="css/bootstrap4/js/datatables.min.js"></script>

<script src="js/sweetalert2.all.min.js" type="text/javascript" language="javascript"></script>


<script src="js_function/my_appointment.js" type="text/javascript" language="javascript"></script>


</head>


         
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-red">
<div id="toggle-sidebar">
          
          <a href="#"><img src="image/logo.png" width="50" height="50" class="d-inline-block align-top" alt=""></a>
          <a class="navbar-brand lead" href="#" style="margin-left: 10px;"><strong>M.B. General Hospital</strong></a>
        </div>
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto lead" >
      <input type="text" hidden id="mm" name="" value="">



     <li class="nav-item">
        <a class="nav-link" href="home.php"><strong><img src="icon/home.png" style="margin-bottom:8px;"> HOME</strong><span class="sr-only">(current)</span></a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#" id="logout"><strong><img src="icon/logout.png" style="margin-bottom:8px;"> LOGOUT</strong><span class="sr-only">(current)</span></a>
      </li>
  
      <li class="nav-item dropdown active  ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <strong><img src="icon/manage_appointment.png" style="margin-bottom:8px;"> MANAGE APPOINTMENT</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" id="request"><img src="icon/request.png" style="margin-bottom:8px;"> APPOINTMENT REQUEST</a>
          <a class="dropdown-item" href="#" id="list"><img src="icon/list.png" style="margin-bottom:8px;"> APPOINTMENT LIST</a>
        
        </div>
      </li>

    </ul>
  </div>
</nav>
<div class="page-wrapper chiller-theme2 toggled">
  <nav id="sidebar" class="sidebar-wrapper">
     <div class="sidebar-content">
     
        <div class="sidebar-brand">
           <a href="#" class="text-white">PATCHI</a>
        </div>
     
    

         <div class="sidebar-menu" id="v-pills-tab" role="tablist" aria-orientation="vertical">
           <ul>
           <div class="nav flex-column nav-pills gray" id="v-pills-tab" role="tablist" aria-orientation="vertical">

 


  <a class="nav-link active text-white" id="dept1" data-toggle="pill" href="#v-pills-dept1" role="tab" aria-controls="v-pills-dept1" aria-selected="true"><img src="icon/monday.png"> Monday</a>


  <a class="nav-link text-white" id="dept2" data-toggle="pill" href="#v-pills-dept2" role="tab" aria-controls="v-pills-dept2" aria-selected="false"><img src="icon/tuesday.png"> Tuesday</a>



  <a class="nav-link text-white" id="dept3" data-toggle="pill" href="#v-pills-dept3" role="tab" aria-controls="v-pills-dept3" aria-selected="false"><img src="icon/wednesday.png"> Wednesday</a>

 

  <a class="nav-link text-white" id="dept4" data-toggle="pill" href="#v-pills-dept4" role="tab" aria-controls="v-pills-dept4" aria-selected="false"><img src="icon/thursday.png"> Thursday</a>



  <a class="nav-link text-white" id="dept5" data-toggle="pill" href="#v-pills-dept5" role="tab" aria-controls="v-pills-dept5" aria-selected="false"><img src="icon/friday.png"> Friday</a>



  <a class="nav-link text-white" id="dept6" data-toggle="pill" href="#v-pills-dept6" role="tab" aria-controls="v-pills-dept6" aria-selected="false"><img src="icon/saturday.png"> Saturday</a>



  <a class="nav-link text-white" id="dept7" data-toggle="pill" href="#v-pills-dept7" role="tab" aria-controls="v-pills-dept7" aria-selected="false"><img src="icon/sunday.png"> Sunday</a>


</div>
</ul>
        </div>
     </div>
 </nav>

   
<!-- page-content" -->
<main class="page-content">


<div class="tab-content row" id="appointment_list">

<!--result-->

</div>


</main>

    
</div>


</body>
</html>


<script type="text/javascript">jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this).next(".sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }

    });

    $("#toggle-sidebar").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });
   
   
});</script>