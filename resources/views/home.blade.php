@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
<div class="container">
    <div>
        <div>
            <img class="inicio" src="img/trans.png">
            <img class="inicio" src="img/ifai.jpg">
            <img class="inicio" src="img/proac.png">
            <img class="inicio" src="img/infomex.jpg">
            <img class="inicio" src="img/tablero.jpg">
        </div>
    </div>
</div>
@endsection
{{--<div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   @if(Auth::user()->hasRole('admin'))
                        <div>Acceso como administrador</div>
                    @else
                        <div>Acceso usuario</div>
                    @endif
                    You are logged in!
                </div>--}} 