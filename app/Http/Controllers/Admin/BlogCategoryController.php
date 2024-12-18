<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $blog_categories = BlogCategory::orderBy('name')->get();
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

         return back()->with('danger', 'Blog Category Deleted');
    }
}
