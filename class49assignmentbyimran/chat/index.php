<?php

  session_start();
  if (!isset($_SESSION['unique_id'])) {
    header('location: admin/login.php');
  }
  require_once "header.php";

  require_once "admin/config/config.php";

  $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$user_id}'");

  if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);

  }

  $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");

  if (mysqli_num_rows($sql2) > 0) {
    $row2 = mysqli_fetch_assoc($sql2);

  }

?>

      <!-- SITE CONTENT START -->
      <div class="site-content">
        <div class="container py-5">
          <h1 class="mb-4">homepage</h1>
          <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet exercitationem voluptates placeat odit id adipisci odio omnis quam numquam sit alias nobis nemo sunt recusandae, molestias earum nam dolorem, architecto animi ad, porro natus asperiores!</p><br>
          <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolore rerum eveniet repudiandae quibusdam officia ipsum, quasi totam illum dignissimos natus? Voluptate vitae molestiae nemo quas consequatur ipsam sed sit? Exercitationem aperiam totam, suscipit veritatis error temporibus voluptatibus fugit labore voluptatum accusantium, sed impedit repudiandae, quibusdam in. Mollitia, voluptas officia.</p><br>
          <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet exercitationem voluptates placeat odit id adipisci odio omnis quam numquam sit alias nobis nemo sunt recusandae, molestias earum nam dolorem, architecto animi ad, porro natus asperiores!</p><br>
          <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolore rerum eveniet repudiandae quibusdam officia ipsum, quasi totam illum dignissimos natus? Voluptate vitae molestiae nemo quas consequatur ipsam sed sit? Exercitationem aperiam totam, suscipit veritatis error temporibus voluptatibus fugit labore voluptatum accusantium, sed impedit repudiandae, quibusdam in. Mollitia, voluptas officia.</p><br>
          <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet exercitationem voluptates placeat odit id adipisci odio omnis quam numquam sit alias nobis nemo sunt recusandae, molestias earum nam dolorem, architecto animi ad, porro natus asperiores!</p><br>
          <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolore rerum eveniet repudiandae quibusdam officia ipsum, quasi totam illum dignissimos natus? Voluptate vitae molestiae nemo quas consequatur ipsam sed sit? Exercitationem aperiam totam, suscipit veritatis error temporibus voluptatibus fugit labore voluptatum accusantium, sed impedit repudiandae, quibusdam in. Mollitia, voluptas officia.</p><br>
          <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet exercitationem voluptates placeat odit id adipisci odio omnis quam numquam sit alias nobis nemo sunt recusandae, molestias earum nam dolorem, architecto animi ad, porro natus asperiores!</p><br>
          <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolore rerum eveniet repudiandae quibusdam officia ipsum, quasi totam illum dignissimos natus? Voluptate vitae molestiae nemo quas consequatur ipsam sed sit? Exercitationem aperiam totam, suscipit veritatis error temporibus voluptatibus fugit labore voluptatum accusantium, sed impedit repudiandae, quibusdam in. Mollitia, voluptas officia.</p><br>
        </div>
      </div>
      <!-- SITE CONTENT END -->

      <!-- Chat Button Start -->
      <div class="chat-button">
        <a href="javascript:void(0)" class="chat-button">
          <i class="fas fa-comment-alt"></i>
        </a>
      </div>
      <!-- Chat Button End -->

      <!-- Chat process -->
      <script>
        (function($){
          jQuery(document).ready(function(){

            chatBox = document.querySelector(".chat-box");

            // Form submit processing
            jQuery('.typing-area').submit(function(){

              var fname = jQuery('input[name="fname"]').val();
              var lname = jQuery('input[name="lname"]').val();
              var outgoing_id = jQuery('input[name="outgoing_id"]').val();
              var incoming_id = jQuery('input[name="incoming_id"]').val();
              var msg = jQuery('input[name="msg"]').val();

              // Let's start Ajax
              $.ajax({
                'url'     : 'admin/php/chat_process.php',
                'type'    : 'POST',
                'data'    : {
                  'msg_send'    : 'form_submited',
                  'fname' : fname,
                  'lname' : lname,
                  'outgoing_id' : outgoing_id,
                  'incoming_id' : incoming_id,
                  'message'     : msg,
                },
                'success' : function(output){
                  jQuery('.chat-box').html(output);
                  jQuery('.field .empty').val('');
                  scrollToBottom();
                }
              });

              return false;
            });

            // Auto reload
            setInterval(() => {
              $.ajax({
                'url'     : 'admin/php/chat_process.php',
                'type'    : 'POST',
                'data'    : {
                  'reload'  : 'form_submited',
                },
                'success' : function(output){
                  jQuery('.chat-box').html(output);
                }
              });
            }, 200);

            
            function scrollToBottom(){
              chatBox.scrollTop = chatBox.scrollHeight;
            }



          });
        }(jQuery));
      </script>

      <!-- Chat Area Start -->
      <div class="chat-area">

        <!-- Chat Header Start -->
        <div class="header">
          <a class="back-icon" href="javascript:void(0)">
            <i class="fas fa-arrow-left"></i>
          </a>
          <div class="details">
            <span><?php echo $row['fname'] . ' ' . $row['lname'];; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <!-- Chat Header End -->

        <!-- Chat Box Start -->
        <div class="chat-box">
          
        </div>
        <!-- Chat Box End -->

        <!-- Typing Area Start -->
        <form action="#" class="typing-area field" method="POST">
          <input type="text" name="fname" value="<?php echo $row2['fname']; ?>" hidden>
          <input type="text" name="lname" value="<?php echo $row2['lname']; ?>" hidden>
          <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
          <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
          <input class="empty" type="text" name="msg" placeholder="Type a message here...">
          <button><i class="fab fa-telegram-plane"></i></button>
        </form>
        <!-- Typing Area End -->

      </div>
      <!-- Chat Area End -->
      <script src="js/users.js"></script>

<?php require_once "footer.php"; ?>