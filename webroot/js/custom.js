$(document).ready(function() {
    textReset('#Name', 'Nome');
    textReset('#Subject', 'Assunto');
    textReset('#Email', 'Email');
    textReset('#Phone', 'Telefone');
    
    function textReset (input, val) {
        $(input).focus(function() {
            if($(input).val() == val)
                $(input).val('');
        });
    
        $(input).blur(function(){
            if($(input).val() == '' ) 
                $(input).val(val);
        });
    }
    
    function fadeClose(input, controle) {
        $(input).click(function() {
            $(controle).fadeOut('slow');
        });
    }
});


