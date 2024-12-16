<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use App\Models\PracticeArea;


class CareersController extends Controller
{
    public function index()
    {
        $careers = Career::where('firm_id', session('firm_id'))->orderBy('job_posting_date')->get();
        return view('admin.careers.list', compact('careers'));
    }

    public function create()
    {
        $employment_types = [
            'full_time' => 'Full-time',
            'part_time' => 'Part-time',
            'contract' => 'Contract',
            'internship' => 'Internship',
        ];

        $practice_areas = PracticeArea::orderBy('name')->get();
        return view('admin.careers.form', compact('practice_areas', 'employment_types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'employment_type' => 'required|string|max:255',            
            'application_deadline' => 'required|string|max:255',
            'job_posting_date' => 'required|string|max:255',
        ]);

        $career = new Career();
        $career->firm_id = session('firm_id');   
        $career->job_title = $request->input('job_title');
        $career->location = $request->input('location');
        $career->employment_type = $request->input('employment_type');
        $career->job_summary = $request->input('job_summary');
        $career->responsibilities = $request->input('responsibilities');
        $career->qualifications = $request->input('qualifications');
        $career->skills = $request->input('skills');
        $career->salary_benefits = $request->input('salary_benefits');
        $career->application_deadline = $request->input('application_deadline');
        $career->job_posting_date = $request->input('job_posting_date');
        $career->save();

        $career->practice_areas()->sync($request->input('practice_areas', []));

        return back()->with('success', 'Firm Created');
    }

    public function edit(Career $career)
    {
        $employment_types = [
            'Full-time',
            'Part-time',
            'Contract',
            'Internship',
        ];

        $practice_areas = PracticeArea::orderBy('name')->get();
        $career->load('practice_areas');
        return view('admin.careers.form', compact('career', 'practice_areas', 'employment_types'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'employment_type' => 'required|string|max:255',
            'job_summary' => 'required|string|max:255',
            'responsibilities' => 'required|string|max:255',
            'qualifications' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'salary_benefits' => 'string|max:255',
            'application_deadline' => 'required|string|max:255',
            'job_posting_date' => 'required|string|max:255',
        ]);

        $career->job_title = $request->input('job_title');
        $career->location = $request->input('location');
        $career->employment_type = $request->input('employment_type');
        $career->job_summary = $request->input('job_summary');
        $career->responsibilities = $request->input('responsibilities');
        $career->qualifications = $request->input('qualifications');
        $career->skills = $request->input('skills');
        $career->salary_benefits = $request->input('salary_benefits');
        $career->application_deadline = $request->input('application_deadline');
        $career->job_posting_date = $request->input('job_posting_date');
        $career->save();

        $career->practice_areas()->sync($request->input('practice_areas', []));

        return back()->with('success', 'Career Updated');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return back()->with('danger', 'Career Deleted');
    }
}
