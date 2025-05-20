<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyacara - Event Organizer Professional</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    @include('layouts.navbar')
    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>DYACARA</h5>
                    <p>Mewujudkan event impian Anda dengan sentuhan profesional.</p>
                </div>
                <div class="col-md-4">
                    <h5>Kontak</h5>
                    <p>
                        <i class="fas fa-phone"></i> +62 878-8146-5628<br>
                        <i class="fas fa-envelope"></i> mabiyu25@gmail.com<br>
                        <i class="fas fa-map-marker-alt"></i> Jl.raya yasmin kota bogor 
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Ikuti Kami</h5>
                    <div class="social-links">
                        <a href="https://www.instagram.com/dyacara?igsh=MXRxcWg3cDAxeWcyOQ==" class="text-white me-3 social-icon" style="text-decoration: none;"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/qr/GQQX4YQ6AWIWM1" class="text-white me-3 social-icon" style="text-decoration: none;"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2024 Dyacara. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbar = document.querySelector('.navbar');
            
            function checkScroll() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }

            window.addEventListener('scroll', checkScroll);
            checkScroll(); // Check on page load
        });
    </script>
</body>
</html>