document.addEventListener("DOMContentLoaded", function () {
  const navHeader = document.getElementById("navHeader");

  if (!navHeader) {
    return;
  }

  const handleScroll = () => {
    navHeader.classList.toggle("transparency", window.scrollY > 0);
  };

  window.addEventListener("scroll", handleScroll);
  handleScroll();
});
