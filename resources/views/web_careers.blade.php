@extends('web_layout')

@section('page_content')

<!-- Careers Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Join Our Team</h1>
            <p>Be a part of H2O Ambassador LTD and contribute to building sustainable water solutions. Explore our opportunities and grow with us!</p>
        </div>
        <div class="row g-5">

            @foreach ($careers as $career)
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-4">
                        <h4>{{ $career->title }}</h4>
                        <p>
                            {{-- {{ !! Str::limit($career->description, 50) !! }} --}}
                            {{ Str::limit(strip_tags($career->description), 150) }}
                        </p>
                        <a href="{{ url('career_show/'.$career->id) }}" class="btn btn-primary py-2 px-4">Apply Now</a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded p-4">
                    <h4>Customer Support Specialist</h4>
                    <p>Provide excellent customer service and support for clients seeking water solutions. Strong communication skills required.</p>
                    <a href="#" class="btn btn-primary py-2 px-4">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-light rounded p-4">
                    <h4>Sales Representative</h4>
                    <p>Drive sales by connecting with clients and offering tailored water solutions. Experience in sales and passion for water innovation preferred.</p>
                    <a href="#" class="btn btn-primary py-2 px-4">Apply Now</a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Careers Section End -->

@endsection
