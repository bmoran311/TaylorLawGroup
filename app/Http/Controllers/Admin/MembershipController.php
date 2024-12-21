<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = membership::orderBy('name')->get();
        return view('admin.memberships.list', compact('memberships'));
    }

    public function create()
    {
        return view('admin.memberships.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
        ]);
        
        $membership = new Membership();        
        $membership->name = $request->input('name'); 
		$membership->type = $request->input('type');     		
        $membership->save();
    
        return back()->with('success', 'Membership Created');
    }
   
    public function edit(membership $membership)
    {
        return view('admin.memberships.form', compact('membership'));
    }

    public function update(Request $request, membership $membership)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
        ]);

        $membership->name = $request->input('name');   
		$membership->type = $request->input('type');		
        $membership->save();

        return back()->with('success', 'Membership Updated');
    }
    
    public function destroy(membership $membership)
    {
        $membership->delete();

         return back()->with('danger', 'Membership Deleted');
    }
}
