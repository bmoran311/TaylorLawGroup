
@extends('layouts.subpage')

@section('content')
<div class="industry-section">
    <div class="taylorline-about-left">
        <img src="/site/img/others/taylor-line-left.png" class="img-fluid" alt="taylorline" />
    </div>
    <div class="container">
        <div class="about-wrap heading">
            <div class=row>
                <div class="col-lg-8 col-md-7 col-12 col-sm-12">
                    <div class="tab-content" id="v-pills-tabContent">                                                                                
                        <div class="tab-right-content heading">
                            <h3>Testimonials</h3>
                            <hr class="border-bot">
                            @foreach ($testimonials as $testimonial)
                                <a href="/testimonial-detail/{{ $testimonial->id }}" style="text-decoration: none;">
                                    <div class="publicat-content">
                                        <h5>{{ \Carbon\Carbon::parse($testimonial->date_of_resolution)->format('M j, Y')  }}</h5>
                                        <h4>{{ $testimonial->client_name }}, {{ $testimonial->title }}</h4>
                                        <p>{{ $testimonial->summary }} </p>
                                    </div>
                                </a>
                            @endforeach                          
                        </div>                                                                      
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection