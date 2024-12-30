@extends('web_layout')

@section('page_content')
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Say Yes to  <span class="text-primary">The Best Partner</span>  In Water Advocacy</h1>
                    <p class="animated fadeIn mb-4 pb-2">We are thrilled to have you join us on a mission to transform lives through innovative
                        water solutions. Guided by a strong commitment to quality and sustainability, we aim to
                        set new standards in the water industry.
                        </p>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Talk to Us</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/fd1.jpeg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/ma1.jpeg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/tr1.jpeg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/tk2.jpeg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/tr3.jpeg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/tr4.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Service Types</h1>
                    <p> We are driven by a steadfast commitment to revolutionize water
                        treatment and purification across the region. With innovation, engineering excellence, and an
                        unwavering dedication to quality, we stand at the forefront of the water industry.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                                </div>
                                <h6>Equipmet</h6>
                                <span>Sale & Distribution of Water equipment </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-villa.png" alt="Icon">
                                </div>
                                <h6>Pool </h6>
                                <span>Pool Construction and Service</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                                </div>
                                <h6>Water Towers</h6>
                                <span>Installation and Maintenance</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-housing.png" alt="Icon">
                                </div>
                                <h6>Plumbing</h6>
                                <span>Pipe installations sales & Service</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">#1 Place To Find The Perfect Water Solutions</h1>
                        <p class="mb-4"> Every solution we provide
                            is designed with precision and care, ensuring reliable access to clean, safe water for all
                            needs.
                            Our diverse portfolio of services spans</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Advanced reverse osmosis systems</p>
                        <p><i class="fa fa-check text-primary me-3"></i> Bespoke bottling plant designs</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Borehole drilling and outfitting</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Seamless integration of
                            water treatment technologies into real estate and other sectors</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="about.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Our Products & Services</h1>
                            <p>As you engage with our story, you’ll find more than just a service provider. – you’ll
                                discover a trusted partner dedicated to creating a future where sustainable water resources
                                are within reach for everyone.</p>
                        </div>
                    </div>

                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/ma1.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">We Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Equipment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="#">Water Treatment Solutions and Equipment</a>
                                        <p><i class="fa fa-info text-primary me-2"></i>Our
                                            offerings include cutting-edge reverse osmosis systems, sustainable wastewater treatment
                                            technologies, and innovative containerized solutions that offer flexibility and
                                            adaptability</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/sv1.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Service</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Solution</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="#">Water Franchise Solutions                                        </a>
                                        <p><i class="fa fa-info text-primary me-2"></i>We provide the essential support and resources
                                            needed to help businesses flourish.  Gain access to a proven business model and a network of
                                            industry expertise, giving you the tools to build a thriving, impactful business in the
                                            water sector</p>
                                    </div>
                                    <div class="d-flex border-top">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/tk3.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Service</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Solution</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <!-- <h5 class="text-primary mb-3">$12,345</h5> -->
                                        <a class="d-block h5 mb-2" href="">Water Tower Construction</a>
                                        <p><i class="fa fa-info text-primary me-2"></i>. Our water tower construction services
                                            are designed to ensure a consistent and reliable water supply. With our expertise, you can depend on expertly constructed water towers that are tailored
                                            to meet the specific needs of your community
                                            most.</p>
                                    </div>
                                    <div class="d-flex border-top">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" style="  width: 22.3em;  height: 22.3em; object-fit: cover" src="img/borehole.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Service</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Solution</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="#">Borehole Drilling & Equipping
                                        </a>
                                        <p><i class="fa fa-info text-primary me-2"></i> We harness the power of advanced technology to drill and
                                            equip boreholes with precision. Our solutions provide sustainable, reliable water sources
                                            that make a lasting difference in both communities and industries.</p>
                                    </div>
                                    <div class="d-flex border-top">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" style="min-height: 22.3em; max-height: 22.3em; min-width:29em;" src="img/welding.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Service</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Technology</div>
                                    </div>
                                    <div class="p-4 pb-0">

                                        <a class="d-block h5 mb-2" href="">H.D.P.E Butt Welding</a>
                                        <p><i class="fa fa-info text-primary me-2"></i>we specialize in HDPE (High-Density Polyethylene) butt
                                            welding, a reliable and durable solution for plumbing systems. Our expert team ensures
                                            that all joints are securely fused, creating leak-proof, long-lasting connections</p>
                                    </div>
                                    <div class="d-flex border-top">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" style="  width: 22.3em;  height: 22.3em; object-fit: cover"  src="img/solar.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Service</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Energy</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="">Solar Panel Installation</a>
                                        <p><i class="fa fa-info text-primary me-2"></i>We integrate solar energy solutions to improve energy
                                            efficiency in water treatment processes. Our approach helps reduce environmental impact
                                            while providing significant cost savingsBy partnering with us, you can.. </p>
                                    </div>
                                    <div class="d-flex border-top">

                                    </div>
                                </div>
                            </div>
<!--  -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" style="  width: 26.3em;  height: 22.3em; object-fit: cover" src="img/tk1.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">We Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Equipment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="#">Water Tank Construction & Repair</a>
                                        <p><i class="fa fa-info text-primary me-2"></i>We specialize in designing, constructing, and repairing water tanks
                                             tailored to your specific needs. Our team ensures the highest quality workmanship and utilizes the
                                              latest techniques to deliver durable and efficient water storage solutions.</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" style="  width: 26.3em;  height: 22.3em; object-fit: cover" src="img/sv1.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Service</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Solution</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="#">Plumbing Services                                        </a>
                                        <p><i class="fa fa-info text-primary me-2"></i>Our skilled plumbers provide expert solutions for all your plumbing needs.
                                            From leaky faucets to clogged drains, we handle it all. We offer prompt and reliable service, ensuring your plumbing
                                            system functions efficiently and effectively. Contact us today </p>
                                    </div>
                                    <div class="d-flex border-top">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" style="  width: 22.3em;  height: 22.3em; object-fit: cover"  src="img/pan.jpeg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Service</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Solution</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <!-- <h5 class="text-primary mb-3">$12,345</h5> -->
                                        <a class="d-block h5 mb-2" href="">Waterpan Construction</a>
                                        <p><i class="fa fa-info text-primary me-2"></i>. We build durable and efficient waterpans for livestock.
                                            Our expert team designs and constructs concrete, plastic, and steel waterpans tailored to your specific
                                            needs. We also offer installation, repair, and maintenance services to ensure optimal water delivery
                                            for your animals.</p>
                                    </div>
                                    <div class="d-flex border-top">

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div> -->
                        </div>
                    </div>

                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->
@endsection

