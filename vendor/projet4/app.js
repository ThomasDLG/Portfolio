const btn = document.querySelector('.shape');

btn.addEventListener('click', presentation)

function presentation(){

    btn.classList.toggle('active')

}

const menu = document.querySelector('.side-menu');
const box = document.querySelector('.menu');

box.addEventListener('click', function(){
    menu.classList.toggle('active-box')
})
