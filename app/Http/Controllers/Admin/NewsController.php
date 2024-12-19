<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('firm_id', session('firm_id'))->orderBy('headline')->get();
        return view('admin.news.list', compact('news'));
    }

    public function create()
    {
        return view('admin.news.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'publication_date' => 'required|date',
            'headline' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'publication' => 'required|string|max:255',
        ]);

        $news = new News();
        $news->firm_id = session('firm_id');
        $news->headline = $request->input('headline');
		$news->publication = $request->input('publication');
		$news->url = $request->input('url');
        $news->publication_date = $request->input('publication_date');
        $news->summary = $request->input('summary');
        $news->save();

        return back()->with('success', 'News Created');
    }

    public function edit(News $news)
    {
        return view('admin.news.form', compact('news'));
    }

    public function update(Request $request, News $news)
    {
		$request->validate([
            'publication_date' => 'required|date',
            'headline' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'publication' => 'required|string|max:255',
        ]);

        $news->headline = $request->input('headline');
		$news->publication = $request->input('publication');
		$news->url = $request->input('url');
        $news->publication_date = $request->input('publication_date');
        $news->summary = $request->input('summary');
        $news->save();

        return back()->with('success', 'News Updated');
    }

    public function destroy(News $news)
    {
        $news->delete();

         return back()->with('danger', 'News Deleted');
    }
}
