document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const cancelIcon = document.querySelector(".cancel-icon");
  const navMenu = document.querySelector(".nav-menu ul");
  const navbar = document.querySelector(".navbar");
  const navMenuContainer = document.querySelector(".nav-menu-container");
  const signInButton = document.querySelector(".sign-in-button");
  const navHeader = document.getElementById("navHeader");

  // Mengambil semua elemen dropdown
  const dropdownToggles = document.querySelectorAll(".nav-dropdown-toggle");
  const dropdownButtons = document.querySelectorAll(".dropdown-button");

  dropdownButtons.forEach((dropdownButton) => {
    const icon = dropdownButton.querySelector(".dropdown-icon");
    const link = dropdownButton.querySelector("a");
    const dropdownMenu =
      dropdownButton.parentElement.querySelector(".nav-dropdown-list");

    // Event listener untuk klik pada icon dropdown saja
    icon.addEventListener("click", function (e) {
      if (window.innerWidth < 720) {
        e.preventDefault();
        dropdownMenu.classList.toggle("show");
        dropdownButton.classList.toggle("active");

        // Menutup dropdown lain yang terbuka
        dropdownButtons.forEach((otherButton) => {
          const otherDropdownMenu =
            otherButton.parentElement.querySelector(".nav-dropdown-list");
          if (otherButton !== dropdownButton) {
            otherDropdownMenu.classList.remove("show");
            otherButton.classList.remove("active");
          }
        });
      }
    });

    // Menangani klik link dalam dropdown agar tidak menutup dropdown
    dropdownMenu.addEventListener("click", function (e) {
      e.stopPropagation(); // Menghentikan event bubbling agar dropdown tetap terbuka
    });

    // Event listener pada link agar tetap bisa diarahkan
    if (link) {
      link.addEventListener("click", function (e) {
        if (window.innerWidth < 720 && link.getAttribute("href")) {
          e.stopPropagation(); // Memastikan link bisa diklik tanpa menutup dropdown
        }
      });
    }
  });

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

  function handleScroll() {
    if (window.scrollY > 0) {
      navHeader.classList.add("transparency");
    } else {
      navHeader.classList.remove("transparency");
    }
  }

  function updateElementPositions() {
    dropdownToggles.forEach((toggle) => {
      const dropdownMenu = toggle.nextElementSibling;
      const dropdownOpen = toggle.parentNode.classList.contains("active");
      const dropdownHeight = dropdownMenu.offsetHeight;

      if (dropdownOpen && window.innerWidth < 720) {
        toggle.parentNode.style.marginBottom = `${dropdownHeight}px`;
      } else {
        toggle.parentNode.style.marginBottom = "3px";
      }
    });
  }

  dropdownToggles.forEach((toggle) => {
    const dropdownMenu = toggle.nextElementSibling;
    const chevronIcon = toggle.querySelector(
      "ion-icon[name='chevron-down-outline']"
    );

    toggle.addEventListener("click", function (e) {
      if (window.innerWidth < 720) {
        e.preventDefault();
        toggle.parentNode.classList.toggle("active");
        chevronIcon.classList.toggle("rotate-icon");
        updateElementPositions();
      }
    });
  });

  updateBeforeStyles();
  window.addEventListener("resize", updateBeforeStyles);
  window.addEventListener("scroll", handleScroll);
  handleScroll();

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
    updateElementPositions();
  });

  if (window.innerWidth > 1140) {
    signInButton.style.display = "block";
  } else {
    signInButton.style.display = "none";
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const navHeader = document.getElementById("navHeader");

  function handleScroll() {
    if (window.scrollY > 0) {
      // navHeader.classList.add("transparency");
    } else {
      // navHeader.classList.remove("transparency");
    }
  }

  window.addEventListener("scroll", handleScroll);
  handleScroll();

  const additionalCSS = `
    .nav-header.transparency {
      background-color: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }
  `;
  const style = document.createElement("style");
  style.textContent = additionalCSS;
  document.head.appendChild(style);
});

$(document).ready(function () {
  // Memuat header ke dalam halaman
  $("#header-container").load("../layouts/header.php", function () {
    setupMenuToggle();
  });

  function setupMenuToggle() {
    const menuToggle = document.getElementById("menu-toggle");
    const navMenu = document.querySelector(".nav-menu ul");

    menuToggle.addEventListener("click", function () {
      navMenu.classList.toggle("active");
    });

    // Handle clicking on menu items, adjust the selector accordingly
    $(".nav-menu ul li a").on("click", function () {
      // Close the menu when a menu item is clicked
      navMenu.classList.remove("active");

      // Add additional logic if needed when a menu item is clicked
      // For example, scrolling to the corresponding section on the page
    });
  }
});
