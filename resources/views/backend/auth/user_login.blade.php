@extends('backend.auth.auth_master')

@section('main_content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>JWT Auth</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                @include('backend.layout_partials.messages.success')
                @include('backend.layout_partials.messages.failed')
                @include('backend.layout_partials.messages.warning')
                @include('backend.layout_partials.messages.form_failed')
                <form action="{!! route('login') !!}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{!! old('email') !!}" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @if($errors->has('email'))
                        <span class="text-danger"> {{ $errors->first('email') }} </span>
                    @endif

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    @if($errors->has('password'))
                        <span class="help-block help-block-error"> {{ $errors->first('password') }} </span>
                    @endif
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember" value="1">
                                <label for="remember">
                                    Remember Me
                                </label>
                                <p class="mb-0">
                                    <a href="{!! route('register') !!}" class="text-center">Register a new membership</a>
                                </p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
