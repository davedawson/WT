function form_input_classes(){
    jQuery('input[name=email]').addClass('input_email');
    jQuery('input[name=firstname]').addClass('input_firstname');
    jQuery('input[name=lastname]').addClass('input_lastname');
    jQuery('input[name=addr1]').addClass('input_addr1');
    jQuery('input[name=addr2]').addClass('input_addr2');
    jQuery('input[name=city]').addClass('input_city');
    jQuery('input[name=zip]').addClass('input_zip');
    jQuery('select[name=state_cd]').addClass('select_state_cd');
    jQuery('select[name=country]').addClass('select_country');
    jQuery('input[name=phone]').addClass('input_phone');

    jQuery('input[type="text"]').addClass('text');
    jQuery('input[type="password"]').addClass('text');
    jQuery('input[type="checkbox"]').addClass('checkbox');
    jQuery('input[type="radio"]').addClass('radiobutton');
    jQuery('input[type="submit"]').addClass('submit');
    jQuery('input[type="image"]').addClass('buttonImage');
}

function headerExpand(){
        jQuery('#landing #sign-up a.action').click(function() {
          jQuery('#landing #sign-up form').slideToggle('slow', function() {
            // Animation complete.
          });
          jQuery('#landing #sign-up a.action').toggleClass("selected");
          return false
        });
}


 jQuery(document).ready(function() {
	form_input_classes();
    headerExpand();
});
