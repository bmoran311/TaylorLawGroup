<?php 
    use Illuminate\Support\Facades\DB;    
    $testimonials = DB::table('testimonial')->where('client_consent', 1)->latest()->get();         
?>

<div class="testimonials-section">
    <div class="container">
        <div class="testimonials-heading heading text-center">
            <h5>testimonials</h5>
            <h3>what clients are saying</h3>
            <hr>
            </div>
            <div class="testimonial-wrap heading">
                <div class="owl-carousel owl-theme owl-carousel-testimonial">
                    @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="testimonial-contents">                        
                                <div class="testimonial-wrap-cont">
                                    <div class="quotes-icon">
                                        <img src="/img/icons/quotes-icon.png" class="img-fluid" alt="quotes-icon" />
                                    </div>
                                    <p>{{ $testimonial->summary }}</p>                   
                                    <h4>{{ $testimonial->client_name }}</h4>                                                
                                </div>                      
                            </div>
                        </div> 
                    @endforeach                                    
                </div> 
            </div>
        </div>
    </div>
</div>