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
