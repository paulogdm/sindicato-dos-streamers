<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sindicato dos Streamers</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <meta name="title" content="Sindicato dos Streamers">
    <meta name="description" content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sindicatostreamer.com/">
    <meta property="og:title" content="Sindicato dos Streamers">
    <meta property="og:description"
        content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">
    <meta property="og:image" content="{{ asset('images/seo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://sindicatostreamer.com/">
    <meta property="twitter:title" content="Sindicato dos Streamers">
    <meta property="twitter:description"
        content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">
    <meta property="twitter:image" content="{{ asset('images/seo.png') }}">
    <style>
        @media (max-width: 576px) {
            .splide {
                width: 80%;
            }
        }

        .splide__track {
            height: 400px;
            padding-top: 2rem;
        }

        .splide__slide {
            display: flex;
            justify-content: center;
            transform: scale(0.85);
        }

        .splide__slide.is-active {
            transform: scale(1);
        }

        .splide__arrow {
            background: transparent;
        }

        .splide__arrow>svg {
            fill: #8d42ff;
        }

        .splide__pagination__page {
            display: none;
        }

        .splide__arrow--next {
            right: -2rem
        }

        .splide__arrow--prev {
            left: -2rem
        }

    </style>
</head>

<body>
    <header class="headerContainer">
        <div class="container">

            @yield('header', View::make('components.header'))

            <div class="headerTitle">
                <h1 class="title">{!! trans('views.landing.carousel.streamers', ['streamerCount' => $streamers]) !!}</h1>
                <h3 class="subtitle">{!! trans('views.landing.carousel.viewers', ['viewerCount' => $viewers]) !!}</h3>

                @auth()
                    <a class="button" target="_blank" href="{{ trans('views.landing.carousel.twitterUrl') }}">
                        <i class="fas fa-check"></i>
                        
                        {!! trans('views.landing.carousel.submitted') !!}
                    </a>
                @endauth

                @guest()
                    <a class="button" target="_blank" href="{{ trans('views.profile.manifestUrl') }}">
                        <i class="fab fa-twitch"></i>
                        {!! trans('views.landing.carousel.join') !!}
                    </a>
                @endguest
            </div>
        </div>
    </header>

    <section class="container">
        <hr class="line">
        <img src="{{ asset('images/quote1.svg') }}">
        <blockquote class="quote">
            <q class="quoteText">
                {!! trans('views.landing.quote') !!}
            </q>
            <cite class="quoteAuthor">Picoca.</cite>
        </blockquote>
        <div class="quoteImg">
            <img src="{{ asset('images/quote2.svg') }}">
        </div>
        <hr class="line">
    </section>

    <section class="container slide">
        <h1 class="titleSlide">{{ trans('views.landing.sectionSupport.title') }}</h1>
        <p class="textSlide">{{ trans('views.landing.sectionSupport.description') }}</p>

        <div id="splide" class="container splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($famousList as $famous)
                        <li class="splide__slide">
                            <div class="slideCard">
                                <div class="headerCard">
                                    <img class="imgStreamer" src="{{ $famous->image }}">
                                </div>
                                <div class="centerCard">
                                    <p class="streamer">{{ $famous->twitch_username }}</p>
                                    {{-- <img class="imgSlide" src="{{asset("images/Vector.svg")}}"> --}}
                                    <p class="hoursAgo">
                                        <strong>{{ number_format($famous->views, 0, ',', '.') }}</strong>
                                        followers</i></span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <main>
        <section class="container">
            <section class="infoSection">
                <div class="divIframe">
                    <iframe
                        src="https://player.twitch.tv?height=500&amp;parent=sindicatostreamer.com&amp;time=0h40m00s&amp;video=1109252315&amp;width=500"
                        allowfullscreen="" scrolling="no" frameborder="0" allow="autoplay; fullscreen" title="Twitch"
                        sandbox="allow-modals allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
                        class="infoImg" height="450">
                    </iframe>
                </div>
                <div>
                    <h1 class="infoTitle">
                        {!! trans('views.landing.sectionVideo.title') !!}
                    </h1>

                    <p class="infoText">
                        {!! trans('views.landing.sectionVideo.lead') !!}
                    </p>
                </div>

                {{-- <span class="infoText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae debitis et --}}
                {{-- iure saepe sunt tenetur. Corporis cumque fugit ipsa, ipsam iusto, maxime nostrum odio omnis, praesentium --}}
                {{-- ratione tempora.</span> --}}
            </section>
        </section>

        <section class="breakSection">
            <div class="container breakSectionContainer">
                <div class="textBreakContainer">
                    <h2 class="titleBreak">
                        {{ trans('views.landing.sectionTaxes.title') }}
                    </h2>
                    <span class="textBreak">
                        {!! trans('views.landing.sectionTaxes.lead') !!}
                    </span>
                </div>

                <div class="breakImg"><img class="breakImg" src="{{ asset('images/iS1AQOV.gif') }}"></div>
            </div>
        </section>

        <section class="container">
            <section class="infoSection">
                <div class="divImg"><img class="infoImg" src="{{ asset('images/gauringa.png') }}"></div>
                <div>
                    <h1 class="infoTitle">{{ trans('views.landing.sectionCommunity.title') }}</h1>
                    <div>
                        {!! trans('views.landing.sectionCommunity.lead') !!}
                    </div>
                </div>
            </section>
        </section>
    </main>

    <section class="container slide">
        <h1 class="titleSlide">{{ trans('views.landing.signatures.title') }}</h1>
        <p class="textSlide">{{ trans('views.landing.signatures.description') }}</p>

        <section class="slideContainer">
            @foreach ($signs as $sign)
                <div class="slideCard">
                    <div class="headerCard">
                        <img class="imgStreamer" src="{{ $sign->image }}">
                    </div>
                    <div class="centerCard">
                        <p class="streamer">{{ $sign->twitch_username }}</p>
                        <img class="imgSlide" src="{{ asset('images/Vector.svg') }}">
                        <p class="hoursAgo">{{ $sign->signed_at->diffForHumans() }}</span>
                    </div>
                </div>
            @endforeach
        </section>
    </section>

    <section class="container faq">
        <h1 class="titleFaq">{{ trans('views.landing.sectionFaq.title') }}</h1>

        <div class="faqQuestion">
            <h3 class="faqQuestionTitle">{{ trans('views.landing.sectionFaq.faqList.1.question') }}</h3>

            <p class="faqAnswer">
                {!! trans('views.landing.sectionFaq.faqList.1.answer') !!}
            </p>
        </div>

        <div class="faqQuestion">
            <h3 class="faqQuestionTitle">{{ trans('views.landing.sectionFaq.faqList.2.question') }}</h3>

            <p class="faqAnswer">
                {!! trans('views.landing.sectionFaq.faqList.2.answer') !!}
            </p>
        </div>

        <div class="faqQuestion">
            <h3 class="faqQuestionTitle">{{ trans('views.landing.sectionFaq.faqList.3.question') }}</h3>

            <p class="faqAnswer">
                {!! trans('views.landing.sectionFaq.faqList.3.answer') !!}
            </p>
        </div>
    </section>

    <div class="fixed-bottom">
        <iframe width="100" height="100" src="https://www.youtube.com/embed/QNJL6nfu__Q"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen=""></iframe>
    </div>

    <footer class="footer">
        <section class="container">
            <div class="searchContainer">
                <h1 class="footerTitle">
                    {!! trans('views.landing.sectionSeek.title') !!}
                </h1>

                <p class="footerText">
                    {!! trans('views.landing.sectionSeek.description') !!}
                </p>
                <form id="seekStreamer">
                    <div class="searchBar">
                        <input type="search" class="footerSearch" id="username"
                            aria-label="Procure o seu streamer favorito">

                        <button type="submit" class="footerButton"><svg width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </form>

                <div class="streamerSearch">
                    <img class="footerStreamerImg" id="seekThumbnail" src="{{ asset('images/cinzxa.png') }}">
                    <p class="streamerFooter" id="seekUsername">Pesquisar</p>
                    <p class="streamerTextFooter" id="seekDescription">...</span>
                </div>
            </div>

            <hr class="footerLine">

            @yield('footer', View::make('components.footer'))

        </section>
    </footer>

    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                focus: 'center',
                fixedWidth: '270px',
                rewind: false,
                drag: false,
                flickMaxPages: 2,
                updateOnMove: true,
            }).mount();

        });
    </script>
    <script>
        $(document).ready(function() {
            $("#seekStreamer").submit(function(e) {
                e.preventDefault();
                let username = $("#username").val()
                let url = '{{ route('seek-streamer', ['twitchUsername' => ':username']) }}'.replace(
                    ':username', username)
                $.get(url, function(res) {
                    $("#seekUsername").html(res.twitch_username)
                    $("#seekDescription").html('Followers: ' + res.views)
                    $("#seekThumbnail").attr('src', res.image)
                }).catch(function(err) {
                    console.log(err)
                    if(err.status === 429) {
                        $("#seekUsername").html('{{ trans('views.landing.sectionSeek.tooManyRequestTitle') }}')
                        $("#seekDescription").html('{{ trans('views.landing.sectionSeek.tooManyRequestDescription') }}')
                        $("#seekThumbnail").attr('src', '{{ asset('images/cinzxa.png') }}')
                        return;
                    }

                    $("#seekUsername").html('{{ trans('views.landing.sectionSeek.notFound') }}')
                    $("#seekDescription").html(
                        '{{ trans('views.landing.sectionSeek.sendLink') }}')
                    $("#seekThumbnail").attr('src', '{{ asset('images/vermelhxo.png') }}')
                    console.log(err)
                })
            });
        })
    </script>

</body>

</html>
