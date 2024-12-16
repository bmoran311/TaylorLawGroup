<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Multimedia;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    public function index()
    {
        $multimedia = Multimedia::where('firm_id', session('firm_id'))->orderBy('headline')->get();
        return view('admin.multimedia.list', compact('multimedia'));
    }

    public function create()
    {
        return view('admin.multimedia.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'publication_date' => 'required|date',
            'headline' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'publication' => 'required|string|max:255',            
        ]);          
        
        $multimedia = new Multimedia();    
        $multimedia->firm_id = session('firm_id');          
        $multimedia->headline = $request->input('headline');    
		$multimedia->publication = $request->input('publication'); 
		$multimedia->url = $request->input('url');
        $multimedia->publication_date = $request->input('publication_date'); 
        $multimedia->summary = $request->input('summary'); 
        $multimedia->save();
    
        return back()->with('success', 'Multimedia Created');
    }
   
    public function edit(Multimedia $multimedia)
    {				
        return view('admin.multimedia.form', compact('multimedia'));
    }

    public function update(Request $request, Multimedia $multimedia)
    {
		$request->validate([
            'publication_date' => 'required|date',
            'headline' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'publication' => 'required|string|max:255',            
        ]);

        $multimedia->headline = $request->input('headline'); 
		$multimedia->publication = $request->input('publication'); 
		$multimedia->url = $request->input('url');
        $multimedia->publication_date = $request->input('publication_date'); 
        $multimedia->summary = $request->input('summary'); 
        $multimedia->save();

        return back()->with('success', 'Multimedia Updated');
    }
    
    public function destroy(Multimedia $multimedia)
    {
        $multimedia->delete();

         return back()->with('danger', 'Multimedia Deleted');
    }
}
