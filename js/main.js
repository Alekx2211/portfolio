$('.menu__slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        fade: true,
        adaptiveHeight: true,
    });

$("#nextContents").click(function(){
    $("#nextContentsList").fadeIn();
    $("#nextContents").hide();
});