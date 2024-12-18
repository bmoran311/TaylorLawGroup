<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $blog_categories = BlogCategory::orderBy('sort_order')->get();
        return view('admin.blog_categories.list', compact('blog_categories'));
    }

    public function create()
    {
        return view('admin.blog_categories.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $blog_category = new BlogCategory();
        $blog_category->name = $request->input('name');
        $blog_category->sort_order = BlogCategory::max('sort_order') + 1 ?? 1;
        $blog_category->save();

        return back()->with('success', 'Blog Category Created');
    }

    public function edit(BlogCategory $blog_category)
    {
        return view('admin.blog_categories.form', compact('blog_category'));
    }

    public function update(Request $request, BlogCategory $blog_category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $blog_category->name = $request->input('name');
        $blog_category->save();

        return back()->with('success', 'Blog Category Updated');
    }

    public function destroy(BlogCategory $blog_category)
    {
        $blog_category->delete();
        BlogCategory::where('sort_order', '>', $blog_category->sort_order)->decrement('sort_order');

         return back()->with('danger', 'Blog Category Deleted');
    }

    public function sort(Request $request, $direction, $id, $currPos)
    {        
        $swapPosition = ($direction === "up") ? $currPos - 1 : $currPos + 1;
      
        $currentCategory = BlogCategory::findOrFail($id);
        $categoryToMove = BlogCategory::where('sort_order', $swapPosition)->first();
        
        if ($categoryToMove) 
        {
            $currentCategory->update(['sort_order' => $swapPosition]);
            $categoryToMove->update(['sort_order' => $currPos]);
        }

        return back()->with('success', 'Blog Categories Reordered');
    }
}
