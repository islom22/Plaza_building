let video = document.getElementById("video").play();

AOS.init();

function scrollHeader() {
  const navMenu = document.getElementById("nav");
  if (this.scrollY >= 50) navMenu.classList.add("scroll-header");
  else navMenu.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

let links = document.getElementById("navLinks");
let collapse = document.getElementById("collapse");

collapse.addEventListener("click", () => {
  links.classList.toggle("show-menu");
  collapse.classList.toggle("close-btn");
});

const tl = gsap.timeline();
const items = document.querySelectorAll(".big__num");

tl.from(items, {
  textContent: 0,
  duration: 3,
  snap: { textContent: 1 },
});
tl.from(".plus", {
  y: -30,
  opacity: 0,
  ease: "elastic",
});

new Swiper(".objectSwiper", {
  slidesPerView: 1.2,
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 5000,
  },
  speed: 300,
  breakpoints: {
    720: {
      slidesPerView: 1.5,
      centeredSlides: false,
    },
  },
});

new Swiper(".partnersSwiper", {
  slidesPerView: 1.7,
  spaceBetween: -24,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 100,
  },
  speed: 3000,
  breakpoints: {
    720: {
      slidesPerView: 4,
    },
    1440: {
      slidesPerView: 5,
    },
    1920: {
      slidesPerView: 6,
    },
  },
});

new Swiper(".reviewsSwiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  autoplay: {
    delay: 3000,
  },
  loop: true,
  speed: 500,
  breakpoints: {
    720: {
      slidesPerView: 2,
    },
  },
});

new Swiper(".servicesSwiper", {
  slidesPerView: 1.2,
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
  },
  loop: false,
  speed: 500,
  breakpoints: {
    480: {
      slidesPerView: 2,
    },
    720: {
      slidesPerView: 3,
    },
  },
});

// var element = document.getElementById("number");
// var maskOptions = {
//   mask: "+{998}(00)000-00-00",
// };
// var mask = IMask(element, maskOptions);
