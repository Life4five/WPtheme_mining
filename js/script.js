console.log("script.js is loading...");


$('.menu-burger').click(function() {
    $('.nav-window').show();
    $('body').css('overflow','hidden');
});
$('.nav-close, .nav-list li a').click(function() {
    $('.nav-window').hide();
    $('body').css('overflow','visible');
});


function showPopup() {
    $(".popup-blackout,.popup-offer").show();
    $("body").css('overflow', 'hidden');
}
$(".intro__btn, .card__footer_btn").click(function () {
    showPopup();
});

$(".popup-blackout").click(function() {
    $(".popup-blackout,.popup-offer").hide();
    $("body").css('overflow', 'visible');
});
$(".popup-close").click(function() {
    $(".popup-blackout,.popup-offer").hide();
    $("body").css('overflow', 'visible');
});


console.log("script.js has been loaded.");