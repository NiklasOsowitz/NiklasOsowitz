const swup = new Swup({});

function resetDataAttributes() {
    const contentElement = document.querySelector('#content');
    if (contentElement) {
        contentElement.setAttribute('data-nav', 'false');
        contentElement.setAttribute('data-con', 'false');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initCursor();
    initHaccordion();
    initEventListeners();
    initDragScroll();
    initCarousel();
    resetDataAttributes();
    disableVideoControls();
    initLangChange();
});

document.addEventListener('swup:contentReplaced', () => {
    initCursor();
    initHaccordion();
    initEventListeners();
    initDragScroll();
    initCarousel();
    resetDataAttributes();
    disableVideoControls();
    initLangChange();
});

swup.hooks.on('page:view', () => {
    initCursor();
    initHaccordion();
    initEventListeners();
    initDragScroll();
    initCarousel();
    resetDataAttributes();
    disableVideoControls();
    initLangChange();
});