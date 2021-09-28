@extends('herois.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar um novo heroi: </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('herois.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Houve algum problema com seu cadastro.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('herois.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Poderes:</strong>
                <textarea class="form-control" name="poderes" placeholder="Poderes"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fraquezas:</strong>
                <textarea class="form-control" name="fraquezas" placeholder="Fraquezas"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="image"><strong>Imagem do Heroi: </strong></label>
                <input type="file" class="from-control" name="image" id="image">
            </div>
        </div>


        
        </form>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" href=>Enviar</button>
        </div>
    </div>
   
</form>
@endsection