@extends('main')
@section('css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@section('content')
<div class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
          <a href="../../index2.html"><b>Login</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Hello, Welcome Back!</p>

            <form action="/signIn" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email" required email>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            @if ($errors->any())
                    <div style="color:red">{{ $errors->first() }}</div>
            @endif
            <!-- /.social-auth-links -->

            <p class="mb-0 mt-4">
              <a href="/register" class="text-center">Don't Have an Account? Register Here</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
</div>
@stop
