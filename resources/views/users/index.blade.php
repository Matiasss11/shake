@extends('layouts.app')

@section('titulo')
    <h1>Usuarios</h1>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><div class="row">
                    <div class="col-10">
                        <h3>Indice de Usuarios</h3>
                    </div>
                    <div class="col-2">
                        <a href= {{ route('users.create')}}>
                            <button class="btn btn-primary">
                                Nuevo
                            </button>
                        </a>
                    </div>
                </div>
                @if(Session::has('notice'))
                    <p> <strong> {{ Session::get('notice') }} </strong> </p>
                @endif
                <div class="card-body">
                    <table class="table table-bordered table-striped users_table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Activo</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        $('.users_table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: "{{route('users.index')}}",
            dataType: 'json',
            type: "POST",
            columns: [{
                    data: 'user',
                    name: 'user',
                    orderable: false
                },
                {
                    data: 'active',
                    name: 'Inactive',
                    orderable: false
                },
                {
                    data: 'email',
                    name: 'email',
                    orderable: false
                },
                {
                    data: 'role',
                    name: 'role',
                    orderable: false
                },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false
                },
                {
                    data: 'actions',
                    name: 'actions',
                    searchable: false,
                    orderable: false
                }
            ],
        })
    })
</script>
@endsection
