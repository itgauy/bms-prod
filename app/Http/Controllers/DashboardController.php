<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::check() && Auth::user()->user_type == 'super_admin') {
            return redirect()->route('admin');
        }
        return view('resident.index');
    }

    public function adminIndex() {
        if (Auth::check() && Auth::user()->user_type !== 'super_admin') {
            return redirect()->route('resident');
        }
        return view('admin.index');
    }

    public function homeIndex() {
        if (Auth::check() && Auth::user()->user_type == 'super_admin') {
            return redirect()->route('admin');
        }
        return view('landing.index');
    }
}
