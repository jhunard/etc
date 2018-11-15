$(document).ready(function() { 


    var session_id;
    var session_type;


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
                        
        }, 
        success:function(data){

                          swal.close();

                          session_id = data[0].account_id;
                          session_type = data[0].account_type;


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
                                            
                                             window.location="home.php";
                                          
                                  }); 


                           } else if(session_type=="") {

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

                           } else {

                             get_doctors_specialization("Anesthesia");

                           }

        }  

        });
     }



     get_session();




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




    function get_doctors_specialization(specialization) {

       $.ajax({

                                url:"php_function/get_doctors_specialization.php",  
                                method:"POST",  
                                data:{specialization:specialization},  
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




    function get_doctors_information(id) {

                  $.ajax({

            url:"php_function/get_doctors_information.php",  
            method:"POST",  
            data:{id:id}, 
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
        }, 
        success:function(data){

                          swal.close();


                          document.getElementById("view_modal_title").innerHTML = data[0].name;
                          document.getElementById("name").innerHTML = data[0].name;
                          document.getElementById("specialization").innerHTML = data[0].specialization;
                          document.getElementById("email").innerHTML = data[0].email;
                          document.getElementById("mobile").innerHTML = data[0].mobile;
                          document.getElementById("schedule").innerHTML = data[0].schedule;

        }  

        });

    }



    function get_doctors_schedule(id) {

                  $.ajax({

            url:"php_function/get_doctors_schedule.php",  
            method:"POST",  
            data:{id:id}, 
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
        }, 
        success:function(data){

                          swal.close();


                          document.getElementById("set_modal_title").innerHTML = data[0].name;
                          document.getElementById("set_schedule").innerHTML = data[0].schedule;
                          document.getElementById("set_datetime").innerHTML = data[0].datetime;

        }  

        });

    }




    $(document).on("click", "#dept1", function() {
    event.preventDefault();
        get_doctors_specialization("Anesthesia");
    });


    $(document).on("click", "#dept2", function() {
    event.preventDefault();
        get_doctors_specialization("Pediatrics");
    }); 


    $(document).on("click", "#dept3", function() {
    event.preventDefault();
        get_doctors_specialization("Surgery");
    }); 



    $(document).on("click", "#dept4", function() {
    event.preventDefault();
        get_doctors_specialization("Medicine");
    }); 



    $(document).on("click", "#dept5", function() {
    event.preventDefault();
        get_doctors_specialization("Obstetrics & Gynecology");
    }); 



    $(document).on("click", "#dept6", function() {
    event.preventDefault();
        get_doctors_specialization("Orthopedics");
    }); 



    $(document).on("click", "#dept7", function() {
    event.preventDefault();
        get_doctors_specialization("Gastroenterologist");
    }); 



    $(document).on("click", "#dept8", function() {
    event.preventDefault();
        get_doctors_specialization("EENT");
    }); 



    $(document).on("click", "#dept9", function() {
    event.preventDefault();
        get_doctors_specialization("Radiology & Sonology");
    }); 



    $(document).on("click", "#dept10", function() {
    event.preventDefault();
        get_doctors_specialization("Neurology");
    }); 



    $(document).on("click", "#dept11", function() {
    event.preventDefault();
        get_doctors_specialization("Urology");
    }); 




    $(document).on("click", "#dept12", function() {
    event.preventDefault();
        get_doctors_specialization("Dentistry");
    }); 



    $(document).on("click", "#btn_view", function() {
    event.preventDefault();
        
        var id=$(this).data("id");
        get_doctors_information(id);


    }); 


    $(document).on("click", "#btn_set", function() {
    event.preventDefault();
        
        var id=$(this).data("id");
        get_doctors_schedule(id);
        document.getElementById("btn_submit").value=id;


    }); 


    
    function submit_appointment_request(doc_id,pat_id,app_date,app_day){

           $.ajax({

                                url:"php_function/submit_appointment_request.php",  
                                method:"POST",  
                                data:{doc_id:doc_id,pat_id:pat_id,app_date:app_date,app_day:app_day},  
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

                                var result = data.trim();

                                if(result=="") {
                                 
                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "Please select a date!",
                                          text: "Invalid date selection",
                                          type: "error",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                  }).then((result) => {
                                        
                                          document.getElementById("txt_date").className += " required-fields";

                                  }); 

                                } else if (result=="None") {
                                  
                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "No schedule for this date!",
                                          text: "Invalid date selection",
                                          type: "error",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                  }).then((result) => {
                                        
                                           document.getElementById("txt_date").className += " required-fields";

                                  }); 

                                } else if (result=="exisitng") {
                                  
                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "You already sent a request for this date!",
                                          text: "Existing request",
                                          type: "warning",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                  }).then((result) => {
                                        
                                           document.getElementById("txt_date").className += " required-fields";

                                  }); 

                                } else {

                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "Please wait for the doctor's confirmation!",
                                          text: "Request sent",
                                          type: "success",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                  }).then((result) => {

                                           document.getElementById("btn_close_set_modal").click();

                                  }); 

                                }


                            }  

            });   

    }





    $(document).on("click", "#btn_submit", function() {
    event.preventDefault();

        var app_date = document.getElementById("txt_date").value;
        var app_day = new Date(app_date);
        var doc_id= this.value;

        swal({
                  customClass: 'swal-wide',  
                  title: "Are you sure to submit this?",
                  text: "Request appointment",
                  type: "question",
                  showCancelButton: true,
                  confirmButtonColor: "#5bc0de",
                  confirmButtonText: 'Proceed',
                  cancelButtonColor: "#d9534f",
                  cancelButtonText: 'Decline',
                  }).then((result) => {
                  if (result.value) {

                           submit_appointment_request(doc_id,session_id,app_date,app_day.getDay());        

                  } 

        });
        
        
    }); 


    $(document).on("change", "#txt_date", function() {
    event.preventDefault();
        
        document.getElementById("txt_date").classList.remove("required-fields");

     });    



/*
document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
*/


});