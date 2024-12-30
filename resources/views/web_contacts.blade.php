@extends('web_layout')

@section('page_content')

    <!-- Call to Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded p-3">
                <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                <p>Together, let’s pave the way to a world of endless
                                    possibilities with water at its heart.</p>
                            </div>
                            <a href="#" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>+254 757 107455</a>
                            <a href="#" class="btn btn-dark py-3 px-4"><i class="fa fa-email-alt me-2"></i>info@waterambassodor.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Clients Say!</h1>
                <p>H2O Ambassador LTD is dedicated to providing innovative water solutions that enhance lives and protect
                     the environment. We offer a range of products and services, including water filtration systems,
                     water softeners, and water testing. Our expert team is committed to delivering exceptional customer
                     service and sustainable solutions.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>"Clean, fresh water, right at our fingertips. Thanks to H2O Ambassador LTD
                            , we've never had to worry about water quality again."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/speech.png" style="width: 45px; height: 45px;">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>"The team at H2O Ambassador LTD
                            provided a seamless installation process and excellent after-sales service. Highly recommended!"</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/speech.png" style="width: 45px; height: 45px;">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>"Before H2O Ambassador LTD
                            , our water supply was inconsistent and often contaminated. Their innovative solution has transformed our daily lives, providing us with reliable and pure water."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/speech.png" style="width: 45px; height: 45px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

