(() => {
  const images_list = [
    {
      name: "Pages",
      url: "../images/pages-by-pages-apps.png",
      alt: "",
      link: "../page-apps/pages.php",
    },
    {
      name: "Widgets",
      url: "../images/widgets-by-pages-apps.png",
      alt: "",
      link: "../page-apps/widgets.php",
    },
    {
      name: "Converters",
      url: "../images/converters-by-pages-apps.png",
      alt: "",
      link: "../page-apps/converter.php",
    },
    {
      name: "Calculators",
      url: "../images/calculators-by-pages-apps.png",
      alt: "",
      link: "../page-apps/calculators.php",
    },
    {
      name: "Generators",
      url: "../images/generators-by-pages-apps.png",
      alt: "",
      link: "../page-apps/generators.php",
    },
    {
      name: "FileConverters",
      url: "../images/file-converters-by-pages-apps.png",
      alt: "",
      link: "../page-apps/file-converter.php",
    },
  ];

  let slider_id = document.querySelector("#hcg-slider-1");

  let dots_div = "";
  let images_div = "";
  for (let i = 0; i < images_list.length; i++) {
    let href =
      images_list[i].link == "" ? "" : ' href="' + images_list[i].link + '"';
    images_div +=
      "<a" +
      href +
      ' class="hcg-slides animated"' +
      (i === 0 ? ' style="display:flex"' : "") +
      ">" +
      '<span class="hcg-slide-number">' +
      (i + 1) +
      "/" +
      images_list.length +
      "</span>" +
      '<img src="' +
      images_list[i].url +
      '" alt="' +
      images_list[i].alt +
      '">' +
      '<span class="hcg-slide-text">' +
      images_list[i].name +
      "</span>" +
      "</a>";
    dots_div +=
      '<a href="#" class="hcg-slide-dot' +
      (i === 0 ? " dot-active" : "") +
      '" data-id="' +
      i +
      '"></a>';
  }

  slider_id.querySelector(".hcg-slider-body").innerHTML = images_div;
  slider_id.querySelector(".hcg-slide-dot-control").innerHTML = dots_div;

  let slide_index = 0;

  const images = slider_id.querySelectorAll(".hcg-slides");
  const dots = slider_id.querySelectorAll(".hcg-slide-dot");
  const showSlides = () => {
    if (slide_index > images.length - 1) {
      slide_index = 0;
    }
    if (slide_index < 0) {
      slide_index = images.length - 1;
    }
    for (let i = 0; i < images.length; i++) {
      images[i].style.display = "none";
      dots[i].classList.remove("dot-active");
      if (i == slide_index) {
        images[i].style.display = "flex";
        dots[i].classList.add("dot-active");

        // Update group-title and left-subheading
        updateGroupTitleAndSubheading(images_list[i]);
      }
    }
  };

  const prevButton = slider_id.querySelector("#hcg-slide-prev");
  const nextButton = slider_id.querySelector("#hcg-slide-next");

  // Function to handle previous slide
  const prevSlide = (event) => {
    event.preventDefault();
    slide_index--;
    showSlides();
  };

  // Function to handle next slide
  const nextSlide = (event) => {
    event.preventDefault();
    slide_index++;
    showSlides();
  };

  // Event listeners for previous and next buttons
  prevButton.addEventListener("click", prevSlide, false);
  nextButton.addEventListener("click", nextSlide, false);

  const dot_click = (event) => {
    event.preventDefault();
    slide_index = event.target.dataset.id;
    showSlides();
  };

  for (let i = 0; i < dots.length; i++) {
    dots[i].addEventListener("click", dot_click, false);
  }

  setInterval(() => {
    slide_index++;
    showSlides();
  }, 10000);

  // Function to update group-title and left-subheading
  const updateGroupTitleAndSubheading = (image) => {
    const groupTitle = document.querySelector(".group-title");
    const leftSubheading = document.querySelector(".left-subheading");
    const blogLink = document.querySelector(".blog-link");

    // Update content based on the selected image
    groupTitle.textContent = image.name.replace(
      "FileConverters",
      "File Converters"
    );
    leftSubheading.textContent = getContentDescription(image.name);

    // Update blog link href based on the selected image
    const link = getBlogLink(image.name);
    blogLink.setAttribute("href", link);

    // Update button link based on the selected image
    const buttonLink = document.querySelector(".btn a");
    buttonLink.setAttribute("href", link);
  };

  // Function to get blog link based on the image name
  const getBlogLink = (imageName) => {
    // Define the mapping of image name to blog link
    const blogLinkMap = {
      Pages: "../page-apps/page.php",
      Widgets: "../page-apps/widgets.php",
      Converters: "../page-apps/converter.php",
      Calculators: "../page-apps/calculators.php",
      Generators: "../page-apps/generators.php",
      FileConverters: "../page-apps/file-converter.php",
    };

    // Return the blog link based on the image name, or a default value if not found
    return blogLinkMap[imageName] || "#";
  };

  // Function to get content description based on the image name
  const getContentDescription = (imageName) => {
    // You can replace this with your actual data source or API call
    const contentData = {
      Pages:
        "Merupakan kumpulan Halaman sebagai bacaan yang dapat diakses di Inzaghi's Sites. Dan juga sebagai kumpulan Materi dan Tutorial Pemrograman.",
      Widgets:
        "Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang heboh saat ini.",
      Converters:
        "Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu, Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian dari Aplikasi Konverter ini akan sedikit menggunakan API.",
      Calculators:
        "Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator Sederhana, Ilmiah, Matematika, Kesehatan, Keuangan, hingga Kalkulator untuk Keseharian.",
      Generators:
        "Merupakan Aplikasi untuk membuat dan mengenerasi sesuatu seperti Text Generator hingga Image Generator, dan dapat dibuat secara acak.",
      FileConverters:
        "Merupakan portal untuk melakukan konversi format File apapun seperti JPG, PNG, DOCX, PDF, PPT, hingga TXT.",
    };

    return contentData[imageName] || "";
  };
})();
