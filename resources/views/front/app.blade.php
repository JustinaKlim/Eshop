<!doctype html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EShop</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container navigacija">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ESHOP
                </a>
                {{-- <img src="/images/'shop.jpg" enctype="multipart/form-data"> --}}
                {{-- <?php
                // $encoded_data = base64_encode(file_get_contents('./images/shop.jpg'));
                ?>   --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!-- Search -->
                    <nav class="navbar">
                        <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Ieškoti prekės" aria-label="Search">
                          <button class="buttons nav-btn" type="submit">Ieškoti</button>
                        </form>
                      </nav>
                    <!-- Shop cart -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link shop-cart" href="">
                                @include('front.cart-svg')
                                <div id="cart-count">
                                @include('front.mini-cart')
                                </div>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>