var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// Show the message box when the user clicks on the password field
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
};

// Hide the message box when the user clicks outside of the password field
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
};

// Validate lowercase letters
var lowerCaseLetters = /[a-z]/g;
if (myInput.value.match(lowerCaseLetters)) {
    // Display a checkmark or other visual indicator
    // You can customize this part further
    letter.classList.add("valid");
} else {
    letter.classList.remove("valid");
}
// Similar checks for uppercase letters, numbers, and length
// ...

// Feel free to enhance this JavaScript snippet as needed!


const requirementlist = document.querySelectorAll(".requirementlist .li");

const requirements = [
        {regex: /.{8,}/, index: 0},
         {regex: /[0-9]/, index: 1},
          {regex: /[a-z]/, index: 2},
           {regex: /[^A-Za-z0-9]/, index: 3},
            {regex: /[A-Z]/, index: 4},
    ]