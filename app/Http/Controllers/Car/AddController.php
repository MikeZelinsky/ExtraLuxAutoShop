<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Services\CarServices\CarService;
use Illuminate\Http\Request;

class AddController extends BaseController
{
    public function view()
    {
        return view('Car.addCar');
    }
}
