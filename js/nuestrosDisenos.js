// Si necesitas personalizar algo del carrusel, lo puedes hacer aquí
document.addEventListener("DOMContentLoaded", function() {
    const myCarousel = document.querySelector('#carruselDisenos');
    const carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Cambia la imagen cada 3 segundos
        wrap: true // Si quieres que el carrusel se repita
    });
});
