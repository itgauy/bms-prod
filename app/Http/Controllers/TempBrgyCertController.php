<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrgyCert;
use Illuminate\Support\Facades\Auth;

class TempBrgyClearanceController extends Controller
{
    public function index() {
        return view('resident.index');
    }


    public function brgyCert(Request $request) {
        $brgyFields = $request->validate([
            'category' => ['required'],
            'cost' => ['required'],
            'cert_type' => ['required'],
            'name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'date_claimed' => ['required', 'date'],
            'specific_request' => ['required', 'max:255'],
        ]);

        $user = Auth::user();

        $brgyFields['user_id'] = $user->id;
        BrgyCert::create($brgyFields);

        return redirect()->route('resident')->with('success', 'Barangay Certificate Requested Successfully!<br>Please wait for it to be approved.');
    }
}
