<?php

namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RequestProduct;
use App\Models\Sweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SweetController extends Controller
{
    public function setSweet(RequestProduct $request)
    {
        $validated = $request->validated();

        $path = $validated['img']->store('public/sweet');

        $path = str_replace('public', '/storage', $path);   

        $validated['img'] = $path;

        Sweet::create($validated);

        $result = true;

        if($result) {
            $result = 'Запись добавлена!';
        } else {
            $result = 'Ошибка при добавлении!';
        }
    
        return redirect()->back()->with('status', $result);
    }

    public function deleteSweet($id)
    {
        $sweet = Sweet::find($id);

        if(isset($sweet['img'])) {

            $path = $sweet['img'];

            $path = str_replace('/storage','/public', $path);

            Storage::delete($path);

            $response = Sweet::destroy($id);

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
