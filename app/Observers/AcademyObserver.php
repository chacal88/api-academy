<?php

namespace App\Observers;


use App\Academy;

class AcademyObserver {

    use UploadObserverTrait;

    protected $field = 'photo';

    protected $path  = 'academy/';

    public function creating(Academy $model) {

        $this->sendFile($model);
    }

    public function deleting(Academy $model) {

        $this->removeFile($model);
    }

    public function updating(Academy $model) {

        $this->updateFile($model);
    }
}