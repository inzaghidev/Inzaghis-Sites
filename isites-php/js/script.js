// UNDER CONSTRUCTION !!!!

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

  function handleScroll() {
    if (window.scrollY > 0) {
      navHeader.classList.add("transparency");
    } else {
      navHeader.classList.remove("transparency");
    }
  }

  function updateElementPositions() {
    const dropdownOpen = dropdownToggle.parentNode.classList.contains("active");
    const dropdownHeight = dropdownMenu.offsetHeight;

    if (dropdownOpen && window.innerWidth < 720) {
      dropdownToggle.parentNode.style.marginBottom = `${dropdownHeight}px`;
    } else {
      dropdownToggle.parentNode.style.marginBottom = "0";
    }
  }

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

  // Add click event listener for dropdown toggle on mobile
  dropdownToggle.addEventListener("click", function (e) {
    if (window.innerWidth < 720) {
      e.preventDefault(); // Prevent default action if it's a link
      dropdownToggle.parentNode.classList.toggle("active");
      chevronIcon.classList.toggle("rotate-icon");
      updateElementPositions();
    }
  });
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

document.addEventListener("DOMContentLoaded", function () {
  const sitemapContainer = document.getElementById("sitemap");

  // Function to generate the sitemap
  function generateSitemap(parent, files) {
    const ul = document.createElement("ul");
    parent.appendChild(ul);

    files.forEach((file) => {
      const li = document.createElement("li");
      const a = document.createElement("a");

      a.textContent = file.name;
      a.href = file.path;
      li.appendChild(a);

      // If the file is a directory, recursively generate its sitemap
      if (file.isDirectory) {
        generateSitemap(li, file.children);
      }

      ul.appendChild(li);
    });
  }
});

$(document).ready(function () {
  console.log("Document Ready");

  // Memuat header ke dalam halaman
  $("#header-container").load("../layouts/header.html", function () {
    // Call this function after the header is loaded
    setupMenuToggle();
  });

  // Memuat footer ke dalam halaman
  $("#footer-container").load("../layouts/footer.html");
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

// UNDER CONSTRUCTION !!!!
