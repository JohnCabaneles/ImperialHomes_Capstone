import "./bootstrap";

// About Us Effect

jQuery(document).ready(function ($) {
    $(".counter").counterUp({
        delay: 10,
        time: 1000,
    });
});

// Testimonial Effect
document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper-container", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 8,
        autoplay: {
            delay: 8000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
});
