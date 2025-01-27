@extends('layouts.main-attorney')

@section('content')
<div class="tab-section">
    <div class="container">
        <div class="tab-wrap">
            <div class="d-flex align-items-start">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="tab-contentleft">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <div class="team-name heading">
                                    <h3>David Taylor </h3>
                                    <h5>FOUNDING PARTNER</h5>
                                </div>
                                <img src="/site/img/icons/active-icon.png" class="img-fluid taylorline-img" alt="taylorline" />
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">OVERVIEW </button>
                                <button class="nav-link" id="v-pills-creadentials-tab" data-bs-toggle="pill" data-bs-target="#v-pills-creadentials" type="button" role="tab" aria-controls="v-pills-creadentials" aria-selected="false">Credentials</button>
                                <button class="nav-link" id="v-pills-multimedia-tab" data-bs-toggle="pill" data-bs-target="#v-pills-multimedia" type="button" role="tab" aria-controls="v-pills-multimedia" aria-selected="false">Multimedia</button>
                                <button class="nav-link" id="v-pills-publication-tab" data-bs-toggle="pill" data-bs-target="#v-pills-publication" type="button" role="tab" aria-controls="v-pills-publication" aria-selected="false">Publications</button>
                                <button class="nav-link" id="v-pills-speaking-tab" data-bs-toggle="pill" data-bs-target="#v-pills-speaking" type="button" role="tab" aria-controls="v-pills-speaking" aria-selected="false">Speaking Engagements</button>
                                <button class="nav-link" id="v-pills-news-tab" data-bs-toggle="pill" data-bs-target="#v-pills-news" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">News</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12 col-sm-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="tab-right-content heading">
                                    <h3>OVERVIEW</h3>
                                    <hr class="border-bot">
                                    <p>David Taylor founded his first law firm in 1999 after leaving a large regional law firm in order to provide more complex and focused legal services. David founded Taylor | Foley in 2013 as a new venture to meet the growing and complex needs of clients. David has 
                                        led Taylor | Foley with the continuing philosophy that our firm will provide our clients with exceptional client service and uniquely constructed transactional methods. David focuses his practice in the Southeast, but this philosophy has led David and the attorneys 
                                        in his firm to perform work for clients throughout the country and internationally as well.</p>
                                    <p>David's practice is transactional in nature and encompasses all areas of taxation and asset protection law. The scope of David's work spans from large organizations to small entities, almost entirely privately owned. David's experience and penchant for effective and 
                                        creative transactional structures makes him a distinctive attorney that is indispensable to his clients. His approach is always one of integration, combining taxation efficiency; asset management and protection; organizational and asset succession; and effective management 
                                        structure.</p>
                                    <p>Examples of transactional components are: entity choice, structure and governance documentation; structure and documentation of privately owned companies to more widely held corporations; design and implementation of a corporate succession and reorganization plan for 
                                        large organizations; implementation of sophisticated estate tax planning transactions using specially designed trust and financial instrument components; administration of estates both large and small, often with complex technical issues; implementation of complex income 
                                        taxation planning and employee plans for operating companies; anti-takeover planning for entities and corporations; and structure and completion of entity mergers and acquisitions in a manner to achieve minimum taxation impact for the parties.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-creadentials" role="tabpanel" aria-labelledby="v-pills-credentials-tab">
                                <div class="tab-right-content heading">
                                    <h3>Credentials</h3>
                                    <hr class="border-bot">
                                    <h6>Education</h6>
                                    <ul class="list-unstyled practice-details">
                                        <li><i class="fa-solid fa-square"></i>University of College Name of Law, J.D. </li>
                                        <li><i class="fa-solid fa-square"></i>College Name University, B.A.</li>
                                    </ul>
                                    <h6>Bar Admissions/Licenses</h6>
                                    <ul class="list-unstyled practice-details">
                                        <li><i class="fa-solid fa-square"></i>Georgia</li>
                                        <li><i class="fa-solid fa-square"></i>Pennsylvania </li>
                                    </ul>
                                    <h6>Memberships</h6>
                                    <ul class="list-unstyled practice-details">
                                        <li><i class="fa-solid fa-square"></i>Sed ut perspiciatis unde omnis iste natus error sit  </li>
                                        <li><i class="fa-solid fa-square"></i>Aoluptatem accusantium doloremque laudantium totam </li>
                                        <li><i class="fa-solid fa-square"></i>Aem aperiam eaque ipsa quae ab </li>
                                        <li><i class="fa-solid fa-square"></i>Allo inventore veritatis et quasi architecto beatae </li>
                                        <li><i class="fa-solid fa-square"></i>Vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia </li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                                    <div class="publicat-content">
                                        <h5>OCT 09, 2024</h5>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    </div>
                                    <div class="publicat-content">
                                        <h5>OCT 09, 2024</h5>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    </div>
                                    <div class="publicat-content">
                                        <h5>OCT 09, 2024</h5>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-speaking" role="tabpanel" aria-labelledby="v-pills-sepaking-tab">
                                <div class="tab-right-content heading">
                                    h3>Speaking Engagements</h3>
                                    <hr class="border-bot">

                                    <div class="speaking-wrap">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <div class="speaking-content">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                                                    <a href="#"> Presenter / STEP Mid Atlantic </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="speaking-content">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                                                    <a href="#"> Presenter / STEP Mid Atlantic </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="speaking-content">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                                                    <a href="#"> Presenter / STEP Mid Atlantic </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="speaking-content">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                                                    <a href="#"> Presenter / STEP Mid Atlantic </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-news" role="tabpanel" aria-labelledby="v-pills-news-tab">
                                <div class="tab-right-content heading">
                                    <h3>News</h3>
                                    <hr class="border-bot">

                                    <div class="new-wrap">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <div class="news-content">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices  </p>
                                                    <a href="#"> DEC 24, 2024 </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="news-content">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                                                    <a href="#"> DEC 24, 2024 </a>
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
    </div>
</div>
@endsection