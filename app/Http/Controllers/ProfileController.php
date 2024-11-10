<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function registerProfile(Request $request)
    {
        // Validate input with custom rules for capitalization and numeric constraints
        $resFields = $request->validate([
            'first_name' => ['nullable', 'max:255', 'regex:/^[A-Z ]+$/'],
            'middle_name' => ['nullable', 'max:255', 'regex:/^[A-Z ]+$/'],
            'last_name' => ['nullable', 'max:255', 'regex:/^[A-Z ]+$/'],
            'suffix' => ['nullable', 'max:255', 'regex:/^[A-Z ]+$/'],
            'street' => ['required', 'max:255'],
            'sitio' => ['required', 'max:255'],
            'village' => ['required', 'max:255'],
            'contact_num' => ['required', 'digits:11', 'regex:/^09[0-9]{9}$/'],
            'em_contact_name' => ['required', 'max:255', 'regex:/^[A-Z ]+$/'],
            'em_contact_num' => ['required', 'digits:11', 'regex:/^09[0-9]{9}$/'],
            'birthdate' => ['required', 'date'],
            'birthplace' => ['required', 'max:255'],
            'civil_status' => ['required'],
            'gender' => ['required'],
            'religion' => ['required', 'max:255'],
            'occupation' => ['nullable', 'max:255'],
            'classification_status' => ['required', 'max:255'],
            'valid_id' => ['required', 'max:255'],
            'id_num' => ['nullable', 'max:255'],
            'picture_id' => ['nullable', 'max:2048', 'image'],
            'picture_holding_id' => ['nullable', 'max:2048', 'image'],
        ]);

        // Fetch the authenticated user
        $user = Auth::user();

        // Retrieve names from User account if they are not provided in the request
        $resFields['first_name'] = strtoupper($resFields['first_name'] ?? $user->first_name);
        $resFields['middle_name'] = strtoupper($resFields['middle_name'] ?? $user->middle_name ?? '');
        $resFields['last_name'] = strtoupper($resFields['last_name'] ?? $user->last_name);
        $resFields['suffix'] = strtoupper($resFields['suffix'] ?? $user->suffix ?? '');

 
        // Update user status
   
        $user->status = 1;
        $user->save();

        // Set classification status based on user type
        $resFields['classification_status'] = $user->type == 'home_owner' ? 'Home Owner' : 'Renter';

        // Assign the user_id to the resident and create the resident record
        $resFields['user_id'] = $user->id;
        Resident::create($resFields);

        // Redirect with success message
        return redirect()->route('resident')->with('success', 'Profile successfully registered!');

    }
}
