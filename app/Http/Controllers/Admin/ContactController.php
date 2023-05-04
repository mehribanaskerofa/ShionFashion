<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

use App\Models\Contact ;

class ContactController extends Controller
{
    public function index()
    {
        $contact=Contact::all();
        return view('admin.contact.index',compact('contact'));
    }
    public function create()
    {
        return view('admin.contact.form');
    }

    public function store(ContactRequest $request)
    {
        $data=$request->validated();

        Contact::create($data);

        return redirect()->route('contact.index');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.form',compact('contact'));
    }

    public function update(Contact $contact,ContactRequest $request)
    {
        $data=$request->validated();

        $contact->update($data);

        return redirect()->back();
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back();
    }
}
