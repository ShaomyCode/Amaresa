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
document.getElementById('file-upload').addEventListener('change', function() {
    var fileInput = document.getElementById('file-upload');
    var label = document.querySelector('#show-text');
    if (fileInput.files.length > 0) {
        label.textContent = fileInput.files[0].name;
    } else {
        label.textContent = 'Upload';
    }
});