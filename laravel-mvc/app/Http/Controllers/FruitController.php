<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fruit;

class FruitController extends Controller
{
    public function getFruits()
    {
        $fruits = Fruit::all();
        return view('fruits', ['fruits' => $fruits]);
    }
}