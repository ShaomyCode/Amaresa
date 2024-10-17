/*======================*\
    Validation: Phone Number
\*======================*/
var phoneInputs = document.getElementsByClassName('PhoneInput');
for (var i = 0; i < phoneInputs.length; i++) {
    phoneInputs[i].addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '');
    });
}
