document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.querySelector(".nav-menu ul");

  menuToggle.addEventListener("click", function () {
    navMenu.classList.toggle("active");
  });
});
