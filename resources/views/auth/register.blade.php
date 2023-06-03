@extends('template.master')

@section('title')
    register
@endsection
@section('navbarTitle')
    Register
@endsection
@section('navbarSubtitle')
    Home > profile
@endsection
@section('navbarImage')
    {{ asset('assets/images/pantai.png') }}
@endsection

@section('content')
    <div class="row mx-2 d-flex justify-content-center">
        <div class="col-md-6">
            <div class="my-4 box-shadow">
                <div class="card shadow p-3 py-2">
                    <div class="card-body text-center">
                        <form action="{{ route('auth.registerStore') }}" method="post">
                            @csrf

                            <input type="text" name="name" id=""
                                class="form-control @error('name') is-invalid @enderror" placeholder="nama..."
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror

                            <input type="text" name="email" id=""
                                class="form-control mt-3 @error('email') is-invalid @enderror" placeholder="email..."
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror

                            <input type="password" name="password" id=""
                                class="form-control mt-3 @error('password') is-invalid @enderror" placeholder="password...">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror

                            <input type="password" name="password_verification" id=""
                                class="form-control mt-3 @error('password_verification') is-invalid @enderror"
                                placeholder="ulangi password...">
                            @error('password_verification')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror

                            <button type="submit" class="btn btn-dark form-control mt-3">daftar</button>
                        </form>
                        <div class="mt-2">
                            sudah memiliki akun?
                        </div>
                        <a href="{{ route('auth.loginPage') }}" class="link-dark fw-bold">masuk
                            sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.hubungiKami')
@endsection
