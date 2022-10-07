<?php

  session_start();
  require_once "../config/config.php";
  $thakyou = 'hello bangldesh';

  // Signup Processing
  if (isset($_REQUEST['logged_in'])) {

    // define variables and set to empty values
    $your_email = $your_password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Create test input functions
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      // Create variable
      $your_email = test_input($_POST['your_email']);
      $your_password = test_input($_POST['your_password']);
      $pass_encripted = md5($your_password);
    }

    // Insert data processing
    if (!empty($your_email) && !empty($your_password)) {

      // Check users entered email matched to database any table row email
      $select_email = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$your_email}'");

      if (mysqli_num_rows($select_email) > 0) {

        // Check users entered password matched to database any table row password
        $select_password = mysqli_query($conn, "SELECT * FROM users WHERE password = '{$pass_encripted}'");

        if (mysqli_num_rows($select_password) > 0) {
          
          // Check users entered password matched to database any table row password
          // $select_all = mysqli_query($conn, "SELECT * FROM users");
          
          $row = mysqli_fetch_assoc($select_password);
          $_SESSION['unique_id'] = $row['unique_id'];
          echo '<div class="success-text">Login successfull</div>';
          // header('location: ../index.php');

        } else {
          echo 'Invalid Password!';
        }

      } else {
        echo 'Incorrect Email Address!';
      }

    } else {
      echo 'All input field are required!';
    }

  } // Signup Processing end
  
  $conn->close();
?>