<?php

  session_start();
  if (!isset($_SESSION['unique_id'])) {
    header('location: admin/login.php');
  }
  require_once "header.php";

  require_once "admin/config/config.php";

  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");

  if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
  }

?>
      <!-- SITE CONTENT START -->
      <div class="site-content admin">

        <!-- Users Area Start -->
      <div class="users-area">
        <script>
        </script>
        <!-- Users Header Start -->
        <div class="header">
          <div class="details">
            <a class="back-icon" href="javascript:void(0)">
              <i class="fas fa-arrow-left"></i>
            </a>
            <span><?php echo $row['fname'] . ' ' . $row['lname']; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
          <!-- Logout Button -->
          <div class="logout">
            <a href="admin/logout.php">Logout</a>
          </div>
        </div>
        <!-- Users Header End -->

        <!-- Search Area Start -->
        <div class="search">
          <span class="text">Select and user to start chat</span>
          <input type="search" name="search_user" placeholder="Enter name to search...">
          <button><i class="fas fa-search"></i></button>
        </div>
        <!-- Search Area End -->

        <!-- Users List Start -->
        <div class="users-list">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM users");

        if (mysqli_num_rows($sql) == 1) {
          echo "Now users are available to chat";
        } elseif (mysqli_num_rows($sql) > 0) {
          while($row = mysqli_fetch_assoc($sql)) : ?>
            <a href="index.php?user_id=<?php echo $row['unique_id']; ?>">
            <div class="content">
            <div class="details">
                <span><?php echo $row['fname'] . ' ' . $row['lname']; ?></span>
                  <p>This is text message</p>
                </div>
              </div>
              <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>
          <?php endwhile;
        } ?>
        </div>
        <!-- User List End -->

        </div>
        <!-- Users Area End -->

        </div>
      <!-- SITE CONTENT END -->

<?php require_once "admin/admin_footer.php"; ?>