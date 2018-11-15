
<!doctype html>
<html>


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


<script src="js_function/appointment.js" type="text/javascript" language="javascript"></script>

<style type="text/css">
  
main {
  margin-top:70px;
}

body { 
  padding-right:0 !important;
  overflow-y: auto !important;
}

input[type="date"] {
    margin-top:5px;
    margin-bottom:5px; 
}

.modal-open,.navbar {
  width: 100%;
  padding-right: 0!important;
}

</style>


</head>
<body>


         
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-red">

        <div id="toggle-sidebar">
          
          <a href="#"><img src="image/logo.png" width="50" height="50" class="d-inline-block align-top" alt=""></a>
          <a class="navbar-brand lead" href="#" style="margin-left: 10px;"><strong>M.B. General Hospital</strong></a>
        </div>


        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto lead">

     <li class="nav-item">
        <a class="nav-link" href="home.php"><strong><img src="icon/home.png" style="margin-bottom:8px;"> HOME</strong><span class="sr-only">(current)</span></a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#" id="logout"><strong><img src="icon/logout.png" style="margin-bottom:8px;"> LOGOUT</strong><span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link white-text"  href="appointment.php"><strong><img src="icon/schedule_appointment.png" style="margin-bottom:8px;"> SCHEDULE APPOINTMENT &nbsp&nbsp </strong></a>
      </li>

    </ul>
  </div>
</nav>




<div class="page-wrapper chiller-theme2 toggled">
  <nav id="sidebar" class="sidebar-wrapper">
     <div class="sidebar-content">

     
      
                  <div class="sidebar-brand">
                   <!--blank-->PATCHI
                  </div>

    
    

         <div class="sidebar-menu" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <ul>
                  <div class="nav flex-column nav-pills gray" id="v-pills-tab" role="tablist" aria-orientation="vertical">

 


  <a class="nav-link active text-white" id="dept1" data-toggle="pill" href="#v-pills-dept1" role="tab" aria-controls="v-pills-dept1" aria-selected="true"><img src="icon/syringe.png"> Anesthesia</a>


  <a class="nav-link text-white" id="dept2" data-toggle="pill" href="#v-pills-dept2" role="tab" aria-controls="v-pills-dept2" aria-selected="false"><img src="icon/pediatrics.png"> Pediatrics</a>



  <a class="nav-link text-white" id="dept3" data-toggle="pill" href="#v-pills-dept3" role="tab" aria-controls="v-pills-dept3" aria-selected="false"><img src="icon/surgery.png"> Surgery</a>

 

  <a class="nav-link text-white" id="dept4" data-toggle="pill" href="#v-pills-dept4" role="tab" aria-controls="v-pills-dept4" aria-selected="false"><img src="icon/medicine.png"> Medicine</a>



  <a class="nav-link text-white" id="dept5" data-toggle="pill" href="#v-pills-dept5" role="tab" aria-controls="v-pills-dept5" aria-selected="false"><img src="icon/obgyn.png"> Obstetrics & Gynecology</a>



  <a class="nav-link text-white" id="dept6" data-toggle="pill" href="#v-pills-dept6" role="tab" aria-controls="v-pills-dept6" aria-selected="false"><img src="icon/orthopedics.png"> Orthopedics</a>



  <a class="nav-link text-white" id="dept7" data-toggle="pill" href="#v-pills-dept7" role="tab" aria-controls="v-pills-dept7" aria-selected="false"><img src="icon/gastro.png"> Gastroenterologist</a>


  <a class="nav-link text-white" id="dept8" data-toggle="pill" href="#v-pills-dept8" role="tab" aria-controls="v-pills-dept8" aria-selected="false"><img src="icon/eent.png"> EENT</a>


  <a class="nav-link text-white" id="dept9" data-toggle="pill" href="#v-pills-dept9" role="tab" aria-controls="v-pills-dept9" aria-selected="false"><img src="icon/radiology.png"> Radiology & Sonology</a>

  

  <a class="nav-link text-white" id="dept10" data-toggle="pill" href="#v-pills-dept10" role="tab" aria-controls="v-pills-dept10" aria-selected="false"><img src="icon/neurology.png"> Neurology</a>



  <a class="nav-link text-white" id="dept11" data-toggle="pill" href="#v-pills-dept10" role="tab" aria-controls="v-pills-dept10" aria-selected="false"><img src="icon/urology.png"> Urology</a>



   <a class="nav-link text-white" id="dept12" data-toggle="pill" href="#v-pills-dept10" role="tab" aria-controls="v-pills-dept10" aria-selected="false"><img src="icon/dentistry.png"> Dentistry</a>

 


</div>
    </ul>
        </div>





     </div>
           </nav>


                                        <!-- page-content" -->
                                        <main class="page-content">


                                        <div class="tab-content row" id="doctor_list">

                                        <!--result-->

                                        </div>


                                        </main>


                </div>
   







    



</body>

<!-- view modal -->
<div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header bg-red" style="color:white">
        <h5 class="modal-title" id="view_modal_title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       
        <div class="form-group">
          <label><img src="icon/name.png"> Name</label>
            <label class="form-control"  id="name"></label>
        </div>

         <div class="form-group">
          <label><img src="icon/specialization.png"> Specialization</label>
            <label class="form-control"  id="specialization"></label>
        </div>


        <div class="form-group">
           <label><img src="icon/email.png"> Email</label>
            <span class="form-control" id="email"></span>
        </div>

        <div class="form-group">
           <label><img src="icon/mobile.png"> Mobile Number</label>
            <span class="form-control" id="mobile"></span>
        </div>

        <div class="form-group">
           <label><img src="icon/schedule.png"> Schedule</label>
            <span class="form-control" id="schedule">
            </span>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
   
      </div>
    </div>
  </div>
</div>




<!-- set appointment modal" -->
<div class="modal fade" id="set_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header bg-red" style="color:white">
        <h5 class="modal-title" id="set_modal_title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
           <label><img src="icon/schedule.png"> Schedule</label>
            <span class="form-control" id="set_schedule">
            </span>
        </div>


        <div class="form-group">
           <label><img src="icon/schedule_appointment.png"> Set Appointment</label>
            <span class="form-control" id="set_datetime">
            </span>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btn_submit">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close_set_modal">Close</button>
   
      </div>
    </div>
  </div>
</div>



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

/*
    $("#dept1").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });
    $("#dept2").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept3").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept4").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept5").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept6").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept7").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept8").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept9").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept10").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept11").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

$("#dept12").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

*/



});</script>