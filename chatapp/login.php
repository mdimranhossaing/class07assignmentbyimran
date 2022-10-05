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
        <div class="email-error"></div>
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter a password">
        <div class="password-error"></div>
      </div>

      <button type="submit">login</button>

      <div id="massage">Don't have an account? Please<a href="index.php">Register</a></div>

    </form>
  </div>
  <!-- user login area end -->

  <!-- link jQuery js file -->
  <script src="./assets/lib/jquery/jquery-3.6.1.min.js"></script>

  <!-- link main scripts js file -->
  <script src="./assets/js/scripts.js"></script>

</body>

</html>