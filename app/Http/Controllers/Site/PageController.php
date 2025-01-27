<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\PracticeArea;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $practice_areas = PracticeArea::where('firm_id', 1)->orderBy('name')->get();            
        return view('site.home', compact('practice_areas'));
    }

    public function attorney_detail()
    {
        $practice_areas = PracticeArea::where('firm_id', 1)->orderBy('name')->get();            
        return view('site.attorney-detail', compact('practice_areas'));
    }

    public function attorneys()
    {
        $practice_areas = PracticeArea::where('firm_id', 1)->orderBy('name')->get();            
        return view('site.attorneys', compact('practice_areas'));
    }

    public function our_firm()
    {
        $practice_areas = PracticeArea::where('firm_id', 1)->orderBy('name')->get();            
        return view('site.our_firm', compact('practice_areas'));
    }
}
