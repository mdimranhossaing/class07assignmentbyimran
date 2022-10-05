<?php 

  // functions file including
  if (file_exists(dirname(__FILE__) . './functions.php')) {
    require_once(dirname(__FILE__) . './functions.php');
  }

  if (isset($_POST['form_register'])) {

    // create variables
    $name = $email = $password = $confirm_password = null;
    $error = array();



    echo 'Thanks for registration please<span class="link"><a href="login.php">Login</a></span>';
  }

?>