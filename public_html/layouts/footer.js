document.addEventListener("DOMContentLoaded", function () {
  // Isi dari footer Anda, termasuk event listener atau interaksi lainnya
  // ...

  // Contoh event listener untuk link di bagian special pages
  const specialPagesLinks = document.querySelectorAll(".special-pages ul a");
  specialPagesLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      // Logika untuk menangani klik pada link special pages
      // ...
    });
  });

  // Contoh event listener untuk link di bagian networks
  const networksLinks = document.querySelectorAll(".network ul a");
  networksLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      // Logika untuk menangani klik pada link networks
      // ...
    });
  });

  // Contoh event listener untuk link di bagian quick link
  const quickLinkLinks = document.querySelectorAll(".quick-link ul a");
  quickLinkLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      // Logika untuk menangani klik pada link quick link
      // ...
    });
  });
});
