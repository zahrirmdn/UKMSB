<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            @forelse ($events as $event)
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
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

                        <span class="icon-cross">
                            <img src="{{ asset('images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
            @empty
                <p>No events available.</p>
            @endforelse
        </div>
    </div>
</div>
