<?php
    use Illuminate\Support\Facades\DB;
    $bios = DB::table('bio')
        ->where('type', 'LIKE', '%Attorney%')
        ->orderBy('sort_order', 'asc')
        ->get();

    $leaders = DB::table('bio')
        ->where('type', 'LIKE', '%Leadership%')
        ->orderBy('sort_order', 'asc')
        ->get();

    $practice_areas = DB::table('practice_area')->latest()->get();
?>

<div class="header-top">
    <div class="container">
        <div class="header-call-timg">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-clock-cont">
                        <ul class="list-unstyled d-inline-flex d-flex">
                            <li><a href="#"></a><br></li>
                            <li><h4>&nbsp;</h4><br>
                            <p><br></p>
                            </li>
                        </ul>
						<!---
						<ul class="list-unstyled d-inline-flex d-flex">
                            <li><a href="#"><i class="fa-solid fa-clock"></i></a></li>
                            <li><h4>Mon - Fri: <span>8:00am  - 5:00 pm</span></h4>
                            <p>Answering services avaliable on weekends and offer hours</p>
                            </li>
                        </ul>
						--->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-clock-cont text-end">
                        <ul class="list-unstyled d-inline-flex d-flex">
							<li><a href="tel: 843.723.2000"><i class="fa-solid fa-phone"></i></a></li>
                            <li><h4>Call Us <span> 843.723.2000</span></h4></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bg-img">
            <img src="/site/img/others/header-bg1.png" class="img-fluid" alt="header-bg" />
        </div>
        <div class="header-menu">
            <div class="mainmenu">
                <nav class="navbar navbar-expand-md">
                    <div class="container">
                        <a class="navbar-brand d-block d-md-none d-lg-none d-sm-block" href="index.html"><img src="/site/img/logo.png" class="img-fluid" alt="logo" /></a>
                        <div class="get-start text-end d-block d-md-none d-lg-none d-sm-block">
                            <a href="login.html" class="btn">Get Started</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/our-firm">Our Firm </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/attorneys" id="navbarDropdown" role="button" aria-expanded="false">
                                        Attorneys
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($bios as $bio)
                                            <li><a class="dropdown-item" href="/attorney-detail/{{ $bio->id }}">{{ $bio->first_name }} {{ $bio->last_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/practice-areas" id="navbarDropdown" role="button" aria-expanded="false">
                                        Firm Expertise
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($practice_areas as $practice_area)
                                            <li><a class="dropdown-item" href="/practice-area/{{ $practice_area->id }}">{{ $practice_area->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item logo-t">
                                    <a class="nav-link" href="/"><img src="/site/img/logo1.png" class="img-fluid" alt="logo" /></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/attorneys" id="navbarDropdown" role="button" aria-expanded="false">
                                        Leadership
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($leaders as $leader)
                                            <li><a class="dropdown-item" href="/attorney-detail/{{ $leader->id }}">{{ $leader->first_name }} {{ $leader->last_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/our-firm" id="navbarDropdown" role="button" aria-expanded="false">
                                        Culture
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/customer-service">Customer Service</a></li>
                                        <li><a class="dropdown-item" href="/expertise">Expertise</a></li>
                                        <li><a class="dropdown-item" href="/testimonials">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/news">Latest </a>
                                </li>
                                <!---
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">BOOK AN APPOINTMENT</a>
                                </li>
                                --->
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
