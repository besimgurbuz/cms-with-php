function contact(formId) {
    var data = $(formId).serialize();
    $.post(api_url+ '/contact',data,function (response) {
        if(response.error){
            $('#contact-success-msg').hide();
            $('#contact-error-msg').show().html(response.error);
        }else{
            $('#contact-error-msg').hide();
            $('#contact-success-msg').show().html(response.success);
            $(formId+' input, '+formId+' textarea').val('');
        }
    },'json');
}
function newsletter(formId) {
    var data = $(formId).serialize();
    $.post(api_url+ '/newsletter',data,function (response) {
        if(response.error){
            $('#newsletter-success-msg').hide();
            $('#newsletter-error-msg').show().html(response.error);
        }else{
            $('#newsletter-error-msg').hide();
            $('#newsletter-success-msg').show().html(response.success);
            $(formId+' input, '+formId+' textarea').val('');
        }
    },'json');
}