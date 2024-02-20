$(document).ready(function(){
    $('#burger').on('click', function () {
            $('#menu').slideToggle(500)   
    });

    $('#phoneInput').inputmask('+7 (999) 999-99-99');
    
});