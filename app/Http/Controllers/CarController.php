<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Car::orderBy('subscription', 'DESC')->get();
        //return "cars";
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newCar = new Car;
        $newCar->name = $request->car["name"];
        $newCar->model = $request->car["model"];
        $newCar->subscription = $request->car["subscription"];
        $newCar->rent = $request->car["rent"];
        $newCar->save();
        
        return $newCar;
    }

    

    

    

    
}
