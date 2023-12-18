@extends('layouts.mainadmin')

@section('container')
    <!-- resources/views/events/create.blade.php -->

    <!-- Your Form -->
    <!-- Include Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data" class="mt-4">
        @csrf

        <!-- Event Name -->
        <div class="mb-3">
            <label for="nama_event" class="form-label">Nama Event:</label>
            <input type="text" class="form-control" name="nama_event" id="nama_event" required>
        </div>

        <!-- Date and Time using Flatpickr -->
        <div class="mb-3">
            <label for="tgl_event" class="form-label">Tanggal Event:</label>
            <input type="text" class="form-control" name="tgl_event" id="tgl_event" required>
        </div>

        <!-- Harga -->
        <div class="mb-3">
            <label for="harga" class="form-label">Harga (Rp):</label>
            <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="number" class="form-control" name="harga" id="harga" oninput="formatCurrency(this)"
                    required>
            </div>
        </div>

        <!-- Image Upload -->
        <div class="mb-3">
            <label for="image" class="form-label">Event Image:</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
        </div>

        <!-- Submit Button (Centered) -->
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <!-- Include Flatpickr JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Initialize Flatpickr with minDate -->
    <script>
        flatpickr("#tgl_event", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            minDate: "today", // Set minimum date to today
        });

        function formatCurrency(input) {
            // Format input value as currency with comma as thousands separator
            input.value = parseFloat(input.value.replace(/[^\d]/g, "")).toLocaleString("id-ID");
        }
    </script>
@endsection
