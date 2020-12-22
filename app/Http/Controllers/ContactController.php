<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * function to get the contact page
     * @return \Illuminate\Http\Respose
    */
    public function index(){
        $title = "Contact Us";
        return view('contact', compact('title'));
    }

    /**
     * store a message submitted through the contact page in the database
     * @param  \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\Response           
     */
    public function store(Request $request)

    {
        // dd('here');
    	$title = "Contact Us";
        
    	$validatedData = $request->validate([

            'name' => 'required|max:255|regex:/^[A-Za-z\-]+$/',
            'email' => 'bail|required',
            'message' => 'bail|required',
        ],
        [
            'name.regex' => 'Name only contains the alphabet or hyphen(-)'
        ]);

        \App\Contact::create($validatedData);

        session()->flash('success', 'Form is successfully saved and team will be in touch with you soon');

        return view('contact', compact('title'));
    }
}
