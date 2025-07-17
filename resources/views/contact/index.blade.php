@extends('layouts.main')

@section('content')
<!-- Contact Header -->
<section class="contact-header bg-primary text-white py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Hubungi Kami</h1>
                <p class="lead">Konsultasikan kebutuhan event Anda dengan tim kami</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="contact-form py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="contact-info">
                    <h3>Informasi Kontak</h3>
                    <p class="mb-4">Silakan hubungi kami melalui form di samping atau informasi kontak di bawah ini:</p>
                    
                    <div class="d-flex mb-3">
                        <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                        <div>
                            <h5>Alamat</h5>
                            <p>Jl. Bratasena 2,<br>Tegal Gundil, Kota Bogor, Jawa Barat</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <i class="fas fa-phone fa-2x text-primary me-3"></i>
                        <div>
                            <h5>Telepon</h5>
                            <p>+62 878 8146 5628</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                        <div>
                            <h5>Email</h5>
                            <p>mabiyu25@gmail.com</p>
                        </div>
                    </div>

                    <div class="social-media mt-4">
                        <h5>Ikuti Kami</h5>
                        <div class="d-flex gap-3 mt-3">
                            <a href="#" class="text-primary"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-instagram fa-2x"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-youtube fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Kirim Pesan</h3>
                        <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                       id="phone" name="phone" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                       id="subject" name="subject" value="{{ old('subject') }}" required>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" 
                                          id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100" id="submitButton">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps -->
<section class="maps">
    <div class="container-fluid p-0">
        <div class="map-container" style="height: 400px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.503283776466!2d106.8140120754664!3d-6.5841853643646004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c42a8b998d41%3A0xe97cd0aad97295c2!2sJl.%20Bratasena%202%20No.2%2C%20RT.01%2FRW.15%2C%20Tegal%20Gundil%2C%20Kec.%20Bogor%20Utara%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016152!5e0!3m2!1sid!2sid!4v1752328137668!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

@push('styles')
<style>
.contact-info i {
    width: 40px;
}

.social-media a:hover {
    opacity: 0.8;
}

.map-container {
    position: relative;
    overflow: hidden;
}

.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitButton = document.getElementById('submitButton');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Mengirim...';
        submitButton.disabled = true;
        this.submit();
    });
});
</script>
@endpush
@endsection