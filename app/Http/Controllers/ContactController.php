<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contactForm()
    {
        return view('contact');
    }
    public function showContact()
    {
        // return'xx';
        return view('admin.contact',[
            'allContacts' => Contact::all()
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function storeContactForm(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
           
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        // //  Send mail to admin
        // Mail::send('contactMail', array(
        //     'name' => $input['name'],
        //     'email' => $input['email'],
           
        //     'subject' => $input['subject'],
        //     'message' => $input['message'],
        // ), function($message) use ($request){
        //     $message->from($request->email);
        //     $message->to('admin@admin.com', 'Admin')->subject($request->get('subject'));
        // });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}