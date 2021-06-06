<?php 

session_start();

if(isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}
require 'functions.php';

if(isset($_POST['login'])) {
  $login = login($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
</head>
<body>
   <h3>Menu Login</h3>
   <?php if (isset($login['error'])) : ?>
   <p> <?= $login['pesan']; ?></p>
   <?php endif; ?>
   <form action="" method="POST">
   <ul>
   <li><label for=""> Username : </label>
   <input type="text" name="username" autofocus autocomplete="off" required>
   </li>
   <li>
   <label for=""> Password : </label>
   <input type="password" name="password" required>
   </li>
   <li>
   <button type="submit" name="login">Login</button>
   </li>
   <li>
   <a href="registrasi.php">Daftar</a>
   </li>
  </ul>
   </form>
</body>
</html>