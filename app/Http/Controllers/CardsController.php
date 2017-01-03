<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\Card;
use App\Note;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
      $cards = Card::all();
      return view("cards.index", compact("cards"));
    }
    public function show(Card $card)
    {
      $card->load("notes.user");

      return view("cards.show", compact("card"));
    }

}
