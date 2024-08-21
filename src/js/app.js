document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
    darkMode();
});
function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu')
    mobileMenu.addEventListener('click', navegacionResponsive)
};

function darkMode() {
    const botonDarkMode = document.querySelector('.dark-mode-boton')
    botonDarkMode.addEventListener('click', classDarkMode)
}

function classDarkMode () {
    document.body.classList.toggle('dark-mode');
}
function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}