@extends('layouts.app')

@section('content')
<div id="loginbox">
<form id="loginform" class="form-vertical" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="control-group normal_text">
        <h3><img src="img/logo.png" alt="Logo" /></h3>
    </div>
    <div class="control-group">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-envelope"> </i></span><input type="email" value="{{ old('email') }}" name="email" placeholder="Email" required/> 
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong style='color:#FFF'>{{ $errors->first('email') }}</strong>
                                    </span> 
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" id="password" name="password" placeholder="Contraseña" required="" /> @if ($errors->has('password'))
                    <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span> @endif
                </div>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">¿Olvido su contraseña?</a></span>
        <span class="pull-center"><a href="{{ route('register') }}" class="flip-link btn btn-primary">Registrarse</a></span>
        <span class="pull-right"><button type="submit" class="btn btn-success" > Iniciar Sesion</button></span>
    </div>
</form>
<form id="recoverform" action="#" class="form-vertical">
    <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

    <div class="controls">
        <div class="main_input_box">
            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" required/>
        </div>
    </div>

    <div class="form-actions">
        <span class="pull-left"><button href="#" class="flip-link btn btn-success" id="to-login">&laquo; Volver a Iniciar Sesion</button></span>
        <span class="pull-right"><button class="btn btn-info">Recuperar</button></span>
    </div>
</form>
</div>
@endsection
