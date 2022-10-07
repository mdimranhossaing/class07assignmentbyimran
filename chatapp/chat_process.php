<?php 

  // session start
  session_start();

  // functions file including
  if (file_exists(dirname(__FILE__) . '/functions.php')) {
    require_once(dirname(__FILE__) . '/functions.php');
  }

  // messageing processign
  if (isset($_POST['message_form'])) {

    // define variables and set empty value
    $sender_id = $receiver_id = $message = null;
    $error = array();

    // assign variables value
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $sender_id = test_input($_POST['sender_id']);
      $receiver_id = test_input($_POST['receiver_id']);
      $message = test_input($_POST['message']);
    }

    /* ==== form validation ====*/

    // sender id
    if(empty($sender_id)){
      $error['sender-id'] = 'Sender ID is required.';
      echo $error['sender-id'];
    }

    // receiver id
    if(empty($receiver_id)){
      $error['receiver-id'] = 'Receiver ID is required.';
      echo $error['receiver-id'];
    }

    // message
    if(empty($message)){
      $error['message'] = 'Please type something and send.';
    }

    /* ==== insert data on database table ====*/
    if(count($error) == 0){
      
      $sql = "INSERT INTO messages(user_id, receiver_id, message) VALUES('$sender_id','$receiver_id','$message')";

      if($conn->query($sql) === true){

        $select_message_sql = "SELECT * FROM users u INNER JOIN messages m ON u.user_id = m.user_id";
        $select_message_query = $conn->query($select_message_sql);

        if ($select_message_query->num_rows > 0) :

        while($select_message_row = $select_message_query->fetch_object()) :
        ?>
          <div class="chat">
            <a href=""><?php echo $select_message_row->name; ?></a>
            <p id="chat-text"><?php echo $select_message_row->message; ?></p>
          </div>
        <?php
        endwhile;
        endif;
      }
    }
  }

  if (isset($_POST['reload'])) {
    $select_message_sql = "SELECT * FROM users u INNER JOIN messages m ON u.user_id = m.user_id";
        $select_message_query = $conn->query($select_message_sql);

        if ($select_message_query->num_rows > 0) :

        while($select_message_row = $select_message_query->fetch_object()) :
        ?>
          <div class="chat">
            <a href=""><?php echo $select_message_row->name; ?></a>
            <p id="chat-text"><?php echo $select_message_row->message; ?></p>
          </div>
        <?php
        endwhile;
      endif;
  }

?>