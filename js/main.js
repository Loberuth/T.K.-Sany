
// modal in contact form
const modal = document.querySelector('.modal');
const send = document.querySelector('.send');
const closeBtn = document.querySelector('.closeBtn');

send.addEventListener('click', openModal)
closeBtn.addEventListener('click', closeModal)
window.addEventListener('click', outsideClick)

function openModal() {
    modal.style.display = 'block';
}
function closeModal() {
    modal.style.display = 'none';
}
function outsideClick(e) {
    if(e.target == modal) {
        closeModal();
    }
}

