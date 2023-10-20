<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Illuminate\Support\Str;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'confirm_email' => ['required', 'email'],
        ]);

       

      $user = User::where('email', $request->email)->first();
    
       
    if($user != null){
        $password = Str::random(12);
        $hash_password = Hash::make($password); 
        $dynamicData = [
            'password' => $password
        ];
        $mail  = Mail::to($request->email)->send(new PasswordMail($dynamicData));
        $update_user = User::where('email', $request->email)->update(['password' => $hash_password]);
        if($mail && $update_user){
            return redirect()->back()->with('msg', 'please check your mail');  
        }
    }else{
        return redirect()->back()->with('msg', 'your email not exist');  
    }

    }
}
