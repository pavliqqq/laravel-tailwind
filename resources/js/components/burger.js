const burger = document.querySelector('.burger');

const navCon = document.querySelector('.nav-con')
const navMenu = document.querySelector('.nav-menu');
const navList = document.querySelector('.nav-list');

burger.addEventListener('click', function() {
    burger.classList.toggle('active');
    navMenu.classList.toggle('hidden');
    navMenu.classList.toggle('active');
    navCon.classList.toggle('active');
    navList.classList.toggle('active');

    if(burger.textContent === '☰') {
        burger.textContent = '✕'
    } else {
        burger.textContent = '☰'
    }
})
