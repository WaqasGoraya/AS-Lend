<?php

namespace App\Http\Controllers;

use App\Mail\PasswordMail;
use App\Models\LoanTakerReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AsController extends Controller
{
    function index(){
        return view('custom_auth.register');
    }
    function loanTakerReg(Request $request){
        if($request->isMethod('post')){
            
            $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'fullname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'zipcode' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'scnumber' => 'required|string|max:255',
            'license' => 'required|mimes:pdf|max:2048', // For a license PDF file
            'paddress' => 'required|mimes:pdf|max:2048', // For a PDF address file
            'health' => 'required|mimes:pdf|max:2048', // For a health PDF file
            'income' => 'required|mimes:pdf|max:2048', // For an income PDF file

            ]);

            // LoanTakerReg::create([
            //     'username' => $request->username,
            //     'email' => $request->email,
            //     'password' => $request->password,
            //     'fullname' => $request->fullname,
            //     'address' => $request->address,
            //     'country' => $request->country,
            //     'zipcode' => $request->zipcode,
            //     'phone' => $request->phone,
            //     'scnumber' => 'required|string|max:255',
            //     'liscence' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            //     'paddress' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            //     'health' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            //     'income' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // ]);
  

            $LoanTakerReg = new LoanTakerReg();
            $LoanTakerReg->username = $request->username;
            $LoanTakerReg->email =  $request->email;
            $LoanTakerReg->password = $request->password;
            $LoanTakerReg->fullname = $request->fullname;
            $LoanTakerReg->address  = $request->address;
            $LoanTakerReg->country  = $request->country;
            $LoanTakerReg->zipcode  = $request->zipcode;
            $LoanTakerReg->phone =$request->phone;
            $LoanTakerReg->scnumber =$request->scnumber;
            $LoanTakerReg->role = 1;
            if($request->hasfile('liscence'))
            {
                
                $file = $request->file('liscence');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/loantaker/', $filename);
                $LoanTakerReg->liscence = $filename;
            }
            $LoanTakerReg->save();
        }

        return view('custom_auth.loantaker');
    }
    function loanGiverReg(){
        return view('custom_auth.loangiver');
    }

    function testmail(){
    
        $mail  = Mail::to('umairuafmcs300@gmail.com')->send(new PasswordMail());
   
        if($mail){
            return 'your email is send now';
        }
       }

       function test(){
         demo();
       }
}
