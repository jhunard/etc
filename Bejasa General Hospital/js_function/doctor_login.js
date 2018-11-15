$(document).ready(function() { 


    var session_id;
    var session_type;



 $(document).on("blur", "#txt_username", function() {
    event.preventDefault();
    var txt = this.value.trim();
    if(txt!=""){
      this.classList.remove("required-fields");
    } 
  }); 

 $(document).on("blur", "#txt_password", function() {
    event.preventDefault();
    var txt = this.value.trim();
    if(txt!=""){
      this.classList.remove("required-fields");
    } 
  }); 




$(document).on("click", "#btn_login", function() {
    event.preventDefault();

    var username = document.getElementById("txt_username").value;
    var password = document.getElementById("txt_password").value;
    username = username.toString().trim();
    password = password.toString().trim();

    if(username=="" && password=="") {

      swal({
                  customClass: 'swal-wide',  
                  title: "Fill up all the fields!",
                  text: "Complete details required",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5bc0de",
                  confirmButtonText: 'Proceed',
                  }).then((result) => {

                     document.getElementById("txt_username").className += " required-fields";
                     document.getElementById("txt_password").className += " required-fields";
                  
    });   

    } else if(username=="") {

      swal({
                  customClass: 'swal-wide',  
                  title: "Fill up all the fields!",
                  text: "Username required",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5bc0de",
                  confirmButtonText: 'Proceed',
                  }).then((result) => {
                  
                    document.getElementById("txt_username").className += " required-fields";

    });   

    } else if(password=="") {

      swal({
                  customClass: 'swal-wide',  
                  title: "Fill up all the fields!",
                  text: "Password required",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5bc0de",
                  confirmButtonText: 'Proceed',
                  }).then((result) => {
                  
                    document.getElementById("txt_password").className += " required-fields";

    });   

    } else {


      $.ajax({

            url:"php_function/login.php",  
            method:"POST",  
            data:{username:username,password:password,type:"Doctor"},  
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
                   if(data.trim()=="invalid") {

                          swal({
                          customClass: 'swal-wide',  
                          title: "Login failed!",
                          text: "Invalid login credential(s)",
                          type: "error",
                          showCancelButton: false,
                          confirmButtonColor: "#5bc0de",
                          confirmButtonText: 'Proceed',
                          }).then((result) => {
                          
                            document.getElementById("txt_username").value="";
                            document.getElementById("txt_password").value="";
                            document.getElementById("txt_username").className += " required-fields";
                            document.getElementById("txt_password").className += " required-fields";

                          });   

                   } else {


                          swal({
                          customClass: 'swal-wide',  
                          title: "Login successfull!",
                          text: "Redirecting to doctor's page",
                          type: "success",
                          showCancelButton: false,
                          confirmButtonColor: "#5bc0de",
                          confirmButtonText: 'Proceed',
                          }).then((result) => {
                          
                            window.location="home.php";
                            
                           });  

                   }
                          

        }  

        }); 


    }


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
                        
        }, 
        success:function(data){

                          swal.close();

                          session_id = data[0].account_id;
                          session_type = data[0].account_type;


                           if(session_type=="Doctor" || session_type=="Patient") {


                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "Restricted Access!",
                                          text: "Logout your session first",
                                          type: "error",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                          }).then((result) => {
                                            
                                             window.location="home.php";
                                          
                                  }); 


                           } 

        }  

        });
     }



     get_session();



$(document).on("click", "#item2", function() {
      event.preventDefault();

                                  swal({
                                          customClass: 'swal-wide',  
                                          title: "Restricted Access!",
                                          text: "Login as doctor first",
                                          type: "error",
                                          showCancelButton: false,
                                          confirmButtonColor: "#5bc0de",
                                          confirmButtonText: 'Proceed',
                                          }).then((result) => {
                                            //blank
                                          
                                  }); 
      
    }); 







});