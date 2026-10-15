document.addEventListener("DOMContentLoaded", function () {
  function initVanillaSlider(prefix) {
    const viewport = document.getElementById(`${prefix}SliderWrapper`);
    const container = document.getElementById(`${prefix}Container`);
    const prevBtn = document.getElementById(`${prefix}PrevBtn`);
    const nextBtn = document.getElementById(`${prefix}NextBtn`);
    const dotsContainer = document.getElementById(`${prefix}Dots`);

    if (!container || !viewport) return;

    // Reset any legacy transform on container
    container.style.transform = "";

    let currentIndex = 0;

    function getSlidesPerView() {
      const width = window.innerWidth;
      if (width >= 1081) return 3;
      if (width >= 640) return 2;
      return 1;
    }

    function getMaxIndex() {
      const slidesCount = container.children.length;
      const spv = getSlidesPerView();
      return Math.max(0, slidesCount - spv);
    }

    function updateActiveDot(index) {
      if (!dotsContainer) return;
      const dots = dotsContainer.children;
      for (let i = 0; i < dots.length; i++) {
        const isActive = i === index;
        dots[i].classList.toggle("is-active", isActive);
        dots[i].setAttribute("aria-current", isActive ? "true" : "false");
      }
    }

    function renderDots() {
      if (!dotsContainer) return;
      dotsContainer.innerHTML = "";
      const maxIdx = getMaxIndex();
      dotsContainer.hidden = maxIdx === 0;

      for (let i = 0; i <= maxIdx; i++) {
        const dot = document.createElement("button");
        dot.type = "button";
        dot.className = "carousel-dot";
        dot.setAttribute("aria-label", `Go to carousel position ${i + 1}`);
        dot.setAttribute("aria-current", i === currentIndex ? "true" : "false");
        dot.classList.toggle("is-active", i === currentIndex);
        dot.addEventListener("click", () => {
          goToSlide(i);
        });
        dotsContainer.appendChild(dot);
      }
    }

    function goToSlide(index) {
      const maxIdx = getMaxIndex();
      currentIndex = Math.max(0, Math.min(index, maxIdx));

      const slides = container.children;
      const targetSlide = slides[currentIndex];
      if (targetSlide) {
        viewport.scrollTo({
          left: targetSlide.offsetLeft,
          behavior: "smooth",
        });
      }

      if (prevBtn) prevBtn.hidden = maxIdx === 0;
      if (nextBtn) nextBtn.hidden = maxIdx === 0;

      updateActiveDot(currentIndex);
    }

    function onScroll() {
      const maxIdx = getMaxIndex();
      const scrollLeft = viewport.scrollLeft;
      const slides = container.children;
      if (!slides.length) return;

      // Check if scrolled near the right end
      if (
        viewport.scrollLeft + viewport.clientWidth >=
        viewport.scrollWidth - 5
      ) {
        currentIndex = maxIdx;
        updateActiveDot(currentIndex);
        return;
      }

      let closestIndex = 0;
      let minDiff = Infinity;
      for (let i = 0; i <= maxIdx; i++) {
        const slide = slides[i];
        if (!slide) break;
        const diff = Math.abs(slide.offsetLeft - scrollLeft);
        if (diff < minDiff) {
          minDiff = diff;
          closestIndex = i;
        }
      }

      currentIndex = closestIndex;
      updateActiveDot(currentIndex);
    }

    let isScrolling = false;
    viewport.addEventListener(
      "scroll",
      function () {
        if (!isScrolling) {
          window.requestAnimationFrame(function () {
            onScroll();
            isScrolling = false;
          });
          isScrolling = true;
        }
      },
      { passive: true },
    );

    if (prevBtn) {
      prevBtn.addEventListener("click", function () {
        const maxIdx = getMaxIndex();
        if (currentIndex > 0) {
          goToSlide(currentIndex - 1);
        } else {
          goToSlide(maxIdx); // Loop around
        }
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", function () {
        const maxIdx = getMaxIndex();
        if (currentIndex < maxIdx) {
          goToSlide(currentIndex + 1);
        } else {
          goToSlide(0); // Loop around
        }
      });
    }

    // Responsive listener
    window.addEventListener("resize", function () {
      renderDots();
      onScroll();
    });

    // Initial call after slides are populated
    setTimeout(function () {
      renderDots();
      goToSlide(0);
    }, 50);
  }

  initVanillaSlider("portals");
  initVanillaSlider("apps");
});
