<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register User
    public function register(Request $request) {

        // Combined all validation rules
        $validationRules = [
            // User fields
            'username' => ['required', 'min:5', 'max:255', 'regex:/^[A-Za-z0-9]+$/', 'unique:users'],
            'user_type' => ['required', 'in:home-owner,renter-tenant'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'status' => ['in:0,1'],
    
            // Resident Fields
            'first_name' => ['required', 'max:50'],
            'middle_name' => ['max:50'],
            'last_name' => ['required','max:50'],
            'suffix' => ['max:50'],
            // Other fields...
        ];
    
        $validatedData = $request->validate($validationRules);
        
        // All validated data from user fields
        $userFields = [
            'username' => $validatedData['username'],
            'user_type' => $validatedData['user_type'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password'])
        ];
    
        // Validate resident fields
        $resFields = array_intersect_key(($validatedData), array_flip([
            'first_name', 'middle_name', 'last_name', 'suffix', // Include other fields as needed
        ]));
    
        // Register
        $user = User::create($userFields);
    
        // Register resident related to user
        $resFields['user_id'] = $user->id;
        Resident::create($resFields);
    
        // Store resident data in session for profile registration
        session([
            'first_name' => $resFields['first_name'],
            'middle_name' => $resFields['middle_name'],
            'last_name' => $resFields['last_name'],
            'suffix' => $resFields['suffix'],
        ]);
    
        // Login
        Auth::login($user);
    
        // Redirect
        return redirect()->route('profile-register');
    }
    
    // Login User
    public function login(Request $request) {
        // Validate
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);

        // Try to login the user
        if(Auth::attempt($fields, $request->remember)) {
            if (Auth::user()->status == 0) {
                return redirect()->route('profile-register');
            }
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors(([
                'failed' => 'The provided credentials do not match our records.'
            ]));
        }
    }

    // Logout User
    public function logout(Request $request) {

        // Logout the user
        Auth::logout();
        
        // Invalidate user's session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect to home
        return redirect('/');
    }
}