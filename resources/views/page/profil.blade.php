@extends('template.master')

@section('css')
    <style>
        .text-email {
            color: #C4C4C4 !important;
        }

        .text-left {
            text-align: left !important;
        }
    </style>
@endsection

@section('title')
    Profile
@endsection

@section('navbarTitle')
    Profile
@endsection
@section('navbarSubtitle')
    Home > profile
@endsection
@section('navbarImage')
    {{ asset('assets/images/pantai.png') }}
@endsection

@section('content')
    <div class="container">
        <div
            class="container d-flex justify-content-center col-12 position-relative  pb-5 border border-2 border-top-0 border-bottom-0">
            <img src="{{ asset('assets/images/profil.jpg') }}" class="position-absolute rounded-circle" width="200"
                height="200" style="top: -200px" alt="profil">
            <div class="text-center">
                <h3 class="mt-5 fs-1 fw-bold">{{ auth()->user()->name }}</h3>
                <p class="text-email">{{ auth()->user()->email }}</p>
            </div>
        </div>
        <div class="container col-12 border border-2 py-5 d-grid gap-5 d-flex justify-content-center">
            <div class="col-11 d-grid gap-lg-5 gap-3 mb-5 pb-5 text-email">
                <button class="border border-2 w-100 btn btn-lg text-left p-3">Markah</button>
                <button class="border border-2 w-100 btn btn-lg text-left p-3">Pengaturan Akun</button>
                <button class="border border-2 w-100 btn btn-lg text-left p-3">Privacy and Policy</button>
            </div>
        </div>
    </div>
@endsection
