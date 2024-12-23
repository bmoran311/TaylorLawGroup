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
        $categories = ResourceCategory::orderBy('sort_order')->get();

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

        if ($request->hasFile('thumbnail_image')) {
            $path = $request->file('thumbnail_image')->store('resources', 'public');
            $resource->thumbnail_image = $path;
        }

        if ($request->hasFile('file_upload')) {
            $path = $request->file('file_upload')->store('resources', 'public');
            $resource->file_upload = $path;
        }

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
        $categories = ResourceCategory::orderBy('sort_order')->get();

        return view('admin.resources.form', compact('resource', 'categories'));
    }

    public function update(Request $request, Resource $resource)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'published_date' => 'required|date|max:255',
            'resource_category_id' => 'required|string|max:255',
        ]);

        if ($request->has('remove_thumbnail_image') && $request->input('remove_thumbnail_image') == 1) {
            if ($resource->thumbnail_image) {
                Storage::delete('public/resources/' . $resource->thumbnail_image);
                $resource->thumbnail_image = null;
            }
        }

        if ($request->hasFile('thumbnail_image')) {
            if ($resource->thumbnail_image) {
                Storage::disk('public')->delete($resource->thumbnail_image);
            }

            $path = $request->file('thumbnail_image')->store('resources', 'public');
            $resource->thumbnail_image = $path;
        }

        if ($request->has('remove_file_upload') && $request->input('remove_file_upload') == 1) {
            if ($resource->file_upload) {
                Storage::delete('public/resources/' . $resource->file_upload);
                $resource->file_upload = null;
            }
        }

        if ($request->hasFile('file_upload')) {
            if ($resource->file_upload) {
                Storage::disk('public')->delete($resource->file_upload);
            }

            $path = $request->file('file_upload')->store('resources', 'public');
            $resource->file_upload = $path;
        }

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
