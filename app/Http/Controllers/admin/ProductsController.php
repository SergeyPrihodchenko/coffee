<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RequestProduct;
use App\Models\Coffee;
use App\Models\Sweet;

class ProductsController extends Controller
{

    public function dashboardDelete()
    {
        $coffees = Coffee::all()->toArray();
        $sweets = Sweet::all()->toArray();
        return view('dashboardDelete', ['coffees' => $coffees, 'sweets' => $sweets]);
    }

    public function setCoffee(RequestProduct $request):void
    {
        $validated = $request->validated();

        $path = $validated['img']->store('public/coffee');

        $path = str_replace('public', '/storage', $path);   

        $validated['img'] = $path;

        Coffee::create($validated);
    }

    public function deleteCoffee($id)
    {
        Coffee::destroy($id);
        return redirect('/dashboardDelete');
    }

    public function setSweet(RequestProduct $request): void
    {
        $validated = $request->validated();

        $path = $validated['img']->store('public/sweet');

        $path = str_replace('public', '/storage', $path);   

        $validated['img'] = $path;

        Sweet::create($validated);
    }

    public function deleteSweet($id)
    {
        Sweet::destroy($id);
        return redirect('/dashboardDelete');
    }
}
