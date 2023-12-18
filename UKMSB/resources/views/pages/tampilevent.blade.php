@extends('layouts.mainadmin')

@section('container')

{{ dd($events) }}

<div class="row">
        @forelse ($events as $event)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    @if ($event->gambar)
                        <img src="{{ asset($event->gambar) }}" class="img-fluid product-thumbnail" alt="{{ $event->nama_event }}">
                    @else
                        <p>No image available</p>
                    @endif
                    <h3 class="product-title">{{ $event->nama_event }}</h3>
                    <strong class="product-price">Rp.{{ $event->harga }}</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
        @empty
            <p>No events available.</p>
        @endforelse
    </div>


<!-- Start "Tambah Event" Button -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <a href="tambahevent" class="btn btn-primary btn-lg">Tambah Event</a>
        </div>
    </div>
</div>
<!-- End "Tambah Event" Button -->

@endsection
