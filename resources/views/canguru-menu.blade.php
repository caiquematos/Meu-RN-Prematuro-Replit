<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    body {
        /*         /*         background: url('assets/img/background-1.png'); */
        background-color: #9B3C94;
        */ background-color: #9B3C94;
        background-position: center;
        background-size: 100vh;
        background-repeat: no-repeat;
    }

    section {
        display: flex;
        flex-direction: column;
    }

    h1 {
        text-align: center;
        margin: 1rem;
        margin-bottom: 0px;
        /*         /*         color: #555353; */
        color: white;
        */ color: white;
        font-size: larger;
        text-transform: uppercase;
        font-weight: 700;
    }

    .img-thumbnail {
        width: 80px !important;
        object-fit: scale-down;
        height: 80px;
        border-radius: 40px !important;
    }

    .box {
        border-radius: 5px;
    }

    .title {
        margin: 0px;
        margin-top: 5px;
        width: 102px;
        height: 44px;
        display: flex;
        /*          /*         color: #666; */
        color: white;
        */ color: white;
        padding: 1px 0px;
        font-size: 11px;
        line-height: 11px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        flex-direction: column;
        justify-content: flex-start;
    }

    .btn {
        width: 200px;
        margin: auto;
        align-self: center;
        background: white;
        color: #9b3c94;
        border-radius: 25px;
        font-weight: 600;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section class="wrapper menu-config" style="display: none;">
        <h1>Canguru</h1>
        <div class="row p-3 m-3 mb-0">
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/canguru-original.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Canguru</p>
                <a class="stretched-link" href="{{ route('canguru', ['index' => 0]) }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/sing.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Incentivo</p>
                <a class="stretched-link" href="{{ route('canguru', ['index' => 1]) }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/canguru-2.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Como fazer a posi????o canguru?</p>
                <a class="stretched-link" href="{{ route('canguru', ['index' => 2]) }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/video.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Playlist</p>
                <a class="stretched-link" href="{{ route('canguru', ['index' => 3]) }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/note.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Anota????es</p>
                <a class="stretched-link" href="{{ route('canguru', ['index' => 4]) }}"></a>
            </div>

        </div>
        <button class="btn btn-light" onclick="goto()">INICIAR</button>
    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

    <script>
        $(() => {
            $(".wrapper").slideDown();
        })

        function goto() {
            window.location.href = "{{ route('canguru', ['index' => 0]) }}";
        }
    </script>

</body>

</html>
