
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
                            <h3>Resources</h3>
                            <hr class="border-bot">

                            <div class="speaking-wrap">                                        
                                <div class="row">
                                    @foreach ($resources as $resource)  
                                        <div class="col-md-12 col-lg-6">
                                            <div class="speaking-content">                                                        
                                                <h4>{{ $resource->title }} </h4>
                                                <p>{{ $resource->description }}</p>
                                                <a href="#">{{ \Carbon\Carbon::parse($resource->published_date)->format('M j, Y')  }}</a>
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
@endsection