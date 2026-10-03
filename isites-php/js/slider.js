document.querySelectorAll(".slider-carousel").forEach((carousel) => {
  const track = carousel.querySelector(".carousel-track");
  const previousButton = carousel.querySelector("[data-carousel-prev]");
  const nextButton = carousel.querySelector("[data-carousel-next]");
  const pagination = carousel.querySelector(".carousel-pagination");

  if (!track || !previousButton || !nextButton || !pagination) return;

  let pageCount = 1;

  const updateControls = () => {
    const activePage = Math.min(
      pageCount - 1,
      Math.round(track.scrollLeft / track.clientWidth),
    );

    previousButton.disabled = activePage === 0;
    nextButton.disabled = activePage === pageCount - 1;

    pagination.querySelectorAll(".carousel-page").forEach((page, index) => {
      page.setAttribute("aria-current", String(index === activePage));
    });
  };

  const renderPagination = () => {
    const firstSlide = track.querySelector(".carousel-slide");
    const slideGap = parseFloat(getComputedStyle(track).columnGap) || 0;
    const slideWidth =
      firstSlide?.getBoundingClientRect().width ?? track.clientWidth;
    const visibleSlides = Math.max(
      1,
      Math.round(track.clientWidth / (slideWidth + slideGap)),
    );
    pageCount = Math.max(1, Math.ceil(track.children.length / visibleSlides));
    pagination.replaceChildren();
    previousButton.hidden = pageCount === 1;
    nextButton.hidden = pageCount === 1;
    pagination.hidden = pageCount === 1;

    for (let index = 0; index < pageCount; index += 1) {
      const page = document.createElement("button");
      page.className = "carousel-page";
      page.type = "button";
      page.setAttribute("aria-label", `Show page ${index + 1}`);
      page.addEventListener("click", () => {
        track.scrollTo({
          left: Math.min(
            index * track.clientWidth,
            track.scrollWidth - track.clientWidth,
          ),
          behavior: "smooth",
        });
      });
      pagination.appendChild(page);
    }

    updateControls();
  };

  previousButton.addEventListener("click", () => {
    track.scrollBy({ left: -track.clientWidth, behavior: "smooth" });
  });
  nextButton.addEventListener("click", () => {
    track.scrollBy({ left: track.clientWidth, behavior: "smooth" });
  });
  track.addEventListener("scroll", updateControls, { passive: true });
  track.addEventListener("keydown", (event) => {
    if (event.key === "ArrowLeft" || event.key === "ArrowRight") {
      event.preventDefault();
      track.scrollBy({
        left:
          event.key === "ArrowRight" ? track.clientWidth : -track.clientWidth,
        behavior: "smooth",
      });
    }
  });
  window.addEventListener("resize", renderPagination);

  renderPagination();
});
