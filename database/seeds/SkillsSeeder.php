<?php

use App\Skills;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skills::create([
            'title' => 'PHP Laravel',
            'profieciency' => 75,
            'skill_type' => 'technical'
        ]);

        Skills::create([
            'title' => 'English',
            'profieciency' => 80,
            'skill_type' => 'language'
        ]);
    }
}
