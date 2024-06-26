<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CountryCraft</title>
    <link rel="shortcut icon" href="/assets/images/chair-black.png" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <header class="header sticky-top conrainer-fluid">
        <nav class="navbar navbar-expand-lg bg-white ">
            <div class="container-fluid">
                <div class="row w-100 me-auto">
                    <div class="col-lg-4 ms-2 ps-3">
                        <img src="/assets/images/logo-black.png" width="150px" class="mt-2 ps-5"
                            style="margin-top: -20px; margin-left:-34px;" alt="company logo">
                        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class=" col-lg-6 collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 gap-3 ">
                            <li class="nav-item ">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/layouts/about">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/layouts/product" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/layouts/bar">Bar Cabinet</a></li>
                                    <li><a class="dropdown-item" href="/layouts/chair">Chair</a></li>
                                    <li><a class="dropdown-item" href="/layouts/chair/sideboard">sideboard</a></li>

                                </ul>
                            </li>
                            {{-- <li class="dropdown">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown-content">
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="/layouts/contact">Contact Us</a>
                            </li>
                        </ul>
                        {{-- <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            </form> --}}
                    </div>
                </div>
            </div>
        </nav>
    </header>

    {{-- <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                </div>
            </div>
        </div>
    </section> --}}

    <section class="container-fluid">
        <div class="row">
            @yield('master')
        </div>
    </section>
    <section>
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer bg-light">

            <div class="footer-content">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                            <div class="footer-info ms-3 ps-2">
                                <img src="/assets/images/logo-white.png" width="130px" class="ps-3 pt-3"
                                    style="margin-top: -25px; margin-left:-34px;" alt="company logo">
                                <p class="mx-auto mt-3">
                                    India Office : <br>
                                    G 927- 928 Phase 4 Boranada, <br> Jodhpur, Rajasthan 342012 <br>
                                    <i class="fa fa-phone "> </i> +91 291 2951217<br>
                                    <i class="fa fa-phone "> </i> +91 9829027518<br>
                                    <i class="fa fa-envelope"> </i>
                                    <a href="mailto:admin@countrycraftexports.com" class="text-white" target="blank"
                                        style="text-decoration: none">
                                        admin@countrycraftexports.com</a><br>
                                </p>
                            </div>
                        </div>

                        {{-- <div class="col-lg-2 col-md-6 col-sm-6 mx-auto footer-links">
                            <h4>Shop</h4>
                            <ul>
                                <li><i class="fa fa-chevron-right"></i> <a href="/">Furniture</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/about">Plants</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="">Homewares</a>
                                </li>
                                <li><i class="fa fa-chevron-right"></i> <a href="">Shop the Looks</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="">Virtual
                                        Catalogues</a></li>
                            </ul>
                        </div> --}}

                        <div class="col-lg-2 col-md-6 col-sm-6 footer-links">
                            <h4>Service</h4>
                            <ul>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/about">About Us</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/contact">Meet the Team</a>
                                </li>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/contact">Showroom
                                        Locator</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/fair">Fairs &amp; Events</a>
                                </li>
                                {{-- <li><i class="fa fa-chevron-right"></i> <a href="/career">Careers</a></li> --}}
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 footer-links ">
                            <h4>Help</h4>
                            <ul>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/contact">Contact Us</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/shipping">Shipping &amp;
                                        Returns</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/terms">Terms &amp;
                                        Conditions</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="/layouts/privacy">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-newsletter">
                            {{-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> --}}
                            <h4 class="footer-newsletter">Our Newsletter</h4>
                            <form action="{{ route('newsletter.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-legal text-center">
                <div
                    class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                    <div class="d-flex flex-column align-items-center align-items-lg-start">
                        <div class="copyright">
                            Manage by TFour Tech Pvt. Ltd | All Rights Reserved by CountryCraftExports ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            {{-- &copy; <strong><span>CountryCraft Exp</span></strong>. All Rights Reserved 2024 --}}
                        </div>
                    </div>

                    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                        {{-- <a href="#" class="twitter"><i class="fab fa-twitter"></i></a> --}}
                        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/countrycraft_/" target="blank" class="instagram"><i
                                class="fab fa-instagram"></i></a>
                        {{-- <a href="#" target="" class="google-plus"><i class="fab fa-skype"></i></a> --}}
                        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>

                </div>
            </div>

        </footer><!-- End Footer -->
    </section>
    {{-- <footer>
        <div class="container-fluid">
            <div class="row bg-light">
                <div class="col-md-4">
                    <div class="footer-top-block">
                        <div class="footer-logo">
                            <a class="logo" href="#" title="" aria-label="store logo">
                                <h2>CountryCraft</h2>
                                <img loading="lazy" src="" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-links">
                        <h3>Shop</h3>
                        <div class="box-links__content">
                            <ul class="links-list">
                                <li><a href="">Furniture</a></li>
                                <li><a href="">Plants</a></li>
                                <li><a href="">Homewares</a></li>
                                <li><a href="">Shop the Looks</a></li>
                                <li><a href="">Virtual
                                        Catalogues</a>
                                </li>
                                <li><a href="https://www.elmeliving.com/shoppable-instagram">Shop Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-links">
                        <h3>Service</h3>
                        <div class="box-links__content">
                            <ul class="links-list">
                                <li><a href="">About Us</a></li>
                                <li><a href="">Meet the Team</a></li>
                                <li><a href="" target="blank">Showroom
                                        Locator</a></li>
                                <li><a href="">Become a
                                        Stockist</a></li>
                                <li><a href="">Fairs &amp; Events</a>
                                </li>
                                <li><a href="">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-links">
                        <h3>Help</h3>
                        <div class="box-links__content">
                            <ul class="links-list">
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Shipping &amp;
                                        Returns</a></li>
                                <li><a href="">Terms &amp;
                                        Conditions</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

    {{-- java script --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    {{-- image crausal --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="/assets/js/slider.js"></script>
    <script src="/assets/js/slid.js"></script>
    {{-- CK Editor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor")).catch(
            (error) => {
                console.error(error);
            }
        );
    </script>
    {{-- <script>
        window.onload = function() {
            var images = [
                '/assets/images/download (8).jpg',
                '/assets/images/download (9).jpg',
                '/assets/images/download (10).jpg',
                '/assets/images/download (11).jpg',
                '/assets/images/download (7).jpg',
                '/assets/images/download (6).jpg',
                '/assets/images/download (5).jpg'
            ]; // List of image URLs
            var currentIndex = 0;

            function changeImage() {
                currentIndex = (currentIndex + 1) % images.length; // Increment index, loop back to 0 if end is reached
                document.getElementById('image1').src = images[currentIndex]; // Change image source
            }

            setInterval(changeImage, 10 *
                1000); // Change image every 24 hours (24 * 60 * 60 * 1000 milliseconds)
        };
    </script> --}}
</body>

</html>
