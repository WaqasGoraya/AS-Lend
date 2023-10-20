<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class LoanGiverRegController extends Controller
{
    public function loan_giver(): View
    {
        return view('auth.loangiver');
    }

    public function  store_loan_giver(Request $request): RedirectResponse
    {
        
    
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
            // 'license' =>  'required|mimes:pdf', 
            // 'proof_address' =>  'required|mimes:pdf',
            // 'health' =>  'required|mimes:pdf', 
        

            ]);
  

        $user = User::create([
               'email' => $request->email,
               'password' => Hash::make($request->password),
                'username' => $request->username,
                'fullname' => $request->fullname,
                'address' => $request->address,
                'country' => $request->country,
                'zipcode' => $request->zipcode,
                'phone' => $request->phone,
                'scnumber' => $request->scnumber,
                'role' => 2
        ]);

        $files = ['liscence', 'proof_address', 'health'];

        foreach ($files as $fileKey) {
        if ($request->hasFile($fileKey)) {
            $file = $request->file($fileKey);
            $PicPath = $file->store('auth_pics', 'public');
            $user->$fileKey = $PicPath;

            // $file = $request->file($fileKey);
            // $extension = $file->getClientOriginalExtension();
            // $filename = rand() . '.' . $extension;
            // $file->move('uploads/loantaker/', $filename);
            // $user->$fileKey = $filename;
        }
    }
    
    $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

}
