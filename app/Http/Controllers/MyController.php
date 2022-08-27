<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Order;
use App\Models\Client;
use App\Models\Dish;

class MyController extends Controller
{
    public function main(){
        return view('main');
    }

    public function menu(){
        return view('menu');
    }

    public function about(){
        return view('about', ['DishesOfOrder' => Order::find(1)->dish, 'OrdersWithDish' => Dish::find(1)->order, 'Orders' => Client::find(1)->order], );
    }
}
