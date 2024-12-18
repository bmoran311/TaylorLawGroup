<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqCategoryController extends Controller
{
    public function index()
    {
        $faq_categories = FaqCategory::orderBy('sort_order')->get();
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
        
        $faq_category = new FaqCategory();        
        $faq_category->name = $request->input('name');  
        $faq_category->sort_order = FaqCategory::max('sort_order') + 1 ?? 1; 
        $faq_category->save();
    
        return back()->with('success', 'Faq Category Created');
    }
   
    public function edit(FaqCategory $faq_category)
    {
        return view('admin.faq_categories.form', compact('faq_category'));
    }

    public function update(Request $request, FaqCategory $faq_category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $faq_category->name = $request->input('name');    
        $faq_category->save();

        return back()->with('success', 'Faq Category Updated');
    }
    
    public function destroy(FaqCategory $faq_category)
    {        
        $faq_category->delete();
        FaqCategory::where('sort_order', '>', $faq_category->sort_order)->decrement('sort_order');

        return back()->with('danger', 'Faq Category Deleted');
    }

    public function sort(Request $request, $direction, $id, $currPos)
    {        
        $swapPosition = ($direction === "up") ? $currPos - 1 : $currPos + 1;
      
        $currentCategory = FaqCategory::findOrFail($id);
        $categoryToMove = FaqCategory::where('sort_order', $swapPosition)->first();
        
        if ($categoryToMove) 
        {
            $currentCategory->update(['sort_order' => $swapPosition]);
            $categoryToMove->update(['sort_order' => $currPos]);
        }

        return back()->with('success', 'FAQ Categories Reordered');
    }
}
