<?php

namespace App\Http\Controllers;

use App\Services\CarServices\CarService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $service;
    public function __construct(CarService $service)
    {
       $this->service = $service;
    }

}
