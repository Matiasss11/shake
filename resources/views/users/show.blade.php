@extends('layouts.app')
  <!-- Extiende de layout -->
@section('titulo')
    <h1>Usuarios</h1>
@endsection
@section('navegacion')
    <li class="breadcrumb-item"><a href="/users">Indice de Usuarios</a></li>
    <li class="breadcrumb-item active">Ver Usuario</li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <p style="font-size:130%"> <i class="fa fa-key" aria-hidden="true"></i>Datos del Usuario</p>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Nombre de Usuario</th>
                                <td>{{ $user->user }}</td>
                            </tr>
                            <tr>
                                <th>Rol</th>
                                <td>{{ $user->role }}</td>
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <td>{{ $user->email }}</td>

                            </tr>
                            <tr>
                                <th>Estado</th>
                                @if ($user->estado == 1)
                                    <td><label style="font-size: 90%" class="badge badge-success">Habilitado</label></td>
                                @else
                                    <td><label style="font-size: 90%" class="badge badge-danger">Inhabilitado</label></td>
                                @endif
                            </tr> 
                        </thead>
                    </table>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group" style="text-align:center">
                            <center><a href="{{ route('users.index') }}" class="edit btn btn-secondary btn-sm">Volver</a></center>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection