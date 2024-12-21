<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $awards = award::orderBy('name')->get();
        return view('admin.awards.list', compact('awards'));
    }

    public function create()
    {
        return view('admin.awards.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
			'publication' => 'required|string|max:255',
        ]);
        
        $award = new Award();        
        $award->name = $request->input('name');    
        $award->publication = $request->input('publication');     
        $award->save();
    
        return back()->with('success', 'Award Created');
    }
   
    public function edit(award $award)
    {
        return view('admin.awards.form', compact('award'));
    }

    public function update(Request $request, award $award)
    {
		$request->validate([
            'name' => 'required|string|max:255',
			'publication' => 'required|string|max:255',
        ]);

        $award->name = $request->input('name');    
        $award->publication = $request->input('publication'); 
        $award->save();

        return back()->with('success', 'Award Updated');
    }
    
    public function destroy(award $award)
    {
        $award->delete();

         return back()->with('danger', 'Award Deleted');
    }
}
