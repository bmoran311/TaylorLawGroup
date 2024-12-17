<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function index()
    {
        $faq_categories = FaqCategory::orderBy('name')->get();
        return view('admin.faq_categories.list', compact('faq_categories'));
    }

    public function create()
    {
        return view('admin.faq_categories.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $level = new FaqCategory();        
        $level->name = $request->input('name');        
        $level->save();
    
        return back()->with('success', 'Faq Category Created');
    }
   
    public function edit(FaqCategory $level)
    {
        return view('admin.faq_categories.form', compact('level'));
    }

    public function update(Request $request, FaqCategory $level)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $level->name = $request->input('name');    
        $level->save();

        return back()->with('success', 'Faq Category Updated');
    }
    
    public function destroy(FaqCategory $level)
    {
        $level->delete();

         return back()->with('danger', 'Faq Category Deleted');
    }
}
