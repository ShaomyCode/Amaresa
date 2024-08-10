document.getElementById('file-upload').addEventListener('change', function() {
    var fileInput = document.getElementById('file-upload');
    var label = document.querySelector('.custom-file-upload');
    if (fileInput.files.length > 0) {
        label.textContent = fileInput.files[0].name;
    } else {
        label.textContent = 'Upload File';
    }
});
