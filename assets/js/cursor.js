function initCursor() {
    const isTouchDevice = () => {
      return (
        "ontouchstart" in window ||
        navigator.maxTouchPoints > 0 ||
        navigator.msMaxTouchPoints > 0
      );
    };
  
    if (isTouchDevice()) {
      const cursor = document.querySelector(".cursor");
      if (cursor) {
        cursor.classList.add("cursor-hide");
      }
    } else {
      const basicCursor = document.querySelector(".basiccursor");
      if (basicCursor) {
        basicCursor.classList.add("basiccursor-hide");
      }
  
      const cursor = document.querySelector(".cursor");
      const cursorExpand = document.querySelector(".cursor-expand svg");
      const cursorShrink = document.querySelector(".cursor-shrink svg");
      const hoverEffect1 = document.querySelectorAll(".hovereffect-a, p a");
      const hoverEffect2 = document.querySelectorAll(".hovereffect-b");
      const hoverEffect3 = document.querySelectorAll(".hovereffect-c");
  
      if (cursor) {
        gsap.set(".cursor", { xPercent: -50, yPercent: -50 });
  
        let mouseX, mouseY;
  
        window.addEventListener("mousemove", (e) => {
          mouseX = e.clientX;
          mouseY = e.clientY;
          gsap.to(cursor, 0.1, { x: mouseX, y: mouseY });
        });
  
        hoverEffect1.forEach((item) => {
            item.addEventListener("mouseenter", () => {
                gsap.to(cursor, 0.5, {
                    scale: 2.5,
                });
            });
            item.addEventListener("mouseleave", () => {
                gsap.to(cursor, 0.5, {
                    scale: 1,
                });
            });
        });
  
        hoverEffect2.forEach((item) => {
            item.addEventListener("mouseenter", () => {
                gsap.to(cursor, 0.5, {
                    scale: 0.75,
                });
            });
            item.addEventListener("mouseleave", () => {
                gsap.to(cursor, 0.5, {
                    scale: 1,
                });
            });
        });
  
        hoverEffect3.forEach((item) => {
            item.addEventListener("mouseenter", () => {
                gsap.to(cursor, 0.5, {
                    scale: 3,
                });
    
                if (item.classList.contains("hovereffect-c-close")) {
                    gsap.to(cursorExpand, 0.5, {
                        scale: 0,
                        opacity: 0,
                    });
                    gsap.to(cursorShrink, 0.5, {
                        scale: 0.4,
                        opacity: 1,
                    });
                } else {
                    gsap.to(cursorExpand, 0.5, {
                        scale: 0.4,
                        opacity: 1,
                    });
                }
            });
    
            item.addEventListener("mouseleave", () => {
                gsap.to(cursor, 0.5, {
                    scale: 1,
                });
    
                gsap.to([cursorExpand, cursorShrink], 0.5, {
                    scale: 0.4,
                    opacity: 0,
                });
            });
        });
      }
    }
  }
  
  initCursor();
  