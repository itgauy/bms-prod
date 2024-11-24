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

        $resFields = $request->validate([
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['max:255'],
            'last_name' => ['required', 'max:255'],
            'suffix' => ['max:255'],
            'street' => ['required', 'max:255'],
            'sitio' => ['required', 'max:255'],
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

        // Update user status
        $user = Auth::user();
        $user->status = 1;
        $user->save();

        // Register resident related to user
        $resFields['user_id'] = $user->id;
        $resident = Resident::where('user_id', $user->id)->first();
        if ($resident) {
            $resident->update($resFields);
        } else {
            Resident::create($resFields);
        }

        // Redirect
        return redirect()->route('resident')->with('success', 'Profile successfully registered!<br>Please wait for the admin to verify your account.');

    }
}
