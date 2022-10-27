// blogs

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 2000,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },
});


// tickets

var swiper = new Swiper(".mySwiper-2", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 25,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 25,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 25,
        },
    },
});

// committee

var swiper = new Swiper(".mySwiper-3", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 2500,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 25,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 25,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 25,
        },
    },
});