$('.menu__slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });

$("#nextContents").click(function(){
    $("#nextContentsList").fadeIn();
    $("#nextContents").hide();
});