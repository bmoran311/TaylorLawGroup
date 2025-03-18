<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;
use App\Models\PracticeArea, App\Models\Bio;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::where('firm_id', session('firm_id'))->get();
        return view('admin.quotes.list', compact('quotes'));
    }

    public function create()
    {
        return view('admin.quotes.form');
    }

    public function store(Request $request)
    {
        $request->validate([            
            'quote' => 'required',                                 
        ]);

        $quote = new Quote();
        $quote->firm_id = session('firm_id');   
        $quote->type = is_array($request->input('type')) ? implode(',', $request->input('type')) : $request->input('type');                
		$quote->quote = $request->input('quote');		
        $quote->active = $request->input('active');
        $quote->save();       

        return back()->with('success', 'Quote Created');
    }

    public function edit(Quote $quote)
    {        
        return view('admin.quotes.form', compact('quote'));
    }

    public function update(Request $request, Quote $quote)
    {
        $request->validate([             
            'quote' => 'required',                 
        ]);
        
        $quote->firm_id = session('firm_id'); 
        $quote->type = is_array($request->input('type')) ? implode(',', $request->input('type')) : $request->input('type');                
		$quote->quote = $request->input('quote');		
        $quote->active = $request->input('active');
        $quote->save();

        return back()->with('success', 'Quote Updated');
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();

        return back()->with('danger', 'Quote Deleted');
    }
}
