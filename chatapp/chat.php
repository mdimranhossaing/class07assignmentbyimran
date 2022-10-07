<?php 

session_start();

// require functions file
if ( file_exists( dirname( __FILE__ ) . '/functions.php' ) ) {
  require_once( dirname( __FILE__ ) . '/functions.php' );
}

if (!user_logged_in()) {
  header('location: login.php');
}

$user_id = isset($_GET['user-id']) ? $_GET['user-id'] : null;

$user_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
$user_query = $conn->query($user_sql);
$user_row = $user_query->fetch_object();

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
        <a href="users.php">Exit</a>
      </div>

      <a class="name" href=""><?php echo $user_row->name; ?></a>

      <div class="chat-area">
        <div class="chat-box"></div>
      </div>

      <form class="message-form" action="" method="POST">
        <input id="sender-id" type="number" hidden value="<?php echo $_SESSION['user-id']; ?>">
        <input id="receiver-id" type="number" hidden value="<?php echo $user_row->user_id; ?>">
        <textarea id="message-field" cols="30" placeholder="Type something..."></textarea>
        <button type="submit">Send</button>
      </form>

    </div>
  </div>
  <!-- show all user area end -->

  <!-- link jQuery js file -->
  <script src="./assets/lib/jquery/jquery-3.6.1.min.js"></script>

  <!-- link main scripts js file -->
  <script src="./assets/js/scripts.js"></script>

</body>

</html>