let currentIndex = 0;
const images = document.querySelectorAll('.gallery .thumbnail img');

function enlargeImage(imgElement, index) {
    currentIndex = index;
    const overlay = document.getElementById('overlay');
    const enlargedImage = document.getElementById('enlargedImage');
    
    enlargedImage.src = imgElement.src;
    overlay.classList.add('show');
}

function closeImage() {
    const overlay = document.getElementById('overlay');
    overlay.classList.remove('show');
}

function changeImage(direction) {
    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = images.length - 1;
    } else if (currentIndex >= images.length) {
        currentIndex = 0;
    }
    const enlargedImage = document.getElementById('enlargedImage');
    enlargedImage.src = images[currentIndex].src;
}
