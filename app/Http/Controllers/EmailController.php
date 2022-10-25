<?php

namespace App\Http\Controllers;

use App\Mail\SampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(){
        $request = Request()->validate([
            'name' => 'required',
            'email' => 'required',
            'project' => 'required',
            'description' => 'required',
        ]);
        // dd($request);
        Mail::to($request['email'])->send(new SampleMail($request['name'], $request['project'], $request['description']));
        return redirect('/');
    }
}
