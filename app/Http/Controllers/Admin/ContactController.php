<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::where('firm_id', session('firm_id'))->orderBy('last_name')->orderBy('first_name')->get();
        return view('admin.contacts.list', compact('contacts'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',                       
        ]);

        $contact = new Contact();
        
        $contact->firm_id = session('firm_id');        
        $contact->first_name = $request->input('first_name');		
		$contact->last_name = $request->input('last_name');
		$contact->email = $request->input('email');
		$contact->phone_number = $request->input('phone_number');
        $contact->company = $request->input('company');        
        $contact->message = $request->input('message');      
        $contact->save();

        Mail::to('bmoran311@yahoo.com')->send(new ContactMail($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function create()
    {     
        return view('admin.contacts.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',                       
        ]);

        $contact = new Contact();
        
        $contact->firm_id = session('firm_id');        
        $contact->first_name = $request->input('first_name');		
		$contact->last_name = $request->input('last_name');
		$contact->email = $request->input('email');
		$contact->phone_number = $request->input('phone_number');
        $contact->company = $request->input('company');        
        $contact->message = $request->input('message');      
        $contact->save();

        return back()->with('success', 'Contact Created');
    }

    public function edit(Contact $contact)
    {        
        return view('admin.contacts.form', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',                   
        ]);
        
        $contact->first_name = $request->input('first_name');		
		$contact->last_name = $request->input('last_name');
		$contact->email = $request->input('email');
		$contact->phone_number = $request->input('phone_number');
        $contact->company = $request->input('company');        
        $contact->message = $request->input('message');
        $contact->save();    

        return back()->with('success', 'Contact Updated');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with('danger', 'Contact Deleted');
    }
}