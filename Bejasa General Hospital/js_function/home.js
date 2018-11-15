$(document).ready(function() { 

    var session_id;
    var session_type;



 function get_doctors(){

   $.ajax({

                                url:"php_function/get_doctors.php",  
                                method:"POST",  
                                dataType:"text",
                                cache:false,     

                            beforeSend:function() {

                                            swal({
                                            customClass: 'swal-wide',  
                                            position: "center",
                                            type: "info",
                                            title: "Processing Data...",
                                            showConfirmButton: false,
                                            });

                            },  
                            success:function(data){

                                swal.close();

                                document.getElementById("doctor_list").innerHTML=data;            

                            }  

                            });    

 }



    $(document).on("click", "#item2", function() {
    event.preventDefault();

        var main_function =  document.getElementById("item3").innerHTML;
        main_function = main_function.trim();


         if(session_type=="Doctor") {

            window.location="my_appointment.php";

         } else if(session_type=="Patient") {

            window.location="appointment.php";
          
         } else {

                if(main_function=="MANAGE APPOINTMENT") {

                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "Restricted Access!",
                                          text: "Login as doctor first",
                                          type: "error",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                          }).then((result) => {
                                            
                                             window.location="doctor_login.php";
                                          
                                  }); 

                } else if(main_function=="SCHEDULE APPOINTMENT") {

                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "Restricted Access!",
                                          text: "Login as patient first",
                                          type: "error",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                          }).then((result) => {
                                            
                                             window.location="patient_login.php";
                                          
                                  }); 

                }

         }

    }); 






   $(document).on("click", "#logout", function() {
    event.preventDefault();

      swal({
                  customClass: 'swal-wide',  
                  title: "Logout from the system?",
                  text: "Thank you for visiting us",
                  type: "question",
                  showCancelButton: true,
                  confirmButtonColor: "#5bc0de",
                  confirmButtonText: 'Proceed',
                  cancelButtonColor: "#d9534f",
                  cancelButtonText: 'Decline',
                  }).then((result) => {
                  if (result.value) {

                                $.ajax({

                                url:"php_function/logout.php",  
                                method:"POST",  
                                dataType:"text",
                                cache:false,     

                            beforeSend:function() {

                                            swal({
                                            customClass: 'swal-wide',  
                                            position: "center",
                                            type: "info",
                                            title: "Processing Data...",
                                            showConfirmButton: false,
                                            });

                            },  
                            success:function(data){

                                swal.close();

                                swal({
                                    customClass: 'swal-wide',  
                                    title: "Account successfully logged out!",
                                    text: "Session removed",
                                    type: "success",
                                    showCancelButton: false,
                                    confirmButtonColor: "#5bc0de",
                                    confirmButtonText: 'Proceed',
                                    }).then((result) => {
                                    
                                      window.location="home.php";

                                });               

                            }  

                            });        

                  } 
                  });


    }); 



     function get_session() {
            $.ajax({

            url:"php_function/session.php",  
            method:"POST",  
            dataType:"json",
            cache:false,     
        beforeSend:function() {


                       swal({
                        customClass: 'swal-wide',  
                        position: "center",
                        type: "info",
                        title: "Processing Data...",
                        showConfirmButton: false,
                        });             

        },  
        error:function(){
          
                        swal.close();

                        //transition login/logout
                        document.getElementById("item1").innerHTML='<li class="nav-item dropdown" id="item1"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong><img src="icon/login.png" style="margin-bottom:8px;"> LOGIN AS</strong></a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="doctor_login.php"><img src="icon/doctor.png" style="margin-bottom:8px;"> DOCTOR</a><a class="dropdown-item" href="patient_login.php"><img src="icon/patient.png" style="margin-bottom:8px;"> PATIENT</a></div></li>';

                        //transition appointment
                        document.getElementById("item2").innerHTML='<li class="nav-item"  id="item2"><a href="#" class="nav-link white-text"><img src="icon/schedule_appointment.png" style="margin-bottom:8px;"> <strong id="item3">SCHEDULE APPOINTMENT</strong></a></li>';

                        
        }, 
        success:function(data){


                        swal.close();

                        session_id = data[0].account_id;
                        session_type = data[0].account_type;

                        if(session_type=="Doctor") {

                          //transition login/logout
                        document.getElementById("item1").innerHTML='<li class="nav-item" id="item1"><a id="logout" class="nav-link" href="#"><strong><img src="icon/logout.png" style="margin-bottom:8px;"> LOGOUT</strong><span class="sr-only">(current)</span></a></li>';

                        //transition appointment
                        document.getElementById("item2").innerHTML='<li class="nav-item"  id="item2"><a href="#" class="nav-link white-text"><img src="icon/manage_appointment.png" style="margin-bottom:8px;"> <strong id="item3">MANAGE APPOINTMENT</strong></a></li>';

                        } else if(session_type=="Patient") {

                          //transition login/logout
                        document.getElementById("item1").innerHTML='<li class="nav-item" id="item1"><a id="logout" class="nav-link" href="#"><strong><img src="icon/logout.png" style="margin-bottom:8px;"> LOGOUT</strong><span class="sr-only">(current)</span></a></li>';

                        //transition appointment
                        document.getElementById("item2").innerHTML='<li class="nav-item"  id="item2"><a href="#" class="nav-link white-text"><img src="icon/schedule_appointment.png" style="margin-bottom:8px;"> <strong id="item3">SCHEDULE APPOINTMENT</strong></a></li>';

                        } else {

                          //transition login/logout
                        document.getElementById("item1").innerHTML='<li class="nav-item dropdown" id="item1"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong><img src="icon/login.png" style="margin-bottom:8px;"> LOGIN AS</strong></a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="doctor_login.php"><img src="icon/doctor.png" style="margin-bottom:8px;"> DOCTOR</a><a class="dropdown-item" href="patient_login.php"><img src="icon/patient.png" style="margin-bottom:8px;"> PATIENT</a></div></li>';

                        //transition appointment
                        document.getElementById("item2").innerHTML='<li class="nav-item"  id="item2"><a href="#" class="nav-link white-text"><img src="icon/schedule_appointment.png" style="margin-bottom:8px;"> <strong id="item3">SCHEDULE APPOINTMENT</strong></a></li>';

                        }

        }  

        });
     }


     get_session();
     get_doctors();



    $(document).on("click", "#btn_appointment", function() {
    event.preventDefault();

      if(session_type=="Doctor") {


              swal({
                          customClass: 'swal-wide',  
                          title: "Restricted Access!",
                          text: "Dedicated for patients only",
                          type: "error",
                          showCancelButton: false,
                          confirmButtonColor: "#5bc0de",
                          confirmButtonText: 'Proceed',
                          }).then((result) => {
                            //blank
                          
              });  

      } else if(session_type=="Patient") {

            window.location="appointment.php";

      } else {

            swal({
                          customClass: 'swal-wide',  
                          title: "Restricted Access!",
                          text: "Login as patient first",
                          type: "error",
                          showCancelButton: false,
                          confirmButtonColor: "#5bc0de",
                          confirmButtonText: 'Proceed',
                          }).then((result) => {
                            
                             window.location="patient_login.php";
                          
              }); 

      }


    }); 



});