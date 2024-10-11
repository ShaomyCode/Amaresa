/*======================*\
# ADDING USERS
\*======================*/
function OpenDialog(){
    document.getElementById('Adding-users-modal').showModal();
}
function CloseDialog(){
    document.getElementById('Adding-users-modal').close();
}
/*======================*\
# FILE UPLOADER UI
\*======================*/
// // EXTERIOR
// document.getElementById('file-upload-exterior').addEventListener('change', function() {
//     var fileInput = document.getElementById('file-upload-exterior');
//     var label = document.querySelector('#show-text-exterior');
//     if (fileInput.files.length > 0) {
//          label.textContent = fileInput.files[0].name;
//     } else {
//         label.textContent = 'Exterior text';
//     }
// });
// // BEDROOM
// document.getElementById('file-upload-bedroom').addEventListener('change', function() {
//     var fileInput = document.getElementById('file-upload-bedroom');
//     var label = document.querySelector('#show-text-bedroom');
//     if (fileInput.files.length > 0) {
//         label.textContent = fileInput.files[0].name;
//     } else {
//             label.textContent = 'Img here';
//     }
// });   
// // BEDROOM
// document.getElementById('file-upload-bathtoom').addEventListener('change', function() {
//     var fileInput = document.getElementById('file-upload-bathtoom');
//     var label = document.querySelector('#show-text-bathtoom');
//     if (fileInput.files.length > 0) {
//         label.textContent = fileInput.files[0].name;
//     } else {
//             label.textContent = 'Img here';
//     }
// });   
// // BEDROOM
// document.getElementById('file-upload-Livingroom').addEventListener('change', function() {
//     var fileInput = document.getElementById('file-upload-Livingroom');
//     var label = document.querySelector('#show-text-Livingroom');
//     if (fileInput.files.length > 0) {
//         label.textContent = fileInput.files[0].name;
//     } else {
//             label.textContent = 'Img here';
//     }
// });   
// // DININGROOM
// document.getElementById('file-upload-Diningroom').addEventListener('change', function() {
//     var fileInput = document.getElementById('file-upload-Diningroom');
//     var label = document.querySelector('#show-text-Diningroom');
//     if (fileInput.files.length > 0) {
//         label.textContent = fileInput.files[0].name;
//     } else {
//             label.textContent = 'Img here';
//     }
// });   
/*======================*\
# CONFIRMATION
\*======================*/
function archiveConfirmation(){
    return confirm('Are you sure you want to archive this record?');
}
function DeleteConfirmation(){
    return confirm('Are you sure you want to Delete this record?');
}
function ViewData(){
    return confirm('Are you sure you want to view this record?');
}
/*======================*\
# SIDEBAR
\*======================*/
const body = document.querySelector("body"),
    sidebar = document.querySelector(".sidebar"),
    toggle = document.querySelector(".toggle");

    toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
    });

/*======================*\
# SWIPPER
\*======================*/
    var swiper = new Swiper(".mySwiper", {
      loop: true,  // Enables infinite loop
      autoplay: {
        delay: 2000,  // Slide transition delay (2 seconds)
        disableOnInteraction: false,  // Keep autoplaying even after interaction
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });