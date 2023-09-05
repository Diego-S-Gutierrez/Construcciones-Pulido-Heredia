// Desplazamiento suave al hacer clic en enlaces de navegación
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('nav a');
    
    links.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();

            const targetId = link.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
});