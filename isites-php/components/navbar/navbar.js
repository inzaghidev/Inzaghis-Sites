document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const cancelIcon = document.querySelector(".cancel-icon");
  const navMenu = document.querySelector(".nav-menu ul");
  const navbar = document.querySelector(".navbar");
  const navMenuContainer = document.querySelector(".nav-menu-container");
  const signInButton = document.querySelector(".sign-in-button");
  const navHeader = document.getElementById("navHeader");
  const dropdownToggle = document.querySelector(".nav-dropdown-toggle");
  const dropdownMenu = document.querySelector(".nav-dropdown-list");
  const chevronIcon = dropdownToggle.querySelector(
    "ion-icon[name='chevron-down-outline']"
  );

  function updateBeforeStyles() {
    const existingStyle = document.getElementById("dynamic-mobile-style");
    if (window.innerWidth < 720) {
      if (!existingStyle) {
        const mobileStyle = document.createElement("style");
        mobileStyle.id = "dynamic-mobile-style";
        mobileStyle.textContent = `
            .nav-menu ul li a::before {
              content: "";
              background: none;
              color: #ff3d00;
              display: block;
              position: absolute;
              left: 0;
              bottom: 0;
              width: 100%;
              height: 2px;
              opacity: 0;
              transition: 0.2s transform ease;
              transform: scale3d(0, 1, 1);
              transform-origin: 0 50%;
            }
          `;
        document.head.appendChild(mobileStyle);
      }
    } else if (existingStyle) {
      existingStyle.remove();
    }
  }

  // Function to toggle dropdown on click for all screen sizes
  function toggleDropdown(e) {
    e.preventDefault(); // Mencegah aksi default, jika diperlukan
    dropdownToggle.parentNode.classList.toggle("active");
    dropdownMenu.classList.toggle("show");
    chevronIcon.classList.toggle("rotate-icon");
  }

  // Tambahkan satu event listener untuk klik dropdown pada semua ukuran layar
  dropdownToggle.addEventListener("click", toggleDropdown);

  // Update dropdown behavior (menghapus hover pada layar besar)
  function updateDropdownBehavior() {
    dropdownToggle.removeEventListener("mouseenter", toggleDropdown);
    dropdownToggle.removeEventListener("mouseleave", toggleDropdown);
  }

  function handleScroll() {
    if (window.scrollY > 0) {
      navHeader.classList.add("transparency");
    } else {
      navHeader.classList.remove("transparency");
    }
  }

  // Update dropdown behavior based on screen size
  updateDropdownBehavior();
  updateBeforeStyles();
  window.addEventListener("resize", updateDropdownBehavior);
  window.addEventListener("resize", updateBeforeStyles);
  window.addEventListener("scroll", handleScroll);
  handleScroll();

  // Handle menu toggle for mobile
  menuToggle.addEventListener("click", function () {
    navMenu.classList.toggle("active");
    navMenuContainer.classList.toggle("active");
    navbar.classList.toggle("menu-active");

    if (navMenu.classList.contains("active") && window.innerWidth <= 1140) {
      signInButton.style.display = "block";
    } else if (window.innerWidth <= 1140) {
      signInButton.style.display = "none";
    } else {
      cancelIcon.style.display = "block";
    }
  });

  cancelIcon.addEventListener("click", function () {
    navMenu.classList.remove("active");
    navMenuContainer.classList.remove("active");
    navbar.classList.remove("menu-active");

    if (window.innerWidth <= 1140) {
      signInButton.style.display = "none";
    } else {
      cancelIcon.style.display = "none";
    }
  });

  window.addEventListener("resize", function () {
    if (window.innerWidth > 1140) {
      signInButton.style.display = "block";
    } else if (!navMenu.classList.contains("active")) {
      signInButton.style.display = "none";
    }
  });

  if (window.innerWidth > 1140) {
    signInButton.style.display = "block";
  } else {
    signInButton.style.display = "none";
  }
});

document.addEventListener("DOMContentLoaded", () => {
  // Select all dropdown toggle buttons
  const navbar = document.getElementById("navbar");
  const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

  dropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      // Find the next sibling element which is the dropdown menu
      const dropdownMenu = toggle.nextElementSibling;

      // Toggle the 'hidden' class to show or hide the dropdown menu
      if (dropdownMenu.classList.contains("hidden")) {
        // Hide any open dropdown menus before showing the new one
        document.querySelectorAll(".dropdown-menu").forEach((menu) => {
          menu.classList.add("hidden");
        });

        dropdownMenu.classList.remove("hidden");
      } else {
        dropdownMenu.classList.add("hidden");
      }
    });
  });

  // Mobile menu toggle
  const mobileMenuButton = document.querySelector(".mobile-menu-button");
  const mobileMenu = document.querySelector(".navigation-menu");

  mobileMenuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });

  // Optional: Clicking outside of an open dropdown menu closes it
  window.addEventListener("click", (event) => {
    if (!event.target.matches(".dropdown-toggle")) {
      document.querySelectorAll(".dropdown-menu").forEach((menu) => {
        if (!menu.contains(event.target)) {
          menu.classList.add("hidden");
        }
      });
    }
  });
});

document.getElementById("menu-toggle").addEventListener("click", function () {
  var mobileMenu = document.getElementById("mobile-menu");
  mobileMenu.classList.toggle("hidden");
});
