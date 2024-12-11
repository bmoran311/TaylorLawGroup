<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Firm;
use Illuminate\Http\Request;

class FirmController extends Controller
{
    public function index()
    {
        $firm = Firm::orderBy('name')->get();
        return view('admin.firms.list', compact('firm'));
    }

    public function create()
    {
        return view('admin.firms.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
        ]);
        
        $firm = new Firm();        
        $firm->name = $request->input('name');    		
		$firm->url = $request->input('url');      
        $firm->parent_id = $request->input('parent_id'); 
        $firm->save();
    
        return back()->with('success', 'Firm Created');
    }
   
    public function edit(Firm $firm)
    {				
        return view('admin.firms.form', compact('firm'));
    }

    public function update(Request $request, Firm $firm)
    {
		$request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
        ]);

        $firm->name = $request->input('name'); 
		$firm->url = $request->input('url');
        $firm->parent_id = $request->input('parent_id'); 
        $firm->save();

        return back()->with('success', 'Firm Updated');
    }
    
    public function destroy(Firm $firm)
    {
        $firm->delete();

         return back()->with('danger', 'Firm Deleted');
    }
}
