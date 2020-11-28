<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonials extends Model
{
    protected $fillable = ['name' ,'designation' ,'description', 'image'];

    /**
     * Delete old images when uploading new images
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }
}
