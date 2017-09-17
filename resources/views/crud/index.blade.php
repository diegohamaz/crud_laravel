@extends('crud.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Items CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('itemCRUD.create') }}"> Create New Item</a>
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
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
            <th width="280px">Usuarios</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nome }}</td>
        <td>{{ $item->senha }}</td>
        <td>{{ $item->usuario }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('itemCRUD.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['itemCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection
