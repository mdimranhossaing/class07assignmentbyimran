<?php 

session_start();

// require functions file
if ( file_exists( dirname( __FILE__ ) . '/functions.php' ) ) {
  require_once( dirname( __FILE__ ) . '/functions.php' );
}

if (!user_logged_in()) {
  header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat page | by Imran</title>

  <!-- link main stylesheet css file -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- show all user area start -->
  <div class="chatpage">

    <div class="inner-box">

      <div class="top">
        <h2 class="title">Chat Page</h2>
      </div>

      <div class="chat-area">message area</div>

    </div>
  </div>
  <!-- show all user area end -->

  <!-- link jQuery js file -->
  <script src="./assets/lib/jquery/jquery-3.6.1.min.js"></script>

  <!-- link main scripts js file -->
  <script src="./assets/js/scripts.js"></script>

</body>

</html>