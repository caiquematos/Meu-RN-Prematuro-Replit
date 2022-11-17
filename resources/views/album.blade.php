<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    body {
        /*         /*         background: url('assets/img/background-2.png'); */
        background-color: #9B3C94;
        background-position: center;
        background-size: 100vh;
        background-repeat: no-repeat;
    }

    section {
        overflow-y: scroll;
        height: 79vh;
    }

    .foto {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 1rem;
    }


    .foto img {
        width: 250px;
        border-radius: 5px;
    }

    .foto p {
        color: #545454;
        background: white;
        width: 250px;
        font-weight: 700;
        margin: 0.5rem;
        text-align: center;
        border-radius: 5px;
    }

    .note h1 {
        font-size: 18px;
        font-weight: bold;
    }

    .note p {
        font-size: 14px;
    }

    .box {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .box img {
        margin-top: 1rem;
        height: 95px;
        border-radius: 55px;
        width: 95px;
    }

    .box h1 {
        margin-top: 5px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        color: white;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section>

        <div class="row justify-content-center">
            <div class="col justify-content-center align-items-center d-flex">
                <div class="box m-3">
                    <img src="{{ url('assets/img/album.png') }}" width="95px" alt="ícone banho">
                    <h1>Álbum</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="foto">
                    <img src="{{ url('assets/img/foto-1.png') }}" alt="1a foto">
                    <p>1a foto</p>
                </div>
            </div>
            <div class="col-12">
                <div class="foto">
                    <img src="{{ url('assets/img/foto-2.png') }}" alt="1a foto">
                    <p>1a vez no colo</p>
                </div>
            </div>
            <div class="col-12">
                <div class="foto">
                    <img src="{{ url('assets/img/foto-3.png') }}" alt="1a foto">
                    <p>foto da alta hospitalar</p>
                </div>
            </div>
        </div>

    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

</body>

</html>
