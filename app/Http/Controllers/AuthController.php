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

            // Resident Fields
            'first_name' => ['required', 'max:50'],
            'middle_name' => ['max:50'],
            'last_name' => ['required','max:50'],
            'suffix' => ['max:50'],
            'street' => ['nullable'], 'sitio' => ['nullable'], 'village' => ['nullable'], 'contact_num' => ['nullable'], 'em_contact_name' => ['nullable'], 'em_contact_num' => ['nullable'], 'birthdate' => ['nullable'], 'birthplace' => ['nullable'], 'civil_status' => ['nullable'], 'gender' => ['nullable'], 'religion' => ['nullable'], 'occupation' => ['nullable'], 'classification_status' => ['nullable'], 'valid_id' => ['nullable'], 'id_num' => ['nullable'], 'picture_id' => ['nullable'], 'picture_holding_id' => ['nullable']
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
            'first_name', 'middle_name', 'last_name', 'suffix', 'street', 'sitio', 'village', 'contact_num', 'em_contact_name', 'em_contact_num', 'birthdate', 'birthplace', 'civil_status', 'gender', 'religion', 'occupation', 'classification_status', 'valid_id', 'id_num', 'picture_id', 'picture_holding_id'
            ]));

        // Register
        $user = User::create($userFields);

        // Register resident related to user
        $resFields['user_id'] = $user->id;
        Resident::create($resFields);

        // Login
        Auth::login($user);

        //Redirect
        return redirect()->route('resident');
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