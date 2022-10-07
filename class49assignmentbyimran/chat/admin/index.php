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
      jQuery('input[name="signup"]').click(function(){

        var fname = jQuery('input[name="fname"]').val();
        var lname = jQuery('input[name="lname"]').val();
        var email = jQuery('input[name="email"]').val();
        var newPass = jQuery('input[name="new_password"]').val();
        var conPass = jQuery('input[name="confirm_password"]').val();

        // Let's start Ajax
        $.ajax({
          'url'     : 'php/signup_process.php',
          'type'    : 'POST',
          'data'    : {
            'register'          : 'form_submited',
            'fname'             : fname,
            'lname'             : lname,
            'email'             : email,
            'new_password'      : newPass,
            'confirm_password'  : conPass,
          },
          'success' : function(output){
            jQuery('.error-text').show();
            jQuery('.error-text').html(output);
            jQuery('.field input').val('');
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
        <div class="form signup">
          <!-- Form Header Start -->
          <div class="form-header">
            <h1>sign up</h1>
          </div>
          <!-- Form Header End -->

          <!-- Form Start -->
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="row">

              <div class="col-12">
                <!-- Success Maggage -->
                <div class="error-text"></div>
                <?php if(isset($thakyou)) { echo $thakyou; } ?>
              </div>

              <!-- Name Details -->
              <div class="col-12">
                <div class="name-details">
                  <div class="row">
                    <!-- First Name -->
                    <div class="field col-md-6">
                      <label class="form-label" for="fname">first name</label>
                      <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter firs name">
                    </div>
                    <!-- Last Name -->
                    <div class="field col-md-6">
                      <label class="form-label" for="lname">last name</label>
                      <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter last name">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Email Address -->
              <div class="field col-12">
                <label class="form-label" for="email">email address</label>
                <input class="form-control" type="text" id="email" name="email" placeholder="Enter your email">
              </div>

              <!-- New Password -->
              <div class="field col-12">
                <div class="eye">
                  <label class="form-label" for="new_password">password</label>
                  <input class="form-control" type="password" id="new_password" name="new_password" placeholder="Enter new password">
                  <i id="NewPassShow" class="fas fa-eye"></i>
                  <i id="NewPassHide" class="fas fa-eye-slash"></i>
                </div>
              </div>

              <!-- Confirm Password -->
              <div class="field col-12">
                <div class="eye">
                  <label class="form-label" for="confirm_password">confirm password</label>
                  <input class="form-control" type="password" id="confirm_password" name="confirm_password" placeholder="Re-enter password">
                  <i id="ConPassShow" class="fas fa-eye"></i>
                  <i id="ConPassHide" class="fas fa-eye-slash"></i>
                </div>
              </div>

              <!-- Form Submit -->
              <div class="button col-12">
                <input class="form-control" type="submit" name="signup" value="sign up">
              </div>

            </div>
          </form>
          <!-- Form End -->

          <!-- Link -->
          <div class="link">
            Already Signed up? 
            <a href="login.php">Login now</a>
          </div>
        </div>
        <!-- Form Area Start -->

      </div>
      <!-- SITE CONTENT END -->

<?php require_once "admin_footer.php"; ?>