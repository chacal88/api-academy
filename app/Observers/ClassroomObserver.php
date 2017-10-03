<?php

namespace App\Observers;


use App\Classroom;

class ClassroomObserver {

    use UploadObserverTrait;

    protected $field = 'photo';

    protected $path  = 'classroom/';

    public function creating(Classroom $model) {

        $this->sendFile($model);
    }

    public function deleting(Classroom $model) {

        $this->removeFile($model);
    }

    public function updating(Classroom $model) {

        $this->updateFile($model);
    }
}
