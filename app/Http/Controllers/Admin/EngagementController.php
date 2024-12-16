<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Engagement;
use Illuminate\Http\Request;

class EngagementController extends Controller
{
    private function getEventTypes()
    {
        return [
            'Workshop',
            'Seminar',
            'Webinar',
            'Podcast',
            'Conference',
            'Networking',
            'Roundtable',
            'Summit',
            'Panel Discussion'
        ];
    }

    public function index()
    {        
        $engagements = Engagement::where('firm_id', session('firm_id'))->orderBy('title')->get();
        return view('admin.engagements.list', compact('engagements'));
    }

    public function create()
    {
        $event_types = $this->getEventTypes();

        return view('admin.engagements.form', compact('event_types'));
    }

    public function store(Request $request)
    {        
        $request->validate([
            'event_date' => 'required|date',
            'title' => 'required|string|max:255',
            'conference' => 'required|string|max:255',
            'type' => 'required|string|max:100',
        ]);
        
        $engagement = new Engagement();   
        $engagement->firm_id = session('firm_id');        
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
        $event_types = $this->getEventTypes();
        
        return view('admin.engagements.form', compact('engagement', 'event_types'));
    }

    public function update(Request $request, Engagement $engagement)
    {

		$request->validate([
            'event_date' => 'required|date',
            'title' => 'required|string|max:255',
            'conference' => 'required|string|max:255',
            'type' => 'required|string|max:100',
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
