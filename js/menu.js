const mobileMenu = document.getElementById('mobileMenu');
const hambIcon = document.getElementById('hambIcon');

function openMenu() {
    hambIcon.classList.toggle('open');
    mobileMenu.classList.toggle('hidden');
    document.body.classList.toggle('no-scroll');
}

hambIcon.addEventListener('click', openMenu);
