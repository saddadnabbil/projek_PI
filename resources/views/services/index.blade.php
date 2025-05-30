@extends('layouts.main')

@section('content')
<!-- Services Header -->
<section class="services-header bg-primary text-white py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Layanan Kami</h1>
                <p class="lead">Solusi lengkap untuk setiap event spesial Anda</p>
            </div>
        </div>
    </div>
</section>

<!-- Services List -->
<section class="services-list py-5">
    <div class="container">
        <div class="row">
            <!-- Service Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/event-1.jpg') }}" class="card-img-top" alt="Engagement Service">
                    <div class="card-body">
                        <h5 class="card-title">Engagement Event</h5>
                        <p class="card-text">Wujudkan momen pertunangan yang berkesan dengan dekorasi elegan dan catering premium.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Dekorasi</li>
                            <li><i class="fas fa-check text-success me-2"></i>Perencanaan</li>
                            <li><i class="fas fa-check text-success me-2"></i>Dokumentasi</li>
                            <li><i class="fas fa-check text-success me-2"></i>Entertainment</li>
                        </ul>
                        <div class="price-tag mt-3">
                            <h4 class="text-primary">Rp 8.000.000</h4>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="{{ route('payment.show', ['service' => 'Engagement Event', 'amount' => 8000000]) }}" class="btn btn-primary w-100 mb-2">Pesan Sekarang</a>
                        <a href="/contact" class="btn btn-outline-primary w-100">Hubungi Kami</a>
                    </div>
                </div>
            </div>

            <!-- Service Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/event-2.jpg') }}" class="card-img-top" alt="Gathering Service">
                    <div class="card-body">
                        <h5 class="card-title">Gathering</h5>
                        <p class="card-text">Ciptakan momen kebersamaan yang tak terlupakan bersama keluarga tercinta.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Dekorasi</li>
                            <li><i class="fas fa-check text-success me-2"></i>Perencanaan</li>
                            <li><i class="fas fa-check text-success me-2"></i>Dokumentasi</li>
                            <li><i class="fas fa-check text-success me-2"></i>Game Seru</li>
                        </ul>
                        <div class="price-tag mt-3">
                            <h4 class="text-primary">Rp 5.000.000</h4>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="{{ route('payment.show', ['service' => 'Family Gathering', 'amount' => 5000000]) }}" class="btn btn-primary w-100 mb-2">Pesan Sekarang</a>
                        <a href="/contact" class="btn btn-outline-primary w-100">Hubungi Kami</a>
                    </div>
                </div>
            </div>

            <!-- Service Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/event-3.jpg') }}" class="card-img-top" alt="Birthday Service">
                    <div class="card-body">
                        <h5 class="card-title">Birthday Party</h5>
                        <p class="card-text">Rayakan hari spesial dengan pesta ulang tahun yang meriah dan berkesan.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Dekorasi</li>
                            <li><i class="fas fa-check text-success me-2"></i>Perencanaan</li>
                            <li><i class="fas fa-check text-success me-2"></i>Dokumentasi</li>
                            <li><i class="fas fa-check text-success me-2"></i>Kue Ulang Tahun</li>
                        </ul>
                        <div class="price-tag mt-3">
                            <h4 class="text-primary">Rp 5.000.000</h4>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="{{ route('payment.show', ['service' => 'Birthday Party', 'amount' => 5000000]) }}" class="btn btn-primary w-100 mb-2">Pesan Sekarang</a>
                        <a href="/contact" class="btn btn-outline-primary w-100">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-us py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Mengapa Memilih Kami?</h2>
            <p class="lead">Kami berkomitmen memberikan layanan terbaik untuk event Anda</p>
        </div>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <i class="fas fa-star fa-3x mb-3"></i>
                <h4>Berpengalaman</h4>
                <p>Tim profesional dengan pengalaman bertahun-tahun</p>
            </div>
            <div class="col-md-3 mb-4">
                <i class="fas fa-hand-holding-heart fa-3x mb-3"></i>
                <h4>Pelayanan Prima</h4>
                <p>Mengutamakan kepuasan dan kenyamanan klien</p>
            </div>
            <div class="col-md-3 mb-4">
                <i class="fas fa-gem fa-3x mb-3"></i>
                <h4>Kualitas Terbaik</h4>
                <p>Menggunakan vendor dan material berkualitas</p>
            </div>
            <div class="col-md-3 mb-4">
                <i class="fas fa-coins fa-3x mb-3"></i>
                <h4>Harga Bersaing</h4>
                <p>Penawaran harga yang kompetitif dan transparan</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2>Siap Mewujudkan Event Impian Anda?</h2>
                <p class="lead mb-4">Konsultasikan kebutuhan event Anda dengan tim kami</p>
                <a href="/contact" class="btn btn-primary btn-lg">Hubungi Kami Sekarang</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const payButtons = document.querySelectorAll('.pay-button');
    
    payButtons.forEach(button => {
        button.addEventListener('click', async function() {
            const service = this.dataset.service;
            const price = this.dataset.price;
            
            try {
                const response = await fetch('/create-payment', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        service: service,
                        price: price
                    })
                });
                
                const data = await response.json();
                
                window.snap.pay(data.snapToken, {
                    onSuccess: function(result) {
                        window.location.href = '/payment-success';
                    },
                    onPending: function(result) {
                        alert('Pembayaran pending, silakan selesaikan pembayaran Anda');
                    },
                    onError: function(result) {
                        alert('Pembayaran gagal, silakan coba lagi');
                    },
                    onClose: function() {
                        alert('Anda menutup popup pembayaran sebelum menyelesaikan pembayaran');
                    }
                });
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan, silakan coba lagi');
            }
        });
    });
});
</script>
@endpush