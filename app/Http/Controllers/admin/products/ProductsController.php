<?php

namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use App\Models\Coffee;
use App\Models\Sweet;

class ProductsController extends Controller
{

    public function productPanel()
    {
        return view('Admin.dashboard');
    }

    public function dashboardDelete()
    {
        $coffees = Coffee::all()->toArray();
        $sweets = Sweet::all()->toArray();
        return view('Admin.dashboardDelete', ['coffees' => $coffees, 'sweets' => $sweets, 'status' => '']);
    }
    
}
