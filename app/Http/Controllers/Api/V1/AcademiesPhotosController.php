<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\ApiControllerTrait;
use App\AcademiesPhoto;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class AcademiesPhotosController extends Controller {

    use ApiControllerTrait;

    protected $model;

    protected $rules    = [
        'url'        => 'required',
        'academy_id' => 'required'
    ];

    protected $messages = [
        'required' => ':attribute é obrigatório',
    ];

    public function __construct(AcademiesPhoto $model) {

        $this->model = $model;
    }

    public function index(Request $request, $id) {

        $results = $this->model
            ->where('academy_id', $id)
            ->get();

        return response()->json($results);
    }
}
