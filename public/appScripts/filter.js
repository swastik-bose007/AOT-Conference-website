// $(document).ready(function(){
//     $('.list').click(function(){
//         const value = $(this).attr('data-filter');
//         if (value == 'day-1') {
//             $('.event').show('1000')
//         }
//         else{
//             $('.event').not('.'+value).hide('1000');
//             $('.event').filter('.'+value).show('1000');
//         }
//     })
//     $('.list').click(function(){
//         $(this).addClass('active')
//     })
// })



let list = document.querySelectorAll('.list');
let event = document.querySelectorAll('.event');
for (let i = 0; i < list.length; i++) {
    list[i].addEventListener('click', function(){
        for (let j = 0; j < list.length; j++) {
            list[j].classList.remove('active');
        }
        this.classList.add('active');

        let dataFilter = this.getAttribute('data-filter');
        for(let k = 0; k < event.length; k++){
            event[k].classList.remove('active');
            event[k].classList.add('hide');
            if (event[k].getAttribute('data-item') == dataFilter) {
                event[k].classList.remove('hide');
                event[k].classList.add('active');
            }
        }
    });
    
}


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