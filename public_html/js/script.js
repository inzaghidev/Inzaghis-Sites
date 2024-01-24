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
