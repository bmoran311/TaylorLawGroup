<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PracticeArea;
use Illuminate\Http\Request;

class PracticeAreaController extends Controller
{
    public function index()
    {
        $practice_areas = PracticeArea::orderBy('name')->get();
        return view('admin.practice_areas.list', compact('practice_areas'));
    }

    public function create()
    {
        return view('admin.practice_areas.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $practice_area = new PracticeArea();        
        $practice_area->name = $request->input('name');   
        $practice_area->description = $request->input('description');          
        $practice_area->save();
    
        return back()->with('success', 'PracticeArea Created');
    }
   
    public function edit(PracticeArea $practice_area)
    {
        return view('admin.practice_areas.form', compact('practice_area'));
    }

    public function update(Request $request, PracticeArea $practice_area)
    {

        $practice_area->name = $request->input('name'); 
        $practice_area->description = $request->input('description');        
        $practice_area->save();

        return back()->with('success', 'PracticeArea Updated');
    }
    
    public function destroy(PracticeArea $practice_area)
    {
        $practice_area->delete();

         return back()->with('danger', 'PracticeArea Deleted');
    }
}
