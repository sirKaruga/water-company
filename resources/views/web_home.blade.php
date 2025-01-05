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
        <div class="row g-4">

            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden"  style="width: 100%; height: 200px; overflow: hidden;">
                            <a href=""><img class="img-fluid" src="{{ asset('storage/' . $service->image) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;"></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Service</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">+ Equipment</div>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2" href="{{url('view_service/'.$service->id)}}"> {{@$service->name}} </a>
                            <p><i class="fa fa-info text-primary me-2"></i>
                                {{ Str::limit(strip_tags($service->description), 100) }}

                            </p>
                        </div>
                        <div class="d-flex border-top">
                        </div>
                    </div>
                </div>
            @endforeach


            {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">

        </div> --}}
    </div>

        <!-- Property List End -->
@endsection

