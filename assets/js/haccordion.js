function initHaccordion() {
  const { gsap } = window;

  const accordionItems = document.querySelectorAll(".haccordion-item");
  let openItem = null;

  const closeAllItems = () => {
    accordionItems.forEach((item) => {
      const content = item.querySelector(".haccordion-item-content");
      const headline = item.querySelector(".haccordion-item-headline");
      const background = item.querySelector(".haccordion-item-background");
      const wrapper = item.querySelector(".haccordion-item-wrapper");
      const carousel = item.querySelector(".haccordion-item-content-carousel");

      item.classList.remove("hovereffect-c-close");

      gsap.to(headline, {
        color: "var(--shimmer-c)",
        duration: 0.5,
      });

      gsap.to(background, {
        opacity: 0,
        transform: "translate(-50%, -50%) scaleY(0)",
        duration: 0.25,
        ease: "ease",
      });

      gsap.to(content, {
        height: "0",
        opacity: 0,
        duration: 0.5,
      });

      gsap.killTweensOf(carousel);

      gsap.set(carousel, {
        x: 0,
        delay: 0.5,
      });
    });

    openItem = null;
  };

  accordionItems.forEach((item) => {
    const content = item.querySelector(".haccordion-item-content");
    const headline = item.querySelector(".haccordion-item-headline");
    const background = item.querySelector(".haccordion-item-background");
    const wrapper = item.querySelector(".haccordion-item-wrapper");
    const carousel = item.querySelector(".haccordion-item-content-carousel");

    const startCarousel = () => {
      const carouselWidth = carousel.scrollWidth;
      const contentWidth = content.offsetWidth;
      const loopDistance = carouselWidth - contentWidth;

      const speed = 80;
      const duration = loopDistance / speed;

      gsap.to(carousel, {
        x: `-${loopDistance}px`,
        duration: duration,
        delay: 0.5,
        ease: "none",
        repeat: -1,
        modifiers: {
          x: gsap.utils.unitize((x) => parseFloat(x) % loopDistance),
        },
      });
    };

    const onClick = (event) => {
      const cursor = document.querySelector(".cursor");
      const cursorExpand = document.querySelector(".cursor-expand svg");
      const cursorShrink = document.querySelector(".cursor-shrink svg");

      if (openItem !== item) {
        closeAllItems();
      }

      if (openItem !== item) {

        gsap.to(headline, {
          color: "white",
          duration: 0.5,
        });

        gsap.to(background, {
          opacity: 1,
          transform: "translate(-50%, -50%) scaleY(1)",
          ease: "ease",
          duration: 0.25,
        });

        const contentHeight = content.scrollHeight;
        gsap.to(content, {
          height: contentHeight,
          opacity: 1,
          duration: 0.5,
        });

        item.classList.add("hovereffect-c-close");

        gsap.to(cursor, 0.5, {
          scale: 3,
        });

        gsap.to(cursorExpand, 0.5, {
          scale: 0,
          opacity: 0,
        });

        gsap.to(cursorShrink, 0.5, {
          scale: 0.4,
          opacity: 1,
        });

        startCarousel();

        openItem = item;
      } else {
        closeAllItems();

        item.classList.remove("hovereffect-c-close");

        gsap.to(cursorShrink, 0.5, {
          scale: 0,
          opacity: 0,
        });

        gsap.to(cursorExpand, 0.5, {
          scale: 0.4,
          opacity: 1,
        });
      }

      event.stopPropagation();
    };

    item.addEventListener("click", onClick);
  });

  document.addEventListener("click", (event) => {
    if (!event.target.closest(".haccordion-item")) {
      closeAllItems();
    }
  });
}

initHaccordion();
