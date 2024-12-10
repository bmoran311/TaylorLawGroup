<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Engagement;
use Illuminate\Http\Request;

class EngagementController extends Controller
{
    public function index()
    {
        $engagement = Engagement::orderBy('title')->get();
        return view('admin.engagements.list', compact('engagement'));
    }

    public function create()
    {
        return view('admin.engagements.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        
        $engagement = new Engagement();        
        $engagement->title = $request->input('title');    
        $engagement->type = $request->input('type');   
		$engagement->conference = $request->input('conference'); 
        $engagement->event_date = $request->input('event_date'); 
        $engagement->event_time = $request->input('event_time'); 
        $engagement->summary = $request->input('summary'); 
        $engagement->save();
    
        return back()->with('success', 'Engagement Created');
    }
   
    public function edit(Engagement $engagement)
    {				
        return view('admin.engagements.form', compact('engagement'));
    }

    public function update(Request $request, Engagement $engagement)
    {

		$request->validate([
            'title' => 'required|string|max:255',
        ]);

        $engagement->title = $request->input('title'); 
        $engagement->type = $request->input('type');   
		$engagement->conference = $request->input('conference'); 
        $engagement->event_date = $request->input('event_date');
        $engagement->event_time = $request->input('event_time');  
        $engagement->summary = $request->input('summary'); 
        $engagement->save();

        return back()->with('success', 'Engagement Updated');
    }
    
    public function destroy(Engagement $engagement)
    {
        $engagement->delete();

         return back()->with('danger', 'Engagement Deleted');
    }
}
