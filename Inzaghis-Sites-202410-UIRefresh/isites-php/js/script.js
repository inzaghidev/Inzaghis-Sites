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
