var $ = jQuery.noConflict();

// Article add img class

$(document).ready(function() {
   jQuery('.es_subscription_form').attr('action', window.location.pathname + '#es_form_f1-n1');

   $('a').attr('rel', 'nofollow noopener');

   // add class for images uploaded through wordpress
   $("img[class^='wp-image-'],img[class*=' wp-image-']").removeClass().addClass('article-img');

   $('p img').parent().css('padding', '0');

   // remove empty paragraphs
   $('p').filter(function () { return $.trim(this.innerHTML) == "" }).remove();
});

function sendBook() {
   let email = jQuery('.ig_es_form_field_email').val();
   let action = jQuery('input[name="action"]').val();
   console.log(action);

   let formData = new FormData();
   formData.append('email', email);

   if (validateEmail(email)) {
      console.log(email);

      jQuery.ajax({
         url: action,
         type: 'POST',
         dataType: 'json',
         processData: false,
         contentType: false,
         data: formData,
         success: function (data) {
            console.log(data);
            jQuery('.es_submit_button').attr('name', 'sth-else');
            jQuery('.es_subscription_form').submit();
         },
         error: function (error) {
            console.log('error' + error);
         },
      });
   };
};

function validateEmail(email) {
   var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
   return re.test(email);
}

// Article add img class - end
