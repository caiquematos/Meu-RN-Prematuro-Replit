<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    body {
        /*         background: url('assets/img/background-2.png'); */
        background-color: #9B3C94;
        background-position: center;
        background-size: 100vh;
        background-repeat: no-repeat;
    }

    #carouselExampleDark {
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        background: white;
    }

    #main {
        padding: 22px;
    }

    .carousel-inner {
        height: 71vh !important;
    }

    .carousel-indicators {
        position: relative !important;
    }

    .carousel-item,
    .content {
        height: 100%;
    }

    .content {
        background-color: white;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
    }

    .content img {
        margin-top: 1rem;
        height: 110px;
        width: auto;
    }

    .content h1 {
        margin-bottom: 0px !important;
        font-size: 1.3rem;
    }

    .text-box {
        background-color: #F5F5F5;
        margin: 1rem;
        padding: 1rem;
        height: 61%;
        overflow-y: scroll;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: -webkit-fill-available;
    }

    .text-box p {
        text-align: justify;
    }

    textarea {
        background: #ffffba;
        padding: 10px;
        width: -webkit-fill-available;
    }

    #lista {
        list-style: auto;
    }

    #lista li {
        margin-bottom: 10px;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section id="main">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/brain.png') }}" width="95px" alt="??cone banho">
                        <h1>Estimula????o neuropsicomotora</h1>
                        <div class="text-box">
                            <p style="color:black;">
                                A prematuridade pode causar danos no c??rebro do beb?? em diferentes n??veis, sendo
                                necess??ria a ado????o de medidas efetivas e iniciadas de forma precoce para promover o
                                crescimento, o desenvolvimento e reduzir as complica????es futuras (MA et al., 2015;
                                SPITTLE & TREYVAUD, 2016).
                            </p>
                            <p style="color:black;">
                                O sistema neurol??gico do beb?? est?? em desenvolvimento ativo durante o ??ltimo trimestre
                                da gesta????o, algo que ?? interrompido pela prematuridade; portanto, a neuroestimula????o
                                busca diminuir os efeitos negativos desse nascimento antecipado e promover o
                                desenvolvimento cerebral fora do ??tero (ALTIMIER & PHILLIPS, 2016).
                            </p>
                            <p style="color:black;">
                                Dentro do domic??lio, voc?? possui um papel important??ssimo na interven????o precoce, uma
                                vez que o c??rebro desenvolve-se melhor em um ambiente est??vel, acolhedor e s??lido, al??m
                                do v??nculo e das medidas motoras e cognitivas que podem ser realizadas nesse contexto
                                visando o desenvolvimento neurocognitivo (ANAUATE & KAHHALE, 2020).
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/sing.png') }}" width="95px" alt="??cone banho">
                        <h1>Estimula????o neuropsicomotora</h1>
                        <div class="text-box">
                            <p style="color:black;">Durante as atividades, busque realizar a????es como olhar nos olhos,
                                conversar e tocar enquanto troca fraldas, amamenta, ou durante situa????es em que
                                estiverem juntos para proporcionar contato visual, auditivo e t??til. Isso faz com que os
                                sentidos do neonato sejam usados e aumenta o relacionamento entre voc??s (ANAUATE &
                                KAHHALE, 2020).
                            </p>
                            <p style="color:black;">O banho costuma ser um momento bem estressante, mesmo com a
                                utiliza????o da musicoterapia; portanto, durante a realiza????o, voc?? pode aplicar a
                                estimula????o multissensorial, combinando a audi????o, o tato e a vis??o, pois pode facilitar
                                a organiza????o comportamental do beb?? e promover o crescimento e desenvolvimento (SOLTANI
                                et al., 2022).
                            </p>
                            <p style="color:black;">Ainda pensando no banho, voc?? pode abra??ar seu beb??, conversar
                                mantendo contato olho-a-olho, tocar e beijar antes do banho, manter o contato visual,
                                cantar can????es de ninar durante o banho e manter tais intera????es ap??s o banho (SOLTANI
                                et al., 2022).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/massagem.png') }}" width="95px" alt="??cone banho">
                        <h1 style="font-size:1.1rem">Massagem</h1>
                        <div class="text-box">
                            <p style="color:black;">A realiza????o da massagem e da cinesiterapia ?? uma pr??tica relevante
                                que busca melhorar os par??metros de crescimento do beb??: como peso, comprimento e
                                tamanho da cabe??a, algo que pode evitar complica????es futuras para o seu beb?? (??LVAREZ et
                                al., 2019).
                            </p>
                            <p style="color:black;">Assim, a massagem dever?? ser realizada pelo tempo de cinco minutos,
                                sendo um minuto em cada parte do corpo do beb??, respeitando a seguinte sequ??ncia: topo
                                da cabe??a at?? o pesco??o; pesco??o e ombros; parte superior das costas at?? a cintura; da
                                coxa at?? o p?? em ambas as pernas e do ombro para a m??o em ambos os bra??os, respeitando a
                                posi????o supina (??LVAREZ et al., 2019).
                            </p>
                            <p style="color:black;">J?? para a cinesiterapia, o beb?? dever?? ser mantido em posi????o supina
                                e cada membro do corpo flexionado e estendido por um minuto em cada seguimento,
                                preservando a suavidade para evitar les??es. Tal t??cnica visa a melhora do peso, tamanho
                                e circunfer??ncia cef??lica do beb?? pr??-termo e tem apresentado resultados significativos,
                                al??m de ser algo simples e de baixo custo (??LVAREZ et al., 2019).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/toys.png') }}" width="95px" alt="??cone banho">
                        <h1 style="font-size:1.1rem">Arte</h1>
                        <div class="text-box">
                            <p style="color:black;">A aten????o visual imatura devido ?? prematuridade tem sido evidenciada
                                em diversos estudos em que neonatos com idade corrigida entre dois e quatro meses t??m
                                apresentado movimentos oculares de persegui????o suave atrasados, sendo este um fator de
                                risco importante para atraso no desenvolvimento (RODOVANSKI et al., 2021).
                            </p>
                            <p style="color:black;">Como defini????o, a capacidade de concentra????o em um objeto ?? medida
                                que se move atrav??s do campo visual ?? chamada de rastreamento visual; algo que deve ser
                                realizado pelos beb??s de forma unidirecional e em movimento horizontal de dois a cinco
                                meses de idade; por??m, a estimula????o precoce nos prematuros tem sido altamente
                                recomendada em virtude da possibilidade de atraso visual (RODOVANSKI et al., 2021).
                            </p>
                            <p style="color:black;">Desta forma, com vistas a incentivar a intera????o e a encorajar o
                                trabalho manual, voc?? poder?? confeccionar um m??bile para seu beb??, seguindo alguns
                                passos. (FIGUEIRA, 2017).
                            </p>
                            <p style="color:black;text-align:left">S??o eles:
                            </p>
                            <ul id="lista">
                                <li>Planeje o que vai fazer e separe o material adequado, como tesoura, papel (ou outro
                                    material), linha, palitos. Escolha o tema, como peixes, p??ssaros ou pipas.</li>
                                <li>Prepare o suporte colocando um palito de churrasco ou de picol?? sobre o outro
                                    formando um ???X??? e amarre com linha ou algum tipo de fio dando v??rias voltas para que
                                    fique firme. Amarre e corte o excesso.</li>
                                <li>Para preparar as figurinhas do m??bile, voc?? pode desenhar livremente ou usar
                                    desenhos prontos. As figurinhas devem possuir dois lados iguais com formato
                                    tridimensional. Ap??s confeccionada e pronta, fa??a um furo na parte superior.</li>
                                <li>Passe a linha ou fio pelo furo que foi feito e amarre com tamanho adequado para que
                                    fique pendurado, mantendo o cuidado para n??o rasgar a figura. Fa??a isso com todas as
                                    figuras mostrando um resultado tridimensional. Amarre tudo no suporte que foi feito.
                                </li>
                                <li>Finalmente, seu m??bile est?? pronto. N??o se esque??a de ser criativa!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
        </div>
    </section>
    <!-- /main content -->

    @include('build.footer', ['page' => 'main'])

    @include('build.scripts')

    <script>
        var carousel = null;
        var paused = 0;
        var index = parseInt("{{ $index ?? 0 }}");
        $(() => {
            $('#carouselExampleDark').carousel({
                interval: 30000,
                pause: false
            });

            $('#carouselExampleDark').carousel(index);

        })

        function togglePlay(e) {
            var state = (paused) ? 'cycle' : 'pause';
            paused = (paused) ? 0 : 1;
            $('#carouselExampleDark').carousel(state);
            $(e).find('i').toggleClass('fas fa-play fas fa-pause');
        }
    </script>

</body>

</html>
