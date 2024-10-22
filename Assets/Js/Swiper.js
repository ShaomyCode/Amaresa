/*======================*\
    SWIPPER
\*======================*/
document.addEventListener("DOMContentLoaded", function() {
  new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });
});

document.addEventListener("DOMContentLoaded", function() {
  new Swiper(".mySwiper-autoplay", {
      loop: true,  // Enables infinite loop
      autoplay: {
        delay: 2500,  // Slide transition delay (2 seconds)
        disableOnInteraction: false,  // Keep autoplaying even after interaction
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  });
});