<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrgyClearance;

class TempBrgyClearanceController extends Controller
{
    public function brgyClearance(Request $request) {
        $brgyFields = $request->validate([
            'category' => ['required'],
            'name' => ['required', 'max:255'],
            'position' => ['required', 'max:255'],
            'business_type' => ['required', 'max:255'],
            'business_name' => ['required', 'max:255'],
            'business_address' => ['required', 'max:255'],
            'date_claimed' => ['required', 'date'],
            'contact_person' => ['required', 'max:255'],
            'contact_position' => ['required', 'max:255'],
            'contact_number' => ['required', 'max:20'],
        ]);

        // Register brgy clearance
        BrgyClearance::create($brgyFields);

        // Redirect
        return redirect()->route('brgy-clearance');
    }
}
