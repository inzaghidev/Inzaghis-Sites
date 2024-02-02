(() => {
  const images_list = [
    {
      name: "Pages",
      url: "../images/pages-by-pages-apps.png",
      alt: "",
      link: "",
    },
    {
      name: "Widgets",
      url: "../images/widgets-by-pages-apps.png",
      alt: "",
      link: "",
    },
    {
      name: "Converters",
      url: "../images/converters-by-pages-apps.png",
      alt: "",
      link: "",
    },
    {
      name: "Calculators",
      url: "../images/calculators-by-pages-apps.png",
      alt: "",
      link: "",
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

    // Update content based on the selected image
    groupTitle.textContent = image.name;
    leftSubheading.textContent = getContentDescription(image.name);
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
    };

    return contentData[imageName] || "";
  };
})();
