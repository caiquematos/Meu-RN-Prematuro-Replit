<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')


<link rel="stylesheet" href="{{ url('/assets/css/welcome.css') }}">

<body class="antialiased">
    <div class="content">
        <div class="wrapper" style="display: none; height:fit-content">
            <div class="dark-logo">
                <img src="{{ url('assets/img/footprints-white.png') }}" alt="logo">
                <p>meu <span class="part-1">RN</span></p>
                <p class="part-2">PREMATURO</p>
            </div>
        </div>
    </div>

    <script>
        $(() => {
            $(".wrapper").slideDown();

            setTimeout(() => {
                window.location.href = "{{ route('login') }}";
            }, 4000);
        })
    </script>
</body>

</html>
