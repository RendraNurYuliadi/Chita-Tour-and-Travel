const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", this.window.scrollY > 80);
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

// menu.onclick = () => {
//     menu.classList.toggle('bx bx-x');
//     navlist.classList.toggle('open');
//  .navlist.open}

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}

// window.onscroll = () => {
//     menu.classList.remove('bx bx-x');
//     navlist.classList.remove('open');
// }

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
}

const sr = ScrollReveal({
    origin:'top',
    distance:'85px',
    duration: 2500,
    reset: true
})

sr.reveal ('.home-text',{delay:300});
sr.reveal ('.home-img',{delay:300});
sr.reveal ('.container',{delay:300});

sr.reveal ('.about-img',{delay:300});
sr.reveal ('.about-text',{delay:300});

sr.reveal ('.middle-text',{delay:300});
sr.reveal ('.row-btn,.shop-content',{delay:300});

sr.reveal ('.review-content,.contact',{delay:300});