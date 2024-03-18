<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RequestProduct;

class ProductsController extends Controller
{
    public function setCoffee(RequestProduct $request): void
    {
        try {
            $validated = $request->validated();
            dd($validated);
        } catch (\Throwable $th) {
            //throw $th;
        }
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
        try {
            $validated = $request->validated();
        } catch (\Throwable $th) {
            //throw $th;
        }
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
