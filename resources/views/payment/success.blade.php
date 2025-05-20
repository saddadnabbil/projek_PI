@extends('layouts.main')

@section('content')
<div class="container py-5" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card shadow">
                <div class="card-body">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                    </div>
                    <h2 class="mb-4">Pembayaran Berhasil!</h2>
                    <div class="alert alert-info mb-4">
                        <h5>Detail Pembayaran:</h5>
                        <p class="mb-1">Layanan: {{ session('payment_details.service') }}</p>
                        <p class="mb-1">Total: Rp {{ number_format(session('payment_details.amount'), 0, ',', '.') }}</p>
                        <p class="mb-0">Status: Menunggu Verifikasi</p>
                    </div>
                    <p class="lead mb-4">Tim kami akan memverifikasi pembayaran Anda dan menghubungi Anda segera.</p>
                    <div class="mt-4">
                        <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection