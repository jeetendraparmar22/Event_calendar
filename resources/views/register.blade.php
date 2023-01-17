<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register as a new user</p>
        @if (session('success'))
        <h6 class="alert alert-success">
            {{ session('success') }} <a href="{{ route('login') }}">login</a>
        </h6>
        @endif
      <form action="{{ route('create_user') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name')
              is-invalid
          @enderror" placeholder="Enter name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
         
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
          <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email')
              is-invalid
          @enderror" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control  @error('phone_number')
            is-invalid
            @enderror" placeholder="Enter Phone No.">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          @error('phone_number')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control  @error('email')
          is-invalid
          @enderror" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="row">
          
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <a href="{{ route('login') }}" class="text-center">I already have a register user</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
