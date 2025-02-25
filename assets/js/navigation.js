function toggleNav() {
    const content = document.getElementById('content');
    const navOpen = content.getAttribute('data-nav') === 'true';
    const conOpen = content.getAttribute('data-con') === 'true';

    if (conOpen && navOpen) {
        content.setAttribute('data-nav', 'false');
        content.setAttribute('data-con', 'false');
    } else if (conOpen && !navOpen) {
        content.setAttribute('data-nav', 'true');
    } else {
        content.setAttribute('data-nav', !navOpen);
    }
    
    updateUI();
}

function toggleCon() {
    const content = document.getElementById('content');
    const navOpen = content.getAttribute('data-nav') === 'true';
    const conOpen = content.getAttribute('data-con') === 'true';

    if (!navOpen) {
        content.setAttribute('data-nav', 'true');
    }
    
    content.setAttribute('data-con', !conOpen);
    
    updateUI();
}

function closeMenus() {
    const content = document.getElementById('content');
    content.setAttribute('data-nav', 'false');
    content.setAttribute('data-con', 'false');
    
    updateUI();
}

function updateUI() {
    const content = document.getElementById('content');
    const backdrop = document.querySelector('.navigation-close-backdrop');
    const navOpen = content.getAttribute('data-nav') === 'true';
    const conOpen = content.getAttribute('data-con') === 'true';
    
    if (navOpen || conOpen) {
        backdrop.style.display = 'block';
        content.classList.add('noscroll');
    } else {
        backdrop.style.display = 'none';
        content.classList.remove('noscroll');
    }
}

function initEventListeners() {
    const backdrop = document.querySelector('.navigation-close-backdrop');
    backdrop.removeEventListener('click', closeMenus);
    backdrop.addEventListener('click', closeMenus);
}

function initLangChange() {
    const langButtons = document.querySelectorAll(".lang input[type='checkbox']");
    const currentLanguage = window.location.pathname.includes('/de') ? 'de' : 'en';

    langButtons.forEach(button => {
        button.checked = currentLanguage === 'de';
    });

    langButtons.forEach(button => {
        button.addEventListener("change", function () {
            let newLanguage = button.checked ? 'de' : 'en';

            let newPathname = window.location.pathname.replace(`/${currentLanguage}`, `/${newLanguage}`);
            window.location.pathname = newPathname;
        });
    });
}
