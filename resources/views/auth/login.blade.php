@include('admin.layouts.head')

<!-- <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('/assets/dist/img/Kas.jpg') center center no-repeat; background-size: cover;"></div> -->
  <!-- <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper bg-layer" >
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <center>
                  <h5> Aplikasi Kas PT. Anugerah Terindah</h5> -->
                    <!-- <H1> LOGIN </H1> -->
                    <!-- <img src="{{url('/assets/img/kas.png')}}" alt="logo"> -->
               <!--  </center>
              </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mt-3">
                 <button type="submit" class="btn btn-primary btn-block">
                {{ __('Login') }}
                </button>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div> -->
      <!-- content-wrapper ends -->
    <!-- </div>
    page-body-wrapper ends
  </div> -->
<body class="hold-transition login-page" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('/assets/dist/img/Kas.jpg') center center no-repeat; background-size: cover;">
<div class="login-box" >
  
   <div class="login-box-body">
    <div class="image">
        <img style="center" src="{{asset('/assets/dist/img/logop.png')}}" alt="User Image"><h3>Aplikasi Kas PT. Ardy Mandiri</h3>
    </div>
    
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
  @include('admin.layouts.seting')

  <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>