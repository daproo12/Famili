<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new AdminModel;
        $user -> email = 'admin2@gmail.com';
        $user -> profile_photo = 'images/kosong.png';
        $user -> password = Hash::make('qwerty');
        $user -> nama = 'Admin';
        $user -> save();
    }
}
