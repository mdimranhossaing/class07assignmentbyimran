<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
</head>
<body>
  <form class="register" action="" method="POST">
    <label for="name">Your name</label><br>
    <input type="text" id="name" placeholder="Enter your name"><br><br>
    
    <label for="email">Email address</label><br>
    <input type="email" id="email" placeholder="Enter your email"><br><br>

    <label for="password">Password</label><br>
    <input type="password" id="password" placeholder="Enter a password"><br><br>

    <button type="submit">Register</button>
  </form>

  <pre>
  <div id="info"></div>
  </pre>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="./scripts.js"></script>
</body>
</html>