@extends('template.master')

@section('title')
    register
@endsection

@section('content')
    <div class="row mx-2 d-flex justify-content-center">
        <div class="col-md-6">
            <div class="my-4 box-shadow">
                <div class="card shadow p-3 py-2">
                    <div class="card-body text-center">
                        <form action="" method="post">
                            <input type="text" name="name" id="" class="form-control mb-3"
                                placeholder="nama...">
                            <input type="email" name="email" id="" class="form-control mb-3"
                                placeholder="email...">
                            <input type="password" name="password" id="" class="form-control mb-3"
                                placeholder="password...">
                            <input type="password" name="password2" id="" class="form-control mb-3"
                                placeholder="ulangi password...">

                            <button type="submit" class="btn btn-dark form-control">daftar</button>
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
@endsection
