@extends('layouts.subpage')

@section('content')
<div class="industry-section">
    <div class="taylorline-about-left">
        <img src="/site/img/others/taylor-line-left.png" class="img-fluid" alt="taylorline" />
    </div>
    <div class="container">
        <div class="about-wrap heading">
            <div class=row>
                <div class="col-md-12 col-lg-12 ">
                    <div class="about-content heading">
                        <div style="float: right; max-width: 590px;">
                            <div class="about-img industry text-center">
                                <img src="/site/img/others/about-img2.png" class="img-fluid" alt="about-img" />
                            </div>
                            <div class="about-border industry">
                                <img src="/site/img/others/img-border.png" class="img-fluid" alt="about-border" />
                            </div>
                        </div>
                        <h4>{{$practice_area->name}}</h4>
                        <p>                           
                            {!! $practice_area->description !!}
                        </p>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection


      



               



      