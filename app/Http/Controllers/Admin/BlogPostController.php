<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    public function index()
    {
        $blog_posts = BlogPost::where('firm_id', session('firm_id'))->orderBy('blog_category_id')->orderBy('created_at')->get();
        return view('admin.blog_posts.list', compact('blog_posts'));
    }

    public function create()
    {
        $categories = BlogCategory::orderBy('sort_order')->get();

        return view('admin.blog_posts.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'tags' => 'required|string|max:255',            
            'blog_category_id' => 'required|integer',
        ]);

        $blog_post = new BlogPost();

        if ($request->hasFile('featured_image')) {                                       
            $path = $request->file('featured_image')->store('blog_images', 'public');
            $blog_post->featured_image = $path;
        }

        $blog_post->title = $request->input('title');
        $blog_post->firm_id = session('firm_id'); 
        $blog_post->slug = $request->input('slug');
        $blog_post->excerpt = $request->input('excerpt');
        $blog_post->content = $request->input('content');
        $blog_post->blog_category_id = $request->input('blog_category_id');
        $blog_post->tags = $request->input('tags');     
        $blog_post->is_featured = $request->input('is_featured');
        $blog_post->visibility = $request->input('visibility');
        $blog_post->seo_title = $request->input('seo_title');
        $blog_post->seo_meta_description = $request->input('seo_meta_description');
        $blog_post->firm_id = session('firm_id');
        $blog_post->save();

        return back()->with('success', 'Blog Post Created');
    }

    public function edit(BlogPost $blog_post)
    {
        $categories = BlogCategory::orderBy('sort_order')->get();

        return view('admin.blog_posts.form', compact('blog_post', 'categories'));
    }

    public function update(Request $request, BlogPost $blog_post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'tags' => 'required|string|max:255',            
            'blog_category_id' => 'required|integer',
        ]);

        if ($request->has('remove_featured_image') && $request->input('remove_featured_image') == 1) 
        {           
            if ($blog_post->featured_image) {
                Storage::delete('public/' . $blog_post->featured_image);
                $blog_post->featured_image = null; 
            }
        }

        if ($request->hasFile('featured_image')) {           
            if ($blog_post->featured_image) {
                Storage::delete($blog_post->featured_image);
            }
                
            $path = $request->file('featured_image')->store('blog_images', 'public');
            $blog_post->featured_image = $path;
        }

        $blog_post->title = $request->input('title');
        $blog_post->slug = $request->input('slug');
        $blog_post->excerpt = $request->input('excerpt');
        $blog_post->content = $request->input('content');
        $blog_post->blog_category_id = $request->input('blog_category_id');
        $blog_post->tags = $request->input('tags');     
        $blog_post->is_featured = $request->input('is_featured');
        $blog_post->visibility = $request->input('visibility');
        $blog_post->seo_title = $request->input('seo_title');
        $blog_post->seo_meta_description = $request->input('seo_meta_description');
        $blog_post->firm_id = session('firm_id');
        $blog_post->save();

        return back()->with('success', 'Blog Post Updated');
    }

    public function destroy(BlogPost $blog_post)
    {
        $blog_post->delete();

        return back()->with('danger', 'Blog Post Deleted');
    }
}
