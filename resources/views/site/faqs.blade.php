
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
                            <h3>FAQs</h3>
                            <hr class="border-bot">
                            @foreach($faqs as $faq)                                
                                <div class="publicat-content">                                        
                                    <h4>{{ $faq->question }}</h4>
                                    <p>{{ $faq->answer }} </p>
                                </div>                                
                            @endforeach                                    
                        </div>                                                                      
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection