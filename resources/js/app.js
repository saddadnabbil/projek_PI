import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    var myCarousel = document.querySelector('#heroCarousel');
    if (myCarousel) {
        new bootstrap.Carousel(myCarousel, {
            interval: 5000,  // Waktu transisi dalam milidetik
            touch: true,     // Enable touch support
            keyboard: true   // Enable keyboard control
        });
    }
});