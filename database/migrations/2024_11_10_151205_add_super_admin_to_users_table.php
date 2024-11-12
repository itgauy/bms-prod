<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

return new class extends Migration
{
    public function up()
    {
        $existingSuperAdmin = User::where('user_type', 'super_admin')->first();
        
        if (!$existingSuperAdmin) {
            User::create([
                'username' => 'superadmin',
                'email' => 'superadmin@email.com',
                'password' => Hash::make('Admin@123'),
                'user_type' => 'super_admin',
                'status' => 1,
            ]);
        }
    }

    public function down()
    {
        User::where('user_type', 'super_admin')->delete();
    }
};
