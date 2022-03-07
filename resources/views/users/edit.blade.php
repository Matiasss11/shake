@extends('layouts.app')
  <!-- Extiende de layout -->
@section('titulo')
    <h1>Usuarios</h1>
@endsection
@section('navegacion')
    <li class="breadcrumb-item"><a href="/users">Indice de Usuarios</a></li>
    <li class="breadcrumb-item active">Editar Usuario</li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <p style="font-size:130%"> <i class="fa fa-key" aria-hidden="true"></i>Editar Usuario</p>
                    </div>
                </div>

                <div class="card-body">
                    {!!Form::model($user, ['method'=>'PATCH','route'=>['users.update',$user->id]])!!}
                    {{Form::token()}}
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="card card-dark">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Nombre de Usuario
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                        <input
                                                            type="string"
                                                            name="user"
                                                            maxlength="30"
                                                            value="{{ $user->user }}"
                                                            class="form-control"
                                                            placeholder="Ingrese el nombre de usuario..."
                                                            title="Ingrese el nombre de usuario">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <label for="email">
                                                E-mail
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input
                                                    type="email"
                                                    name="email"
                                                    value="{{ $user->email }}"
                                                    class="input-group form-control"
                                                    placeholder="uncorreo@mail.com..."
                                                    title="Introduzca un correo electrónico">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="password">
                                                    Contraseña
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                    </div>
                                                    <input
                                                        type="password"
                                                        name="password"
                                                        min="8"
                                                        maxlength="13"
                                                        value="{{old('password')}}"
                                                        class="form-control"
                                                        placeholder="********..."
                                                        title="Introduzca una contraseña">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="password-confirm" class="control-label">Confirmar Constraseña</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                    </div>
                                                    <input
                                                        id="password-confirm"
                                                        type="password"
                                                        class="form-control"
                                                        name="password_confirmation"
                                                        placeholder="********...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Rol de Usuario
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <select name="role" id="role" class="form-control">
                                                            <option value="{{ $user->role }}"disabled="true"selected title="-Seleccione un rol-">
                                                                {{ $user->role }}
                                                            </option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="Developer" >Developer</option>
                                                            <option value="Operator">Operator</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group" style="text-align:center">
                                <button title="Limpiar" class="btn btn-danger" type="reset"><i class="fa fa-eraser"></i> Limpiar</button>
                                <button title="Guardar" id="confirmar" class="btn btn-primary" type="submit"> <i class="fa fa-check"></i> Guardar</button>
                            </div>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection