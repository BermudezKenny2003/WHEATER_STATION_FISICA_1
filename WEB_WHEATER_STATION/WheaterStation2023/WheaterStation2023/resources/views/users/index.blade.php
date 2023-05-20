@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('title', 'Weather Station')

@section('content_header')

    <style>
        h1{
            font-family: 'Helveticah';
        }
    </style>
    <body>
        <div id="main-container">
            <h1>Users list...</h1>
        </div>
    </body>
@stop

@section('content')
   <a href="{{ route('users.create') }}" class="btn btn-info mb-3">CREAR</a>

<table id="users" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-info text-white">
    <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Roles</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $key => $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="btn btn-muted">{{ $v }}</label>
                    @endforeach
                @endif
            </td>
            <td>
                <a class="btn btn-secondary" href="{{ route('users.show',$user->id) }}">Show</a>
                <a href="{{ route('users.edit',$user->id) }}" class="btn btn-info">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#users').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop