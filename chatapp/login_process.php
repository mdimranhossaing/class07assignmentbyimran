<?php 

  // session start
  session_start();

  // functions file including
  if (file_exists(dirname(__FILE__) . '/functions.php')) {
    require_once(dirname(__FILE__) . '/functions.php');
  }

  // login processign
  if (isset($_POST['form_login'])) {

    // define variables and set empty value
    $email = $password = null;
    $error = array();

    // assign variables value
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email = test_input($_POST['email']);
      $password = test_input($_POST['password']);
    }

    /* ==== form validation ====*/

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

      // check this email already use in the database
      $select_password_sql = "SELECT password FROM users WHERE email = '$email'";
      $select_password_query = $conn->query($select_password_sql);

      $row = $select_password_query->fetch_object();

      if (md5($password) === $row->password) {
        echo '<span class="link">Login successfuly</span>';
        $this_user_sql = "SELECT * FROM users WHERE email = '$email'";
        $this_user_query = $conn->query($this_user_sql);
        $this_user_row = $this_user_query->fetch_object();
        $_SESSION['user-id'] = $this_user_row->user_id;
        $_SESSION['login'] = 'success';
        ?>
        <script>
          let login = 'success';
        </script>
        <?php
      } else {
        echo 'Password not match';
      }
    } else {
      echo 'Please insert correct email';
    }

  }

?>