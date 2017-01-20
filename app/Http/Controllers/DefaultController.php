<?php

namespace App\Http\Controllers;

use App\Models\DataModel;
use Resources\Views\DefaultGetView;
use Resources\Views\DefaultPostView;

class DefaultController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Processes GET request.
     *
     * @return Response
     */
    public function get()
    {
        $dataModel = new DataModel();
        $view = new DefaultGetView($dataModel->get());
        
        $response = response()->json($view);

        return $response;
    }

    /**
     * Processes POST request.
     *
     * @return Response
     */
    public function post()
    {
        $dataModel = new DataModel();
        $view = new DefaultPostView($dataModel->get());
        
        $response = response()->json($view);
        
        return $response;
    }

}
