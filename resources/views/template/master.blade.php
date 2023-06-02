<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/swal.css') }}">
    @yield('css')

    <title> @yield('title') | Traveller</title>
</head>

<body class="m-0 p-0">
    <!--========== NAVBAR ==========-->
    @include('components.navbar')


    <!--========== CONTENTS ==========-->
    <div class="my-4 bg-white p-4">
        @yield('content')
    </div>

    <!--========== FOOTBAR ==========-->
    @include('components.footbar')

    <!--========== MAIN JS ==========-->
    <script src="{{ asset('/assets/js/bootstrap.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/js/swal.js') }}"></script>
    <script src="https://kit.fontawesome.com/8237a20b1c.js" crossorigin="anonymous"></script>

    <script>
        @if (session('errors'))
            Swal.fire({
                title: 'Upss!',
                text: '{{ session()->get('errors')->first() }}',
                icon: 'warning',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000
            })
        @endif

        @if (session('success'))
            Swal.fire({
                title: 'Pesan!',
                text: '{{ session()->get('success') }}',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000
            })
        @endif

        @if (session('error'))
            {
                Swal.fire({
                    title: 'Upss!',
                    text: '{{ session()->get('error') }}',
                    icon: 'error',
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        @endif
    </script>

    @yield('js')
</body>

</html>
