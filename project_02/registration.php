<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="registration">

    <form class="form-register" action="" method="POST">

      <h2 class="title">Registration form</h2>

      <div class="input-group">
        <label for="name">Your name</label>
        <input type="text" id="name" placeholder="Enter your name">
        <div class="name-error"></div>
      </div>

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

      <div class="input-group">
        <label for="confirm-password">Confirm password</label>
        <input type="password" id="confirm-password" placeholder="Enter confirm password">
        <div class="confirm-error"></div>
      </div>

      <button type="submit">Register</button>

      <div id="massage">If you are a existing user please <a href="login.php">Login</a></div>

    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="./scripts.js"></script>
</body>

</html>