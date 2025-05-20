@extends('layouts.main')

@section('content')
<!-- Gallery Header -->
<section class="gallery-header bg-primary text-white py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Galeri Event</h1>
                <p class="lead">Koleksi momen-momen berharga dari event yang telah kami selenggarakan</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="gallery-grid py-5">
    <div class="container">
        <div class="row g-3">
            @forelse($galleries as $category => $items)
                @foreach($items as $gallery)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 gallery-card">
                        @if($gallery->image)
                            <img src="{{ Storage::disk('public')->url($gallery->image) }}" class="card-img-top" alt="{{ $gallery->caption }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $gallery->event->title }}</h5>
                                <p class="card-text">{{ $gallery->caption }}</p>
                                @switch($gallery->event->category)
                                    @case('engagement')
                                        <span class="badge bg-primary">Engagement</span>
                                        @break
                                    @case('gathering')
                                        <span class="badge bg-success">Family Gathering</span>
                                        @break
                                    @case('birthday')
                                        <span class="badge bg-warning">Birthday Party</span>
                                        @break
                                @endswitch
                            </div>
                        @else
                            <div class="text-center p-4">Tidak ada gambar</div>
                        @endif
                    </div>
                </div>
                @endforeach
            @empty
                <div class="col-12 text-center">
                    <p>Belum ada foto dalam galeri.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.gallery-card {
    border: none;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: transform 0.2s ease;
    height: 100%;
}

.gallery-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
}

.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card-body {
    padding: 0.75rem;
    background: white;
}

.card-title {
    font-size: 0.9rem;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 0.4rem;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-text {
    font-size: 0.8rem;
    color: #718096;
    line-height: 1.3;
    margin-bottom: 0.5rem;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.badge {
    font-size: 0.75rem;
    font-weight: 500;
    padding: 0.25em 0.5em;
}
</style>
@endpush