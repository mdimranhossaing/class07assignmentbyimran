jQuery(document).ready(function () {

  jQuery('.form-register').on('submit', function () {

    // create variables
    let name = jQuery('#name').val().trim();
    let email = jQuery('#email').val().trim();
    let password = jQuery('#password').val().trim();
    let conPassword = jQuery('#confirm-password').val().trim();

    // name field validation
    if(name == '' || name == null) {
      jQuery('.name-error').text('Name is required.');
    } else {
      jQuery('.name-error').text();
    }

    // email field validation
    if(email == '' || email == null) {
      jQuery('.email-error').text('Email is required.');
    } else {
      jQuery('.email-error').text();
    }

    // password field validation
    if(password == '' || password == null) {
      jQuery('.password-error').text('Password is required.');
    } else {
      jQuery('.password-error').text();
    }

    // email field validation
    if(conPassword == '' || conPassword == null) {
      jQuery('.confirm-error').text('Confirm password is required.');
    } else {
      jQuery('.confirm-error').text();
    }

    // create ajax
    $.ajax({
      url: 'r_process.php',
      type: 'POST',
      data: {
        name: name,
        email: email,
        password: password,
        con_password: conPassword,
      },
      success: function (data) {
        jQuery('#massage').html(data);
      }
    });

    return false;
  });

});