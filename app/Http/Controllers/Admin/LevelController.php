<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $levels = Level::orderBy('name')->get();
        return view('admin.levels.list', compact('levels'));
    }

    public function create()
    {
        return view('admin.levels.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $level = new Level();        
        $level->name = $request->input('name');        
        $level->save();
    
        return back()->with('success', 'Level Created');
    }
   
    public function edit(Level $level)
    {
        return view('admin.levels.form', compact('level'));
    }

    public function update(Request $request, Level $level)
    {

        $level->name = $request->input('name');    
        $level->save();

        return back()->with('success', 'Level Updated');
    }
    
    public function destroy(Level $level)
    {
        $level->delete();

         return back()->with('danger', 'Level Deleted');
    }
}
