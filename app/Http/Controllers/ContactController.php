<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $totalContacts = Contact::count();

        return view('contacts.welcome', [
            'contacts' => $contacts,
            'totalContacts' => $totalContacts,// Pass recent changes to the view
        ]);
    }

    public function create()
    {
        return view("contacts.create");
    }

    public function store(Request $request)
    {
       $data = $request->validate([
        "name"=>['required'],
        "email"=>["required" , 'email'],
        "phone"=>["required", "min:10"],
        "gender"=> ["required"]
       ]);

       $data['user_id'] = $data['user_id'] ?? 1;

       $newContact = Contact::create($data);

       return redirect('/');
    }

    public function show($id)
    {
        $contacts = Contact::findOrFail($id);

        // Pass the job details to the view
        return view('contacts.show', compact('contacts'));

    }

    public function edit(Contact $contact)
    {
       return view('contacts.edit', ['contact'=> $contact]);
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            "name"=>['required'],
            "email"=>["required" , 'email'],
            "phone"=>["required", "min:10"],
            "gender"=> ["required"]
           ]);
    
           $contact->update($data);
    
        return redirect('/');
    }

    public function destroy(Contact $contact)
    {

        $contact->delete();
        return redirect('/');
    }

}
