<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Language, App\Models\Level, App\Models\PracticeArea, App\Models\Membership, App\Models\License, App\Models\Award, App\Models\Education, App\Models\Admission, App\Models\News, App\Models\Engagement, App\Models\Multimedia;

class BioController extends Controller
{
    public function index()
    {
        $bios = Bio::where('firm_id', session('firm_id'))->orderBy('last_name')->orderBy('first_name')->get();
        return view('admin.bios.list', compact('bios'));
    }

    public function create()
    {
        $practice_areas = PracticeArea::orderBy('name')->get();
        $languages = Language::orderBy('name')->get();
        $levels = Level::orderBy('name')->get();
        $memberships = Membership::orderBy('name')->get();
        $licenses = License::orderBy('name')->get();
        $awards = Award::orderBy('name')->get();
        $education = Education::orderBy('name')->get();
        $admissions = Admission::orderBy('name')->get();
        $news = News::orderBy('headline')->get();
        $engagements = Engagement::orderBy('title')->get();
        $multimedias = Multimedia::orderBy('headline')->get();

        return view('admin.bios.form', compact('practice_areas', 'languages', 'levels', 'memberships', 'licenses', 'awards', 'education', 'admissions', 'news', 'engagements', 'multimedias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',           
            'headshot' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $bio = new Bio();

        if ($request->hasFile('headshot')) {                                       
            $path = $request->file('headshot')->store('headshots', 'public');
            $bio->headshot = $path;
        }

        $bio->firm_id = session('firm_id');        
        $bio->first_name = $request->input('first_name');
		$bio->middle_initial = $request->input('middle_initial');
		$bio->last_name = $request->input('last_name');
		$bio->email = $request->input('email');
		$bio->phone_number = $request->input('phone_number');
        $bio->save();

        $bio->practice_areas()->sync($request->input('practice_areas', []));
        $bio->languages()->sync($request->input('languages', []));
        $bio->levels()->sync($request->input('levels', []));
        $bio->memberships()->sync($request->input('memberships', []));
        $bio->licenses()->sync($request->input('licenses', []));
        $bio->awards()->sync($request->input('awards', []));
        $bio->education()->sync($request->input('education', []));
        $bio->admissions()->sync($request->input('admissions', []));
        $bio->news()->sync($request->input('news', []));
        $bio->engagements()->sync($request->input('engagements', []));
        $bio->multimedias()->sync($request->input('multimedias', []));

        return back()->with('success', 'Bio Created');
    }

    public function edit(bio $bio)
    {
        $practice_areas = PracticeArea::orderBy('name')->get();
		$languages = language::orderBy('name')->get();
        $levels = Level::orderBy('name')->get();
        $memberships = Membership::orderBy('name')->get();
        $licenses = License::orderBy('name')->get();
        $awards = Award::orderBy('name')->get();
        $education = Education::orderBy('name')->get();
        $admissions = Admission::orderBy('name')->get();
        $news = News::orderBy('headline')->get();
        $engagements = Engagement::orderBy('title')->get();
        $multimedias = Multimedia::orderBy('headline')->get();

        $bio->load('practice_areas');
        $bio->load('languages');
        $bio->load('levels');
        $bio->load('memberships');
        $bio->load('licenses');
        $bio->load('awards');
        $bio->load('education');
        $bio->load('admissions');
        $bio->load('news');
        $bio->load('engagements');
        $bio->load('multimedias');

        return view('admin.bios.form', compact('bio', 'practice_areas', 'languages', 'memberships', 'levels', 'licenses', 'awards', 'education', 'admissions', 'news', 'engagements', 'multimedias'));
    }

    public function update(Request $request, bio $bio)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',  
            'headshot' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',          
        ]);

        if ($request->has('remove_headshot') && $request->input('remove_headshot') == 1) 
        {           
            if ($bio->headshot) {
                Storage::delete('public/' . $bio->headshot);
                $bio->headshot = null; 
            }
        }

        if ($request->hasFile('headshot')) {           
            if ($bio->headshot) {
                Storage::delete($bio->headshot);
            }
    
            // Store the new headshot
            $path = $request->file('headshot')->store('headshots', 'public');
            $bio->headshot = $path;
        }

        $bio->first_name = $request->input('first_name');
		$bio->middle_initial = $request->input('middle_initial');
		$bio->last_name = $request->input('last_name');
		$bio->email = $request->input('email');
		$bio->phone_number = $request->input('phone_number');
        $bio->save();

        $bio->practice_areas()->sync($request->input('practice_areas', []));
        $bio->languages()->sync($request->input('languages', []));
        $bio->levels()->sync($request->input('levels', []));
        $bio->memberships()->sync($request->input('memberships', []));
        $bio->licenses()->sync($request->input('licenses', []));
        $bio->awards()->sync($request->input('awards', []));
        $bio->education()->sync($request->input('education', []));
        $bio->admissions()->sync($request->input('admissions', []));
        $bio->news()->sync($request->input('news', []));
        $bio->engagements()->sync($request->input('engagements', []));
        $bio->multimedias()->sync($request->input('multimedias', []));

        return back()->with('success', 'Bio Updated');
    }

    public function destroy(bio $bio)
    {
        $bio->delete();

         return back()->with('danger', 'Bio Deleted');
    }
}