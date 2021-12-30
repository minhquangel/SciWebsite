<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'id' => uniqid(),
            'email' => 'admin@survey.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
