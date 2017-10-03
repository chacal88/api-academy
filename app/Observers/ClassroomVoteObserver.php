<?php

namespace App\Observers;


use App\Classroom;
use App\ClassroomVote;

class ClassroomVoteObserver {

    public function creating(ClassroomVote $model) {

        $points = $model
            ->where('classroom_id', $model->classroom_id)
            ->avg('points');

        $classroomVote = Classroom::find($model->classroom_id);
        $classroomVote->points = $points;
        $classroomVote->votes_qtd += 1;
        $classroomVote->update();
    }
}
