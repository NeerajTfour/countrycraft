@extends('welcome')

@section('master')
    <section class="container-fluid">
        {{-- <p> {!! $about->about_text !!}</p> --}}
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 about-banner">
                    <img src="/assets/images/H&H1.jpg" alt="" class="" width="100%" height="430px">
                </div>
            </div>
            <div class="row text-center mt-3 pt-3 ms-3 me-2 fst-italic">
                <div class="col-md-12 heading more text-muted lh-lg ">
                    <h1>Welcome to Country Crafts</h1>
                    <p class=""><b>Country Craft Exports Pvt. Ltd.</b> is a reputed and established Indian
                        furniture unit, located in Jodhpur, India. The Company is managed by experienced professionals with
                        an over a decade. It has pioneered the way how a finish can be transformed with a touch of
                        modernization, antiqueness with international quality standards. Since it’s foundation, the company
                        is able to maintain the trend in an effective way which allow us to gain clients confidence. We are
                        committed to provide a workplace with best of the resources to our employees.
                    </p>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 hover01">
                    <figure>
                        <img src="/assets/images/Picture2.jpeg" alt="" class="img-thumbnail" width="100%"
                            height="270px">
                    </figure>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 text-muted lh-lg">
                    <p>We are manufacturer and exporter of exclusive furniture made out of Wood, Iron, Semi-precious stones,
                        Marble, Upholstery and home decor products. We are based in Jodhpur (Sun City) Rajasthan, India. We
                        are committed to serve as per the requirement & limitations of the client.
                        Our <b>9</b> raw wood warehouses, <b>7</b> wood chemical treatment plant, <b>20</b> seasoning
                        chambers and in-house
                        manufacturing units allow us to serve you the best quality within the advised time frame. Our
                        designing team is focused on developing new collections as per market trends & material, which
                        allows us to share new ideas with our clients on regular basis. A dedicated team of highly skilled
                        artisans allows us to try new possibilities which makes us affordable in the market.</p>
                </div>
            </div>
            <div class="row ms-2 me-2 heading ">
                <h1>H I S T O R Y</h1>
                <div class="col-lg-6 col-md-6 col-sm-12 text-muted lh-lg">
                    <span><b>1998</b></span>
                    <p><b>Krishna Industries,</b> this is where our journey has started 25 years back. <b>Mr. Pradeep
                            Khandelwal</b> my
                        father has commenced the timber seasoning business with a small setup. To serve finest quality
                        timber to the market.</p>
                    <span><b>2015</b></span>
                    <p><b>Krishna Craft,</b> with the success in timber trading and seasoning business, he established a
                        furniture manufacturing unit along with <b> Mr. Amit Khandelwal</b>. It was also a profitable
                        venture.</p>
                    <span><b>2019</b></span>
                    <p><b>AavyaTimber & Craft,</b> luck favoursthe brave.
                        He extended his capacity with another unit of timber seasoning with <b> Mr. Mukesh Khandelwal & Mr.
                            Sandeep</b>.
                        By Gods grace & commitment, it was also a profitable venture.</p>
                    <span><b>2020</b></span>
                    <p><b>M.K. Timber & Craft,</b>yet another venture was started in the early corona stage. This time along
                        with <b> Mr. Nitesh Khandelwal</b> With the shear dedication of both, we were able to deliver the
                        finest
                        quality wood yet again without compromising on the business ethics.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-muted lh-lg hover01">
                    <figure>
                        <img src="/assets/images/WhatsApp Image 2024-05-01 at 14.54.08.jpeg" alt=""
                            class="mb-3 rounded-pill" width="100%" height="330px">
                    </figure>
                    <h6 class="mb-2"><b>2021</b></h6>
                    <p><b>Country Craft Exports Pvt. Ltd.</b> Now it’s time to take a big leap by establishing an export
                        house considering the in-house strength.</p>
                    <h6 class=""><b>2022</b></h6>
                    <p><b>Shiv Timber & Craftby </b> the success of all the previous units, another feather has been added.
                        This facility is also dedicated to timber seasoning business and running successfully.</p>
                </div>
            </div>
            <div class="row ms-2 me-2 mb-3">
                <div class="col-md-12 heading">
                    <h1>Why Choose Us?</h1>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <div class="card1 text-muted">
                        <i class="fa-thin fa-star-sharp"></i>
                        <h2>Commitment</h2>
                        <p>We are always bide to our promises by delivering the desired results with utmost precision and
                            within the specified timeframe.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <div class="card1 text-muted">
                        <i class="fa-grid-2"></i>
                        <h2>Versatile working</h2>
                        <p>Our work methodology is simple. We strictly follow the business protocol i.e. sharing of new
                            developments, sharing timely updates about the inspections or order status.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <div class="card1 text-muted">
                        <h2>Value Addition</h2>
                        <p>The biggest plus working with us is you find all possible categories under one roof i.e. Wooden &
                            Iron Furniture, Marble Furniture, Semi-Precious Stone Furniture and Bone Inlay Furniture.</p>
                    </div>
                </div>
            </div>
            <div class="row ms-2 me-2 mb-3 text-center heading bg-light">
                <h1>F A C I L I T I E S</h1>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="team-detail">
                        <div class="team-text factory-text text-muted lh-lg fst-italic ">

                            <p> A furniture factory is a complex industrial facility that combines skilled
                                craftsmanship
                                with modern manufacturing techniques to produce a wide range of furniture products for
                                consumers and businesses. This facility is also dedicated to timber seasoning business
                                and running successfully. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 div-order">
                    <div class="team-detail">
                        <div class="team-text factory-text text-muted lh-lg fst-italic">

                            <p> Efficient operations, quality control measures, and an emphasis on sustainability are
                                key
                                considerations in the furniture development. This 33,000 Sq.Ft. facility is fully
                                complaint
                                with SEDEX and FSC standards. This premises is only dedicated to finishing, polishing,
                                packaging & dispatch. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ms-2 me-2 mb-3 text-center">
                <div class="col-lg-6 col-md-6 col-sm-12 hover01">
                    <figure>
                        <img src="/assets/images/Picture13.jpg" width="100%" alt="" height="290px">
                    </figure>
                </div>
                <div class="col-lg-6 hover01">
                    <figure>
                        <img src="/assets/images/Picture14.jpg" width="100%" alt="" height="290px">
                    </figure>
                </div>
            </div>
            <div class="row ms-2 me-2 mb-3 heading text-muted">
                <h1>T I M B E R &nbsp; M A N A G E M E N T</h1>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-2">

                    <p class="pt-3 fst-italic">Timber management is a dynamic and
                        interdisciplinary field that requires a
                        holistic approach to balance economic,
                        ecological, and social considerations.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-2 hover01">
                    <figure>
                        <img src="/assets/images/Picture17.jpg" alt="" class="img-thumbnail" width="100%"
                            height="250px">
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-2 hover01">
                    <figure>
                        <img src="/assets/images/Picture18.jpg" alt="" class="img-thumbnail" width="100%"
                            height="250px">
                    </figure>
                </div>
            </div>
            <div class="row ms-2 me-2 mb-3 text-muted hover01">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                    <figure>
                        <img src="/assets/images/Picture20.jpg" class="img-thumbnail" alt="" width="100%"
                            height="250px">
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                    <p class="pt-5 fst-italic">Furniture manufacturing is a multi-stage process that requires a
                        combination of design creativity, skilled craftsmanship, and modern
                        technologies. From the selection of raw materials to the final product
                        reaching the end consumer, each step plays a crucial role in creating
                        high-quality and aesthetically pleasing furniture.
                    </p>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                    <figure>
                        <img src="/assets/images/Picture21.jpg" class="img-thumbnail" alt="" width="100%"
                            height="250px">
                    </figure>
                </div>
            </div>
            <div class="row ms-2 mb-3 hover01">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <figure>
                        <img src="/assets/images/Picture3.jpg" alt="" width="100%" height="380px">
                    </figure>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                    <figure>
                        <img src="/assets/images/Picture25.jpg" alt="" width="100%" height="380px">
                    </figure>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                    <figure>
                        <img src="/assets/images/WhatsApp Image 2022-03-29 at 2.20.03 PM (3) (1).jpg" alt=""
                            width="100%" height="380px">
                    </figure>
                </div>
            </div>
            <div class="row ms-2 me-2 mb-3 text-muted heading ">
                <h1>C E R T I F I C A T I O N S</h1>
                <div class="col-lg-4 lh-lg">
                    <p> <b>FSC {Forest Stewardship Council}</b> plays a crucial role in
                        promoting responsible forest management globally through its
                        certification system, which has become a widely recognized
                        standard for environmentally and socially conscious forestry
                        practices. The FSC label on products signifies a commitment
                        to sustainability and responsible sourcing of forest products.
                    </p>
                </div>
                <div class="col-lg-2 ps-5">
                    <img src="/assets/images/bfcb956f-3634-41e8-a82b-4615b20df20e.jpg" class="" alt=""
                        width="140px" height="210px">
                </div>
                <div class="col-lg-2">
                    <img src="/assets/images/721f3b84-8807-44df-ae71-fb5579c0d2ef.jpg" class="pt-5" alt=""
                        width="190px" height="150px">
                </div>
                <div class="col-lg-4 lh-lg">
                    <p> <b>SEDEX</b> plays a pivotal role in promoting ethical and responsible
                        sourcing practices by providing a collaborative platform for
                        businesses to assess, monitor, and improve their supply chain
                        activities. Through tools like SMETA audits and a focus on
                        transparency, Sedex aims to drive positive change in the
                        global business landscape.
                    </p>
                </div>
            </div>
            <div class="row heading">
                <h1>P A C K A G I N G</h1>
                <div class="col-md-12"></div>
            </div>
        </div>
    </section>
@endsection
