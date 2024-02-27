<!DOCTYPE html>
<html>

<head>

    <title>Vertex Cooperation</title>
    <!-- Some meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Vertex Cooperation">
    <meta name="description" content="Vertex Cooperation Website">
    <link rel='icon' href='{{ asset('images/icons/logo.svg') }}' type='image/x-icon' />
    <!-- Link to the Font-Awesome Font -->
    <link rel="stylesheet"
        href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css') }}">
    <!-- Link to Montserrat font from Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css') }}" />
    <link src="{{ url('https://cdn.jsdelivr.net/npm/textify.js@3.0.1/dist/Textify.min.css') }}" rel="stylesheet" />
    <script src="{{ url('https://cdn.jsdelivr.net/npm/textify.js@3.0.1/dist/Textify.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/toastify-js') }}"></script>
    <link href="{{ asset('https://unpkg.com/aos@2.3.1/dist/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    @if (Route::currentRouteName() == 'modal')
        <style>
            #wrapper {
                padding-top: 10%;
            }

            .viewport {
              justify-content: center;
              align-items: center;
                -webkit-perspective: 800px;
                -moz-perspective: 800px;
                -ms-perspective: 800px;
                -o-perspective: 800px;
                perspective: 800px;
                -webkit-perspective-origin: 50% 200px;
                -moz-perspective-origin: 50% 200px;
                -ms-perspective-origin: 50% 200px;
                -o-perspective-origin: 50% 200px;
                perspective-origin: 50% 200px;
                -webkit-transform: scale(0.8, 0.8);
                -moz-transform: scale(0.8, 0.8);
                -ms-transform: scale(0.8, 0.8);
                -o-transform: scale(0.8, 0.8);
                transform: scale(0.8, 0.8);
                -webkit-box-reflect: below 170px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0%, transparent), to(rgba(250, 250, 250, 0.1)));
            }

            .cube {
                position: relative;
                margin: 0 auto;
                height: 200px;
                width: 200px;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transform: rotateX(136deg) rotateY(1122deg);
                -moz-transform: rotateX(136deg) rotateY(1122deg);
                -ms-transform: rotateX(136deg) rotateY(1122deg);
                -o-transform: rotateX(136deg) rotateY(1122deg);
                transform: rotateX(136deg) rotateY(1122deg);
            }

            .cube>div {
                overflow: hidden;
                position: absolute;
                opacity: 0.9;
                height: 200px;
                width: 200px;
                background-image: url("https://jordizle.com/static/img/codepen/blank.png");
                -webkit-touch-callout: none;
                -moz-touch-callout: none;
                -ms-touch-callout: none;
                -o-touch-callout: none;
                touch-callout: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                user-select: none;
            }

            .cube>div>div.cube-image {
                width: 200px;
                height: 200px;
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                transform: rotate(180deg);
                line-height: 200px;
                font-size: 80px;
                text-align: center;
                color: #1b9bd8;
                -webkit-transition: color 600ms;
                -moz-transition: color 600ms;
                -ms-transition: color 600ms;
                -o-transition: color 600ms;
                transition: color 600ms;
            }

            .cube>div>div.cube-image.active {
                color: red;
            }

            .cube>div:hover {
                cursor: pointer;
            }

            .cube>div:active {
                cursor: pointer;
            }

            .cube>div:first-child {
                -webkit-transform: rotateX(90deg) translateZ(100px);
                -moz-transform: rotateX(90deg) translateZ(100px);
                -ms-transform: rotateX(90deg) translateZ(100px);
                -o-transform: rotateX(90deg) translateZ(100px);
                transform: rotateX(90deg) translateZ(100px);
                outline: 1px solid transparent;
            }

            .cube>div:nth-child(2) {
                -webkit-transform: translateZ(100px);
                -moz-transform: translateZ(100px);
                -ms-transform: translateZ(100px);
                -o-transform: translateZ(100px);
                transform: translateZ(100px);
                outline: 1px solid transparent;
            }

            .cube>div:nth-child(3) {
                -webkit-transform: rotateY(90deg) translateZ(100px);
                -moz-transform: rotateY(90deg) translateZ(100px);
                -ms-transform: rotateY(90deg) translateZ(100px);
                -o-transform: rotateY(90deg) translateZ(100px);
                transform: rotateY(90deg) translateZ(100px);
                outline: 1px solid transparent;
            }

            .cube>div:nth-child(4) {
                -webkit-transform: rotateY(180deg) translateZ(100px);
                -moz-transform: rotateY(180deg) translateZ(100px);
                -ms-transform: rotateY(180deg) translateZ(100px);
                -o-transform: rotateY(180deg) translateZ(100px);
                transform: rotateY(180deg) translateZ(100px);
                outline: 1px solid transparent;
            }

            .cube>div:nth-child(5) {
                -webkit-transform: rotateY(-90deg) translateZ(100px);
                -moz-transform: rotateY(-90deg) translateZ(100px);
                -ms-transform: rotateY(-90deg) translateZ(100px);
                -o-transform: rotateY(-90deg) translateZ(100px);
                transform: rotateY(-90deg) translateZ(100px);
                outline: 1px solid transparent;
            }

            .cube>div:nth-child(6) {
                -webkit-transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
                -moz-transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
                -ms-transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
                -o-transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
                transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
                outline: 1px solid transparent;
            }

            object {
                opacity: 0.5;
            }

            object:hover {
                opacity: 1;
            }

            @media (max-width: 640px) {
                .viewport {
                    -webkit-transform: scale(0.6, 0.6);
                    -moz-transform: scale(0.6, 0.6);
                    -ms-transform: scale(0.6, 0.6);
                    -o-transform: scale(0.6, 0.6);
                    transform: scale(0.6, 0.6);
                }
            }
        </style>
    @endif
</head>

<body>

    @include('components.header')
    @yield('main_content')

    @include('components.footer')
    <script src="{{ asset('js/lenis.min.js') }}"></script>
    <script src="{{ url('https://kit.fontawesome.com/3840ac106f.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('https://balkan.app/js/OrgChart.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('https://unpkg.com/aos@2.3.1/dist/aos.js') }}"></script>
    <script src="{{ url('//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js') }}"></script>
    <script src="{{ url('//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js') }}">
    </script>
    <script src="{{ asset('js/jquery-3-4-1.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/AsmiScript.js') }}"></script>
    <script src="{{ asset('js/Textify.min.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('js/EaselPlugin.min.js') }}"></script>
    <script src="{{ asset('js/TextPlugin.min.js') }}"></script>

    <script>
        @if (session('success'))
            Toastify({
                text: '{{ session('success') }}',
                duration: 5000,
                close: true,
                gravity: 'top',
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
            }).showToast();
        @endif

        const lenis = new Lenis()

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)

        const animatedDiv = document.getElementById('animatedDiv');
        gsap.registerPlugin(ScrollTrigger);

        TweenMax.from(".image-logo", 1, {
            opacity: 0,
            x: -20,
            ease: Expo.easeInOut
        })
        TweenMax.from(".navbar-collapse ul li", 1, {
            opacity: 0,
            delay: 0.3,
            x: -20,
            ease: Expo.easeInOut
        })
        TweenMax.from(".image-about-one", 1, {
            opacity: 0,
            delay: 1,
            x: +500,
            ease: Expo.easeInOut(),
        })


        AOS.init();
        new Textify({
            Element: '.large-animation-0',
            splitType: 'lines',
            largeText: true,
            animation: {
                by: 'lines',
                stagger: 0.075,
                duration: 0.7,
                ease: 'power2',
                transformOrigin: 'center center',
                animateProps: {
                    "scale": 0,
                    "opacity": 0
                }
            }
        }, gsap);


        var controller = new ScrollMagic.Controller();

        // create a scene
        new ScrollMagic.Scene({
                duration: 100,
                offset: 50,
            })
            .setPin('#my-sticky-element')
            .addTo(controller);
    </script>

</body>

</html>
