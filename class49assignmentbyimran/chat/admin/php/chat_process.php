<?php

  session_start();
  $_SESSION['unique_id'];
  require_once "../config/config.php";

  // Message Sending Processing
  if (isset($_REQUEST['msg_send'])) {

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
    }

    // define variables and set to empty values
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    if (!empty($msg)) {
      // Insert ougoing message
      $insert_msg = "INSERT INTO `messages`(`fname`,`lname`,`incoming_msg_id`,`outgoing_msg_id`, `msg`) VALUES ('{$fname}','{$lname}','{$incoming_id}','{$outgoing_id}','$msg')";
      $query = mysqli_query($conn, $insert_msg);

      if ($query) { ?>
        <!-- Chat Outgoing -->
        <div class="chat">
          <div class="details">
            <?php

              $messages = $conn->query("SELECT * FROM messages");

              while($row = mysqli_fetch_assoc($messages)) : ?>
                <span><?php echo $row['fname'] . ' ' . $row['lname']; ?></span>
                <p><?php echo $row['msg'] ?></p>
            <?php endwhile; ?>
          </div>
        </div>
        
      <?php } else {
        echo 'Something went wrong!';
      }
    }
  } // Message Sending Processing end

  // Message Sending Processing
  if (isset($_REQUEST['reload'])) : ?>

    <!-- Chat Outgoing -->
    <div class="chat outgoing">
      <div class="details">
        <?php
          $messages = $conn->query("SELECT * FROM messages");
          $select_user = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
          $rows = mysqli_fetch_assoc($select_user);

          while($row = mysqli_fetch_assoc($messages)) : ?>
            <span><?php echo $row['fname'] . ' ' . $row['lname']; ?></span>
            <p><?php echo $row['msg'] ?></p>
        <?php endwhile; ?>
      </div>
    </div>

  <?php endif; // Message Sending Processing end
  
  $conn->close();
?>
