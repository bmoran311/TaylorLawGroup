<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResourceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResourceCategoryController extends Controller
{
    public function index()
    {
        $resource_categories = ResourceCategory::where('firm_id', session('firm_id'))->orderBy('sort_order')->get();
        return view('admin.resource_categories.list', compact('resource_categories'));
    }

    public function create()
    {
        return view('admin.resource_categories.form');
    }

    public function store(Request $request)
    {              
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $resource_category = new ResourceCategory();  
        $resource_category->firm_id = session('firm_id');       
        $resource_category->name = $request->input('name');  
        $resource_category->sort_order = ResourceCategory::max('sort_order') + 1 ?? 1; 
        $resource_category->save();
    
        return back()->with('success', 'Resource Category Created');
    }
   
    public function edit(ResourceCategory $resource_category)
    {
        return view('admin.resource_categories.form', compact('resource_category'));
    }

    public function update(Request $request, ResourceCategory $resource_category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $resource_category->name = $request->input('name');    
        $resource_category->save();

        return back()->with('success', 'Resource Category Updated');
    }
    
    public function destroy(ResourceCategory $resource_category)
    {        
        $resource_category->delete();
        ResourceCategory::where('firm_id', session('firm_id'))->where('sort_order', '>', $resource_category->sort_order)->decrement('sort_order');

        return back()->with('danger', 'Resource Category Deleted');
    }

    public function sort(Request $request, $direction, $id, $currPos)
    {        
        $swapPosition = ($direction === "up") ? $currPos - 1 : $currPos + 1;
      
        $currentCategory = ResourceCategory::findOrFail($id);
        $categoryToMove = ResourceCategory::where('sort_order', $swapPosition)->first();
        
        if ($categoryToMove) 
        {
            $currentCategory->update(['sort_order' => $swapPosition]);
            $categoryToMove->update(['sort_order' => $currPos]);
        }

        return back()->with('success', 'Resource Categories Reordered');
    }
}
