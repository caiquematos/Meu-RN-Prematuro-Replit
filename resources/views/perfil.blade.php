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

    .referencias {
        margin: 1rem;
        margin-top: 0rem;
        margin-bottom: 0px;
        background-color: #F5F5F5;
        text-align: justify;
        padding: 1rem;
        border-radius: 5px;
        height: 48vh;
        overflow-y: scroll;
    }

    .referencias h1 {
        font-size: 18px;
        font-weight: bold;
    }

    .referencias p {
        font-size: 14px;
        line-height: 14px;
        overflow-wrap: anywhere;
    }

    .referencias .titulo {
        font-weight: bold;
        margin-bottom: 5px;
        margin-top: 10px;
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
    <section class="menu-config">

        <div class="row justify-content-center">
            <div class="col justify-content-center align-items-center d-flex">
                <div class="box m-3">
                    <img src="{{ url('assets/img/baby-skin-2.png') }}" width="95px" alt="ícone banho">
                    <h1>João Pedro Lima</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="referencias">
                    <p class="titulo">Idade gesacional de nascimento</p>
                    <p class="subtitulo">7 meses</p>

                    <p class="titulo">Idade gesacional corrigida</p>
                    <p class="subtitulo">9 meses</p>

                    <p class="titulo">Peso</p>
                    <p class="subtitulo">3200g</p>

                    <p class="titulo">Data da alta do hospital</p>
                    <p class="subtitulo">12/11/2022</p>

                </div>
            </div>
        </div>

    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

</body>

</html>
