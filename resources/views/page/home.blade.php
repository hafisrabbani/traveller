@extends('./../template/master')
@section('title')
    Home
@endsection

@section('navbarTitle')
    Traveller
@endsection

@section('navbarImage')
    {{ asset('assets/images/pantai.png') }}
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold fs-1">Destinasi Populer</h1>
        <div class="d-flex justify-content-md-between flex-column">
            <p class="col-md-5 mt-1">Destinasi Populer Berikut beberapa rekomendasi destinasi populer yang telah kami rangkum
            </p>
            <div class="">
                <button class="btn btn-dark rounded-5 px-3">Lebih Banyak</button>
            </div>
        </div>
    </div>

    <div class="container mt-2 d-flex flex-wrap  justify-content-lg-between justify-content-center ">
        @foreach ($destinations as $destination)
            <div class="card my-4" style="width: 22rem;">
                <img src={{ asset($destination->photo_Path) }} class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $destination->name }}</h5>
                    <p class="card-text">{{ $destination->description }} </p>
                    <div class="d-flex justify-content-between">
                        <div>
                            @php
                                $y = $loop->iteration;
                            @endphp

                            @for ($i = 1; $i <= $rating[$y]; $i++)
                                <span class="fa fa-star" style="color: gold"></span>
                            @endfor
                            @for ($i = $rating[$y] + 1; $i <= 5; $i++)
                                <span class="fa fa-star"></span>
                            @endfor
                        </div>
                        <form action="{{ route('destination.detail', $destination->id) }}" method="get">
                            <button class="btn btn-dark" type="submit">Search Now</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
