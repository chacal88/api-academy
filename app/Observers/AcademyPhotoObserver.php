<?php

namespace App\Observers;


use App\AcademiesPhoto;

class AcademyPhotoObserver {

    use UploadObserverTrait;

    protected $field = 'url';

    protected $path  = 'academy_photo/';

    public function creating(AcademiesPhoto $model) {

        $this->sendFile($model);
    }

    public function deleting(AcademiesPhoto $model) {

        $this->removeFile($model);
    }

    public function updating(AcademiesPhoto $model) {

        $this->updateFile($model);
    }
}