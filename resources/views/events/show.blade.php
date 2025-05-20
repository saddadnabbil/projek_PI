@extends('layouts.main')

@section('content')
<!-- Event Detail Header -->
<section class="event-detail-header bg-primary text-white py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1>{{ $event->title }}</h1>
                <div class="d-flex align-items-center gap-2 mt-2">
                    @switch($event->category)
                        @case('engagement')
                            <span class="badge bg-primary px-3 py-2">Engagement</span>
                            @break
                        @case('gathering')
                            <span class="badge bg-success px-3 py-2">Family Gathering</span>
                            @break
                        @case('birthday')
                            <span class="badge bg-warning px-3 py-2">Birthday Party</span>
                            @break
                    @endswitch
                    <span class="text-white-50">|</span>
                    <span><i class="fas fa-calendar me-2"></i>{{ \Carbon\Carbon::parse($event->event_date)->isoFormat('D MMMM Y') }}</span>
                    <span class="text-white-50">|</span>
                    <span><i class="fas fa-map-marker-alt me-2"></i>{{ $event->location }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Detail Content -->
<section class="event-detail-content py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Event Image -->
                <div class="event-image mb-4">
                    <img src="{{ Storage::disk('public')->url($event->image) }}" class="img-fluid rounded shadow" alt="{{ $event->title }}">
                </div>

                <!-- Event Description -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4>Deskripsi Event</h4>
                        <div class="event-description mt-3">
                            {!! $event->description !!}
                        </div>
                    </div>
                </div>

                <!-- Event Features -->
                <div class="card">
                    <div class="card-body">
                        <h4>Fitur Event</h4>
                        <div class="row mt-3">
                            @switch($event->category)
                                @case('engagement')
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Dekorasi Premium</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Catering Mewah</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Dokumentasi Pre-Wedding</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>MC Profesional</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Live Music</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Free Konsultasi</li>
                                        </ul>
                                    </div>
                                    @break
                                @case('gathering')
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Venue Outdoor/Indoor</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Catering Buffet</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Games & Activities</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Sound System</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Dokumentasi</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Free Konsultasi</li>
                                        </ul>
                                    </div>
                                    @break
                                @case('birthday')
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Dekorasi Tematik</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Catering & Kue</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Entertainment</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>MC Profesional</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Dokumentasi</li>
                                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Free Konsultasi</li>
                                        </ul>
                                    </div>
                                    @break
                            @endswitch
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Contact Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tertarik dengan Event Ini?</h5>
                        <p class="text-muted">Hubungi kami untuk informasi lebih lanjut dan konsultasi gratis</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">
                            <i class="fas fa-envelope me-2"></i>Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection