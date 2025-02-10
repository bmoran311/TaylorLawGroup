@extends('layouts.subpage')

@section('content')
<div class="industry-section">
    <div class="taylorline-about-left">
        <img src="/site/img/others/taylor-line-left.png" class="img-fluid" alt="taylorline" />
    </div>
    <div class="container">
        <div class="about-wrap heading">
            <div class=row>
                <div class="col-md-12 col-lg-6 ">
                    <div class="about-content heading">
                        <h4>{{$blog->title}}</h4>
                        <p>
                            {!! nl2br(e($blog->content)) !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 ">
                    <div class="about-img industry text-center">
                        <img src="/site/img/others/about-img2.png" class="img-fluid" alt="about-img" />
                    </div>
                    <div class="about-border industry">
                        <img src="/site/img/others/img-border.png" class="img-fluid" alt="about-border" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


      



               



      