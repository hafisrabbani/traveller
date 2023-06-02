@extends('template.master')

@section('title')
    login
@endsection

@section('content')
    <div class="row mx-2 d-flex justify-content-center">
        <div class="col-md-6">
            <div class="my-4 box-shadow">
                <div class="card shadow p-3 py-2">
                    <div class="card-body text-center">
                        <form action="{{ route('auth.loginValidate') }}" method="post">
                            @csrf

                            <input type="email" name="email" id="" class="form-control mb-3"
                                placeholder="email...">
                            <input type="password" name="password" id="" class="form-control mb-3"
                                placeholder="password...">

                            <button type="submit" class="btn btn-dark form-control">masuk</button>
                        </form>
                        <div class="mt-2">
                            belum memiliki akun?
                        </div>
                        <a href="{{ route('auth.registerPage') }}" class="link-dark fw-bold">daftar
                            sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.hubungiKami')
@endsection
