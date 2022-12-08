@extends('backend.auth.layout')
@section('after-script')
    {{--    {{ HTML::script('backend/js/auth/register.js') }}--}}
@endsection
@section('main')
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    @endif

    @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif

    <form action="{{ route('backend.register') }}" method="POST" name="register-admin">
        @csrf
        <h1>Create Account</h1>
        <div>
            <input type="text" name="name" class="form-control" placeholder="Name" required=""/>
        </div>
        <div>
            <input type="email" name="email" class="form-control" placeholder="Email" required=""/>
        </div>
        <div>
            <input type="hidden" name="admin" class="form-control" value="1"/>
        </div>
        <div>
            <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
        </div>
        <div>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirm"
                   required=""/>
        </div>
        <div>
            <button type="submit" class="btn btn-default submit btn-register">Submit</button>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link">Already a member ?
                <a href="{{ route('backend.index') }}" class="to_register" style="color: blue"> Log in </a>
            </p>

            <div class="clearfix"></div>
            <br/>

            <div>
                <h1><i class="fa fa-paw"></i> {{ config('app.team') }} Team!</h1>
                <p>©2021 copyright</p>
            </div>
        </div>
    </form> --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    @endif

    @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif

    <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="../../index2.html" class="h1">Đăng ký</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Đăng ký thành viên</p>
      
            <form action="{{ route('backend.register') }}" method="POST">
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Tên">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email">
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
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                     Điều khoản
                    </label>
                  </div>
                </div>
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                </div>
              </div>
            </form>
      
            {{-- <div class="social-auth-links text-center">
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                Sign up using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
              </a>
            </div> --}}
      
            {{-- <a href="login.html" class="text-center">Điều khoản</a> --}}
          </div>
        </div>
      </div>
@endsection
