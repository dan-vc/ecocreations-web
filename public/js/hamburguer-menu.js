document.addEventListener('DOMContentLoaded', function () {
    const abrirMenu = document.querySelector('.abrir-menu');
    const overlay = document.getElementById('overlay');
    const nav = document.querySelector('nav');

    abrirMenu.addEventListener('click', function () {
        nav.classList.toggle('active');
        overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', function () {
        nav.classList.remove('active');
        overlay.classList.remove('active');
    });
});