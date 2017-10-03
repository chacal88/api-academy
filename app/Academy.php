<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    protected $fillable = ['name', 'description', 'photo', 'phone','user_id'];
    protected $appends = ['photo_full_url'];

    protected function getPhotoFullUrlAttribute()
    {
        if (!empty($this->attributes['photo']))
            return 'https://s3.amazonaws.com/'.env('AWS_BUCKET').'/academy/'.$this->attributes['photo'];
        else
            return null;
    }

    public function address()
    {
        return $this->hasOne(\App\Address::class);
    }
}