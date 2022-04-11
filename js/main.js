
    $('.menu__slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
    });

$("#nextContents").click(function(){
    $("#nextContentsList").fadeIn();
    $("#nextContents").hide();
});