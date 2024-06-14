document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const cancelIcon = document.querySelector(".cancel-icon");
  const navMenu = document.querySelector(".nav-menu ul");
  const navbar = document.querySelector(".navbar");

  menuToggle.addEventListener("click", function () {
    navMenu.classList.toggle("active");
    navbar.classList.toggle("menu-active");
  });

  cancelIcon.addEventListener("click", function () {
    navMenu.classList.remove("active");
    navbar.classList.remove("menu-active");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const navHeader = document.getElementById("navHeader");

  function handleScroll() {
    if (window.scrollY > 0) {
      navHeader.classList.add("transparency");
    } else {
      navHeader.classList.remove("transparency");
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
