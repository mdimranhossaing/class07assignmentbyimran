<?php
  session_start();

  require_once "../config/config.php";

  $sql = mysqli_query($conn, "SELECT * FROM users");

  if (mysqli_num_rows($sql) == 1) {
    echo "Now users are available to chat";
  } elseif (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) : ?>
      <a target="_blank" href="index.php/<?php echo $row['unique_id']; ?>">
      <div class="content">
      <div class="details">
          <span><?php echo $row['fname'] . ' ' . $row['lname']; ?></span>
            <p>This is text message</p>
          </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
      </a>
    <?php endwhile;
  }

?>