(function($){

  jQuery(document).ready(function(){
    
    // New Password Show & Hide
    var newPass = jQuery('#new_password');
    var newPassShow = jQuery('#NewPassShow');
    var newPassHide = jQuery('#NewPassHide');

    newPassShow.click(function(){
      newPass.attr('type', 'text');
      jQuery(this).hide();
      newPassHide.show();
    });
    newPassHide.click(function(){
      newPass.attr('type', 'password');
      jQuery(this).hide();
      newPassShow.show();
    });
    
    // Confirm Password Show & Hide
    var conPass = jQuery('#confirm_password');
    var conPassShow = jQuery('#ConPassShow');
    var conPassHide = jQuery('#ConPassHide');

    conPassShow.click(function(){
      conPass.attr('type', 'text');
      jQuery(this).hide();
      conPassHide.show();
    });
    conPassHide.click(function(){
      conPass.attr('type', 'password');
      jQuery(this).hide();
      conPassShow.show();
    });
    
    // Your Password Show & Hide
    var yourPass = jQuery('#your_password');
    var yourPassShow = jQuery('#YourPassShow');
    var yourPassHide = jQuery('#YourPassHide');

    yourPassShow.click(function(){
      yourPass.attr('type', 'text');
      jQuery(this).hide();
      yourPassHide.show();
    });
    yourPassHide.click(function(){
      yourPass.attr('type', 'password');
      jQuery(this).hide();
      yourPassShow.show();
    });

    // Chat area
    jQuery('.chat-button').click(function(){
      jQuery('.chat-area').show();
    });
    jQuery('.back-icon').click(function(){
      jQuery('.chat-area').hide();
    });

  }); // Document Ready Functions

})(jQuery);