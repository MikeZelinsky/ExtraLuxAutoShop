<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Services\CarServices\CarService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(CarService $carService)
    {
        $cars = $carService->getCarsFromDatabase();
        return view('layouts.main',['cars'=> $cars]);


    }
}
