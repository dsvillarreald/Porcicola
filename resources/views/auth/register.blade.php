@extends('layouts.app')

@section('content')
<div id="loginbox">
    <form id="loginform" class="form-vertical" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="control-group normal_text">
            <h3>Registro</h3>
        </div>
        <div class="control-group">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre" required/> @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                    </div>
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-envelope"> </i></span><input type="email" value="{{ old('email') }}" name="email" placeholder="Email" required/> 
                        @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Contraseña" required/> @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                    </div>
                </div>
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password_confirmation" placeholder="Repetir Contraseña" required/>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="{{ route('login') }}" class="flip-link btn btn-primary">Iniciar Sesion</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-success">Registrarse</button></span>
        </div>
    </form>
</div>
@endsection