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
/*======================*\
# Dialog: House 
\*======================*/
function ShowHouse(HouseID){

    var request = new XMLHttpRequest();
    request.open('GET','fetch.php?HousesID = ' + HouseID, true);
    request.onload = function(){
        if (request.status === 200) {
            document.getElementById('House-Modal').showModal();
            document.getElementById('propertyDetails').innerHTML = HouseID;

        } else {
            console.error('Failed to retrieve data');
        }
    };
    request.send();
}
function fetchHouseDetails(HouseID) {
    var request = new XMLHttpRequest();
    request.open('GET', 'fetch.php?HouseID=' + HouseID, true);
    request.onload = function() {
        if (request.status === 200) {
            document.getElementById('propertyDetails').innerHTML = request.responseText;
            document.getElementById('House-Modal').showModal();
        } else {
            console.error('Failed to fetch house details.');
        }
    };
    request.send();
}
function CloseHouse(){
    document.getElementById('House-Modal').close();
}

