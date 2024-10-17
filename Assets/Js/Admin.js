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
    CONFIRMATION
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
function AddConfirmation(){
    return confirm('Confirm if the data is accurate.');
}
/*======================*\
    SIDEBAR
\*======================*/
const body = document.querySelector("body"),
    sidebar = document.querySelector(".sidebar"),
    toggle = document.querySelector(".toggle");

    toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
    });

