<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create user
        // DB::tabele('users')->insert([
        //     'name' => 'Jeetendra',
        //     'email' => 'jeetendraparmar22@gmail.com',
        //     'password' => Hash::make('test@123')
        // ]);
        $user = new User();
        $user->name = 'Jeetendra';
        $user->email = 'jeetendraparmar22@gmail.com';
        $user->password = Hash::make('test@123');
        $user->save();
    }
}
