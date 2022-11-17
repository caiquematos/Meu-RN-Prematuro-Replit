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

    .note {
        margin: 1rem;
        margin-top: 0rem;
        margin-bottom: 0px;
        background: #ffebc4;
        text-align: justify;
        padding: 1rem;
        border-radius: 5px;
        height: 315px;
        overflow-y: scroll;
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
        object-fit: cover;
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
                    <img src="{{ url('assets/img/') . '/' . $img }}" width="95px" alt="ícone banho">
                    <h1>{{ $titulo ?? 'Canguru' }}</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="note">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>

    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

</body>

</html>
