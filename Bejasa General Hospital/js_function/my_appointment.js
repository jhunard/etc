$(document).ready(function() { 


    var session_id;
    var session_type;
    var selected_day="1";

    var my_type="request";


    var mon_content = '<img src="icon/monday.png"> Monday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
    var tue_content = '<img src="icon/tuesday.png"> Tuesday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
    var wed_content = '<img src="icon/wednesday.png"> Wednesday  &nbsp&nbsp&nbsp&nbsp';
    var thu_content = '<img src="icon/thursday.png"> Thursday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
    var fri_content = '<img src="icon/friday.png"> Friday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
    var sat_content = '<img src="icon/saturday.png"> Saturday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
    var sun_content = '<img src="icon/sunday.png"> Sunday   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';

    var mon_count = "";
    var tue_count = "";
    var wed_count = "";
    var thu_count = "";
    var fri_count = "";
    var sat_count = "";
    var sun_count = "";


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
                                          text: "Login as doctor first",
                                          type: "error",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                          }).then((result) => {
                                            
                                             window.location="doctor_login.php";
                                          
                                  }); 
                        
        }, 
        success:function(data){

                          swal.close();

                          session_id = data[0].account_id;
                          session_type = data[0].account_type;

                           if(session_type=="Patient") {


                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "Restricted Access!",
                                          text: "Dedicated for doctors only",
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
                                          text: "Login as doctor first",
                                          type: "error",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                          }).then((result) => {
                                            
                                             window.location="doctor_login.php";
                                          
                                  }); 

                           } else {

                              get_appointment_request(session_id,selected_day);

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




     function get_appointment_request(id,day) {

      selected_day = day;

       $.ajax({

                                url:"php_function/get_appointment_request.php",  
                                method:"POST",  
                                data:{id:id,day:day},  
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

                                document.getElementById("appointment_list").innerHTML=data;   

                                 get_request_count(id);   

                            }  

                            });   

    }




    function get_request_count(id) {
            $.ajax({

            url:"php_function/get_request_count.php",  
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
            //empty
        }, 
        success:function(data){

                          swal.close();

                          var mon_count = data[0].mon;
                          var tue_count = data[0].tue;
                          var wed_count = data[0].wed;
                          var thu_count = data[0].thu;
                          var fri_count = data[0].fri;
                          var sat_count = data[0].sat;
                          var sun_count = data[0].sun;

                          document.getElementById("dept1").innerHTML=mon_content+mon_count; 
                          document.getElementById("dept2").innerHTML=tue_content+tue_count;   
                          document.getElementById("dept3").innerHTML=wed_content+wed_count;
                          document.getElementById("dept4").innerHTML=thu_content+thu_count;  
                          document.getElementById("dept5").innerHTML=fri_content+fri_count;
                          document.getElementById("dept6").innerHTML=sat_content+sat_count; 
                          document.getElementById("dept7").innerHTML=sun_content+sun_count;   

                        
        }  

        });
     }



     function get_list_count(id) {
            $.ajax({

            url:"php_function/get_list_count.php",  
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
            //empty
        }, 
        success:function(data){

                          swal.close();

                          var mon_count = data[0].mon;
                          var tue_count = data[0].tue;
                          var wed_count = data[0].wed;
                          var thu_count = data[0].thu;
                          var fri_count = data[0].fri;
                          var sat_count = data[0].sat;
                          var sun_count = data[0].sun;

                          document.getElementById("dept1").innerHTML=mon_content+mon_count; 
                          document.getElementById("dept2").innerHTML=tue_content+tue_count;   
                          document.getElementById("dept3").innerHTML=wed_content+wed_count;
                          document.getElementById("dept4").innerHTML=thu_content+thu_count;  
                          document.getElementById("dept5").innerHTML=fri_content+fri_count;
                          document.getElementById("dept6").innerHTML=sat_content+sat_count; 
                          document.getElementById("dept7").innerHTML=sun_content+sun_count;   

                        
        }  

        });
     }






     function get_appointment_list(id,day) {

      selected_day = day;

       $.ajax({

                                url:"php_function/get_appointment_list.php",  
                                method:"POST",  
                                data:{id:id,day:day},  
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

                                document.getElementById("appointment_list").innerHTML=data;   


                                get_list_count(id);         

                            }  

                            });   

    }




    $(document).on("click", "#request", function() {
        my_type="request";
        get_appointment_request(session_id,selected_day);
    });

    $(document).on("click", "#list", function() {
    event.preventDefault();
        my_type="list";
        get_appointment_list(session_id,selected_day);
    });


 

    $(document).on("click", "#dept1", function() {
    event.preventDefault();
        if(my_type=="request") {
          get_appointment_request(session_id,"1");
        } else {
          get_appointment_list(session_id,"1");
        }
    });


    $(document).on("click", "#dept2", function() {
    event.preventDefault();
        if(my_type=="request") {
          get_appointment_request(session_id,"2");
        } else {
          get_appointment_list(session_id,"2");
        }
    }); 


    $(document).on("click", "#dept3", function() {
    event.preventDefault();
        if(my_type=="request") {
          get_appointment_request(session_id,"3");
        } else {
          get_appointment_list(session_id,"3");
        }
    }); 



    $(document).on("click", "#dept4", function() {
    event.preventDefault();
        if(my_type=="request") {
          get_appointment_request(session_id,"4");
        } else {
          get_appointment_list(session_id,"4");
        }
    }); 



    $(document).on("click", "#dept5", function() {
    event.preventDefault();
        if(my_type=="request") {
          get_appointment_request(session_id,"5");
        } else {
          get_appointment_list(session_id,"5");
        }
    }); 



    $(document).on("click", "#dept6", function() {
    event.preventDefault();
        if(my_type=="request") {
          get_appointment_request(session_id,"6");
        } else {
          get_appointment_list(session_id,"6");
        }
    }); 



    $(document).on("click", "#dept7", function() {
    event.preventDefault();
        if(my_type=="request") {
          get_appointment_request(session_id,"7");
        } else {
          get_appointment_list(session_id,"7");
        }
    }); 




    function accept_reject_appointment(id,action) {

       $.ajax({

                                url:"php_function/accept_reject_appointment.php",  
                                method:"POST",  
                                data:{id:id,action:action},  
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
                                    title: "Request successfully " + action.toLowerCase() + "!",
                                    text: "Request " + action.toLowerCase(),
                                    type: "success",
                                    showCancelButton: false,
                                    confirmButtonColor: "#5bc0de",
                                    confirmButtonText: 'Proceed',
                                    }).then((result) => {
                                    
                                      get_appointment_request(session_id,selected_day); 

                                }); 
       

                            }  

                            });   

    }




    $(document).on("click", "#btn_accept", function() {
    event.preventDefault();
        
        var id=$(this).data("id");

        swal({
                  customClass: 'swal-wide',  
                  title: "Are you sure to accept this?",
                  text: "Accept appointment",
                  type: "question",
                  showCancelButton: true,
                  confirmButtonColor: "#5bc0de",
                  confirmButtonText: 'Proceed',
                  cancelButtonColor: "#d9534f",
                  cancelButtonText: 'Decline',
                  }).then((result) => {
                  if (result.value) {

                           accept_reject_appointment(id,"ACCEPTED");         

                  } 

        });


    }); 


    $(document).on("click", "#btn_reject", function() {
    event.preventDefault();
        
        var id=$(this).data("id");

        swal({
                  customClass: 'swal-wide',  
                  title: "Are you sure to reject this?",
                  text: "Reject appointment",
                  type: "question",
                  showCancelButton: true,
                  confirmButtonColor: "#5bc0de",
                  confirmButtonText: 'Proceed',
                  cancelButtonColor: "#d9534f",
                  cancelButtonText: 'Decline',
                  }).then((result) => {
                  if (result.value) {

                           accept_reject_appointment(id,"REJECTED");       

                  } 

        });
        
    }); 




});