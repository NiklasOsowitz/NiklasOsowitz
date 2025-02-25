function initCarousel() {
    const viewboxes = document.querySelectorAll('.viewbox');

    if (viewboxes.length === 0) {
        return;
    }

    let currentScroll = 0;
    let isScrollingDown = true;

    viewboxes.forEach(viewbox => {
        const carouselContainer = viewbox.querySelector('.carousel-container');

        if (!carouselContainer) {
            return;
        }

        let speed = 20;
        if (carouselContainer.classList.contains('title-carousel')) {
            speed = 30;
        } else if (carouselContainer.classList.contains('brandmark-carousel')) {
            speed = 20;
        }

        let tween = gsap.to(carouselContainer.querySelectorAll(".carousel-item"), {
            xPercent: -100,
            repeat: -1,
            duration: speed,
            ease: "linear"
        }).totalProgress(0.5);

        gsap.set(carouselContainer, { xPercent: -50 });

        window.addEventListener("scroll", function () {
            const newScroll = window.pageYOffset || document.documentElement.scrollTop;

            isScrollingDown = newScroll > currentScroll;

            gsap.to(tween, {
                timeScale: isScrollingDown ? 1 : -1
            });

            currentScroll = newScroll;
        });
    });
}
