'use strict';
/*======================*\
# DIALOG: SIGN UP & LOG IN
\*======================*/
function ShowSignup(){
    document.getElementById('Login-Modal').close();
    document.getElementById('Signup-Modal').showModal();
 
}
function ShowLogin(){
    document.getElementById('Signup-Modal').close();
    document.getElementById('Login-Modal').showModal();
}
function CloseSignup(){
    document.getElementById('Signup-Modal').close();

}
function CloseLogin(){
    document.getElementById('Login-Modal').close();
}
/*======================*\
# DIALOG: INQUIRY
\*======================*/
function ShowInquiry(){
    document.getElementById('Inquiry-Modal').showModal();
}
function CloseInquiry(){
    document.getElementById('Inquiry-Modal').close();
}
/*======================*\
# TOGGLE
\*======================*/
$(document).ready(function(){
  $("#requirements").click(function(){
    $("#panel").slideToggle("slow");
  });
});