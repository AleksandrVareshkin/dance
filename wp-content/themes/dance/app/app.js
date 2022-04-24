let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menu');
let menuBox = document.querySelector('.menu-btn-box');
menuBtn.addEventListener('click',function(){
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
    menuBox.classList.toggle('active');
})
