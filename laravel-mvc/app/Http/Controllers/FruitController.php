<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fruit;

class FruitController extends Controller
{
    public function getFruits()
    {
        $fruits = Fruit::all(); // Để lấy dữ liệu từ model
        return view('fruits', ['fruits' => $fruits]);
    }
}