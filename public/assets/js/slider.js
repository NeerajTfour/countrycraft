$(".product-slider__slider").slick({
    infinite: true,
    autoplay: true,
    nextArrow: '<button type="button" class="slick-next">></button>',
    prevArrow: '<button type="button" class="slick-prev"><</button>',
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
