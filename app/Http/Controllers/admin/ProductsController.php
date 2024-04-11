<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RequestProduct;
use App\Models\Coffee;
use App\Models\Sweet;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

    public function dashboardDelete()
    {
        $coffees = Coffee::all()->toArray();
        $sweets = Sweet::all()->toArray();
        return view('dashboardDelete', ['coffees' => $coffees, 'sweets' => $sweets, 'status' => '']);
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
        $coffee = Coffee::find($id);
        $path = $coffee['img'];
        $path = str_replace('/storage','/public', $path);
        Storage::delete($path);
        $response = Coffee::destroy($id);
        if($response != false) {
            $response = 'Успешно удалено!';
        } else {
            $response = 'Ошибка при удалении!';
        }
        return redirect('/dashboardDelete')->with('status', $response);
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
        $sweet = Sweet::find($id);
        $path = $sweet['img'];
        $path = str_replace('/storage','/public', $path);
        Storage::delete($path);
        $response = Sweet::destroy($id);
        if($response != false) {
            $response = 'Успешно удалено!';
        } else {
            $response = 'Ошибка при удалении!';
        }
        return redirect('/dashboardDelete')->with('response', $response);
    }
}
