<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(BlocksTableSeeder::class);
        $this->call(QASeeder::class);
    }
}
