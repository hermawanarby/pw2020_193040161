<?php
require 'functions.php';
if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('Registrasi Berhasil!');
          document.location.href = 'login.php';
        </script>";
  } else {
    echo "<script>
          alert('Registrasi Gagal!');
        </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Register - 193040161</title>

  <style>
    body {
      background-image: url('../assets/images/bg.jpg');
      background-size: cover;
      font-family: 'Roboto', sans-serif;
    }

    .card {
      width: 350px;
      box-shadow: 1px 1px 20px 5px rgba(0, 0, 0, 0.1);
    }

    .card-header,
    button {
      background-color: #6c42f5 !important;
    }

    p {
      font-size: 14px;
      color: rgba(0, 0, 0, 0.6);
    }

    p a {
      color: #6c42f5;
    }

    p a:hover {
      color: #6c42f5;
    }
  </style>
</head>

<body>

  <div class="container vh-100">
    <div class="row justify-content-center h-100">
      <div class="card my-auto">
        <div class="card-header text-center text-white">
          <h2>Register Form</h2>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="register">Register</button>
          </form>
        </div>
        <p class="text-center">Already have an account? <a href="login.php">Login Now!</a></p>
        <div class="card-footer text-center">
          <small>&copy; 2020 eShop.</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>