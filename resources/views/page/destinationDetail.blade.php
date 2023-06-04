@extends('template.master')
@section('title')
    {{ $destination->name }}
@endsection

@section('navbarTitle')
    {{ $destination->name }} , {{ $destination->provinsi }}
@endsection

@section('navbarSubtitle')
    <div class="d-flex flex-column gap-3">
        <div>
            <i class="fa-solid fa-location-dot"></i>
            <span>Provinsi {{ $destination->provinsi }}</span>
        </div>
    </div>
@endsection

@section('navbarImage')
    {{ asset($destination->photo_Path) }}
@endsection

@section('css')
    <style>
        .rating-css div {
            color: #ffe400;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            padding: 20px 0;
        }

        .rating-css input {
            display: none;
        }

        .rating-css input+label {
            font-size: 30px;
            text-shadow: 1px 1px 0 #8f8420;
            cursor: pointer;
        }

        .rating-css input:checked+label~label {
            color: #b4afaf;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
        }
    </style>
@endsection

@section('content')
    <div class="row mt-4">
        <div class="col-md-8 me-4">
            <div class="h1 fw-bold">
                {{ $destination->name }} , {{ $destination->provinsi }}
            </div>
            <div class="d-flex flex-column gap-3">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Provinsi {{ $destination->provinsi }}</span>
                </div>
            </div>
            <hr class="my-5">
            <div class="d-flex flex-column gap-3 mb-2">
                <div>
                    <i class="fa-regular fa-file-lines fa-lg me-1"></i>
                    <span class="fw-bold lead">Deskripsi</span>
                </div>
            </div>
            <p>
                {{ $destination->description }}
            </p>
            <p>
                {{ $destination->long_description }}
            </p>
            <hr class="my-5">
            <div class="d-flex flex-row gap-3 justify-content-between mb-3">
                <div>
                    <i class="fa-solid fa-map-location-dot"></i>
                    <span>Location</span>
                </div>

                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>{{ $destination->location }}</span>
                </div>
            </div>
            <div class="col-12">
                <iframe src="{{ $destination->maps_link }}" class="w-100 h-100" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <hr class="my-5">
            <div class="d-flex flex-row gap-3 justify-content-between">
                <div>
                    <i class="fa-solid fa-image"></i>
                    <span>Location</span>
                </div>

                <div>
                    <p>dari turis</p>
                </div>
            </div>

            {{-- carrousel image --}}
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($photos as $photo)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $loop->index }}" @if ($loop->iteration == 1) class="active" @endif
                            aria-current="true" aria-label="Slide {{ $loop->iteration }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($photos as $photo)
                        <div class="carousel-item @if ($loop->iteration == 1) active @endif">
                            <img src="{{ asset($photo->photo_path) }}" class="d-block" alt="..." height="400"
                                width="1000">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <div class="col-md-3 ms-4">
            <div class="card shadow">
                <div class="card-header text-center text-white" style="background-color: #212121;">
                    <div class="h5">Komentar</div>
                </div>
                <div class="card-body text-center">
                    <form action="{{ route('destination.comment') }}" method="post">
                        @csrf

                        <input type="text" name="name" id="" class="form-control mb-3"
                            placeholder="your name...">
                        <textarea name="comment" rows="10" class="form-control mb-3" placeholder="your massage..."></textarea>
                        <input type="hidden" name="destination_id" value="{{ $id }}">

                        <button type="submit" class="btn btn-dark form-control input-lg">kirim</button>
                    </form>

                    <hr class="mt-5">
                    <div class="rating-css">
                        <form action="{{ route('destination.rating') }}" method="post">
                            <div class="star-icon">
                                @csrf
                                <input type="radio" value="1" name="rating" checked id="rating1">
                                <label for="rating1" class="fa fa-star"></label>
                                <input type="radio" value="2" name="rating" id="rating2">
                                <label for="rating2" class="fa fa-star"></label>
                                <input type="radio" value="3" name="rating" id="rating3">
                                <label for="rating3" class="fa fa-star"></label>
                                <input type="radio" value="4" name="rating" id="rating4">
                                <label for="rating4" class="fa fa-star"></label>
                                <input type="radio" value="5" name="rating" id="rating5">
                                <label for="rating5" class="fa fa-star"></label>
                            </div>
                            <input type="hidden" name="destination_id" value="{{ $id }}">

                            <button type="submit" class="btn btn-dark form-control input-lg">kirim</button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="card shadow my-4" style="background-color: #C4C4C4;">
                <div class="card-body text-center text-white">
                    <div class="h5">Punya Pertanyaan?</div>
                    <p>Jangan ragu untuk bertanya kepada kami kontak kami sekarang!</p>
                    <div>
                        <i class="fa-solid fa-phone"></i>
                        <span>traveller919@gmail.com</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                        <span>08187365833</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
