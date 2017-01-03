<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      $people = ["Trung", "TRuong", "Lan"];
      return view('welcome', compact("people"));
    }
    public function about()
    {
      return view('pages.about');
    }
}
