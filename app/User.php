<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dob', 'mobile', 'professions', 'bio', 'linkedin', 'facebook', 'twitter', 'github', 'image1', 'image2', 'color', 'resume'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'professions' => 'array'
    ];

    /**
     * Delete old images when uploading new images
     */
    public function deleteImage1()
    {
        Storage::delete($this->image1);
    }

    public function deleteImage2()
    {
        Storage::delete($this->image2);
    }

    public function deleteResume()
    {
        Storage::delete($this->resume);
    }
}
