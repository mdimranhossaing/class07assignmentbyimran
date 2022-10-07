<?php

  session_start();
  if (isset($_SESSION['unique_id'])) {
    header('location: ../index.php');
  }

  require_once "admin_header.php";

?>

<!-- Registratio process -->
<script>
  (function($){
    jQuery(document).ready(function(){

      // Form submit processing
      jQuery('input[name="login"]').click(function(){

        var yourEmail = jQuery('input[name="your_email"]').val();
        var yourPass = jQuery('input[name="your_password"]').val();

        // Let's start Ajax
        $.ajax({
          'url'     : 'php/login_process.php',
          'type'    : 'POST',
          'data'    : {
            'logged_in'          : 'form_submited',
            'your_email'         : yourEmail,
            'your_password'      : yourPass,
          },
          'success' : function(output){

            jQuery('.error-text').show();
            jQuery('.error-text').html(output);
            jQuery('.field input').val('');
            header('location: ../index.php');
          }
        });

        return false;
      });

    });
  }(jQuery));
</script>

      <!-- SITE CONTENT START -->
      <div class="site-content admin">

        <!-- Form Area Start -->
        <div class="form login">
          <!-- Form Header Start -->
          <div class="form-header">
            <h1>login</h1>
          </div>
          <!-- Form Header End -->

          <!-- Form Start -->
          <form action="#" method="POST">
            <div class="row">

              <div class="col-12">
                <!-- Success Maggage -->
                <div class="error-text"></div>
                <?php if(isset($thakyou)) { echo $thakyou; } ?>
              </div>

              <!-- Email Address -->
              <div class="field col-12">
                <label class="form-label" for="your_email">email address</label>
                <input class="form-control" type="email" id="your_email" name="your_email" placeholder="Enter your email">
              </div>

              <!-- Your Password -->
              <div class="field col-12">
                <div class="eye">
                  <label class="form-label" for="your_password">password</label>
                  <input class="form-control" type="password" id="your_password" name="your_password" placeholder="Enter your password">
                  <i id="YourPassShow" class="fas fa-eye"></i>
                  <i id="YourPassHide" class="fas fa-eye-slash"></i>
                </div>
              </div>

              <!-- Form Submit -->
              <div class="button col-12">
                <input class="form-control" type="submit" name="login" value="Login">
              </div>

            </div>
          </form>
          <!-- Form End -->

          <!-- Link -->
          <div class="link">
            Not yet Signed up? 
            <a href="index.php">Signup now</a>
          </div>
        </div>
        <!-- Form Area Start -->

      </div>
      <!-- SITE CONTENT END -->

<?php require_once "admin_footer.php"; ?>