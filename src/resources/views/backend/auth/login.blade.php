@extends('backend.auth.layout')
@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    @endif
    <div class="login-box">
        <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1">Đăng nhập</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Bắt đầu đăng nhập</p>
          <form action="{{route('backend.login')}}" method="POST">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="email" placeholder="Tài khoản" value="{{ old('email') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-auto">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Nhớ mật khẩu
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-auto ml-auto">
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          {{-- <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
          </div> --}}
          <!-- /.social-auth-links -->
    
          {{-- <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
          </p> --}}
        </div>
        <!-- /.card-body -->
      </div>
    </div>
@endsection


