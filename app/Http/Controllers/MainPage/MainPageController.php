<?php

namespace App\Http\Controllers\MainPage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class MainPageController extends Controller
{
    public function index(): View
    {
      return view('MainPage.main', [
        'title' => 'FUNNY COFFEE BAR', 
        // 'products'=> []
      ]);
    }
}
