<?php

namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RequestProduct;
use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoffeeController extends Controller
{
    public function setCoffee(RequestProduct $request)
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

        if(isset($coffee)) {
            $path = $coffee['img'];

            $path = str_replace('/storage','/public', $path);

            Storage::delete($path);
        
            $response = Coffee::destroy($id);
        } else {
            $response = false;
        }

        if($response != false) {
            $response = 'Успешно удалено!';
        } else {
            $response = 'Ошибка при удалении!';
        }

        return redirect()->back()->with('status', $response);
    }

}
