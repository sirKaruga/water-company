@extends('web_layout')

@section('page_content')
<div class="container-xxl py-5">
    <div class="position-relative overflow-hidden mb-4" style="background-image: url('{{ asset('storage/' . $career->image) }}'); background-size: cover; height: 200px;">
        <h1 style="z-index: 20;" class="mb-4 text-center position-absolute top-50 start-50 translate-middle text-white">
            {{ $career->title }}
        </h1>
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
    </div>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-details bg-light rounded p-5">
                    <h2 class="mb-4">Job Description</h2>
                    <div class="border p-3 mb-4">
                        {!! $career->description !!}
                    </div>

                    <h2 class="mb-4">Qualifications</h2>
                    <div class="border p-3 mb-4">
                        {!! $career->requirements !!}
                    </div>

                    <h2 class="mb-4">Location</h2>
                    <p>{{ $career->location }}</p>

                    <h2 class="mb-4">Job Type</h2>
                    <p>{{ $career->type }}</p>

                    <h2 class="mb-4">Salary Expectations</h2>
                    <p>{{ $career->salary }}</p>

                    <h2 class="mb-4">Application Deadline</h2>
                    <p>{{ $career->deadline }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
