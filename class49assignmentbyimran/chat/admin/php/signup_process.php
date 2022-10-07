<?php

  session_start();
  require_once "../config/config.php";

  // Signup Processing
  if (isset($_REQUEST['register'])) {

    // define variables and set to empty values
    $fanme = $lname = $email = $newpass = $conpass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Create test input functions
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      // Create variable
      $fname = test_input($_POST['fname']);
      $lname = test_input($_POST['lname']);
      $email = test_input($_POST['email']);
      $newpass = test_input($_POST['new_password']);
      $conpass = test_input($_POST['confirm_password']);

      // Email already exists
      $select_email = "SELECT `email` FROM `users` WHERE `email` = '{$email}'";
      $email_exists = mysqli_query($conn, $select_email) or exit(mysqli_error($conn));

      // Password validation variable
      $number = preg_match('@[0-9]@', $newpass);
      $uppercase = preg_match('@[A-Z]@', $newpass);
      $lowercase = preg_match('@[a-z]@', $newpass);
      $specialChars = preg_match('@[^\w]@', $newpass);
    }

    // Insert data processing
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($newpass) && !empty($conpass)) {

      // Check user first name is valid or not
      if (preg_match("/^[a-zA-Z-' ]*$/",$fname)) { // If first name is valid

        // Check user last name is valid or not
        if (preg_match("/^[a-zA-Z-' ]*$/",$lname)) { // If last name is valid

          // Check user email is valid or not
          if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // If email is valid

            // Check that email already exists in the database or not
            if (mysqli_num_rows($email_exists) > 0) { // if email already exists
              echo $email . ' - This email is already being used.';
            } else {
              
              // Check user password
              if (strlen($newpass) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
                echo 'Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.';
              } else {

                // Match confirm password
                if ($newpass !== $conpass && !empty($_REQUEST['new_password'])) {
                  echo 'Password is not match';
                } else {

                  // Create hash password
                  $hash_password = md5($conpass);

                  $time = time(); // this will return us current time... 
                  // we need this time because when you uploading user img to in our folder ue rename user file with current time
                  // so all the image file will have a unique name
                  
                  $status = 'Active now'; // once user signed up then his status wil be active now
                  $random_id = rand(time(), 10000000); // Creating random id for user

                  // Let's insert all data inside table
                  $sql = "INSERT INTO `users`(`unique_id`, `fname`, `lname`, `email`, `password`, `status`) VALUES ('$random_id','$fname','$lname','$email','$hash_password','$status')";
                        
                  // Create query
                  $query = mysqli_query($conn, $sql);

                  if ($query) { // if these data inserted
                    $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if (mysqli_num_rows($sql2) > 0) {
                      $row = mysqli_fetch_assoc($sql2);
                      $_SESSION['unique_id'] = $row['unique_id'];
                      echo '<div class="success-text">Thank you for signup</div>';
                    }
                  } else {
                    echo 'Something went wrong!';
                  }

                }

              }

            }
            
          } else {
            echo $email . ' - This is not a valid Email';
          }

        } else {
          echo 'Last name field is Only letters and white space allowed';
        }

      } else {
        echo 'First name field is Only letters and white space allowed';
      }

    } else {
      echo 'All input field are required!';
    }

  } // Signup Processing end
  
  $conn->close();
?>