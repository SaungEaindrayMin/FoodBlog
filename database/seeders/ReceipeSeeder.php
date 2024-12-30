<?php

use App\Models\Receipes;
use Illuminate\Database\Seeder;

class ReceipeSeeder extends Seeder
{
    public function run()
    {
        Receipes::factory(10)->create();
    }
}

