<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\State;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::orderBy('name')->get();
        return view('admin.education.list', compact('educations'));
    }

    public function create()
    {
		$states = State::all();
		
        return view('admin.education.form', compact('states'));
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
			'city' => 'required|string|max:255',
			'state' => 'required|string|max:2',
        ]);
        
        $education = new Education();        
        $education->name = $request->input('name'); 
        $education->city = $request->input('city');     
        $education->state = $request->input('state');            
        $education->save();
    
        return back()->with('success', 'Education Created');
    }
   
    public function edit(education $education)
    {
		$states = State::all();
		
        return view('admin.education.form', compact('education', 'states'));
    }

    public function update(Request $request, education $education)
    {
		$request->validate([
            'name' => 'required|string|max:255',
			'city' => 'required|string|max:255',
			'state' => 'required|string|max:2',
        ]);

        $education->name = $request->input('name');  
        $education->city = $request->input('city');     
        $education->state = $request->input('state');         
        $education->save();

        return back()->with('success', 'Education Updated');
    }
    
    public function destroy(education $education)
    {
        $education->delete();

         return back()->with('danger', 'Education Deleted');
    }
}
