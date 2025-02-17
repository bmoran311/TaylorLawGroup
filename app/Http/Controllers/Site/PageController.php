<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\PracticeArea, App\Models\Bio, App\Models\News, App\Models\Engagement, App\Models\Faq, App\Models\Resource, App\Models\BlogPost, App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {              
        return view('site.home');
    }    

    public function attorneys(Request $request)
    {
        if ($request->filled('letter')) 
        {
            $letter = $request->query('letter');
                
            $bios = Bio::where('firm_id', 1)
                ->where(function ($query) use ($letter) {
                    $query->where('first_name', 'LIKE', $letter . '%')
                        ->orWhere('last_name', 'LIKE', $letter . '%');
                })
                ->orderBy('last_name')->orderBy('first_name')->get();
        }
        else if ($request->filled('search_criteria')) 
        {
            $search_criteria = $request->query('search_criteria');
                
            $bios = Bio::when($search_criteria, function ($queryBuilder) use ($search_criteria) {
                $queryBuilder->where('first_name', 'like', "%{$search_criteria}%")
                             ->orWhere('last_name', 'like', "%{$search_criteria}%")
                             ->orWhere('email', 'like', "%{$search_criteria}%")
                             ->orWhere('summary', 'like', "%{$search_criteria}%")
                             ->orWhere('title', 'like', "%{$search_criteria}%");
            })->orderBy('last_name')->orderBy('first_name')->get();

        }
        else
        {            
            $bios = Bio::where('firm_id', 1)->orderBy('last_name')->orderBy('first_name')->get();
        }

        $headerInfo = [        
            'h1Text' => "Attorneys",
            'h4Text' => "Taylor Tax Law",
            'bannerText' => "Taylor Tax Law provides expert legal guidance to navigate complex tax matters with confidence and ease."
        ];
                    
        return view('site.attorneys', compact('headerInfo', 'bios'));
    }

    public function attorney_detail($bio_id)
    {            
        $bio = Bio::find($bio_id);
        $practice_areas = $bio->practice_areas;  
        $colleges = $bio->education;    
        $admissions = $bio->admissions;       
        $memberships = $bio->memberships; 
        $licenses = $bio->licenses; 
        $awards = $bio->awards; 
        $languages = $bio->languages; 
        $news_stories = $bio->news; 
        $engagements = $bio->engagements;
        $multimedias = $bio->multimedias;
        $testimonials = $bio->testimonials;        

        $headerInfo = [        
            'h1Text' => "Attorney Detail",
            'h4Text' => "Taylor Tax Law",
            'bannerText' => "This page provides detailed information about the attorney's background, expertise, and commitment to serving your legal needs."
        ];
                   
        return view('site.attorney-detail', compact('headerInfo', 'bio', 'practice_areas', 'colleges', 'admissions', 'memberships', 'licenses', 'awards', 'languages', 'news_stories', 'engagements', 'multimedias', 'testimonials'));
    }

    public function news()
    {      
        $news_stories = News::where('firm_id', 1)->orderBy('publication_date')->get();       
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => "Publications",
            'bannerText' => "Our firm has been featured extensively in national and local publications, highlighting our unparalleled expertise and reputation in the legal industry."
        ];
                  
        return view('site.news', compact('headerInfo', 'news_stories'));
    }

    public function resources()
    {      
        $resources = Resource::where('firm_id', 1)->orderBy('created_at')->get();       
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => "Resources",
            'bannerText' => "Our Resource Center provides expert legal insights, including white papers, case studies, and practical guides to help you navigate complex legal matters."
        ];
                  
        return view('site.resources', compact('headerInfo', 'resources'));
    }

    public function blog()
    {      
        $blogs = BlogPost::where('firm_id', 1)->orderBy('created_at')->get();       
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => "Blog",
            'bannerText' => "Our blog offers expert legal insights, industry trends, and practical advice to help you stay informed."
        ];
                  
        return view('site.blog', compact('headerInfo', 'blogs'));
    }

    public function blog_detail($blog_id)
    {              
        $blog = BlogPost::find($blog_id);        
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => $blog->title,
            'bannerText' => $blog->excerpt
        ];
                  
        return view('site.blog-detail', compact('headerInfo', 'blog'));
    }

    public function testimonial_detail($testimonial_id)
    {              
        $testimonial = Testimonial::find($testimonial_id);        
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => "Testimonial",
            'bannerText' => $testimonial->client_name . ", ". $testimonial->title
        ];
                  
        return view('site.testimonial-detail', compact('headerInfo', 'testimonial'));
    }

    public function events()
    {                     
        $engagements = Engagement::where('firm_id', 1)->orderBy('title')->get();
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => "Engagements",
            'bannerText' => "Our firm is deeply committed to community engagement, proudly participating in and supporting numerous local events, initiatives, and charitable causes."
        ];
                  
        return view('site.events', compact('headerInfo', 'engagements'));
    }

    public function testimonials()
    {                     
        $testimonials = Testimonial::where('firm_id', 1)->orderBy('title')->get();
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => "Testimonials",
            'bannerText' => "At Taylor Law, we pride ourselves on delivering expert legal guidance with a personal touch. Read what our clients have to say about our dedication, professionalism, and results-driven approach."
        ];
                  
        return view('site.testimonials', compact('headerInfo', 'testimonials'));
    }

    public function faqs()
    {                     
        $faqs = Faq::where('firm_id', 1)->orderBy('created_at')->get();
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => "FAQs",
            'bannerText' => "At Taylor Tax Law, we understand that tax matters can be complex and stressful. Our FAQ section is here to provide clear and concise answers to common questions about our services, expertise, and how we can assist you in resolving tax-related challenges. Explore the FAQs below to learn more!"
        ];
                  
        return view('site.faqs', compact('headerInfo', 'faqs'));
    }

    public function practice_areas()
    {      
        $practice_areas = PracticeArea::where('firm_id', 1)->orderBy('name')->get();
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => "Practice Areas",
            'bannerText' => "With unmatched proficiency across numerous practice areas, we bring a depth of expertise and versatility that ensures excellence in every legal challenge we tackle"
        ];
                  
        return view('site.practice-areas', compact('headerInfo', 'practice_areas'));
    }

    public function practice_area($practice_area_id)
    {              
        $practice_area = PracticeArea::find($practice_area_id);        
        
        $headerInfo = [        
            'h1Text' => "Taylor Tax Law",
            'h4Text' => $practice_area->name,
            'bannerText' => $practice_area->summary
        ];
                  
        return view('site.practice-area', compact('headerInfo', 'practice_area'));
    }

    public function our_firm()
    {        
        $headerInfo = [        
            'h1Text' => "Our Firm",
            'h4Text' => "Meet Our People",
            'bannerText' => "At our firm, we pride ourselves on delivering exceptional legal expertise with a personalized approach."
        ];
                  
        return view('site.our-firm', compact('headerInfo'));
    }

    public function privacy_policy()
    {
        $headerInfo = [        
            'h1Text' => "Privacy Policy",
            'h4Text' => "Taylor Tax Law",
            'bannerText' => "Your privacy is important to us. We are committed to safeguarding the personal information you share with us and ensuring it is used responsibly."
        ];
                    
        return view('site.privacy-policy', compact('headerInfo'));
    }

    public function accessibility()
    {
        $headerInfo = [        
            'h1Text' => "Accessibility",
            'h4Text' => "Taylor Tax Law",
            'bannerText' => "We are committed to ensuring that our website is accessible to everyone, including individuals with disabilities."
        ];
                    
        return view('site.accessibility', compact('headerInfo'));
    }

    public function disclaimer()
    {   
        $headerInfo = [        
            'h1Text' => "Disclaimer",
            'h4Text' => "Taylor Tax Law",
            'bannerText' => "The information provided on this website is for general informational purposes only and does not constitute legal, financial, or professional advice."
        ];
                 
        return view('site.disclaimer', compact('headerInfo'));
    }

    public function terms_of_use()
    {   
        $headerInfo = [        
            'h1Text' => "Terms of Use",
            'h4Text' => "Taylor Tax Law",
            'bannerText' => "By using this website, you agree to comply with and be bound by our terms and conditions, which govern your access and use of our services."
        ];
                  
        return view('site.terms-of-use', compact('headerInfo'));
    }
}
