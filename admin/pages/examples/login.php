<?php
session_start();
require("function.php");

if (isset($_POST['signin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $qry = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username = '$username' AND password = md5('$password')");
  $cek = mysqli_num_rows($qry);
  if ($cek == 1) {
    $_SESSION['userweb'] = $username;
    header("Location: ../../index.php");
    exit;
  } else {
    echo "<script>alert('Username atau Password anda salah')</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Thrift Pop Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Login</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="username" class="form-control" name="username" placeholder="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-4 mx-auto">
              <button type="submit" name="signin" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery
  <script src="../../plugins/jquery/jquery.min.js">
    < /> <
    !--Bootstrap 4-- >
    <
    script src = "../../plugins/bootstrap/js/bootstrap.bundle.min.js" >
  </>
  AdminLTE App
  <script src="../../dist/js/adminlte.min.js"></script> --> -->
</body>

</html>