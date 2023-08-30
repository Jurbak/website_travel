<?php
     session_start();
        include 'koneksi.php';
        if (isset($_POST['submit'])) {
            $user = $_POST ['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$password';";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $cek = mysqli_num_rows($result);
            if ($cek > 0) {
                $_SESSION['username'] = $row['username'];
                header('Location: index.php');
            } else{
                echo "<script>alert('Username atau password anda salah. Silahkan coba lagi!')</script>";
            }

        }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login dulu bang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin_page/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin_page/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_page/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Travel</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form  method="post" action="admin_page/index.php">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Pengguna" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
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
                Ingat Saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" id="submit" name="submit" value="submit">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="cs_page/index.html">Lupa Password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Daftar</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin_page/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin_page/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin_page/dist/js/adminlte.min.js"></script>
</body>
</html>



