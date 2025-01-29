@extends('layouts.main-attorney')

@section('content')

<div class="attorneys-cont-section">
    <div class="container">
        <div class="attorneys-wrap">
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-img">
                        <img src="{{ asset('storage/' . $bio->headshot) }}" class="img-fluid" alt="team" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-contents">
                        <div class="social-icon text-end">
                            <ul class="list-unstyled d-inline-flex">
                                @if(strlen($bio->twitter))
                                    <li><a href="https://www.twitter.com/{{ $bio->twitter }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                @endif
                                @if(strlen($bio->linked_in))
                                    <li><a href="{{ $bio->linked_in }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="team-name heading">
                            <h3>{{ $bio->first_name }} {{ $bio->last_name }}</h3>
                            <h5>{{ $bio->title }}</h5>
                        </div>
                        <ul class="list-unstyled d-inline-flex d-flex cont-detail">
                            <li><a href="mailto:{{ $bio->email }}"><i class="fa-solid fa-envelope"></i> {{ $bio->email }}</a></li>
                            <li><a href="tel:{{ $bio->phone_number }}"><i class="fa-solid fa-phone"></i> {{ $bio->phone_number }}</a></li>
                        </ul>
                        <h6>PRACTICES</h6>
                        <ul class="list-unstyled practice-details">
                            @foreach ($practice_areas as $practice_area) 
                                <li><i class="fa-solid fa-square"></i>{{$practice_area->name}} </li>
                            @endforeach                            
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab-section">
    <div class="container">
        <div class="tab-wrap">
            <div class="d-flex align-items-start">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="tab-contentleft">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <div class="team-name heading">
                                    <h3>{{ $bio->first_name }} {{ $bio->last_name }}</h3>
                                    <h5>{{ $bio->title }}</h5>
                                </div>
                                <img src="/site/img/icons/active-icon.png" class="img-fluid taylorline-img" alt="taylorline" />
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">OVERVIEW </button>
                                <button class="nav-link" id="v-pills-creadentials-tab" data-bs-toggle="pill" data-bs-target="#v-pills-creadentials" type="button" role="tab" aria-controls="v-pills-creadentials" aria-selected="false">Credentials</button>
                                <button class="nav-link" id="v-pills-multimedia-tab" data-bs-toggle="pill" data-bs-target="#v-pills-multimedia" type="button" role="tab" aria-controls="v-pills-multimedia" aria-selected="false">Multimedia</button>
                                <button class="nav-link" id="v-pills-publication-tab" data-bs-toggle="pill" data-bs-target="#v-pills-publication" type="button" role="tab" aria-controls="v-pills-publication" aria-selected="false">Publications</button>
                                <button class="nav-link" id="v-pills-speaking-tab" data-bs-toggle="pill" data-bs-target="#v-pills-speaking" type="button" role="tab" aria-controls="v-pills-speaking" aria-selected="false">Speaking Engagements</button>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12 col-sm-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="tab-right-content heading">
                                    <h3>OVERVIEW</h3>
                                    <hr class="border-bot">
                                    <p>{{ $bio->description }}{!! nl2br(e($bio->description)) !!}</p></div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-creadentials" role="tabpanel" aria-labelledby="v-pills-credentials-tab">
                                <div class="tab-right-content heading">
                                    <h3>Credentials</h3>
                                    <hr class="border-bot">
                                    <h6>Education</h6>
                                    <ul class="list-unstyled practice-details">
                                        @foreach ($colleges as $college) 
                                            <li><i class="fa-solid fa-square"></i>{{ $college->name }}</li>
                                        @endforeach                                       
                                    </ul>
                                    <h6>Bar Admissions</h6>
                                    <ul class="list-unstyled practice-details">
                                        @foreach ($admissions as $admission) 
                                            <li><i class="fa-solid fa-square"></i>{{ $admission->name }}</li>
                                        @endforeach                                        
                                    </ul>
                                    <h6>Memberships</h6>
                                    <ul class="list-unstyled practice-details">
                                        @foreach ($memberships as $membership) 
                                            <li><i class="fa-solid fa-square"></i>{{ $membership->name }}</li>
                                        @endforeach      
                                    </ul>
                                    <h6>Licenses</h6>
                                    <ul class="list-unstyled practice-details">
                                        @foreach ($licenses as $license) 
                                            <li><i class="fa-solid fa-square"></i>{{ $license->name }}</li>
                                        @endforeach      
                                    </ul>
                                    <h6>Awards</h6>
                                    <ul class="list-unstyled practice-details">
                                        @foreach ($awards as $award) 
                                            <li><i class="fa-solid fa-square"></i>{{ $award->name }}</li>
                                        @endforeach      
                                    </ul>
                                    <h6>Languages</h6>
                                    <ul class="list-unstyled practice-details">
                                        @foreach ($languages as $language) 
                                            <li><i class="fa-solid fa-square"></i>{{ $language->name }}</li>
                                        @endforeach      
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-multimedia" role="tabpanel" aria-labelledby="v-pills-multimedia-tab">
                                <div class="tab-right-content heading">
                                    <h3>Multimedia</h3>
                                    <hr class="border-bot">
                                    <div class="multimedia-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media-box">
                                                    <img src="/site/img/others/img-placeholder1.png" class="img-fluid" alt="img-placeholder" />
                                                    <a href="#"><img src="/site/img/icons/play-icon.png" class="img-fluid play-btn" alt="play-icon" /></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="media-box">
                                                    <img src="/site/img/others/img-placeholder2.png" class="img-fluid" alt="img-placeholder" />
                                                    <img src="/site/img/icons/play-icon.png" class="img-fluid play-btn" alt="play-icon" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-publication" role="tabpanel" aria-labelledby="v-pills-publications-tab">
                                <div class="tab-right-content heading">
                                    <h3>Publications</h3>
                                    <hr class="border-bot">
                                    @foreach ($news_stories as $news) 
                                        <a href="{{ $news->url }}" target="_blank" style="text-decoration: none;">
                                            <div class="publicat-content">
                                                <h5>{{ \Carbon\Carbon::parse($news->publication_date)->format('M j, Y')  }}</h5>
                                                <h4>{{ $news->headline }}</h4>
                                                <p>{{ $news->summary }} </p>
                                            </div>
                                        </a>
                                    @endforeach                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-speaking" role="tabpanel" aria-labelledby="v-pills-sepaking-tab">
                                <div class="tab-right-content heading">
                                    <h3>Speaking Engagements</h3>
                                    <hr class="border-bot">

                                    <div class="speaking-wrap">                                        
                                        <div class="row">
                                            @foreach ($engagements as $engagement)  
                                                <div class="col-md-12 col-lg-6">
                                                    <div class="speaking-content">                                                        
                                                        <h4>{{ $engagement->title }} </h4>
                                                        <p>{{ $engagement->summary }}</p>
                                                        <a href="#">{{ $engagement->conference }}<br>{{ \Carbon\Carbon::parse($engagement->event_date)->format('M j, Y')  }} {{ $engagement->event_time }}</a>
                                                    </div>
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
        </div>
    </div>
</div>
@endsection