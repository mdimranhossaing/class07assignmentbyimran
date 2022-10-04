<?php 

  // require functions file
  if ( file_exists( dirname( __FILE__ ) . '/functions.php' ) ) {
    require_once( dirname( __FILE__ ) . '/functions.php' );
  }

  // create variables
  $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
  $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
  $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;

  // registration process
  $sql = "INSERT INTO users(username, email, password) VALUES ('$name', '$email', '$password')";
  $query = $conn->query($sql);

  if ($query === true) {
    echo 'New record created successfuly';
  } else {
    echo 'Error: ' . $query . '<br>' . $conn->error;
  }

  $conn->close();


?>