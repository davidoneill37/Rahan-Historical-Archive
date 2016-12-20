$(document).ready(function() {
 $('#contact-form').validate({
  rules: {
   name: {
    minlength: 2,
    required: true
   },
   email: {
    required: true,
    email: true
   },
   subject: {
    minlength: 2,
    required: true
   },
   message: {
    minlength: 2,
    required: true
   }
  },
  highlight: function(element) {
   $(element).closest('.control-group').removeClass('success').addClass('error');
  },
  success: function(element) {
   element.text('OK!').addClass('valid').closest('.control-group').removeClass('error').addClass('success');
  }, 
  
  submitHandler: function( form ) {
       
        $.ajax({
            url : 'contact/process',
            data : $('#contact-form').serialize(),
            type: "POST",
            success : function(data){
             $("#contact-form").hide('slow');
             $('#results').html(data);
            }
        })
        return false;
     }
  
 });  
}); // end document.ready