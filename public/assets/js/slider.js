$(".product-slider__slider").slick({
    infinite: true,
    autoplay: true,
    nextArrow:
        '<button type="button" class="slick-next fs-2 rounded-circle"><i class="fa fa-chevron-right bg-transparent"></i></button>',
    prevArrow:
        '<button type="button" class="slick-prev fs-2 rounded-circle"><i class="fa fa-chevron-left"></i></button>',
    slidesToShow: 3,
    slidesToScroll: 2,
    swipeToSlide: true,
    touchThreshold: 10,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 650,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});
