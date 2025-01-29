
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
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection