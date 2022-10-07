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
  <title>Login page | by Imran</title>

  <!-- link main stylesheet css file -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- user login area start -->
  <div class="login">

    <form class="form-login" action="" method="POST">

      <h2 class="title">Login form</h2>

      <div class="input-group">
        <label for="email">Email address</label>
        <input type="email" id="email" placeholder="Enter your email">
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter a password">
      </div>

      <button type="submit">login</button>

      <div id="message">
        <div class="link">Don't have an account? Please<a href="index.php">Register</a></div>
      </div>

    </form>
  </div>
  <!-- user login area end -->

  <!-- link jQuery js file -->
  <script src="./assets/lib/jquery/jquery-3.6.1.min.js"></script>

  <!-- link main scripts js file -->
  <script src="./assets/js/scripts.js"></script>

</body>

</html>