document.addEventListener("DOMContentLoaded", function () {
    const pageRevealDelay = 1;
    const digit1 = document.querySelector(".digit-1");
    const digit2 = document.querySelector(".digit-2");
    const digit3 = document.querySelector(".digit-3");
    const cursorLoadFill = document.querySelector(".cursor-load-fill");
    const cursorLoad = document.querySelector(".cursor-load");
    const preloader = document.querySelector(".preloader");
    const cursor = document.querySelector(".cursor-preloader");
    const overlay = document.querySelector(".preloader-overlay");

    for (let i = 0; i < 2; i++) {
        for (let j = 0; j < 10; j++) {
            const div = document.createElement("div");
            div.className = "num";
            div.textContent = j;
            digit3.appendChild(div);
        }
    }

    const finalDigit = document.createElement("div");
    finalDigit.className = "num";
    finalDigit.textContent = "0";
    digit3.appendChild(finalDigit);

    function animate(digit, duration, delay = 1) {
        const numHeight = digit.querySelector(".num").clientHeight;
        const totalDistance =
            (digit.querySelectorAll(".num").length - 1) * numHeight;
        gsap.to(digit, {
            y: -totalDistance,
            duration: duration,
            delay: delay,
            ease: "power2.inOut",
        });
    }

    animate(digit3, 3);
    animate(digit2, 3.5);
    animate(digit1, 1, 3.5);

    gsap.to(cursorLoadFill, {
        height: '100%',
        duration: 4,
        ease: "power2.inOut",
        onComplete: () => {

            gsap.to(cursorLoad, {
                height: '0',
                width: '0',
                opacity: 0,
                duration: 1,
                ease: "power2.inOut",
            });

            gsap.to(preloader, {
                opacity: 0,
                duration: 0.5,
                ease: "power2.inOut",
                onComplete: () => {
                    preloader.style.visibility = 'hidden';
                }
            });

            gsap.to(cursor, {
                width: '20px',
                height: '20px',
                duration: 1,
                ease: "power2.inOut",
            });

            gsap.from(".reveal-a", {
                y: "100%",
                opacity: 0,
                delay: pageRevealDelay,
                duration: 1,
                ease: "power2.out",
                stagger: 0.2
            });

            gsap.from(".reveal-b", {
                y: "-100%",
                opacity: 0,
                delay: pageRevealDelay,
                duration: 1,
                ease: "power2.out",
                stagger: 0.2
            });

            gsap.to(overlay, {
                opacity: 0,
                duration: 1,
                ease: "power2.inOut",
                onComplete: () => {
                    overlay.classList.add('preloader-overlay-hidden');
                }
            });
        }
    });
});
