<?php

  session_start();
  if (!isset($_SESSION['unique_id'])) {
    header('location: login.php');
  }
  require_once "config/config.php";
  require_once "admin_header.php";

  $select_all = mysqli_query($conn, "SELECT * FROM users");

?>

      <!-- SITE CONTENT START -->
      <div class="site-content">

        <!-- Show All Users Start -->
        <div class="all_users bg-info">
          <div class="container">
            <div class="table-responsive">
              <table class="table table-info table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Unique ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Eamil Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (mysqli_num_rows($select_all) > 0) {
                    while($row = mysqli_fetch_assoc($select_all)) : ?>
                      <tr>
                        <th scope="row"><?php echo $row['user_id']; ?></th>
                        <td><?php echo $row['unique_id']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                    <?php endwhile;
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Show All Users Start -->

      </div>
      <!-- SITE CONTENT END -->

<?php require_once "admin_footer.php"; ?>