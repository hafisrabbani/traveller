<div>
    <div class="row container-fluid mt-5">
        <!-- logo traveller -->
        <div class="col-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <img src="{{ asset('assets/images/logo.jpeg') }}" alt="logo traveller" height="100" />
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="ms-4 mt-2">Mudahnya Berwisata Kapan Saja!</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- informasi kontak -->
        <div class="col-md-3 mb-3">
          <div class="h4 pb-3">Informasi Kontak</div>
          <div class="d-flex flex-column gap-3">
            <a href="https://goo.gl/maps/gd6hsDP7K9oKht4K9?coh=178571&entry=tt" target="blank" class="text-dark text-decoration-none">
              <i class="fa-solid fa-location-dot"></i>
              <span>srengseng sawah</span>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=628187365833&text&type=phone_number&app_absent=0" target="blank" class="text-dark text-decoration-none">
             <i class="fa-solid fa-envelope"></i>
              <span>08187365833</span>
            </a>
            <a href="mailto:traveller919@gmail.com" target="blank" class="text-dark text-decoration-none">
             <i class="fa-solid fa-phone"></i>
              <span>traveller919@gmail.com</span>
            </a>
          </div>
        </div>
        <!-- link -->
        <div class="col-md-2 text-center text-dark text-decoration-none">
          <div class="h4 pb-3">Link</div>
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('about') }}">About Us</a>
          <a href="{{ route('destination') }}">Destinasi</a>
        </div>
        <!-- follow kami -->
        <div class="col-md-2 mb-5 text-center">
            <div class="h4 pb-3">Follow Kami</div>
            <div class="mt-2 d-flex gap-5 gap-md-2 justify-content-center">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </div>
    </div>
    <footer class="bg-black text-center py-4 mt-2">
        <span class="text-white mx-auto">Copyright © 2023 Kelompok 2 Observasi Pariwisata Pantai Wilayah Banten</span>
    </footer>
</div>
