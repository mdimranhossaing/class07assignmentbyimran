// conflict jquery not problem
(function ($) {

  // all document ready
  jQuery(document).ready(function () {

    var pathname = window.location.pathname; // Returns path only (/path/example.html)
    var url = window.location.href; // Returns full URL (https://example.com/path/example.html)
    var origin = window.location.origin; // Returns base URL (https://example.com

    // var dir = pathname.substring(0, loc.lastIndexOf('/'));
    // window.location.replace("http://stackoverflow.com");

    var loc = window.location.pathname; // Returns path only (/path/example.html)
    var dir = loc.substring(0, loc.lastIndexOf('/')); // Returns directory only (/path)


    // user registration process with ajax
    jQuery('.form-register').submit(function () {

      // create variables
      let name = jQuery('#name').val();
      let email = jQuery('#email').val();
      let password = jQuery('#password').val();
      let confirmPassowrd = jQuery('#confirm-password').val();

      // create register ajax
      $.ajax({
        type: "POST",
        url: "registration_process.php",
        data: {
          form_register: 'submited',
          name: name,
          email: email,
          password: password,
          confirm_password: confirmPassowrd,
        },
        success: function (response) {
          jQuery('#message').html(response);

          // all variables set empty value
          jQuery('#name').val(' ');
          jQuery('#email').val(' ');
          jQuery('#password').val(' ').attr('type', 'text');
          jQuery('#confirm-password').val(' ').attr('type', 'text');
        }
      });

      return false;

    });

    // user login process with ajax
    jQuery('.form-login').submit(function () {

      // create variables
      let email = jQuery('#email').val();
      let password = jQuery('#password').val();

      // create login ajax
      $.ajax({
        type: "POST",
        url: "login_process.php",
        data: {
          form_login: 'submited',
          email: email,
          password: password,
        },
        success: function (response) {
          jQuery('#message').html(response);

          // all variables set empty value
          jQuery('#email').val(' ');
          jQuery('#password').val(' ').attr('type','text');

          if(login == 'success') {
            window.location.href = origin + dir + '/' + 'users.php';
          }
        }
      });

      return false;

    });

  });

}(jQuery));