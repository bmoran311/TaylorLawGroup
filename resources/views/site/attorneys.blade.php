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
                    {{ $letter }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                <div class="col-md-4">
                    <div class="advance-search text-end">
                        <a href="#">Advanced Search</a>
                    </div>
                </div>
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
                <div class="col-md-12 col-lg-4">
                    <div class="team-content text-center">
                        <div class="team-img tem-box1">
                            <img src="/site/img/others/team-img-1.png" class="img-fluid shape-bg-img" alt="">
                        </div>                       
                        <div class="team-sub-cont">
                            <h4>David Taylor. Founding Partner</h4>
                            <hr class="border-bot">
                            <p>David Taylor is a distinguished attorney with over two decades of experience in taxation, asset protection, and transactional law. Known for his innovative approach and meticulous attention to detail,
                                David has successfully guided clients ranging from privately held businesses to multinational organizations. His commitment to exceptional service and creative problem-solving has earned him a reputation
                                as an indispensable advisor both nationally and internationally.</p>
                            <div class="btn-box">
                                <a href="/attorney-detail" class="btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="team-content text-center">
                        <div class="team-img tem-box1">
                            <img src="/site/img/others/team-img-2.png" class="img-fluid shape-bg-img" alt="">
                        </div>
                        <div class="team-sub-cont">
                            <h4>Bob McCullough, Chief Financial Officer</h4>
                            <hr class="border-bot">
                            <p>Bob McCullough is a seasoned senior executive with over 20 years of expertise in strategic finance and operations, currently serving as Senior Vice President and Chief Financial Officer at EcoVest Capital, 
                            Inc. Previously, he was CFO of Wells Real Estate Funds, where he managed corporate operations and played a pivotal role in developing complex business strategies for a $12 billion real estate investment 
                            portfolio. A licensed CPA since 2002, Bob is active in his industry and community, holding leadership roles in organizations like the Investment Program Association and the Georgia Society of CPAs. </p>
                            <div class="btn-box">
                                <a href="/attorney-detail" class="btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="team-content text-center">
                        <div class="team-img tem-box1">
                            <img src="/site/img/others/team-img-3.png" class="img-fluid shape-bg-img" alt="">
                        </div>
                        <div class="team-sub-cont">
                            <h4>Alexander Evans, Estate Planning Attorney</h4>
                            <hr class="border-bot">
                            <p>Experienced Estate Planning Attorney with expertise in wills, trusts, and probate administration. Demonstrates a proven ability to deliver strategic legal solutions for comprehensive wealth transfer and asset 
                            protection. Skilled at navigating complex legal frameworks and providing insightful, informed counsel. Renowned for fostering strong client relationships and upholding the highest standards of professionalism.
                            Alexander is an active member of the Wisconsin, Illinois, and South Carolina Bar</p>
                            <div class="btn-box">
                                <a href="/attorney-detail" class="btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>             
                <div class="col-md-12 col-lg-4">
                    <div class="team-content text-center">
                        <div class="team-img tem-box1">
                            <img src="/site/img/others/team-img-7.png" class="img-fluid shape-bg-img" alt="">
                        </div>                       
                        <div class="team-sub-cont">
                            <h4>David Taylor. Founding Partner</h4>
                            <hr class="border-bot">
                            <p>David Taylor is a distinguished attorney with over two decades of experience in taxation, asset protection, and transactional law. Known for his innovative approach and meticulous attention to detail,
                                David has successfully guided clients ranging from privately held businesses to multinational organizations. His commitment to exceptional service and creative problem-solving has earned him a reputation
                                as an indispensable advisor both nationally and internationally.</p>
                            <div class="btn-box">
                                <a href="/attorney-detail" class="btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="team-content text-center">
                        <div class="team-img tem-box1">
                            <img src="/site/img/others/team-img-8.png" class="img-fluid shape-bg-img" alt="">
                        </div>
                        <div class="team-sub-cont">
                            <h4>Bob McCullough, Chief Financial Officer</h4>
                            <hr class="border-bot">
                            <p>Bob McCullough is a seasoned senior executive with over 20 years of expertise in strategic finance and operations, currently serving as Senior Vice President and Chief Financial Officer at EcoVest Capital, 
                            Inc. Previously, he was CFO of Wells Real Estate Funds, where he managed corporate operations and played a pivotal role in developing complex business strategies for a $12 billion real estate investment 
                            portfolio. A licensed CPA since 2002, Bob is active in his industry and community, holding leadership roles in organizations like the Investment Program Association and the Georgia Society of CPAs. </p>
                            <div class="btn-box">
                                <a href="/attorney-detail" class="btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="team-content text-center">
                        <div class="team-img tem-box1">
                            <img src="/site/img/others/team-img-9.png" class="img-fluid shape-bg-img" alt="">
                        </div>
                        <div class="team-sub-cont">
                            <h4>Alexander Evans, Estate Planning Attorney</h4>
                            <hr class="border-bot">
                            <p>Experienced Estate Planning Attorney with expertise in wills, trusts, and probate administration. Demonstrates a proven ability to deliver strategic legal solutions for comprehensive wealth transfer and asset 
                            protection. Skilled at navigating complex legal frameworks and providing insightful, informed counsel. Renowned for fostering strong client relationships and upholding the highest standards of professionalism.
                            Alexander is an active member of the Wisconsin, Illinois, and South Carolina Bar</p>
                            <div class="btn-box">
                                <a href="/attorney-detail" class="btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>             
            </div>
            <br>
            <div class="all-member-btn text-center">
                <a href="/attorneys" class="btn">VIEW MORE ATTORNES</a>
            </div>
        </div>
    </div>
</div>      
@endsection