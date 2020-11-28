<?php

use App\Skills;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(SkillsSeeder::class);
    }
}
