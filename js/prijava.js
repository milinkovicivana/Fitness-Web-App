$(function(){

	$(".registracija").show();
    $(".registracija1").hide();
    $("#sign").click(function(){
        $(".registracija").show();
        $(".registracija1").hide();
        $('#log').removeClass('otvoreno');
        $(this).addClass('otvoreno');
    });
    $("#log").click(function(){
        $(".registracija").hide();
        $(".registracija1").show();
        $('#sign').removeClass('otvoreno');
        $(this).addClass('otvoreno');
    });
});