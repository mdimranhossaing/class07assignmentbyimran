<?php 

  // session start
  session_start();

  // functions file including
  if (file_exists(dirname(__FILE__) . '/functions.php')) {
    require_once(dirname(__FILE__) . '/functions.php');
  }

  // registration processign
  if (isset($_POST['form_register'])) {

    // define variables and set empty value
    $name = $email = $password = $confirm_password = null;
    $error = array();

    // assign variables value
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = test_input($_POST['name']);
      $email = test_input($_POST['email']);
      $password = test_input($_POST['password']);
      $confirm_password = test_input($_POST['confirm_password']);
    }

    /* ==== form validation ====*/

    // name
    if(empty($name)){
      $error['name'] = 'Name is required.<br><br>';
      echo $error['name'];
    } elseif(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
      $error['name'] = 'Only letters and white space allowed is name field.<br><br>';
      echo $error['name'];
    }

    // check this email already use in the database
    $select_email_sql = "SELECT email FROM users WHERE email = '$email'";
    $select_email_query = $conn->query($select_email_sql);

    // email
    if(empty($email)){
      $error['email'] = 'Email is required.<br><br>';
      echo $error['email'];
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $error['email'] = 'Invalid email format.<br><br>';
      echo $error['email'];
    } elseif($select_email_query->num_rows > 0){
      $error['email'] = 'This email is already beign used.<br><br>';
      echo $error['email'];
    }

    // regular expetions
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialchars = preg_match('@[^\w]@', $password);

    // password
    if(empty($password)) {
      $error['password'] = 'Password is required.<br><br>';
      echo $error['password'];
    } elseif(strlen($password) < 8){
       $error['password'] = 'Password must be at least 8 characters in length.<br><br>';
       echo $error['password'];
    } elseif(!$number){
       $error['password'] = 'Password must be at least one number.<br><br>';
       echo $error['password'];
    } elseif(!$uppercase){
       $error['password'] = 'Password must be at least one upper case letter.<br><br>';
       echo $error['password'];
    } elseif(!$lowercase){
       $error['password'] = 'Password must be at least one  lower case letter.<br><br>';
       echo $error['password'];
    } elseif(!$specialchars){
       $error['password'] = 'Password must be at least one special character.<br><br>';
       echo $error['password'];
    }

    // confirm password
    if(empty($confirm_password)){
      $error['confirm-password'] = 'Confirm password is required.<br><br>';
      echo $error['confirm-password'];
    } elseif($password !== $confirm_password && !empty($password)){
      $error['confirm-password'] = 'Confirm password is not match.<br><br>';
    } elseif($password === $confirm_password){
      $solt_password = md5($confirm_password);
    }

    /* ==== genared unique id ====*/
    $unique_id = rand(10,100).rand(100,1000);

    /* ==== insert data on database table ====*/
    if(count($error) == 0){
      
      $sql = "INSERT INTO users(unique_id, name, email, password) VALUES('$unique_id','$name','$email','$solt_password')";

      if($conn->query($sql) === true){
        echo '<span class="link">Thanks for registration please<a href="login.php">Login</a></span>';
        $_SESSION['register'] = 'success';
      }
    }
  }

?>