$(document).ready(function(){

    $('.product-image').click(function(){
        var img = $(this).children('img').attr('src');
        $('.pop-up img').attr('src', img);
    });

    $('.close').click(function(){

        $('.pop-up').hide();
    });


});
