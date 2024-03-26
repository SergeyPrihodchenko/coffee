<?php

namespace App\Http\Controllers\MainPage;

use App\Http\Controllers\Controller;
use App\Models\Admin\MainPage;
use App\Models\Coffee;
use Illuminate\View\View;

class MainPageController extends Controller
{
    public function index(): View
    {
      $heading = '';

      $main_page = MainPage::find(1);
      $coffees = Coffee::all()->take(-6)->toArray();

      // dd($coffees);

      if(!is_null($main_page)){
        $heading = $main_page->main_heading;
      }


      return view('MainPage.main', [
        'title' => $heading,
        'banner_img' => $main_page->banner_img_path,
        'drinks' => $coffees
      ]);
    }
}
