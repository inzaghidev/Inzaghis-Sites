const container = document.querySelector(".slider-container");

// Pastikan elemen swiper menyesuaikan lebar container
const adjustSwiperWidth = () => {
  const swiperElement = document.querySelector(".swiper");
  const pagination = document.querySelector(".swiper-pagination");
  const nextButton = document.querySelector(".swiper-button-next");
  const prevButton = document.querySelector(".swiper-button-prev");

  if (swiperElement) {
    const containerWidth = container.getBoundingClientRect().width;

    swiperElement.style.maxWidth = `${containerWidth}px`;
    pagination.style.maxWidth = `${containerWidth}px`;

    // Posisi navigasi di tengah
    nextButton.style.right = "0px";
    prevButton.style.left = "0px";
  }
};

// Panggil fungsi saat halaman dimuat dan ketika ukuran jendela berubah
adjustSwiperWidth();
window.addEventListener("resize", adjustSwiperWidth);

document.addEventListener("DOMContentLoaded", function () {
  // Swiper Portals
  const portalsSwiper = new Swiper(".portals-swiper", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination-portals",
      clickable: true,
    },
    navigation: {
      nextEl: ".portals-swiper-button-next",
      prevEl: ".portals-swiper-button-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      480: { slidesPerView: 2 },
      720: { slidesPerView: 3 },
      1120: { slidesPerView: 4 },
    },
  });

  // Swiper Apps
  const appsSwiper = new Swiper(".apps-swiper", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination-apps",
      clickable: true,
    },
    navigation: {
      nextEl: ".apps-swiper-button-next",
      prevEl: ".apps-swiper-button-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      480: { slidesPerView: 2 },
      720: { slidesPerView: 3 },
      1120: { slidesPerView: 4 },
    },
  });
});
