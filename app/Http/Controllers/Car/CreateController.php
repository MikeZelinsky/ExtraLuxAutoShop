<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\BaseController;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Services\CarServices\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends BaseController
{
    public function create(CarService $service, CarRequest $request)
    {
        $service->create($request);
        return redirect()->route('main');
    }



}
