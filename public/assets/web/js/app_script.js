$('.youtube_play_but').on('click', function(e) {
    $('#youtube_div').replaceWith($('#youtube_ifram').show());
});



$("div.show_text_but").click(function() {
    $(this).hide();
    $("div.hide_text_but").show();
    // $("div.fade_text").hide();
    $("div#wrapped_text").css("height","auto");
});
$("div.hide_text_but").click(function() {
    $(this).hide();
    $("div.show_text_but").show();
    // $("div.fade_text").hide();
    $("div#wrapped_text").css("height","235");


    $('html, body').animate({
        scrollTop: $("#wrapped_text").offset().top - 200
    }, 10);
});
