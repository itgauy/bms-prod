<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register User - Step 1
    public function registerStep1(Request $request) {
        // Validate (lahat ng nasa baba ay yung validation para makuha error pag sakaling invalid)
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'user_type' => ['required', 'in:home-owner,renter-tenant'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);
        
        // Storing of data in session (ginagamit for multi-step registrations)
        session()->put('register_data', $fields);

        return redirect()->route('register-2');
    }

    // Register User - Step 2
    public function registerStep2(Request $request) {
        // Validate
        $fields = $request->validate([
        'first_name' => ['required', 'max:255'],
        'middle_name' => ['max:255'],
        'last_name' => ['required', 'max:255'],
        'suffix' => ['max:255'],
        'street' => ['required', 'max:255'],
        'sitio' => ['required','max:255'],
        'village' => ['required', 'max:255'],
        'contact_num' => ['required', 'max:20'],
        'em_contact_name' => ['required', 'max:255'],
        'em_contact_num' => ['required', 'max:20'],
        'birthdate' => ['required', 'date'],
        'birthplace' => ['required', 'max:255'],
        'civil_status' => ['required'],
        'gender' => ['required'],
        'religion' => ['required', 'max:255'],
        'occupation' => ['max:255'],
        'classification_status' => ['required', 'max:255'],
        'valid_id' => ['required', 'max:255'],
        'id_num' => ['max:255'],
        'picture_id' => ['max:2048'],
        'picture_holding_id' => ['max:2048'],
        ]);

        // Get data from session then imerge ulit para mag sama yung data from step 1 and step 2
        $registerData = session()->get('register_data', []);

        // Merge data
        $registerData = array_merge($registerData, $fields);

        // Store merged data in session
        session()->put('register_data', $registerData);

        return redirect()->route('register-3');
    }

    // Show Register User - Step 3
    public function showRegisterStep3() {
        // Get data from session
        $registerData = session()->get('register_data', []);

        // Pass data to the view
        return view('auth.register-3', ['registerData' => $registerData]);
    }

    // Register User - Step 3
    public function registerStep3() {

        // Get data from session
        $registerData = session()->get('register_data', []);

        // Create User
        User::create([
            'username' => $registerData['username'],
            'user_type' => $registerData['user_type'],
            'email' => $registerData['email'],
            'password' => bcrypt($registerData['password']),
        ]);

        // Create Resident
        Resident::create([
            'first_name' => $registerData['first_name'],
            'middle_name' => $registerData['middle_name'],
            'last_name' => $registerData['last_name'],
            'suffix' => $registerData['suffix'],
            'birthdate' => $registerData['birthdate'],
            'age' => $registerData['age'],
            'gender' => $registerData['gender'],
            'civil_status' => $registerData['civil_status'],
            'citizenship' => $registerData['citizenship'],
            'occupation' => $registerData['occupation'],
            'classification_status' => $registerData['classification_status'],
            'valid_id' => $registerData['valid_id'],
            'id_num' => $registerData['id_num'],
            'picture_id' => $registerData['picture_id'],
            'picture_holding_id' => $registerData['picture_holding_id'],
        ]);

        // Redirect to login page
        return redirect()->route('login');
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
