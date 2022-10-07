<?php 

// database configuration file inclueding
if ( file_exists( dirname( __FILE__ ) . '/config/config.php' ) ) {
  require_once( dirname( __FILE__ ) . '/config/config.php' );
}

// create test input function
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// if user logged in functions create
function user_logged_in(){
  if (isset($_SESSION['register']) || isset($_SESSION['login'])) {
    return true;
  } else {
    return false;
  }
}