@extends('./../template/master')
@section('title')
    Home
@endsection
@section('content')
    <div class="container mt-5">
      <h1 class="fw-bold fs-1">Destinasi Populer</h1>
      <div class="d-flex justify-content-between">
        <p class="col-5 mt-1">Destinasi Populer Berikut beberapa rekomendasi destinasi populer yang telah kami rangkum</p>
        <div class="">
          <button class="btn btn-dark rounded-5 px-3">Lebih Banyak</button>
        </div>
      </div>
    </div>
    <div class="container mt-2 d-flex flex-wrap justify-content-between">
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('assets/images/anyer.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">P. Anyer</h5>
          <p class="card-text">Pantai Anyer ini merupakan salah satu ikon utama dan menjadi primadona para wisatawan baik itu lokal hingga wisatawan luar negeri yang sedang berkunjung ke Banten, Indonesia. </p>
          <div class="d-flex justify-content-between">
            <div>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <a href="#" class="btn btn-dark">Search Now</a>
          </div>
        </div>
      </div>
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('assets/images/anyer.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">P. Anyer</h5>
          <p class="card-text">Pantai Anyer ini merupakan salah satu ikon utama dan menjadi primadona para wisatawan baik itu lokal hingga wisatawan luar negeri yang sedang berkunjung ke Banten, Indonesia. </p>
          <div class="d-flex justify-content-between">
            <div>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <a href="#" class="btn btn-dark">Search Now</a>
          </div>
        </div>
      </div>
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('assets/images/anyer.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">P. Anyer</h5>
          <p class="card-text">Pantai Anyer ini merupakan salah satu ikon utama dan menjadi primadona para wisatawan baik itu lokal hingga wisatawan luar negeri yang sedang berkunjung ke Banten, Indonesia. </p>
          <div class="d-flex justify-content-between">
            <div>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <a href="#" class="btn btn-dark">Search Now</a>
          </div>
        </div>
      </div>
    </div>
@endsection