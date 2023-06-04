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

<style>
    .profil {
        width: 400px;
        height: 400px;
    }
    @media screen and (max-width: 400px) {
        .profil {
            width : 300px;
            heigth : 150px;
        }
    }
</style>

@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-flex flex-column flex-md-row gap-2">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/user.png') }}" width="80" height="80" alt="user">
                <h3 class="fs-1">Kerja Sama Tim</h3>
                <p>Dengan mengembangkan kerja sama yang terstruktur dan juga rapih, kami yakin akan membangun web ini menuju
                    ke arah yang lebih positif. </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/roket.png') }}" width="80" height="80" alt="rocket">
                <h3 class="fs-1">Visi Kami</h3>
                <p>Memajukan potensi suatu daerah pariwisata yang terbilang bagus namun jarang dilirik masyarakat luas. </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/grafik.png') }}" width="80" height="80" alt="garfik">
                <h3 class="fs-1">Misi Kami</h3>
                <p>Misi kami bertujuan untuk menyukseskan daerah pariwisata tersebut menjadi lebih baik dan berkembang. </p>
            </div>
        </div>
        <br />
        <div class="d-flex flex-column flex-lg-row mt-5 gap-4 gap-md-0">
            <div class="col-lg-5 d-flex justify-content-center justify-content-lg-start">
                <img src="{{ asset('assets/images/founder.jpg') }}" class="profil" alt="founder"
                    style="border-top-left-radius: 40%; border-bottom-right-radius: 40%;" />
            </div>
            <div class="col-lg-7">
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
