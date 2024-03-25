<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RequestProduct;
use App\Models\Coffee;
use App\Models\Sweet;

class ProductsController extends Controller
{
    public function setCoffee(RequestProduct $request):void
    {
        $validated = $request->validated();

        $path = $validated['img']->store('public/coffee');

        $path = str_replace('public', '/storage', $path);   

        $validated['img'] = $path;

        Coffee::create($validated);
    }

    public function deleteCoffee(RequestProduct $request): void
    {
        try {
            $validated = $request->validated();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function setSweet(RequestProduct $request): void
    {
        $validated = $request->validated();

        $path = $validated['img']->store('public/sweet');

        $path = str_replace('public', '/storage', $path);   

        $validated['img'] = $path;

        Sweet::create($validated);
    }

    public function deleteSweet(RequestProduct $request): void
    {
        try {
            $validated = $request->validated();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
