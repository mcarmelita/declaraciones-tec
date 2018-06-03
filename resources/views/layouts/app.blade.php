<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="{{ asset('bootstrap-4.1.1-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-4.1.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/normalize_reset.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body">
    <div class="wrapper">
        <div class="header-zone">
            @include('layouts.header')
        </div>
        <div class="container-fluid middle-zone">
            <div class="row">
                @include('layouts.menu')
                <main role="main" class="col-md-12 ml-sm-auto"> 
                    @yield('content')   
                </main>
            </div>
        </div>
        <div class="footer-zone">
            @include('layouts.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src=" {{ asset('bootstrap-4.1.1-dist/js/bootstrap.js') }} "></script>
    <script src=" {{ asset('bootstrap-4.1.1-dist/js/bootstrap.min.js') }} "></script>
    <script href="https://unpkg.com/popper.js"></script>
    <script href="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

    @yield('extra-js')
</body>
</html>
