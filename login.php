<?php
include "konek.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    if ($username == "" && $password == "") {
      echo"<script>alert('jangan konsongkan form input silahkan login ulang'); document.location = 'login.php';</script>";
    }elseif ($username == "") {
      echo"<script>alert('jangan konsongkan username silahkan login ulang'); document.location = 'login.php';</script>";
    }elseif($password == ""){
      echo"<script>alert('jangan konsongkan password silahkan login ulang'); document.location = 'login.php';</script>";
    }else {
      $login = mysqli_query($konek, "SELECT * FROM admin where username='$username' AND password='$password'");
      if (mysqli_num_rows($login)) {
          
          $_SESSION['admin'] = mysqli_fetch_array($login);
          echo"<script>alert('login berhasil'); document.location = 'index.php';</script>";
      }else {
        echo"<script>alert('input yg anda masukan salah silahkan coba lagi'); document.location = 'login.php';</script>";
    }
  }
}elseif (isset($_POST['signup'])) {
    $nama= $_POST['nama'];
    $username= $_POST['username'];
    $password= sha1($_POST['password']);

    $admin = mysqli_query($konek,"SELECT * FROM admin");
    $data = mysqli_fetch_array($admin);


    if ($nama == "" || $username == "" || $password == "") {
        echo"<script>alert('jangan konsongkan form input silahkan login ulang');</script>";
    }else{
        if ($username != $data['username']) {
        mysqli_query($konek, "INSERT INTO admin(nama, username, password) VALUES ('$nama','$username','$password')");
        echo"<script>alert('Registrasi Akun Berhasil'); document.location = 'login.php';</script>";
        
        }else {
            echo"<script>alert('username sudah digunakan silahkan registrasi ulang'); document.location = 'login.php';</script>";
        }
    }


    
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/apple-touch-icon.png" type="image/png">
    <title>Web || Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Login</header>
        <img src="img/login.png" alt="">
        <form method="post" enctype="multipart/form-data">
          <input type="text" name="username" placeholder="Username" required />
          <input type="password" name="password" placeholder="Password" required />
          <input type="submit" value="Login" name="login" />
          <a href="index.php">Beranda</a>
        </form>
      </div>
      <script src="script/login.js"></script>
    </section>
  </body>
</html>