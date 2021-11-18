<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
        ]);

        User::create([
            'username' => 'gestionnaire',
            'email' => 'gestionnaire@gestionnaire.com',
            'password' => Hash::make('gestionnaire'),
            'role' => 'gestionnaire',
        ]);
    }
}
