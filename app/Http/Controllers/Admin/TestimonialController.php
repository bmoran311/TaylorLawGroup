<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\PracticeArea, App\Models\Bio;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('firm_id', session('firm_id'))->orderBy('title')->get();
        return view('admin.testimonials.list', compact('testimonials'));
    }

    public function create()
    {
        $practice_areas = PracticeArea::where('firm_id', session('firm_id'))->orderBy('name')->get();
        $bios = Bio::where('firm_id', session('firm_id'))->orderBy('last_name')->get();

        return view('admin.testimonials.form', compact('practice_areas', 'bios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',          
        ]);

        $testimonial = new Testimonial();
        $testimonial->firm_id = session('firm_id');        
        $testimonial->client_name = $request->input('client_name');
		$testimonial->title = $request->input('title');
		$testimonial->summary = $request->input('summary');
		$testimonial->content = $request->input('content');
		$testimonial->photo = $request->input('photo');
        $testimonial->outcome = $request->input('outcome');
        $testimonial->date_of_resolution = $request->input('date_of_resolution');
        $testimonial->client_consent = $request->input('client_consent');
        $testimonial->save();

        $testimonial->practice_areas()->sync($request->input('practice_areas', []));
        $testimonial->bios()->sync($request->input('bios', []));

        return back()->with('success', 'Testimonial Created');
    }

    public function edit(Testimonial $testimonial)
    {
        $practice_areas = PracticeArea::orderBy('name')->get();
		$bios = Bio::where('firm_id', session('firm_id'))->orderBy('last_name')->get();
       
        $testimonial->load('practice_areas');
        $testimonial->load('bios');        

        return view('admin.testimonials.form', compact('testimonial', 'practice_areas', 'bios'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',  
        ]);

        $testimonial = new Testimonial();
        $testimonial->firm_id = session('firm_id');        
        $testimonial->client_name = $request->input('client_name');
		$testimonial->title = $request->input('title');
		$testimonial->summary = $request->input('summary');
		$testimonial->content = $request->input('content');
		$testimonial->photo = $request->input('photo');
        $testimonial->outcome = $request->input('outcome');
        $testimonial->date_of_resolution = $request->input('date_of_resolution');
        $testimonial->client_consent = $request->input('client_consent');
        $testimonial->save();

        $testimonial->practice_areas()->sync($request->input('practice_areas', []));
        $testimonial->bios()->sync($request->input('bios', []));

        return back()->with('success', 'Testimonial Updated');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return back()->with('danger', 'Testimonial Deleted');
    }
}
