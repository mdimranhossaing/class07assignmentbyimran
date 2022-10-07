<?php 

session_start();

// require functions file
if ( file_exists( dirname( __FILE__ ) . '/functions.php' ) ) {
  require_once( dirname( __FILE__ ) . '/functions.php' );
}

if (!user_logged_in()) {
  header('location: login.php');
}

// create sql query
$sql = "SELECT * FROM users";
// create query
$query = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users page | by Imran</title>

  <!-- link main stylesheet css file -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- show all user area start -->
  <div class="users">

    <div class="user-area">

      <div class="top">
        <?php 
          if (isset($_SESSION['unique-id'])) {
            $this_user_unique_id = $_SESSION['unique-id'];

            $this_user_info_sql = "SELECT * FROM users WHERE unique_id = '$this_user_unique_id'";

            $this_user_all_info = $conn->query($this_user_info_sql);

            $this_user_row = $this_user_all_info->fetch_object();
            echo '<h2 class="title">' . $this_user_row->name . '</h2>';
          }
        ?>
        <a href="logout.php">Logout</a>
      </div>

      <ul>

        <?php 
            $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
            $link_path = dirname($actual_link);

            if ( $query->num_rows > 0 ) :
              while( $row = $query->fetch_object() ) :
          ?>
        <li>
          <a href="<?php echo $link_path; ?>/chat.php?unique_id=<?php echo $row->unique_id; ?>"><?php echo $row->name; ?></a>
        </li>
        <?php 
              endwhile;
            endif;
          ?>

      </ul>

    </div>
  </div>
  <!-- show all user area end -->

  <!-- link jQuery js file -->
  <script src="./assets/lib/jquery/jquery-3.6.1.min.js"></script>

  <!-- link main scripts js file -->
  <script src="./assets/js/scripts.js"></script>

</body>

</html>