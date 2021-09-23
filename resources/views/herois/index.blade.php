@extends('herois.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Herois</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nº</th>
            <th>Nome</th>
            <th>Poderes</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($heroi as $herois)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $herois->nome }}</td>
            <td>{{ $herois->poderes }}</td>
            <td>{{ $herois->fraquezas }}</td>

            <td>
                <form action="{ route('herois.destroy',$heroi->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{ route('herois.show',$heroi->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{ route('herois.edit',$heroi->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
     {!! $heroi->links() !!}
      
@endsection