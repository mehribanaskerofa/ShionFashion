<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
        $contactform=ContactForm::all();
        return view('admin.contactform.index',compact('contactform'));
    }

    public function destroy(ContactForm $contactform)
    {
        $contactform->delete();

        return redirect()->back();
    }



}
