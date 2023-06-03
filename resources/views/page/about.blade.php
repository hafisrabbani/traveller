@extends('template.master')
@section('title')
    About Us
@endsection

@section('navbarTitle')
    About Us
@endsection
@section('navbarSubtitle')
    Home > About Us
@endsection
@section('navbarImage')
    {{ asset('assets/images/pantai.png') }}
@endsection

@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-flex">
            <div class="col-4 text-center">
                <i class="fa-light fa-users fa-2xl" style="color: #000000;"></i>
                <h3 class="fs-1">Kerja Sama Tim</h3>
                <p>Dengan mengembangkan kerja sama yang terstruktur dan juga rapih, kami yakin akan membangun web ini menuju
                    ke arah yang lebih positif. </p>
            </div>
            <div class="col-4 text-center">
                <i class="fa-regular fa-rocket"></i>
                <h3 class="fs-1">Visi Kami</h3>
                <p>Memajukan potensi suatu daerah pariwisata yang terbilang bagus namun jarang dilirik masyarakat luas. </p>
            </div>
            <div class="col-4 text-center">
                <i class="fa-regular fa-chart-line fa-2xl"></i>
                <h3 class="fs-1">Misi Kami</h3>
                <p>Misi kami bertujuan untuk menyukseskan daerah pariwisata tersebut menjadi lebih baik dan berkembang. </p>
            </div>
        </div>
        <br />
        <div class="row mt-5">
            <div class="col-5">
                <img src="{{ asset('assets/images/founder.png') }}" width="400" height="400" alt="founder"
                    style="border-top-left-radius: 40%; border-bottom-right-radius: 40%;" />
            </div>
            <div class="col-7">
                <i class="fa-sharp fa-solid fa-quote-left fa-2xl" style="color: #000000;"></i>
                <article class="font-monospace mt-5">
                    Kami mengembangkan web ini di karenakan melihat sebuah potensi pariwisata di sekitar Jawa Barat yang
                    sia-sia saja dikarenakan kurangnya marketing pada wilayah pariwisata tersebut.</article>
                <article class="font-monospace mt-3">
                    Dengan dibuatnya web ini juga kami berharap bahwa tempat-tempat pariwisata yang ada di Jawa Barat kian
                    ramai dan banyak dikunjungi oleh masyarakat luas, baik itu Domestic maupun non Domestic.
                </article>
                <div class="mt-5">
                    <h3 class="fs-3 fw-bold">Muhammad Iqbal Auliyyan</h3>
                    <p class="fw-normal text-secondary">Team Leader</p>
                </div>
            </div>
        </div>
    </div>
@endsection
