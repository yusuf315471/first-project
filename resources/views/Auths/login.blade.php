@include('/layouts.link')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    
  </div>
  <!-- /.login-logo -->
  @if(session('gagal'))
      <div class="alert alert-danger"> 
        <?php echo session('gagal') ?>
      </div>
    @endif
  @if(session('success'))
      <div class="alert alert-success"> 
        <?php echo session('success') ?>
      </div>
    @endif
  <div class="card">
  	<div class="card-header text-center"> <b>Login</b></div>
    <div class="card-body login-card-body">
      <p class="login-box-msg"> <img src="/img/logo.png" alt="logo" style="width: 7rem;"></p>

      <form action="/postlogin" method="POST">
        {{csrf_field()}}
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
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

      <p class="mb-1">
        <a href="" data-toggle="modal" data-target="#forgot">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="/register" class="text-center">Register a new membership</a>
        </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<div class="modal fade" id="forgot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<div class="login-logo">
    <b>Masukan Email Anda</b>
  </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/emailrequest" method="POST">
      	{{csrf_field()}}
	      <div class="modal-body">
	        <div class="login-box">
		        <div class="input-group mb-1">
		          <input name="email" type="email" class="form-control" placeholder="Email">
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-envelope"></span>
		            </div>
		          </div>
		        </div>
		        <div class="input-group mb-3">
		          <input name="No_Hp" type="text" class="form-control" placeholder="No_Hp">
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-phone"></span>
		            </div>
		          </div>
		        </div>
			</div>
	      </div>
      <div class="modal-footer">
          <div class="col-12">
          	<button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
      <p class="mb-0">
        <a href="/register" class="text-center">Register a new membership</a>
      </p>
        </div>
    </div>
      </form>
  </div>
</div>
<!-- /.login-box -->
</body>
</html>
