<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.10.2022
 * Time: 23:13
 */

namespace App\Services\CarServices;


use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarService
{
    public function create(CarRequest $request)
    {
        $car = new Car();
        $car->brand = $request->input('brand');
        $car->price = $request->input('price');
        $car->releaseDate = $request->input('releaseDate');
        $car->color = $request->input('color');
        $car->mileage = $request->input('mileage');
        $originalname = $request->file('file')->getClientOriginalName();
        $car->file = "storage/app/images/$originalname";

        $image = $request->file->storeAs('public/images', $originalname);
        $car->save();

//        $image =  $request->file('file')->store('public/images');
    }

    public function getCarsFromDatabase()
    {
        $cars = Car::simplePaginate(5);

//    $cars = DB::table('cars')->select('id','brand','price','releaseDate','color','mileage','file')->get();
//        $cars = $car->getCarsBySearch($request,$car)->get();
        return $cars;
    }
}