$(document).ready(function() { 


$(document).on("click", "#dept1", function() {
    event.preventDefault();

    swal({
                  customClass: 'swal-wide',  
                  title: "Invalid File Type!",
                  text: "Image must be in 'gif','png','jpg','jpeg' format!",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5bc0de",
                  confirmButtonText: 'Proceed',
                  }).then((result) => {
                  if (result.value) {

                      document.getElementById("result").innerHTML='<button data-toggle="modal" data-target="#view_doctor_modal">aaa</button>';

                  } else {

                      document.getElementById("result").innerHTML="2";

                  }
    });

});










});