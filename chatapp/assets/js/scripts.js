// conflict jquery not problem
(function ($) {

  // all document ready
  jQuery(document).ready(function () {

    // user registration process with ajax
    jQuery('.form-register').submit(function () {

      // create variables
      let name = jQuery('#name').val();
      let email = jQuery('#email').val();
      let password = jQuery('#password').val();
      let confirmPassowrd = jQuery('#confirm-passowrd').val();

      // create register ajax
      $.ajax({
        type: "POST",
        url: "registration_process.php",
        data: {
          form_register: 'submited',
          name: name,
          email: email,
          password: password,
          confirm_passowrd: confirmPassowrd,
        },
        success: function (response) {
          jQuery('#message').html(response);
        }
      });

      return false;

    });

  });

}(jQuery));