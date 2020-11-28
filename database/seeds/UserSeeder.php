<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Varma MVSS',
            'email' => 'varma.admin@gmail.com',
            'password' => Hash::make('12345678'),
            'professions' => ['Web Developer', 'Freelancer'],
            'bio' => "I'm 20 years old creative web designer based in India, specializing in Machine Learning and Web Development. I build clean, appealing, and functional interfaces which comply with the latest web standards. I’m happiest when I’m playing games, coding, or building something that didn’t exist before. I work primarily with Full-stack web Development and Wordpress.",
            'mobile' => '9666855044',
            'image1' => 'user/images/Main.png',
            'image2' => 'user/images/Main2.png',
            'color' => 'yellow'
        ]);
    }
}
