
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

const scroll_to_top = document.querySelector('.scroll_to_top');
// on affiche le bouton de scroll to top quand on scroll
window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
        scroll_to_top.classList.add('show');
    } else {
        scroll_to_top.classList.remove('show');
    }
});

