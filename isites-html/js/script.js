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

// $(document).ready(function () {
//   var itemsMainDiv = ".MultiCarousel";
//   var itemsDiv = ".carousel-inner";
//   var itemWidth = "";

//   // Click events for the previous and next controls
//   $(".carousel-control-prev, .carousel-control-next").click(function () {
//     var condition = $(this).hasClass("carousel-control-prev");
//     if (condition) click(0);
//     else click(1);
//   });

//   ResCarouselSize();

//   $(window).resize(function () {
//     ResCarouselSize();
//   });

//   // Function to resize the carousel based on window width
//   function ResCarouselSize() {
//     var incno = 0;
//     var sampwidth = $(itemsMainDiv).width();
//     var bodyWidth = $("body").width();
//     var itemsSplit = $(itemsMainDiv).data("items").split(",");

//     if (bodyWidth >= 992) {
//       incno = itemsSplit[3]; // 4 slides for large screens
//     } else if (bodyWidth >= 768) {
//       incno = itemsSplit[2]; // 3 slides for medium screens
//     } else if (bodyWidth >= 576) {
//       incno = itemsSplit[1]; // 2 slides for small screens
//     } else {
//       incno = itemsSplit[0]; // 1 slide for extra small screens
//     }

//     itemWidth = sampwidth / incno;
//     $(itemsDiv).css({
//       transform: "translateX(0px)",
//       width: itemWidth * $(".carousel-item .row .col-lg-3").length,
//     });

//     $(".carousel-item .row .col-lg-3").each(function () {
//       $(this).outerWidth(itemWidth);
//     });
//   }

//   function click(ell) {
//     var translateXval = "";
//     var divStyle = $(itemsDiv).css("transform");
//     var values = divStyle.match(/-?[\d\.]+/g);
//     var xds = Math.abs(values[4]);

//     if (ell == 0) {
//       translateXval = parseInt(xds) - parseInt(itemWidth);
//     } else {
//       translateXval = parseInt(xds) + parseInt(itemWidth);
//     }
//     $(itemsDiv).css("transform", "translateX(" + -translateXval + "px)");
//   }
// });
