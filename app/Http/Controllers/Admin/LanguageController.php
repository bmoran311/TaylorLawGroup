<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = language::orderBy('name')->get();
        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        return view('admin.languages.create');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $language = new Language();
        
        $language->name = $request->input('name');
        
        $language->save();
    
        return back()->with('success', 'Language Created');
    }
   
    public function edit(language $language)
    {
        return view('admin.languages.edit', compact('language'));
    }

    public function update(Request $request, language $language)
    {

        $language->name = $request->input('name');    
        $language->save();

        return back()->with('success', 'Language Updated');
    }
    
    public function destroy(language $language)
    {
         //
    }
}
