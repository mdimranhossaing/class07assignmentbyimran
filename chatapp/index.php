<?php 
  session_start();

  if (file_exists(dirname(__FILE__) . '/functions.php')) {
    require_once(dirname(__FILE__) . '/functions.php');
  }

  if (user_logged_in()) {
    header('location: users.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration page | by Imran</title>

  <!-- link main stylesheet css file -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- user ragistration area start -->
  <div class="registration">

    <form class="form-register" action="" method="POST">

      <h2 class="title">Registration form</h2>

      <div class="input-group">
        <label for="name">Your name</label>
        <input type="text" id="name" placeholder="Enter your name">
      </div>

      <div class="input-group">
        <label for="email">Email address</label>
        <input type="email" id="email" placeholder="Enter your email">
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter a password">
      </div>

      <div class="input-group">
        <label for="confirm-password">Confirm password</label>
        <input type="password" id="confirm-password" placeholder="Enter confirm password">
      </div>

      <button type="submit">Register</button>



      <div id="message">
        <div class="link">Already have and account? Please<a href="login.php">Login</a></div>
      </div>

    </form>
  </div>
  <!-- user registration area end -->

  <!-- link jQuery js file -->
  <script src="./assets/lib/jquery/jquery-3.6.1.min.js"></script>

  <!-- link main scripts js file -->
  <script src="./assets/js/scripts.js"></script>

</body>

</html>