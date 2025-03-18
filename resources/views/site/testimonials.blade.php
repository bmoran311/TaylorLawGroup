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
                                <h3>{{ $type }}</h3>
                                <hr class="border-bot">
                            <div style="background-color: #fdf8f3; padding: 20px; text-align: center; font-style: italic; font-size: 20px; font-weight: bold; border: 2px solid #c5a183; border-radius: 12px; box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1); width: 75%; margin: 0 auto;">
                                <p style="color: #5a4a38;">"{!! $davidQuote !!}"</p>
                                <h4 style="margin-top: 15px; color: #7a5c3a; font-family: 'Garamond', serif; font-size: 16px; font-weight: normal; text-align: right;">— David Taylor, Founder</h4>
                            </div>                                                    
                            <br>
                                <div class="row">
                                    @foreach ($testimonials as $testimonial)
                                        <div class="col-md-6 col-sm-12 mb-2">
                                            <a href="/testimonial-detail/{{ $testimonial->id }}"
                                                style="text-decoration: none;">
                                                <div class="testimonial-content p-4 position-relative">
                                                    <p class="fst-italic text-secondary m-0"
                                                        style="text-transform: none; font-size: 0.95rem;">
                                                        <span class="quote-icon" style="color: #c5a183; font-size: 1rem;">
                                                            <i class="fas fa-quote-left"></i>
                                                        </span>
                                                        {{ $testimonial->summary }}
                                                        <span class="quote-icon" style="color: #c5a183; font-size: 1rem;">
                                                            <i class="fas fa-quote-right"></i>
                                                        </span>
                                                    </p>
                                                    <h4 class="text-dark fw-semibold fs-6 mb-1">
                                                        {{ $testimonial->client_name }} - {{ $testimonial->title }}</h4>
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
