@extends('welcome')

@section('master')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="/assets/images/images.jpg" alt="" width="1310px" height="450px">
                </div>
            </div>
            <div class="row text-center mt-3 pt-3">
                <div class="col-md-12 heading">
                    <h1>Welcome to Country Crafts</h1>
                    <p class="ms-5 me-auto p-5 ">Country Craft seeks to offer bespoke furniture through a unique and
                        advanced
                        conceptual approach. We
                        have a team that can meet all of your design, decor needs. Our services provide a professional
                        experience, assisting clients through each stage of the process of creating the living spaces they
                        desire. Country Crafts offers a wide range of furnishing products at affordable pricing. Our
                        furniture designs provide your house and office a premium and elegant appearance. We believe that
                        designs should be exclusive, ergonomic, and user-friendly while also having a sophisticated
                        appearance.
                    </p>
                    <a href="/contact" type="submit" class="btn btn-md btn-dark mb-3">Contact Us</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12 heading">
                    <h1>Why Choose Us?</h1>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <div class="card">
                        <i class="fa-thin fa-star-sharp"></i>
                        <h2>Quality Furniture</h2>
                        <p>We strive diligently select furniture that will last a long period of time in your space and
                            provide
                            you with the long-lasting aesthetic value you want.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <div class="card">
                        <i class="fa-grid-2"></i>
                        <h2>Extensive Collection</h2>
                        <p>We as the leading furniture manufacturer, offers the most diverse collection of furniture. There
                            are
                            numerous reasons why our furniture is the best on the market!</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <div class="card">
                        <h2>An Experience</h2>
                        <p>For us, success means that the process supports your enthusiasm rather than your dissatisfaction
                            and
                            that it ends with you being completely satisfied with your piece.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
