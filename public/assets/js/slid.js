$(document).ready(function () {
    // Define the array of image URLs
    let b = [
        "images.jpg",
        "images (1).jpg",
        "images (2).jpg",
        "images (3).jpg",
    ];

    // Initialize the Slick slider plugin on the element with the ID 'image'
    $("#image").slick({
        slidesToShow: 1, // Number of slides to show at a time
        slidesToScroll: 1, // Number of slides to scroll at a time
        infinite: true, // Whether to loop the slider infinitely
        autoplay: true, // Whether to autoplay the slider
        autoplaySpeed: 2000, // Autoplay speed in milliseconds
        arrows: true, // Whether to show navigation arrows
        dots: true, // Whether to show pagination dots
        // Custom function to dynamically generate slide contents based on the array of image URLs
        appendDots: $("#image"), // Append pagination dots to the element with the ID 'image'
        customPaging: function (slick, index) {
            return (
                '<img src="' + b[index] + '" alt="slide-' + (index + 1) + '">'
            );
        },
    });
});
