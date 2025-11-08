console.log("Página cargada correctamente");

// El carrusel ahora funciona con CSS animations

function toggleContent(id) {
    const content = document.getElementById(id);
    const button = content.previousElementSibling;
    
    // Toggle the show class on the content
    content.classList.toggle('show');
    
    // Toggle the active class on the button
    button.classList.toggle('active');
}
