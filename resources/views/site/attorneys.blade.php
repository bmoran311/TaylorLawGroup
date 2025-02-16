@extends('layouts.subpage')

@section('content')
<div class="taylor-line">
    <div class="container">
    <div class="top-elements">
        <img src="/site/img/others/taylorline.png" class="img-fluid" alt="taylorline">
    </div>
    </div>
</div>

<div class="search-box-section">
    <div class="container">
        <div class="search-box">
            <h4>SEARCH BY LAST NAME</h4>
            <h6>@foreach (range('A', 'Z') as $letter)
                    <a href="/attorneys?letter={{ $letter }}" class="letter-link">{{ $letter }}</a>
                @endforeach
            </h6>
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                        <input class="form-control form-control-lg" type="search" placeholder="Name or keyword" aria-label="Search">
                        <button class="btn btn-primary px-4" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
                <!---
                <div class="col-md-4">
                    <div class="advance-search text-end">
                        <a href="#">Advanced Search</a>
                    </div>
                </div>
                --->
            </div>
        </div>
    </div>
</div>
<div class="team-section all-member">
    <div class="taylorline-about-left">
        <img src="/site/img/others/taylor-line-left.png" class="img-fluid" alt="taylorline" />
    </div>
    <div class="container">
        <div class="team-heading heading text-center">
            <h5>full team A - Z</h5>
            <h3>All Team Members</h3>
            <hr class="border-bot">
        </div>
        <div class="team-wraping">
            <div class="row">
                @foreach ($bios as $bio)
                    <div class="col-md-12 col-lg-4">
                        <div class="team-content text-center">
                            <div class="team-img tem-box1">
                                <img src="{{ asset('storage/' . $bio->headshot) }}" class="img-fluid shape-bg-img" alt="{{ $bio->first_name }} {{ $bio->last_name }},  {{ $bio->title }}">
                            </div>
                            <div class="team-sub-cont">
                                <h4>{{ $bio->first_name }} {{ $bio->last_name }},  {{ $bio->title }}</h4>
                                <hr class="border-bot">
                                <p>{{ $bio->summary }}</p>
                                <div class="btn-box">
                                    <a href="/attorney-detail/{{ $bio->id }}" class="btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <div class="all-member-btn text-center">
                <a href="/attorneys" class="btn">VIEW MORE ATTORNEYS</a>
            </div>
        </div>
    </div>
</div>
@endsection
