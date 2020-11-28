<?php

use App\Works;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Works::create([
            'company' => 'Digital Colf',
            'from' => 'June 2020',
            'to' => 'Present',
            'job' => 'Full-Stack Web Developer - Internship'
        ]);
    }
}
