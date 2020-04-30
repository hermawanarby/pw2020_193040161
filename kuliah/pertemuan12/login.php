<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h1>Login</h1>
    <?php if (isset($login['error'])) : ?>
      <p style="color: red; font-style: italic; background-color: seashell; text-align: center;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <div class="form-inputan">
      <form action="" method="POST">
        <input type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
        <input type="password" name="password" placeholder="Password" required>
        <div class="btn-login">
          <button type="submit" name="login">Log In</button>
          <label><a href="#">Forgot password?</a></label>
        </div>
        <div class="signup">
          <label>Don't have an account? <a href="registrasi.php"><b>Register Now!</b></a></label>
        </div>
      </form>
    </div>
  </div>
</body>

</html>