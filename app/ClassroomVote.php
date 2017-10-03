<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomVote extends Model
{
    protected $fillable = ['points', 'comment', 'reply', 'classroom_id'];
}
