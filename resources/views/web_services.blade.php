@extends('web_layout')

@section('page_content')
        <!-- Header Start -->

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


                </div>
            </div>
        </div>
        <!-- Property List End -->
@endsection

