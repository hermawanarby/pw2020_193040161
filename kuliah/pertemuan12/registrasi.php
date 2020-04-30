<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regitrasi</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h1>Register</h1><br>
    <div class="form-inputan">
      <form action="proses.php" method="post">
        <input type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password" placeholder="Confirm Password" required>
        <div class="btn-login">
          <button type="submit" name="register">Register</button>
          <label><a href="login.php">Login an account.</a></label>
        </div>
      </form>
    </div>
  </div>
</body>

</html>