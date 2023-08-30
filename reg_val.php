<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])
&& isset($_POST['no_telp']) && isset($_POST['re_password'])) 
{

  function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }

  $username = validate($_POST['username']);
  $password = validate($_POST['password']);

  $no_telp = validate($_POST['no_telp']);
  $re_password = validate($_POST['re_password']);

  $user_data = 'username='. $username. 'no_telp='. $no_telp;

  if (empty($username)) {
    header("Location: register.php?error=User Name is required&$user_data");
      exit();

  }else if(empty($no_telp)){
        header("Location: register.php?error=no Telepon is required&$user_data");
      exit();

      }else if(empty($password)){
        header("Location: register.php?error=Password is required&$user_data");
      exit();

      }else if(empty($re_password)){
        header("Location: register.php?error=re_Password is required&$user_data");
      exit();

      }else if($password !== $re_password){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
      exit();
  }


  else{
     #$password = md5($password);

    $sql = "SELECT * FROM tbl_user WHERE username='$username'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
              header("Location: register.php?The username is taken try another&$user_data");
            exit();
            }else {
            $sql2 = "INSERT INTO tbl_user(username, password, no_telp) VALUES('$username', '$password', '$no_telp')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
             header("Location: index.php?success=Your account has been created successfully");
           exit();
           }else {
              header("Location: register.php?error=unknown error occurred&$user_data");
            exit();
           }
    }
  }
}else{
  header("Location: signup.php");
  exit();
}