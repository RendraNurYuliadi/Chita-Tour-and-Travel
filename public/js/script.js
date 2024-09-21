//fungsi untuk membuat header responsif


const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
    header.classList.toggle ("sticky", window.scrollY > 0);
});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

menu.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('open');
}


//fungsi animasi ketika di scroll di semua section

const sr = ScrollReveal({
    origin:'top',
    distance:'85px',
    duration: 2500,
    reset: true
})

//index.html
sr.reveal ('.home',{delay:120});
sr.reveal ('.container',{delay:120});
sr.reveal ('.package',{delay:120});
sr.reveal ('.jam-kerja',{delay:120});
sr.reveal ('.destination',{delay:120});
sr.reveal ('.gallerynya',{delay:120});
sr.reveal ('.question',{delay:120});
sr.reveal ('.newsletter',{delay:120});
sr.reveal ('.contact',{delay:120});
sr.reveal ('.footer',{delay:120});
sr.reveal ('.main',{delay:120});
sr.reveal ('.about',{delay:120});
sr.reveal ('.news',{delay:120});
sr.reveal ('.map',{delay:120});
sr.reveal ('.contact-message',{delay:120});

sr.reveal ('.news',{delay:120});




// fungsi yang akan berjalan ketika web pertama kali di load

document.addEventListener('DOMContentLoaded', function() {

    // untuk memendekan teks huruf limit yang tampil pada section kolom review pelanggan

    const maxLength = 150; // Maximum number of characters to display
    const descriptionElements = document.querySelectorAll('.news-description');

    descriptionElements.forEach(function(descriptionElement) {
        const originalText = descriptionElement.innerText;

        if (originalText.length > maxLength) {
            const truncatedText = originalText.substring(0, maxLength) + '...';
            descriptionElement.innerText = truncatedText;
        }
    });

    // untuk auto scrol gambar di section galeri
    
    
    // const galleryContainer = document.getElementById('gallery-container');
    // let scrollAmount = 0;
    // const scrollMax = galleryContainer.scrollWidth - galleryContainer.clientWidth;
    // let scrollDirection = 1; // 1 for right, -1 for left

    // function autoScroll() {
    //     scrollAmount += 2 * scrollDirection;
    //     galleryContainer.scrollTo({
    //         left: scrollAmount,
    //         behavior: 'smooth'
    //     });

    //     if (scrollAmount >= scrollMax || scrollAmount <= 0) {
    //         scrollDirection *= -1; // Reverse direction
    //     }
    // }

    // setInterval(autoScroll, 50); // Adjust the interval as needed

});



//fungsi untuk klik dropdown pertanyaan dan jawaban pada bawah section galeri


document.querySelectorAll('.dropdown-question').forEach(question => {
    question.addEventListener('click', () => {
      const dropdownItem = question.parentElement;
      dropdownItem.classList.toggle('open');
      const answer = dropdownItem.querySelector('.dropdown-answer');
      if (dropdownItem.classList.contains('open')) {
        answer.style.maxHeight = answer.scrollHeight + "px";
      } else {
        answer.style.maxHeight = null;
      }
    });
  });




//fungsi untuk mengganti gambar background pada section home

// document.addEventListener("DOMContentLoaded", function () {
//     const homeSection = document.querySelector('.home');
//     const images = [
//         'img/bg1.jpg',
//         'img/bg2.jpg',
//         'img/bg3.jpg',
//         'img/bg4.jpg',
//         'img/bg5.jpg',
//         'img/bg6.jpg',
//         'img/bg7.jpg',
//         'img/bg8.jpg',
//         'img/bg9.jpg',
//         'img/bg10.jpg',
//         'img/bg11.jpg',
//         'img/bg12.jpg',
//         'img/bg13.jpg',
//         'img/bg14.jpg'
//     ];
//     let currentImageIndex = 0;

//     function changeBackground() {
//         currentImageIndex = (currentImageIndex + 1) % images.length;
//         homeSection.style.backgroundImage = `url(${images[currentImageIndex]})`;
//     }

//     setInterval(changeBackground, 112000); // Change every 10 seconds
//     changeBackground(); // Initial call to set the first background
// });






//   document.addEventListener('DOMContentLoaded', function() {
   
// });



//   document.addEventListener("DOMContentLoaded", function() {
//     function autoScroll() {
//         window.scrollBy(0, 1); // Scroll ke bawah 1 piksel
//         if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
//             window.scrollTo(0, 0); // Kembali ke atas saat mencapai bagian bawah halaman
//         }
//     }

//     setInterval(autoScroll, 50); // Mengatur interval scroll otomatis setiap 50 milidetik
// });
// document.addEventListener("DOMContentLoaded", function () {
//     const homeSection = document.querySelector('.home');
//     const images = [
//         'img/bg1.jpg',
//         'img/bg3.jpg',
//         'img/bg4.jpg',
//         'img/bg5.jpg',
//         'img/bg6.jpg',
//         'img/bg7.jpg',
//         'img/bg8.jpg',
//         'img/bg9.jpg',
//         'img/bg10.jpg',
//         'img/bg11.jpg',
//         'img/bg12.jpg',
//         'img/bg13.jpg',
//         'img/bg14.jpg',
//         'img/bg2.jpg'
        
//     ];
//     let currentImageIndex = 0;

//     function changeBackground() {
//         currentImageIndex = (currentImageIndex + 1) % images.length;
//         homeSection.style.backgroundImage = `url(${images[currentImageIndex]})`;
//     }

//     setInterval(changeBackground, 10000); // Change every 10 seconds
// });

  // 'img/bg15.jpg',
        // 'img/bg16.jpg',
        // 'img/bg17.jpg',
        // 'img/bg18.jpg',
        // 'img/bg19.jpg',
        // 'img/bg20.jpg',
        // 'img/bg21.jpg',
