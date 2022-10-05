<?php 

// require functions file
if ( file_exists( dirname( __FILE__ ) . '/functions.php' ) ) {
  require_once( dirname( __FILE__ ) . '/functions.php' );
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
  <title>Show all users</title>
</head>

<body>

  <table border="1" cellpadding="10" cellspacing="5">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email address</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if ( $query->num_rows > 0 ) :
        while( $row = $query->fetch_object() ) :
    ?>
      <tr>
        <td><?php echo $row->username; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->password; ?></td>
      </tr>
      <?php 
        endwhile;
      endif;
    ?>
    </tbody>
  </table>

</body>

</html>