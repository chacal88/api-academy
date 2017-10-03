<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Classroom extends Model {

    protected $table = "classroom";
    
    protected $fillable = ['name', 'description', 'photo', 'price', 'academy_id'];

    protected $appends  = ['photo_full_url'];

    protected function getPhotoFullUrlAttribute() {

        if ($this->attributes['photo']) {
            return 'https://s3.amazonaws.com/' . env('AWS_BUCKET') . '/classroom/' . $this->attributes['photo'];
        } else {
            return null;
        }
    }
}