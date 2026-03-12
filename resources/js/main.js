const searchBtn = document.getElementById('search-btn');
const searchOverlay = document.getElementById('search-overlay');
const closeSearch = document.getElementById('close-search');

if (searchBtn && searchOverlay) {
    searchBtn.addEventListener('click', () => {
        searchOverlay.classList.add('active');
        // Fokus ke input otomatis setelah muncul
        setTimeout(() => document.getElementById('search-input').focus(), 500);
    });

    closeSearch.addEventListener('click', () => {
        searchOverlay.classList.remove('active');
    });

    // Menutup jika user mengklik area di luar kotak putih
    searchOverlay.addEventListener('click', (e) => {
        if (e.target === searchOverlay) {
            searchOverlay.classList.remove('active');
        }
    });
}

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

document.addEventListener('DOMContentLoaded', () => {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileNav = document.getElementById('mobile-nav');
    const searchBtn = document.getElementById('search-btn');
    const searchOverlay = document.getElementById('search-overlay');
    const closeSearch = document.getElementById('close-search');

    // Hamburger Logic
    if (hamburgerBtn && mobileNav) { // Tambahkan pengecekan mobileNav
    hamburgerBtn.addEventListener('click', () => {
        mobileNav.classList.add('active');
    });
    }

    // Search Logic
    if (searchBtn) {
        searchBtn.addEventListener('click', () => {
            searchOverlay.classList.add('active');
        });
    }

    if (closeSearch) {
        closeSearch.addEventListener('click', () => {
            searchOverlay.classList.remove('active');
        });
    }
});

// Fungsi global untuk tombol back/close di mobile nav
window.closeMenu = function() {
    const mobileNav = document.getElementById('mobile-nav');
    if (mobileNav) {
        mobileNav.classList.remove('active');
    }
};

// Fungsi global untuk membuka mobile nav
window.openMenu = function() {
    const mobileNav = document.getElementById('mobile-nav');
    if (mobileNav) {
        mobileNav.classList.add('active');
    }
};