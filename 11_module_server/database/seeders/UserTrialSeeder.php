<?php

namespace Database\Seeders;

use App\Models\UserTrial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTrialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserTrial::insert([
            'nickname'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>password_hash(123,PASSWORD_DEFAULT),
            'commonname'=>'admin'
        ]);
    }
}
