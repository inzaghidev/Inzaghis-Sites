// Contoh event listener untuk menu toggle
const menuToggle = document.getElementById("menu-toggle");
menuToggle.addEventListener("click", function () {
  // Logika untuk menangani toggle menu
  // ...
});

// Contoh event listener untuk sign-in button
const signInButton = document.querySelector(".sign-in-button");
signInButton.addEventListener("click", function () {
  // Logika untuk menangani klik tombol sign-in
  // ...
});

// Fungsi DOMContentLoaded
document.addEventListener("DOMContentLoaded", function () {
  // Struktur HTML untuk navbar
  const navbar = document.createElement("nav");
  navbar.classList.add("navbar");
  navbar.id = "navbar";

  navbar.innerHTML = `
    <a href="../public/index.html" id="logo">
      <img
        src="../images/inzaghis-sites-logo-vertical-transparent.png"
        height="60px"
        alt="logo"
      />
    </a>
    <button class="menu-toggle" id="menu-toggle">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </button>
    <a href="#" class="main-button sign-in-button">Sign in</a>
    <div class="nav-menu">
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="https://medium.com/@izzumiposhaf29">Blog</a></li>
        <li><a href="../pages/pages.html">Page Apps</a></li>
        <li><a href="../pages/contact.html">Contact</a></li>
        <li><a href="../pages/profile.html">Profile</a></li>
        <li><a href="../pages/about.html">About</a></li>
        <li><a href="../pages/networks.html">Inzaghi's Group Network</a></li>
        <li class="dropdown">
          <div class="nav-dropdown-toggle w-dropdown-toggle">
            <div class="nav-dropdown-icon">
              <div class="text-block">
                Switch to Another Site
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-caret-down"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"
                  />
                </svg>
              </div>
            </div>
            <nav class="nav-dropdown-list nav-dropdown-list--open">
              <a
                href="https://sites.google.com/view/inzaghis-sites"
                class="dropdown-link"
                >Old Inzaghi's Sites</a
              >
              <a
                href="https://inzaghiposuma.wordpress.com"
                class="dropdown-link"
                >WordPress Site</a
              >
              <a href="https://inzaghi-site.webflow.io" class="dropdown-link"
                >Preview (Webflow)</a
              >
            </nav>
          </div>
        </li>
      </ul>
    </div>
  `;

  // Menambahkan navbar ke dalam elemen body
  document.body.appendChild(navbar);
});
