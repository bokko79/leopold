$(document).ready(function(){
    $(".filter li").click(function(){
        $('html,body').animate({scrollTop: $(this).offset().top-40}, 800);
    });
});