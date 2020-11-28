<?php

use App\Educations;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Educations::create([
            'from' => '2018',
            'to' => '2022',
            'title' => "Bachelor Degree in Computer Science",
            'school' => 'Lovely Professional University'
        ]);
    }
}
