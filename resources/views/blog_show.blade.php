@extends('web_layout')

@section('page_content')
<div class="container-xxl py-5">
    <div class="position-relative overflow-hidden mb-4" style="background-image: url('{{ asset('storage/' . $blog->image) }}'); background-size: cover; height: 200px;">
        <h1 style="z-index: 20;" class="mb-4 text-center position-absolute top-50 start-50 translate-middle text-white">
            {{ $blog->title }}
        </h1>
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
    </div>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-details bg-light rounded p-5">


                    <div class="accordion accordion-flush mb-4" id="blogAccordion">
                        </div>

                    <div class="position-relative overflow-hidden mb-4">
                        <img class="img-fluid w-100" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                    </div>

                    <p>{!! nl2br($blog->content) !!}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
