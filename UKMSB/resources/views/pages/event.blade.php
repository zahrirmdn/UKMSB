@extends('layouts.main')

@section('container')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Event</h1>
                        <p class="mb-4">Buy tickets to watch the nearest UKMSB match!</p>
                        @guest
                            <p><a href="/login" class="btn btn-secondary me-2">Login</a></p>
                        @endguest
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/logo_UKM_Sepakbola.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    @include('partials._event')

    @yield('eventsection')

    

@endsection

