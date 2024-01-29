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
  const contactLink = document.querySelector(".contact");

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

  contactLink.addEventListener("click", function () {
    window.location.href = "./pages/contact.html";
  });
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

  // Fetch the project directory structure
  fetch("../includes/sitemap.php")
    .then((response) => response.json())
    .then((data) => generateSitemap(sitemapContainer, data))
    .catch((error) => console.error("Error fetching sitemap:", error));
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
