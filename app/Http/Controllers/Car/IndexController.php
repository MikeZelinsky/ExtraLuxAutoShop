<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\BaseController;
use App\Models\Car;
use App\Services\CarServices\CarService;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index(CarService $carService, $id)
    {
//        $car = $carService->getCarsFromDatabase()->find($id);
        $car = Car::find($id);
        return view('Car.car',['car' => $car]);

    }

}
