<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="#"><b>Titan</b></a>
    </div>

    <div class="shadow-lg">
      <div class="card" style="border-top: 3px solid #9C5C22">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form action="{{ route('register')}}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{old('name')}}" request autocomplete="name" placeholder="Full name">

              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
              </span>
              @enderror

              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{old('email')}}" required autocomplete="email" placeholder="Email">

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
              </span>
              @enderror


              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="password" id="myInput" name="password" required autocomplete="new-password"
                class="form-control @error('password') is-invalid @enderror" placeholder="Password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
              </span>
              @enderror

              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="eye" onclick="myFunction()">
                    <i class="fa fa-eye" id="hide1" style="display: none;"></i>
                    <i class="fa fa-eye-slash" id="hide2"></i>
                  </span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password" id="myInput2" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="eye" onclick="myFunctions()">
                    <i class="fa fa-eye" id="hide3" style="display: none;"></i>
                    <i class="fa fa-eye-slash" id="hide4"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                  <label for="agreeTerms">
                    I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          Sudah Punya Akun?
          <a href="login" class="text-center"> Masuk</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
  </div>
  <!-- /.register-box -->

  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      var y = document.getElementById("hide1");
      var z = document.getElementById("hide2");

      if (x.type === 'password') {
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
      } else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
      }
    }

    function myFunctions() {
      var a = document.getElementById("myInput2");
      var b = document.getElementById("hide3");
      var c = document.getElementById("hide4");

      if (a.type === 'password') {
        a.type = "text";
        b.style.display = "block";
        c.style.display = "none";
      } else {
        a.type = "password";
        b.style.display = "none";
        c.style.display = "block";
      }
    }

  </script>
  <!-- jQuery -->
  <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
