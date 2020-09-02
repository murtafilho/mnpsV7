@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <h3 style="text-align: center">Dispositivo</h3>
                </div>

                <ul class="panel-footer">
                    <a href="{{route('mobile')}}" class="btn btn-primary btn-lg btn-block" role="button">VERSÃO MOBILE</a>
                    <a href="{{route('mnps')}}" class="btn btn-primary btn-lg btn-block" role="button">VERSÃO DESKTOP</a>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
