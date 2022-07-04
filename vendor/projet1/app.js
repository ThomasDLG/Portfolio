const btn = document.querySelector('.btn');

btn.addEventListener('click', presentation)

function presentation(){

    btn.classList.toggle('active')

}

const menu = document.querySelector('.nav');
const box = document.querySelector('.menu');

box.addEventListener('click', function(){
    menu.classList.toggle('active-box')
})

const allLinks = document.querySelectorAll('nav-item');

allLinks.forEach(function(item){

    item.addEventListener('click', function(){
        menu.classList.toggle('active');
    })
})