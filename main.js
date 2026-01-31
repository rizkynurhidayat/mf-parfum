// hero section
  const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  loop: false, 

  slidesPerView: 1,
  centeredSlides: false,

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  speed: 900,
});

// balik ke awal
swiper.on('reachEnd', () => {
  setTimeout(() => {
    swiper.slideTo(0, 900);
  }, 3000);
});
// hero section end

// item section
// document.addEventListener('DOMContentLoaded', () => {
//   document.querySelectorAll('.buy-button').forEach(button => {
//     button.addEventListener('click', () => {
//       window.open('https://shopee.co.id', '_blank');
//     });
//   });
// });
// // item section end




// / item section
// document.addEventListener('click', function (e) {
//   const btn = e.target.closest('.buy-button');
//   if (!btn) return;

//   window.open('https://shopee.co.id', '_blank');
// });
// item section end


// item section
document.querySelectorAll('.buy-button').forEach(button => {
  button.addEventListener('click', (e) => {
    e.stopPropagation(); // ⬅️ PENTING
    window.open('https://shopee.co.id', '_blank');
  });
});


// tentang
const miniSwiper = new Swiper('.mini-swiper', {
  slidesPerView: 'auto',
  centeredSlides: true,
  spaceBetween: 40,
  loop: true,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});
// tentang end


