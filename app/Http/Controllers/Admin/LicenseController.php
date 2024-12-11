<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function index()
    {
        $licenses = License::orderBy('name')->get();
        return view('admin.licenses.list', compact('licenses'));
    }

    public function create()
    {
        return view('admin.licenses.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
        ]);
        
        $license = new License();        
        $license->name = $request->input('name');   
		$license->type = $request->input('type');  		
        $license->save();
    
        return back()->with('success', 'License Created');
    }
   
    public function edit(License $license)
    {
        return view('admin.licenses.form', compact('license'));
    }

    public function update(Request $request, License $license)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
        ]);

        $license->name = $request->input('name');   
		$license->type = $request->input('type');  			
        $license->save();

        return back()->with('success', 'License Updated');
    }
    
    public function destroy(License $license)
    {
        $license->delete();

         return back()->with('danger', 'License Deleted');
    }
}
