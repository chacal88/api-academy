<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  AcademiesPhoto extends Model
{
    protected $fillable = ['url', 'academy_id'];
    protected $appends = ['full_url'];
    public $timestamps = false;

    protected function getFullUrlAttribute()
    {
        if ($this->attributes['url']) {
            return 'https://s3.amazonaws.com/'.env('AWS_BUCKET').'/academy_photo/'.$this->attributes['url'];
        } else {
            return null;
        }
    }
}
