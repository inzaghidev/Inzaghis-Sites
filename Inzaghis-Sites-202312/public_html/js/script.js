document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.querySelector(".nav-menu ul");

  menuToggle.addEventListener("click", function () {
    navMenu.classList.toggle("active");
  });

  const aboutLink = document.querySelector(".about-link");
  const profileLink = document.querySelector(".profile-link");
  const pagesLink = document.querySelector(".pages-link");
  const networksLink = document.querySelector(".networks-link");

  aboutLink.addEventListener("click", function () {
    window.location.href = "./pages/about.html";
  });

  profileLink.addEventListener("click", function () {
    window.location.href = "./pages/profile.html";
  });

  pagesLink.addEventListener("click", function () {
    window.location.href = "./pages/pages.html";
  });

  networksLink.addEventListener("click", function () {
    window.location.href = "./pages/networks.html";
  });

  networksLink.addEventListener("click", function () {
    window.location.href = "./pages/contact.html";
  });
});
