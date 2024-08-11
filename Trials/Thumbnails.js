function enlargeImage(imgElement) {
    const overlay = document.getElementById('overlay');
    const enlargedImage = document.getElementById('enlargedImage');
    enlargedImage.src = imgElement.src;
    overlay.classList.add('show');
}

function closeImage() {
    const overlay = document.getElementById('overlay');
    overlay.classList.remove('show');
}
