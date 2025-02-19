@extends('layouts.subpage')
@section('content')
<div class="taylor-line">
    <div class="container">
        <div class="top-elements">
            <img src="/site/img/others/taylorline.png" class="img-fluid" alt="taylorline">
        </div>
    </div>
</div>

<div class="tab-content-section">
    <div class="taylorline-about-left">
        <img src="/site/img/others/taylor-line-left.png" class="img-fluid" alt="taylorline" />
    </div>
    <div class="container">
        <div class="tab-wrap">
            <div class="d-flex align-items-start">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">                       
                        <div class="tab-titles">
                            <div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">All</button>
                                <!---<button class="nav-link" id="v-pills-browse-tab" data-bs-toggle="pill" data-bs-target="#v-pills-browse" type="button" role="tab" aria-controls="v-pills-browse" aria-selected="false">browse by area</button>
                                {{-- <button class="nav-link" id="v-pills-all-a-z-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all-a-z" type="button" role="tab" aria-controls="v-pills-all-a-z" aria-selected="false">All A-Z</button> --}}
                                <button class="nav-link" id="v-pills-industry-tab" data-bs-toggle="pill" data-bs-target="#v-pills-industry" type="button" role="tab" aria-controls="v-pills-industry" aria-selected="false">Industry</button>
                                --->
                            </div>
                        </div>                       
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="tab-answer">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="faq-content">
                                        <div class="accordion accordion-flush" id="accordionFlush">
                                            <div class="row">
                                                @foreach($practice_areas->chunk(4) as $pa_chunk)
                                                <div class="col-md-12 col-lg-6">
                                                    @foreach($pa_chunk as $practice_area)
                                                        <div class="accordion-item bor-box-faq">
                                                            <h2 class="accordion-header" id="flush-heading{{ $practice_area->id}}">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $practice_area->id}}" aria-expanded="false" aria-controls="flush-collapse{{ $practice_area->id}}">
                                                                {{ $practice_area->name}}
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapse{{ $practice_area->id}}" class="accordion-collapse collapse show" aria-labelledby="flush-heading{{ $practice_area->id}}" data-bs-parent="#accordionFlush">
                                                                <div class="accordion-body">{{ $practice_area->summary}} <a href="/practice-area/{{ $practice_area->id}}">View Detail</a></div>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
</div>
@endsection
