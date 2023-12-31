<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::updateOrCreate([
            'name'     => 'admin',
            'email'    => 'admin@admin.com',
            'password' => Hash::make('U73=*n>t?8')
        ]);
    }
}
