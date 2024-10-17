// var myInput = document.getElementById("psw");
// var letter = document.getElementById("letter");
// var capital = document.getElementById("capital");
// var number = document.getElementById("number");
// var length = document.getElementById("length");

// // Show the message box when the user clicks on the password field
// myInput.onfocus = function() {
//     document.getElementById("message").style.display = "block";
// };

// // Hide the message box when the user clicks outside of the password field
// myInput.onblur = function() {
//     document.getElementById("message").style.display = "none";
// };

// // Validate lowercase letters
// var lowerCaseLetters = /[a-z]/g;
// if (myInput.value.match(lowerCaseLetters)) {
//     // Display a checkmark or other visual indicator
//     // You can customize this part further
//     letter.classList.add("valid");
// } else {
//     letter.classList.remove("valid");
// }
// // Similar checks for uppercase letters, numbers, and length
// // ...

// // Feel free to enhance this JavaScript snippet as needed!



// const requirementlist = document.querySelectorAll(".Password-field input");
// const eyeIcon = document.querySelectorAll(".Password-field i");

// eyeIcon.addEventListener("click", () => {
//     passwordInput.type = passwordInput.type === "password" ? "text" : "password";

//     eyeIcon.className = `fa-solid fa-eye${passwordInput.type === "password" ? "" : "-slash"}`;
// });


const requirementlist = document.querySelectorAll(".Password-field input");
const eyeIcons = document.querySelectorAll(".Password-field i");

eyeIcons.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
        const passwordInput = eyeIcon.previousElementSibling;  // Get the related input field

        // Toggle between 'password' and 'text'
        passwordInput.type = passwordInput.type === "password" ? "text" : "password";

        // Toggle the icon class for eye and eye-slash
        eyeIcon.className = `fa-solid fa-eye${passwordInput.type === "password" ? "" : "-slash"}`;
    });
});



const requirements = [
        {regex: /.{8,}/, index: 0},
         {regex: /[0-9]/, index: 1},
          {regex: /[a-z]/, index: 2},
           {regex: /[^A-Za-z0-9]/, index: 3},
            {regex: /[A-Z]/, index: 4},
    ]

passwordInput.addEventListener("keyup", (e) => {
    requirements.forEach(item => {

        const isValid = item.regex.test(e.target.value);
        const requirementItem = requirementlist [item.index]; 

        if(isValid){
            requirementItem.firstElementChild.classname = "fa-solid fa-check";
        } else {
            requirementItem.firstElementChild.classname = "fa-solid fa-check";    
        }

        
    });
});