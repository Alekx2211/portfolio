$('.menu__slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });

$("#nextContents").click(function(){
    $("#nextContentsList").fadeIn();
    $("#nextContents").hide();
});