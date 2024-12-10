<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bio;
use Illuminate\Http\Request;
use App\Models\State;

class BioController extends Controller
{
    public function index()
    {
        $bios = bio::orderBy('name')->get();
        return view('admin.bios.list', compact('bios'));
    }

    public function create()
    {
		$states = State::all();
		
        return view('admin.bios.form', compact('states'));
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $bio = new Bio();        
        $bio->name = $request->input('name');    
		$bio->state = $request->input('state'); 
        $bio->save();
    
        return back()->with('success', 'Bio Created');
    }
   
    public function edit(bio $bio)
    {
		$states = State::all();
		
        return view('admin.bios.form', compact('bio', 'states'));
    }

    public function update(Request $request, bio $bio)
    {

        $bio->name = $request->input('name'); 
		$bio->state = $request->input('state'); 
        $bio->save();

        return back()->with('success', 'Bio Updated');
    }
    
    public function destroy(bio $bio)
    {
        $bio->delete();

         return back()->with('danger', 'Bio Deleted');
    }
}
