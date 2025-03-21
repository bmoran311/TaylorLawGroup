
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

                            @php   
                                $groupedResources = $resources->groupBy('resource_category_id');
                            @endphp

                            @foreach ($groupedResources as $categoryId => $resources)
                                @php                                    
                                    $categoryName = $resources->first()->category->name ?? 'Uncategorized';
                                @endphp

                                <h4>{{ $categoryName }}</h4> <!-- Display category name -->
                                <hr class="border-bot">

                                @if(isset($resource) && $resource->thumbnail_image)
                                <img src="{{ asset('storage/' . $resource->thumbnail_image) }}" alt="Headshot" width="100">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remove_thumbnail_image" name="remove_thumbnail_image" value="1">
                                    <label for="remove_thumbnail_image" class="form-check-label">Remove Thumbnail Image</label>
                                </div>
                            @endif

                                @foreach ($resources as $resource)  
                                    <a href="{{ asset('storage/' . $resource->file_upload) }}" target="_blank" style="text-decoration: none;">
                                        <div class="publicat-content">
                                            <h5>{{ \Carbon\Carbon::parse($resource->published_date)->format('M j, Y')  }}</h5>
                                            <h4>{{ $resource->title }}</h4>
                                            <p> @if($resource->thumbnail_image)
                                                    <img src="{{ asset('storage/' . $resource->thumbnail_image) }}" alt="Headshot" width="100">
                                                @endif
                                                {{ $resource->description }}
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            @endforeach                                
                        </div>
                    </div>                                                                                          
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection