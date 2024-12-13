<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        *,
        html,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .banner{
            border: 5px #ffffff solid;
            transition: .2s;
            cursor: pointer;
        }

        .banner:hover{
            border:5px wheat solid;
        }
        .carousel-control-next, .carousel-control-prev{
            width:50px; 
            height:80px;
        }
        .carousel-control-next{
            margin-right: -50px;
        }
        .carousel-control-prev{
            margin-left: -50px;
        }

        .carousel-indicators{
            margin-bottom: -30px;
        }
        
        #gameCarousel .carousel-item{
            height: 380px;
        }

        #gameCarousel2 img{
            height: 280px;
            object-fit: fill;
        }

        #gameCarousel2 .card-body, #gameCarousel3 .card-body{
            background-size: cover;
            background-image: url({{asset('img/background-image/bg.jpg')}});
        }

    </style>
</head>

<body>
    <div class="min-vh-100" style="background: #1B2939">

        <!-- Page Heading -->
        <div class="position-sticky top-0 z-3">
            @include('layouts.navigation')

        </div>

        <!-- Page Content -->
        <main>

            @if (isset($fluid))
                <div class="container-fluid">
                    {{ $fluid }}
                </div>
            @endif

            <div class="container">
                {{ $slot }}
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
