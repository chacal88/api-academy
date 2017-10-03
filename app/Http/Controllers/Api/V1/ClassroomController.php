<?php

namespace App\Http\Controllers\Api\V1;


use App\Classroom;
use App\Http\Controllers\ApiControllerTrait;
use Laravel\Lumen\Routing\Controller;

class ClassroomController extends Controller {

    use ApiControllerTrait;

    protected $model;

    protected $rules    = [
        'name'        => 'required',
        'description' => 'required',
        'price'       => 'required',
        'photo'       => 'required',
        'academy_id'  => 'required'
    ];

    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min'      => ':attribute precisa de pelo menos :min caracteres'
    ];

    public function __construct(Classroom $model) {

        $this->model = $model;
    }
}
