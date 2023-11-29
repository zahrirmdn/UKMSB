<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>UKMSB</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.html">UKMSB Universitas Airlangga</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item {{ $title === 'Home' ? 'active' : ' ' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="{{ $title === 'Event' ? 'active' : '' }}"><a class="nav-link" href="/event">Event</a>
                    </li>
                    <li class="{{ $title === 'Achievemenet' ? 'active' : '' }}"><a class="nav-link"
                            href="/achievement">Achievement</a></li>
                    <li class="{{ $title === 'About' ? 'active' : '' }}"><a class="nav-link" href="about">About
                            Us</a></li>
                    @if (!Auth::check())
                        <li><a class="nav-link" href="/login">Sign Up</a></li>
                    @else
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::user()->nama_mhs }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="dropdown-header">
                                        <strong>{{ Auth::user()->nama_mhs }}</strong>
                                    </div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bibi-box-arrow-right"></i> Log out
                                        </button>
                                    </form>
                                </li>
                            </ul>


                        </li>
                    @endif <!-- Add this line to close the if statement -->
                </ul>
            </div>

        </div>
    </nav>
    <!-- End Header/Navigation -->


    <div class="container-flex">
        @yield('container')
    </div>


</html>
