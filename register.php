<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CSEC_ASTU | Registration Page</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins\fontawesome-free\css\all.min.css" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins\icheck-bootstrap\icheck-bootstrap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="plugins\dist\css\adminlte.min.css" />
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="scoreboard.php"><b>CSEC_ASTU</b></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="register_approval.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="name" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="dev" name="dev">
            <label for="customCheckbox1" class="custom-control-label">Dev</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="cpd" name="cpd">
            <label for="customCheckbox2" class="custom-control-label">CPD</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="cbd" name="cbd">
            <label for="customCheckbox3" class="custom-control-label">CBD</label>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Choose Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" />
                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">
                Register
              </button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <a href="login.php" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.register-box -->
</body>

</html>