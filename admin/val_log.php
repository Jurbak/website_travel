<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

  function validate($data){
       $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

  $username = validate($_POST['username']);
  $password = validate($_POST['password']);

  if (empty($username)) {
    header("Location: index.php?error=User Name is required");
      exit();
  }else if(empty($password)){
        header("Location: index.php?error=Password is required");
      exit();
  }else{
    $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
              $_SESSION['username'] = $row['username'];
              $_SESSION['name'] = $row['name'];
              $_SESSION['id'] = $row['id'];

              if($row['level'] == "0"){
                header("Location: admin_page/index.php");
                exit();
              }elseif($row['level'] == "1"){
                header("Location: admin_page/index.php");
                exit();
              }elseif($row['level'] == "2"){
                header("Location: ../index.html");
                exit();
              }


            }else{
        header("Location: index.php?error=Incorect User name or password");
            exit();
      }
    }else{
      header("Location: index.php?error=Incorect User name or password");
          exit();
    }
  }
  
}else{
  header("Location: index.php");
  exit();
}