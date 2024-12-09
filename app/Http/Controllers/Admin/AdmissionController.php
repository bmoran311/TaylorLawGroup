<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admission;
use Illuminate\Http\Request;
use App\Models\State;

class AdmissionController extends Controller
{
    public function index()
    {
        $admissions = admission::orderBy('name')->get();
        return view('admin.admissions.list', compact('admissions'));
    }

    public function create()
    {
		$states = State::all();
		
        return view('admin.admissions.form', compact('states'));
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $admission = new Admission();        
        $admission->name = $request->input('name');    
		$admission->state = $request->input('state'); 
        $admission->save();
    
        return back()->with('success', 'Admission Created');
    }
   
    public function edit(admission $admission)
    {
		$states = State::all();
		
        return view('admin.admissions.form', compact('admission', 'states'));
    }

    public function update(Request $request, admission $admission)
    {

        $admission->name = $request->input('name'); 
		$admission->state = $request->input('state'); 
        $admission->save();

        return back()->with('success', 'Admission Updated');
    }
    
    public function destroy(admission $admission)
    {
        $admission->delete();

         return back()->with('danger', 'Admission Deleted');
    }
}
