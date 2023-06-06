
const buttonHide = document.querySelectorAll('.button-hide');
const hiddenContent = document.querySelectorAll('.hidden-content');
const removeSpan = document.querySelectorAll('.remove-span');

for (let i = 0; i < buttonHide.length; i++) {
  buttonHide[i].addEventListener('click', (e) => {
    let target = e.target;

    hiddenContent[i].classList.toggle('hidden-content--active');
    removeSpan[i].classList.toggle('remove-span--active');

    if (hiddenContent[i].classList.contains('hidden-content--active')) {
      target.innerHTML = target.dataset.hide
    } else {
      target.innerHTML = target.dataset.show
    }
  })
}

let mySwiper = new Swiper ('.swiper-container', {
  grabCursor: true,
  navigation: {
    nextEl: '.swiper-prev',
    prevEl: '.swiper-next',
  },
  pagination:  false,
  on: {
    autoHeight: true,
  },
  breakpoints: {
    992: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    600: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 50
    }
  },
});

mySwiper.on('slideChange', function () {
  for (let i = 0; i < hiddenContent.length; i++) {
    if (hiddenContent[i].classList.contains('hidden-content--active')) {
      hiddenContent[i].classList.remove('hidden-content--active');
    }
    buttonHide[i].innerHTML = buttonHide[i].dataset.show;
    removeSpan[i].classList.remove('remove-span--active');
  }
});
