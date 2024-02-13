$(document).ready(function () {
    $('.people__list__pc').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 1099,
                settings: {
                    arrows: false,
                    dots: true,
                }
            },
            {
                breakpoint: 9999,
                settings: {
                    arrows: true,
                    dots: false,
                }
            }
        ]

    });
});