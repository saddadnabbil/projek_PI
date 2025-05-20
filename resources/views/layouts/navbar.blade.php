<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<nav class="navbar navbar-expand-lg fixed-top shadow-sm" id="mainNav">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="rounded-circle brand-logo">
            <span class="brand-text ms-2">Dyacara</span>
        </a>

        <!-- Tombol Toggle untuk Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navbar -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('events*') ? 'active' : '' }}" href="{{ route('events.index') }}">
                        <i class="fas fa-calendar-alt me-1"></i> Event
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="{{ route('services.index') }}">
                        <i class="fas fa-concierge-bell me-1"></i> Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ route('gallery.index') }}">
                        <i class="fas fa-images me-1"></i> Galeri
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact.index') }}">
                        <i class="fas fa-envelope me-1"></i> Kontak
                    </a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ms-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt me-1"></i> Login
                    </a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-1"></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('payments') }}">Pesanan Saya</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="px-4">
                                @csrf
                                <button type="submit" class="btn btn-link text-danger p-0">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>

<style>
#mainNav {
    transition: all 0.3s ease-in-out;
    padding: 1rem 0;
    background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
}

#mainNav.navbar-shrink {
    padding: 0.5rem 0;
    background: rgba(0, 123, 255, 0.98);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
}

.brand-logo {
    height: 45px;
    width: 45px;
    border: 2px solid #fff;
    padding: 2px;
    transition: all 0.3s ease;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
}

.brand-text {
    color: #fff;
    font-weight: 600;
    font-size: 1.5rem;
    letter-spacing: 1px;
}

.navbar-brand:hover .brand-logo {
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
}

.navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.9) !important;
    font-weight: 500;
    padding: 0.5rem 1rem !important;
    margin: 0 0.25rem;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    color: #fff !important;
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}

.navbar-toggler {
    border-color: rgba(255, 255, 255, 0.5);
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-nav {
    margin: 0 auto;
    gap: 1rem;
}

.nav-item {
    text-align: center;
}

@media (max-width: 991.98px) {
    .navbar-nav {
        gap: 0.5rem;
    }
    
    .navbar-collapse {
        background: rgba(0, 123, 255, 0.98);
        padding: 1rem;
        border-radius: 8px;
        margin-top: 0.5rem;
        text-align: center;
    }

    .navbar-nav .nav-link {
        padding: 0.75rem 1rem !important;
        margin: 0.25rem 0;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var mainNav = document.getElementById('mainNav');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            mainNav.classList.add('navbar-shrink');
        } else {
            mainNav.classList.remove('navbar-shrink');
        }
    });
});
</script>