<?php 
    use Illuminate\Support\Facades\DB;    
    $bios = DB::table('bio')->orderBy('id', 'asc')->limit(3)->get();
?>

<div class="team-section">
    <div class="container">
        <div class="team-heading heading text-center">
            <h5>Meet the team</h5>
            <h3>OUR ATTORNEYS</h3>
            <hr class="border-bot">
        </div>
        <div class="team-wraping">
            <div class="row">
                @foreach ($bios as $bio)  
                    <div class="col-md-4">
                        <div class="team-content text-center">
                            <div class="team-img tem-box">
                                <img src="{{ asset('storage/' . $bio->headshot) }}" class="img-fluid shape-bg-img" alt="{{ $bio->first_name }} {{ $bio->last_name }},  {{ $bio->title }}">
                            </div>
                            <div class="team-sub-cont">
                                <h4>{{ $bio->first_name }} {{ $bio->last_name }},  {{ $bio->title }}</h4>
                                <p>{{ $bio->summary }} </p>
                                <div class="btn-box">
                                    <a href="/attorney-detail/{{ $bio->id }}" class="btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>                
        </div>
    </div>
</div>