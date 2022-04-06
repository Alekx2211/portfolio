$('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1
});
$(function() {
    $('.menu__nav [href]').each(function() {
        if (this.href == window.location.href) {
            $(this).addClass('active');
        }
    });
});