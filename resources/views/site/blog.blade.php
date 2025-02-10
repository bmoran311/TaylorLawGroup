
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
                            <h3>Blog</h3>
                            <hr class="border-bot">

                            @php   
                                $groupedBlogs = $blogs->groupBy('blog_category_id');
                            @endphp

                            @foreach ($groupedBlogs as $categoryId => $blogs)
                                @php                                    
                                    $categoryName = $blogs->first()->category->name ?? 'Uncategorized';
                                @endphp

                                <h4>{{ $categoryName }}</h4> <!-- Display category name -->
                                <hr class="border-bot">

                                @if(isset($blog) && $blog->featured_image)
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Headshot" width="100">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remove_featured_image" name="remove_featured_image" value="1">
                                    <label for="remove_featured_image" class="form-check-label">Remove Thumbnail Image</label>
                                </div>
                            @endif

                                @foreach ($blogs as $blog)  
                                    <a href="/blog-detail/{{ $blog->id }}" style="text-decoration: none;">
                                        <div class="publicat-content">
                                            <h5>{{ \Carbon\Carbon::parse($blog->published_date)->format('M j, Y')  }}</h5>
                                            <h4>{{ $blog->title }}</h4>
                                            <p> @if($blog->featured_image)
                                                    <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Headshot" width="100">
                                                @endif
                                                {{ $blog->excerpt }}
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