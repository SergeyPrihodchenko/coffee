<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RequestMainPage;
use App\Models\Admin\MainPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
      $main_page = MainPage::find(1);
      
      return view('Admin.main.main', [
        'list' => MainPage::all()->toArray(),
        'title' => $main_page->main_heading ?? ''
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestMainPage $request)
    {

        $validated = $request->validated();
        $main_page = MainPage::firstOrNew([]);
        $heading = $validated['main_heading'];

       $arr = Storage::files('/public/main_page');

       if(!empty($arr)){
        Storage::deleteDirectory('/public/main_page');
       }
        $path = $validated['banner_img']->store('public/main_page');
        $path = str_replace('public', '/storage', $path);  
        $main_page->banner_img_path = $path;
        $main_page->main_heading = $heading;
        $main_page->save();
 
        // return redirect()->back()->with('success', 'Заголовок и изображение успешно обновлены');
        return redirect(route('admin.main'));
    }

    public function setHeading(MainPage $mainPage) 
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(MainPage $mainPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainPage $mainPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainPage $mainPage)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainPage $mainPage)
    {
        //
    }
}
