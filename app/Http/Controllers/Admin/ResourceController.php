<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResourceCategory;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::where('firm_id', session('firm_id'))->orderBy('resource_category_id')->orderBy('created_at')->get();
        return view('admin.resources.list', compact('resources'));
    }

    public function create()
    {
        $categories = ResourceCategory::orderBy('name')->get();

        return view('admin.resources.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'published_date' => 'required|date|max:255',   
            'resource_category_id' => 'required|string|max:255',         
        ]);

        $resource = new Resource();

        $resource->title = $request->input('title');
        $resource->firm_id = session('firm_id');    
        $resource->description = $request->input('description');    
        $resource->tags = $request->input('tags');              
        $resource->published_date = $request->input('published_date');       
        $resource->resource_category_id = $request->input('resource_category_id');
        $resource->save();

        return back()->with('success', 'Resource Created');
    }

    public function edit(Resource $resource)
    {
        $categories = ResourceCategory::orderBy('name')->get();
        return view('admin.resources.form', compact('resource', 'categories'));
    }

    public function update(Request $request, Resource $resource)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'published_date' => 'required|date|max:255',   
            'resource_category_id' => 'required|string|max:255',  
        ]);

        $resource->title = $request->input('title');
        $resource->firm_id = session('firm_id');  
        $resource->description = $request->input('description');
        $resource->resource_category_id = $request->input('resource_category_id');
        $resource->tags = $request->input('tags');     
        $resource->published_date = $request->input('published_date'); 
        $resource->save();

        return back()->with('success', 'Resource Updated');
    }

    public function destroy(Resource $resource)
    {
        $resource->delete();

        return back()->with('danger', 'Resource Deleted');
    }
}
