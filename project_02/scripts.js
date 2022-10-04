jQuery(document).ready(function(){

  jQuery('.register').on('submit', function(){

    // create variables
    let name = jQuery('#name').val();
    let email = jQuery('#email').val();
    let password = jQuery('#password').val();

    // create ajax
    $.ajax({
      url : 'r_process.php',
      type : 'POST',
      data : {
        name : name,
        email : email,
        password : password
      },
      success : function(data){
        jQuery('#info').html(data);
      }
    });

    return false;
  });

});