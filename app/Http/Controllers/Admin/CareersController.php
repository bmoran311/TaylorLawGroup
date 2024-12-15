<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;


class CareersController extends Controller
{
    public function index()
    {
        $careers = Career::orderBy('job_posting_date')->get();
        return view('admin.careers.list', compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'employment_type' => 'required|string|max:255',
            'job_summary' => 'required|string|max:255',
            'responsibilities' => 'required|string|max:255',
            'qualifications' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'practice_area' => 'required|string|max:255',
            'application_deadline' => 'required|string|max:255',
            'job_posting_date' => 'required|string|max:255',
        ]);

        $career = new Career();
        $career->job_title = $request->input('job_title');
        $career->location = $request->input('location');
        $career->employment_type = $request->input('employment_type');
        $career->job_summary = $request->input('job_summary');
        $career->responsibilities = $request->input('responsibilities');
        $career->qualifications = $request->input('qualifications');
        $career->skills = $request->input('skills');
        $career->practice_area = $request->input('practice_area');
        $career->application_deadline = $request->input('application_deadline');
        $career->job_posting_date = $request->input('job_posting_date');
        $career->save();

        return back()->with('success', 'Firm Created');
    }

    public function edit(Career $career)
    {
        return view('admin.careers.form', compact('career'));
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
            'practice_area' => 'required|string|max:255',
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
        $career->practice_area = $request->input('practice_area');
        $career->application_deadline = $request->input('application_deadline');
        $career->job_posting_date = $request->input('job_posting_date');
        $career->save();

        return back()->with('success', 'Career Updated');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return back()->with('danger', 'Career Deleted');
    }
}
