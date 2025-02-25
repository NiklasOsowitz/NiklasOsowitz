const lerp = (f0, f1, t) => (1 - t) * f0 + t * f1;
const clamp = (val, min, max) => Math.max(min, Math.min(val, max));

class DragScroll {
  constructor(obj) {
    this.el = document.querySelector(obj.el);
    if (!this.el) return;
    this.wrap = this.el.querySelector(obj.wrap);
    this.items = this.el.querySelectorAll(obj.item);
    this.bar = this.el.querySelector(obj.bar);
    this.init();
  }

  init() {
    if (!this.wrap || this.items.length === 0) return;
    this.progress = 0;
    this.speed = 0;
    this.oldX = 0;
    this.x = 0;
    this.playrate = 0;
    this.dragging = false;
    this.startX = 0;
    this.startY = 0;
    this.directionLocked = null;

    this.bindings();
    this.calculate();
    this.addEvents();
    this.raf();
  }

  bindings() {
    [
      "calculate",
      "raf",
      "move",
      "handleTouchStart",
      "handleTouchMove",
      "handleTouchEnd",
      "handleMouseDown",
      "handleMouseMove",
      "handleMouseUp",
      "handleMouseLeave",
    ].forEach((method) => {
      this[method] = this[method].bind(this);
    });
  }

  calculate() {
    if (!this.wrap || this.items.length === 0) return;
    const padding = parseFloat(getComputedStyle(this.wrap).paddingLeft) * 4;
    this.wrapWidth = (this.items[0].clientWidth * this.items.length) + padding;
    this.wrap.style.width = `${this.wrapWidth}px`;
    this.maxScroll = this.wrapWidth - this.el.clientWidth;
  }

  handleTouchStart(e) {
    if (!this.el.contains(e.target)) return;
    this.startX = e.clientX || e.touches[0].clientX;
    this.startY = e.clientY || e.touches[0].clientY;
    this.el.classList.add("dragging");
    this.dragging = false;
    this.directionLocked = null;
    
    document.body.style.overflow = 'hidden';
  }

  handleTouchMove(e) {
    if (this.directionLocked === null) {
      const x = e.clientX || e.touches[0].clientX;
      const y = e.clientY || e.touches[0].clientY;
      const deltaX = this.startX - x;
      const deltaY = this.startY - y;

      if (Math.abs(deltaX) > Math.abs(deltaY)) {
        this.directionLocked = 'horizontal';
        e.preventDefault();
      } else {
        this.directionLocked = 'vertical';

        document.body.style.overflow = '';
      }
    }

    if (this.directionLocked === 'horizontal') {
      const x = e.clientX || e.touches[0].clientX;
      this.progress += (this.startX - x) * 2.5;
      this.startX = x;
      this.move();
      this.dragging = true;
    }
  }

  handleTouchEnd(e) {
    this.el.classList.remove("dragging");

    if (!this.dragging) {
      const link = e.target.closest("a");
      if (link) {
        window.location.href = link.href;
      }
    }

    this.dragging = false;
    this.directionLocked = null;
    document.body.style.overflow = '';
  }

  handleMouseDown(e) {
    if (!this.el.contains(e.target)) return;
    this.startX = e.clientX;
    this.startY = e.clientY;
    this.el.classList.add("dragging");
    this.dragging = true;
    e.preventDefault();
  }

  handleMouseMove(e) {
    if (this.dragging) {
      const x = e.clientX;
      this.progress += (this.startX - x) * 2.5;
      this.startX = x;
      this.move();
    }
  }

  handleMouseUp(e) {
    if (this.dragging) {
      this.el.classList.remove("dragging");
      this.dragging = false;
    }
  }

  handleMouseLeave(e) {
    if (this.dragging) {
      this.el.classList.remove("dragging");
      this.dragging = false;
    }
  }

  move() {
    this.progress = clamp(this.progress, 0, this.maxScroll);
  }

  addEvents() {
    if (!this.el) return;
    window.addEventListener("resize", this.calculate);

    this.wrap.addEventListener("touchstart", this.handleTouchStart);
    this.wrap.addEventListener("mousedown", this.handleMouseDown);

    window.addEventListener("touchmove", this.handleTouchMove, { passive: false });
    window.addEventListener("touchend", this.handleTouchEnd);

    window.addEventListener("mousemove", this.handleMouseMove);
    window.addEventListener("mouseup", this.handleMouseUp);
    document.body.addEventListener("mouseleave", this.handleMouseLeave);
  }

  removeEvents() {
    if (!this.el) return;
    window.removeEventListener("resize", this.calculate);

    this.wrap.removeEventListener("touchstart", this.handleTouchStart);
    this.wrap.removeEventListener("mousedown", this.handleMouseDown);

    window.removeEventListener("touchmove", this.handleTouchMove);
    window.removeEventListener("touchend", this.handleTouchEnd);

    window.removeEventListener("mousemove", this.handleMouseMove);
    window.removeEventListener("mouseup", this.handleMouseUp);
    document.body.removeEventListener("mouseleave", this.handleMouseLeave);
  }

  raf() {
    if (!this.wrap) return;
    this.x = lerp(this.x, this.progress, 0.1);
    this.playrate = this.x / this.maxScroll;

    this.wrap.style.transform = `translateX(${-this.x}px)`;
    this.bar.style.transform = `scaleX(${0.18 + this.playrate * 0.82})`;

    this.speed = Math.min(100, this.oldX - this.x);
    this.oldX = this.x;

    this.scale = lerp(this.scale, this.speed, 0.1);
    this.items.forEach((item) => {
      item.style.transform = `scale(${1 - Math.abs(this.speed) * 0.005})`;
      item.querySelector(".slider-item-project").style.transform = `scaleX(${
        1 + Math.abs(this.speed) * 0.004
      })`;
    });

    requestAnimationFrame(this.raf);
  }

  destroy() {
    this.removeEvents();

    document.body.style.overflow = '';
  }
}

let scroll;

const initDragScroll = () => {
  if (scroll) scroll.destroy();
  scroll = new DragScroll({
    el: ".slider",
    wrap: ".slider-container",
    item: ".slider-item",
    bar: ".slider-progressbar",
  });
  scroll.raf();
};

document.addEventListener('DOMContentLoaded', () => {
  initDragScroll();
});

if (typeof swup !== 'undefined' && swup.hooks && typeof swup.hooks.on === 'function') {
  swup.hooks.on('page:view', () => {
    initDragScroll();
  });
}