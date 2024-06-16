document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.querySelector(".nav-menu ul");
  const navbar = document.querySelector(".navbar .menu-toggle"); // Add this line to select the navbar

  menuToggle.addEventListener("click", function () {
    navMenu.classList.toggle("active");
    navbar.classList.toggle("menu-active");

    // Toggle the color of menu-toggle button
    if (navbar.classList.contains("menu-active")) {
      menuToggle.style.color = "#818181"; // Change to desired color when menu is active
    } else {
      menuToggle.style.color = ""; // Reset to default color when menu is not active
    }
  });

  const aboutLink = document.querySelector(".about-link");
  const profileLink = document.querySelector(".profile-link");
  const pagesLink = document.querySelector(".pages-link");
  const networksLink = document.querySelector(".networks-link");
  const contactLink = document.querySelector(".contact");

  aboutLink.addEventListener("click", function () {
    window.location.href = "./pages/about.php";
  });

  profileLink.addEventListener("click", function () {
    window.location.href = "./pages/profile.php";
  });

  pagesLink.addEventListener("click", function () {
    window.location.href = "./pages/apps.php";
  });

  networksLink.addEventListener("click", function () {
    window.location.href = "./pages/networks.php";
  });

  contactLink.addEventListener("click", function () {
    window.location.href = "./pages/contact.php";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const navHeader = document.getElementById("navHeader");

  // Function to handle scroll event
  function handleScroll() {
    if (window.scrollY > 0) {
      navHeader.classList.add("transparency"); // Add transparency class when scrolling down
    } else {
      navHeader.classList.remove("transparency"); // Remove transparency class when at the top
    }
  }

  // Add scroll event listener
  window.addEventListener("scroll", handleScroll);

  // Initial check on page load in case page is scrolled
  handleScroll();

  // Additional CSS added dynamically
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
  $("#header-container").load("../layouts/header.php", function () {
    // Call this function after the header is loaded
    setupMenuToggle();
  });

  // Memuat footer ke dalam halaman
  $("#footer-container").load("../layouts/footer.php");
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
