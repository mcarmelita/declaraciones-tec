<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <!-- Styles -->
    <link type="text/css" href="{{ asset('css/normalize_reset.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-4.1.1-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-4.1.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="body">
    <div>
        @include('layouts.header')
        <div class="container-fluid">
            <div class="row">
                @include('layouts.menu')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"> 
                    @yield('content')   
                </main>
            </div>
        </div>
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script href="https://unpkg.com/popper.js"></script>
    <script href="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src=" {{ asset('bootstrap-4.1.1-dist/js/bootstrap.js') }} "></script>
    <script src=" {{ asset('bootstrap-4.1.1-dist/js/bootstrap.min.js') }} "></script>

    @yield('extra.js')
</body>
</html>
