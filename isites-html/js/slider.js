document.addEventListener("DOMContentLoaded", function () {
  // Swiper untuk Portals
  const portalsSwiper = new Swiper(".portals-swiper", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    grabCursor: true,
    pagination: {
      el: ".portals-swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".portals-swiper-button-next",
      prevEl: ".portals-swiper-button-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      640: { slidesPerView: 2 },
      1080: { slidesPerView: 3 },
    },
  });

  // Swiper untuk Apps
  const appsSwiper = new Swiper(".apps-swiper", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    grabCursor: true,
    pagination: {
      el: ".apps-swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".apps-swiper-button-next",
      prevEl: ".apps-swiper-button-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      640: { slidesPerView: 2 },
      1080: { slidesPerView: 3 },
    },
  });
});
