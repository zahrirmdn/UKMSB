<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@extends('layouts.mainadmin')

@section('container')
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif


    <!-- Di bagian head atau sebelum menutup tag body -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Di bagian konten -->
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @forelse ($events as $event)
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <div class="product-item">
                            @if ($event->gambar)
                                <img src="{{ asset($event->gambar) }}" class="img-fluid product-thumbnail"
                                    alt="{{ $event->nama_event }}">
                            @else
                                <p>No image available</p>
                            @endif
                            <h3 class="product-title">{{ $event->nama_event }}</h3>

                            @php
                                // Convert the date string to a Carbon instance
                                $tgl_event = \Carbon\Carbon::parse($event->tgl_event);
                            @endphp

                            <p class="product-date">{{ $tgl_event->format('d F Y') }}</p> {{-- Format tanggal sesuai kebutuhan --}}

                            <strong class="product-price">Rp.{{ $event->harga }}</strong>

                            <div class="product-buttons">
                                <button class="btn btn-primary btn-sm"
                                    onclick="editEvent('{{ $event->id }}')">Edit</button>
                                <button class="btn btn-danger btn-sm"
                                    onclick="deleteEvent('{{ $event->id }}')">Delete</button>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No events available.</p>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        function editEvent(eventId) {
            // Implement your edit logic here, e.g., redirect to edit page with event ID
            window.location.href = '/admin/event/' + eventId + '/edit';
        }

        function deleteEvent(eventId) {
            if (confirm('Are you sure you want to delete this event?')) {
                axios.delete('/admin/event/' + eventId)
                    .then(function(response) {
                        // Reload the page for simplicity
                        location.reload();
                    })
                    .catch(function(error) {
                        console.error('Error deleting event:', error);

                        // You can handle the error silently without showing an alert
                        // For example, just reload the page
                        location.reload();
                    });
            }
        }



    </script>




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
