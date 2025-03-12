
@extends('layouts.subpage')

@section('content')
<div class="industry-section">
    <div class="taylorline-about-left">
        <img src="/site/img/others/taylor-line-left.png" class="img-fluid" alt="taylorline" />
    </div>
    <div class="container">
        <div class="about-wrap heading">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-right-content heading">
                            <h3>Testimonials</h3>
                            <hr class="border-bot">
                            <div class="row">
                                @foreach ($testimonials as $testimonial)
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <a href="/testimonial-detail/{{ $testimonial->id }}" style="text-decoration: none;">
                                            <div class="testimonial-content p-4 position-relative">
                                                <div class="quote-icon position-absolute top-2 start-0 translate-middle">
                                                    <i class="fas fa-quote-left" style="color: #c5a183; font-size: 1.5rem;"></i>
                                                </div>
                                                <h5 class="text-muted small fw-semibold m-0">{{ \Carbon\Carbon::parse($testimonial->date_of_resolution)->format('M j, Y') }}</h5>
                                                <h4 class="text-dark fw-semibold fs-6 mb-1">{{ $testimonial->client_name }} - {{ $testimonial->title }}</h4>
                                                <p class="fst-italic text-secondary m-0" style="text-transform: none; font-size: 0.95rem;">"{{ $testimonial->summary }}"</p>
                                                <div class="quote-icon position-absolute bottom-0 end-0 translate-middle">
                                                    <i class="fas fa-quote-right" style="color: #c5a183; font-size: 1.5rem;"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
