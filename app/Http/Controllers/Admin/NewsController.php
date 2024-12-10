<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = news::orderBy('headline')->get();
        return view('admin.news.list', compact('news'));
    }

    public function create()
    {
        return view('admin.news.form');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'headline' => 'required|string|max:255',
        ]);
        
        $news = new News();        
        $news->headline = $request->input('headline');    
		$news->publication = $request->input('publication'); 
		$news->url = $request->input('url');
        $news->publication_date = $request->input('publication_date'); 
        $news->summary = $request->input('summary'); 
        $news->save();
    
        return back()->with('success', 'News Created');
    }
   
    public function edit(news $news)
    {				
        return view('admin.news.form', compact('news'));
    }

    public function update(Request $request, news $news)
    {
		$request->validate([
            'headline' => 'required|string|max:255',
        ]);

        $news->headline = $request->input('headline'); 
		$news->publication = $request->input('publication'); 
		$news->url = $request->input('url');
        $news->publication_date = $request->input('publication_date'); 
        $news->summary = $request->input('summary'); 
        $news->save();

        return back()->with('success', 'News Updated');
    }
    
    public function destroy(news $news)
    {
        $news->delete();

         return back()->with('danger', 'News Deleted');
    }
}
