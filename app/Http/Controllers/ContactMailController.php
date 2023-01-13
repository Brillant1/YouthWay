<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request){

        $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email',
            'objet' => 'required|string',
            'phone' => 'required',
            'message' => 'required|string'
        ]);

        $detailMessage = [
            'nom' => $request->nom,
            'phone' => $request->phone,
            'email' => $request->email,
            'objet' => $request->objet,
            'message' => $request->message
        ];

        //Mail::to('esaietchagnonsi@gmail.com')->send(new ContactFormMail($detailMessage));
        return back()->with('messageSend', 'Message envoyé avec succès ! Restez à l\'écoute pour notre retour');

    }
}
