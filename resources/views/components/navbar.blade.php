<style>
    .nav-title {
        top : 21rem;
    }
    .nav-subtitle {
        top: 25rem;
    }
    .bg-nav {
        background: transparent;
        z-index: 100;
    }
    .text {
        text-align: left !important;
    }
    @media screen and (max-width : 450px) {
        .nav-title {
            top: 4rem;
        }
        .nav-subtitle {
            top : 6rem
        }
        .bg-nav {
            background: gray;
        }
    }
    @media screen and (max-width : 900px) {
        .nav-title {
            top: 10rem;
        }
        .nav-subtitle {
            top : 15rem
        }
        .bg-nav {
            background: gray;
        }
    }
</style>

<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary text-center z-6 bg-nav w-100 position-fixed">
        <div class="container">
            <a class="navbar-brand col-md-6 text-white fs-4 fw-bold text" href="{{ route('home') }}">Traveller</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-md-flex gap-5">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                    <a class="nav-link text-white" href="{{ route('about') }}">About Us</a>
                    <a class="nav-link text-white" href="{{ route('destination') }}">Destination</a>
                    <a class="nav-link text-white" href="{{ route('profile') }}">Profile</a>
                    <a class="nav-link text-white" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    @auth
                        <a class="nav-link text-white" href="{{ route('auth.logout') }}"><i
                                class="fa-solid fa-right-from-bracket"></i></a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <div class="position-relative d-flex justify-content-center">
        <h1 class="position-absolute z-2 align-items-center text-white nav-title">{{ $navbarTitle }}</h1>
        <h4 class="position-absolute z-2 align-items-center text-white nav-subtitle">{{ $navbarSubtitle }}</h4>
    </div>
    <div class="">
        <img src={{ $navbarImage }} alt="pantai" class="w-100 overflow-hidden top-0" />
    </div>
</div>
