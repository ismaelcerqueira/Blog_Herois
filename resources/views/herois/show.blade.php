@extends('herois.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Heroi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/herois') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $heroi->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Poderes:</strong>
                {{ $heroi->poderes }}
            </div>
        </div>
    </div>
@endsection