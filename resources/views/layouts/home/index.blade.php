@extends('welcome')

@section('master')
    <section class="container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                    aria-current="true"></button>
            </div>
            @foreach ($slider as $slid)
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="/slider/{{ $slid->images }}" alt="" width="100%" height="480px"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                        {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"> --}}
                        <rect width="100%" height="100%" fill="#777"></rect>
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>{{ $slid->title }}</h1>
                                <p>{{ $slid->para }}</p>
                                <p><a class="btn btn-lg btn-primary" href="/contact">{{ $slid->bname }}</a></p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item active carousel-item-start">
                        <img src="/assets/images/milwaukee-road-seating.jpg" alt="" width="100%" height="480px"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                        <rect width="100%" height="100%" fill="#777"></rect>
                        </svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-item-next carousel-item-start">
                        <img src="/assets/images/mspdd-milwaukee-0112-hor-wide.webp" alt="" width="100%"
                            height="480px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                        <rect width="100%" height="100%" fill="#777"></rect>
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            @endforeach
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="" style="background-color: #fcfafa">
        <div class="c-section container-fluid">
            <div class="row heading">
                <h1>Trending Style</h1>
            </div>
            <div class="row overlay p-3">
                <div class="c-section__hgroup">
                    <h3 class="c-section__title">Trending now</h3>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 ">
                    <img id="image" src="/assets/images/download (7).jpg" class="" alt="" width="100%"
                        height="300px">
                    <h6 class="pt-3 mb-2">Sofa</h6>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="/assets/images/download (3).jpg" alt="" width="100%" height="300px">
                    <h6 class="pt-3 mb-2">Tea Table</h6>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="/assets/images/download (2).jpg" alt="" width="100%" height="300px">
                    <h6 class="pt-3 mb-2">Coffee Table</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="" style="background-color: #fcfafa">
        <div class="container-fluid">
            <div class="row heading">
                <h1>About Furniture</h1>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 col-lg-6 p-3 about-img">
                    <img src="/assets/images/H&H1.jpg" alt="" width="100%" height="500">
                </div>
                <div class="col-md-6 col-lg-6 pt-3">
                    <h4>Online furniture: where each piece tells its story </h4>
                    <p class="">
                        At CCE, we believe that your home is the canvas of your own story. All of our online furniture
                        and decor accessories are meticulously selected to inspire, excite and transform your space into
                        a reflection of your identity. Our philosophy focuses on offering practical and aesthetic
                        solutions, accessible to everyone, transforming each home into a haven of beauty and
                        comfort.<br>

                        Always keeping an eye on the latest trends, CCE is your trusted online furniture store to find
                        that special detail that will transform your home into a place with its own character and
                        personality. We are the meeting point between the simplicity of minimalism and the
                        expressiveness of contemporary style, offering you infinite possibilities to update your home.
                    </p>

                    <h4> Live every moment with style and authenticity </h4>

                    <p>CCE, your online furniture shop
                        Our spanish furniture is more than objects; they become part of your story, evolving with you in
                        each new chapter. Allow us to accompany you on this journey towards renewal and personal
                        expression, where each piece is a step towards a space that speaks of you and your passions.
                        With CCE, discover the power of transforming your home into a vibrant setting, where every day
                        is an opportunity to live your story with style and authenticity
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center mt-5 mb-3 tab">
                <p class="text-center fs-4">The most demanding products in furniture and decoration</p>
                <div class="col-md-2 col-lg-2 col-sm-6">
                    <a href="" class="o-btn o-btn--secondary u-spacing">Bookshelve</a>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-6">
                    <a href="" class="o-btn o-btn--secondary u-spacing">Bar Cabinet</a>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-6">
                    <a href="/layouts/chair" class="o-btn o-btn--secondary u-spacing">Chair</a>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-6">
                    <a href="" class="o-btn o-btn--secondary u-spacing">Coffee Table</a>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-6">
                    <a href="" class="o-btn o-btn--secondary u-spacing">Console Table</a>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-6">
                    <a href="" class="o-btn o-btn--secondary u-spacing">Shelving</a>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <a href="" class="o-btn o-btn--secondary u-spacing">Dining Table</a>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <a href="" class="o-btn o-btn--secondary u-spacing">TV Cabinet</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class=" cont">
            <div class="row  heading">
                <h1>Furniture At Home</h1>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <img class="c-cardegory__img blur-up lazyloaded" alt="Ratan" width="100%" height="450"
                        data-src="https://cdn.sklum.com/wk/img/core/skl/promos/home/240402-SK-BANNER-special-price-rattan-Desktop.jpg?v=1711523777"
                        src="/assets/images/mspdd-milwaukee-0112-hor-wide.webp">
                    <div class="text-block">
                        <h4>Nature</h4>
                        <p>What a beautiful sunrise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="">
            <div class="row  about-img" style="background-color: #fcfafa">
                <div class="col-md-4">
                    <img src="/assets/images/download (5).jpg" alt="" width="100%" height="280px">
                </div>
                <div class="col-md-4">
                    <h3 class="text-center mt-3 text-info">Why Choose Us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repellat optio maxime, nisi minus
                        dicta asperiores sapiente harum eaque illo dignissimos molestiae! Nobis, praesentium quis tenetur
                        iure eaque ullam omnis.
                    </p>
                    <div class="text-center more">
                        <a href="/layouts/contact" class="btn btn-md btn-dark mb-3 rounded-pill">More Details</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="/assets/images/download (3).jpg" alt="" width="100%" height="280px">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row heading">
            <h1>Our Category</h1>
            <div class="product-slider">
                {{-- <div class="product-slider__category">
                    <h1>Product Category</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus sit amet augue vel
                        scelerisque. Sed cursus lorem sit amet varius hendrerit. Integer venenatis mollis ipsum. Sed
                        dapibus iaculis ex, non vestibulum tellus fringilla
                        sed. Maecenas eget molestie tellus.</p>
                    <a href="/">See all products</a>
                </div> --}}
                <div class="product-slider__slider container-fluid">
                    <div class="product-slider__item ">
                        <img src="/assets/images/download (1).jpg" class="rounded-circle" width="100%">
                        <h3>CountryCraft </h3>
                        <small>small table</small>
                    </div>

                    <div class="product-slider__item">
                        <img src="/assets/images/download (3).jpg" class="rounded-circle" width="100%">
                        <h3>CountryCraft </h3>
                        <small>Table</small>
                    </div>

                    <div class="product-slider__item">
                        <img src="/assets/images/download (2).jpg" class="rounded-circle" width="100%">
                        <h3>CountryCraft </h3>
                        <small>Tea Table</small>
                    </div>

                    <div class="product-slider__item">
                        <img src="/assets/images/download (4).jpg" class="rounded-circle" width="100%">
                        <h3>CountryCraft</h3>
                        <small>Coffee Table</small>
                    </div>

                    <div class="product-slider__item">
                        <img src="/assets/images/download (5).jpg" class="rounded-circle" width="100%">
                        <h3>CountryCraft</h3>
                        <small>Dining Table</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="container-fluid">
            <div class="row" id="slid">
                <img src="/" alt="">
            </div>
        </div>
    </section> --}}
@endsection
<script>
    window.onload = function() {
        var images = ['/assets/images/download (7).jpg', '/assets/images/download (8).jpg',
            '/assets/images/download (9).jpg', '/assets/images/download (10).jpg',
            '/assets/images/download (11).jpg',
            '/assets/images/download (6).jpg', '/assets/images/download (5).jpg'
        ]; // List of image URLs
        var currentIndex = 0;

        function changeImage() {
            currentIndex = (currentIndex + 1) % images.length; // Increment index, loop back to 0 if end is reached
            document.getElementById('image').src = images[currentIndex]; // Change image source
        }

        setInterval(changeImage, 24 * 60 * 60 *
            1000); // Change image every 24 hours (24 * 60 * 60 * 1000 milliseconds)
    };
</script>
