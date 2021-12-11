@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div id="login">
    <div class="container py-5 h-100">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12"  style="border-radius: 15px;">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Nome de usuário:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Senha:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Lembrar senha</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input style="margin-top: 30px" type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
