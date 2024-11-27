<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        return redirect('/')->with('success', 'Mensagem enviada com sucesso!');
    }
    

}
