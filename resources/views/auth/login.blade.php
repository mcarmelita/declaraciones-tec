@section('title', 'Iniciar Sesión')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('bootstrap-4.1.1-dist/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('bootstrap-4.1.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

<body class="body">
<div class="container">
    <div class="row">
        <div class="col-md-8 login">
            <div class="panelHead">
                <div><i class="fas fa-home"></i> | Iniciar Sesión</div>

                <div class="panelBody">
                   <div><img class="imgLogin" src=" {{asset('img/user.png')}} "></div> 
                    <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="form">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email">
                                            <i class="fas fa-at"></i>
                                        </span>
                                    </div>
                                    <input aria-describedby="email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email">
                                            <i class="fas fa-unlock-alt"></i>
                                        </span>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recordar Contraseña
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btnlog btn btn-primary">
                                    Entrar
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>