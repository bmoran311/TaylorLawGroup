<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;


class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('faq_category_id')->orderBy('created_at')->get();
        return view('admin.faq.list', compact('faqs'));
    }

    public function create()
    {
        $categories = FaqCategory::orderBy('name')->get();
        return view('admin.faq.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
            'category' => 'required|integer',
        ]);

        $faq = new Faq();
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->faq_category_id = $request->input('category');
        $faq->firm_id = Session::get('firm_id', 0);
        $faq->save();

        return back()->with('success', 'Faq Created');
    }

    public function edit(Faq $faq)
    {
        $faq_category = FaqCategory::orderBy('name')->get();

        return view('admin.faq.form', compact('faq', 'faq_category'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
            'category' => 'required|integer',
        ]);

        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->faq_category_id = $request->input('category');
        $faq->save();

        return back()->with('success', 'Faq Updated');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return back()->with('danger', 'Faq Deleted');
    }
}
